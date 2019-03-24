<?php

namespace Modules\BlogModule\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Routing\Controller;
use Modules\BlogModule\Http\Requests\BlogCategoryRequest;
use Modules\CommonModule\Helper\UploaderHelper;
use Modules\BlogModule\Repository\BlogCategoryRepository;
use Yajra\DataTables\DataTables;

class CategoriesController extends Controller
{

    use UploaderHelper;

    private $categoryRepo;

    public function __construct(BlogCategoryRepository $categoryRepo)
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

        return view('blog::category.index')->withCategs($categs);
    }
    // yajra datatable
    function  dataTables(){
        $categories = $this->categoryRepo->findAll();

        return DataTables::of($categories)

            ->addColumn('title', function($row) {
                return  $row->title;
            })


            ->addColumn('photo', function($row) {
                if($row->photo){
                    return '<img width="100" height="100" src='. asset("public/images/project/" . $row->photo).'/>';
                } else {
                    return '<strong> No Photo </strong>';
                }
            })

            ->addColumn('operation', function($row) {

                $delete_tag='<a href="'. url('admin-panel/blog-categories/delete', $row->id) .'" class="btn btn btn-danger" onclick="return confirm(\'Are you sure, You want to delete this Data?\')"><i class="glyphicon glyphicon-trash"></i></a>';
                $edit_tag='<a href="'. url("admin-panel/blog-categories/".$row->id."/edit") .'" type="button" class="btn btn-primary"><i class="fa fa-pencil" aria-hidden="true"></i></a>';

                return $edit_tag.' '.$delete_tag;

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
        return view('blog::category.create',compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     * @param  Request $request
     * @return Response
     */
    public function store(Request $request)
    {
        if($request->parent_id == 0){
            $categoryData = $request->except('_token', '_wysihtml5_mode', 'photo', 'parent_id');
        } else {
            $categoryData = $request->except('_token', '_wysihtml5_mode', 'photo');
        }



        $categoryData['created_by'] = auth()->user()->id;

        if ($request->hasFile('photo')) {
            $image = $request->file('photo');
            $imageName = $this->upload($image, 'category');
            $categoryData['photo'] = $imageName;
        }
        $categ = $this->categoryRepo->save($categoryData);

        return redirect('admin-panel/blog-categories')->with('success', 'success');
    }

    /**
     * Show the specified resource.
     * @return Response
     */
    public function show($id)
    {
        $category = $this->categoryRepo->find($id);

        return view('blog::category.show')->withCategory($category);
    }

    /**
     * Show the form for editing the specified resource.
     * @return Response
     */
    public function edit($id)
    {
        $category = $this->categoryRepo->find($id);
        $categories = $this->categoryRepo->findAll();

        return view('blog::category.Edit', ['category' => $category, 'categories' => $categories]);
    }

    /**
     * Update the specified resource in storage.
     * @param  Request $request
     * @return Response
     */
    public function update(Request $request, $id)
    {
        $activeLangCode = \LanguageHelper::getLangCode();

        if ($request->parent_id == 0) {
            $category = $request->except('_token', '_wysihtml5_mode', 'photo', 'parent_id', 'ar', 'en');
            $category['parent_id'] = null;
        } else {
            $category = $request->except('_token', '_wysihtml5_mode', 'photo', 'ar', 'en');
        }

        $category_parent = $request->only('parent_id');

        $category_trans = $request->only($activeLangCode);

        if ($request->hasFile('photo')) {

            $image = $request->file('photo');

            $imageName = $this->upload($image, 'category');
            $category['photo'] = $imageName;
        }

        $category = $this->categoryRepo->update($id, $category, $category_trans);

        return redirect('admin-panel/blog-categories')->with('updated', 'updated');
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
