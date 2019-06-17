<?php

namespace Modules\ProductModule\Http\Controllers;

use File;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Routing\Controller;
use Modules\CommonModule\Helper\UploaderHelper;
use Modules\ProductModule\Repository\ProductCategoryRepository;
use Yajra\DataTables\DataTables;

class ProductCategoriesController extends Controller
{

    use UploaderHelper;

    private $categoryRepo;

    public function __construct(ProductCategoryRepository $categoryRepo)
    {
        $this->categoryRepo = $categoryRepo;
    }

    /**
     * Display a listing of the resource.
     * @return Response
     */
    public function index()
    {
        $categs = $this->categoryRepo->findAll();

        return view('productmodule::category.index')->withCategs($categs);
    }

    // yajra datatable

    function  dataTables(){
        $categs = $this->categoryRepo->findAll();

        return DataTables::of($categs)

            ->addColumn('title', function($row) {
                return  $row->title;
            })

            ->addColumn('parent', function($row) {

             if(isset($row->parent))
                 {
                   return  $row->parent->title;
                 }
                 else{
                     return "Parent Category";
                 }
            })
            ->addColumn('operation', function($row) {

                $delete_tag='<a href="'. url('admin-panel/product-categories/delete', $row->id) .'" class="btn btn btn-danger" onclick="return confirm(\'Are you sure, You want to delete this Data?\')"><i class="glyphicon glyphicon-trash"></i></a>';
                $edit_tag='<a href="'. url("admin-panel/product-categories/".$row->id."/edit") .'" type="button" class="btn btn-primary"><i class="fa fa-pencil" aria-hidden="true"></i></a>';

                return $edit_tag.' '.$delete_tag;

            })
            ->addColumn('photo', function($row) {
                if($row->photo){
                    return '<img width="100" height="100" src='. asset("public/images/category/" . $row->photo).'/>';
                } else {
                    return '<strong> No Photo </strong>';
                }
            })

            ->rawColumns(['operation' => 'operation', 'photo' => 'photo'])

            ->make(true);
    }


    /**
     * Show the form for creating a new resource.
     * @return Response
     */
    public function create()
    {
        $categories=$this->categoryRepo->findAll();
        return view('productmodule::category.create',compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     * @param  Request $request
     * @return Response
     */
    public function store(Request $request)
    {
        if($request->parent_id == 0) {
            $categoryData = $request->except('_token', '_wysihtml5_mode', 'photo','parent_id');
        }else{
            $categoryData = $request->except('_token', '_wysihtml5_mode', 'photo');
        }
        $categoryData['created_by'] = auth()->user()->id;


        if ($request->hasFile('photo')) {
            $image = $request->file('photo');
            $imageName = $this->upload($image, 'category');
            $categoryData['photo'] = $imageName;
        }

        $categ = $this->categoryRepo->save($categoryData);

        return redirect('admin-panel/product-categories')->with('success', 'success');
    }

    /**
     * Show the specified resource.
     * @return Response
     */
    public function show($id)
    {
        $category = $this->categoryRepo->find($id);

        return view('productmodule::category.show',['category' => $category]);
    }

    /**
     * Show the form for editing the specified resource.
     * @return Response
     */
    public function edit($id)
    {
        $category = $this->categoryRepo->find($id);
        $categories = $this->categoryRepo->findAll();

        return view('productmodule::category.Edit', ['category' => $category, 'categories' => $categories]);
    }

    /**
     * Update the specified resource in storage.
     * @param  Request $request
     * @return Response
     */
    public function update(Request $request, $id)
    {
        $category_pic = $this->categoryRepo->find($id);

        if ($request->parent_id == 0) {
            $category = $request->except('_token', '_wysihtml5_mode', 'parent_id', 'ar', 'en');
        } else {
            $category = $request->except('_token', '_wysihtml5_mode', 'ar', 'en');
        }
        $activeLangCode = \LanguageHelper::getLangCode();

        $category_trans = $request->only($activeLangCode);

        if ($request->hasFile('photo')) {
            // Delete old image first.
            $thumb_path = public_path() . '/images/category/' . $category_pic->photo;
            File::delete($thumb_path);

            // Store the new pic.
            $image = $request->file('photo');
            $imageName = $this->upload($image, 'category');
            $category['photo'] = $imageName;
        }

        $category = $this->categoryRepo->update($id, $category, $category_trans);

        return redirect('admin-panel/product-categories')->with('updated', 'updated');
    }

    /**
     * Remove the specified resource from storage.
     * @return Response
     */
    public function destroy($id)
    {
        $category = $this->categoryRepo->delete($id);

        return redirect()->back();
    }

    /**
     * AJAX data source for Datatables.
     *
     * @return void
     */
    public function ajaxDataSrc()
    {
        $datasrc = $this->categoryRepo->findAll();

        return \Response::json($datasrc);
    }
}
