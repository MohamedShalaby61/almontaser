<?php

namespace Modules\PortfolioModule\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Routing\Controller;
use Modules\CommonModule\Helper\UploaderHelper;
use Modules\PortfolioModule\Repository\PortfolioCategoryRepository;
use Yajra\DataTables\DataTables;

class PortfolioCategoryController extends Controller
{
    protected $portfolioCategRepo;
    use UploaderHelper;
    public function __construct(PortfolioCategoryRepository $portfolioCategRepo)
    {
        $this->portfolioCategRepo = $portfolioCategRepo;
    }

    /**
     * Display a listing of the resource.
     * @return Response
     */
    public function index()
    {
        $categories = $this->portfolioCategRepo->findAll();
        return view('portfoliomodule::portfolioCategory.index', ['categories' => $categories]);
    }

     // yajra datatable

    function  dataTables(){
        $categories = $this->portfolioCategRepo->findAll();

        return DataTables::of($categories)

            ->addColumn('title', function($row) {
                return  $row->title;
            })
            ->addColumn('operation', function($row) {

                $delete_tag='<a href="'. url('admin-panel/portfoliomodule/category/delete', $row->id) .'" class="btn btn btn-danger" onclick="return confirm(\'Are you sure, You want to delete this Data?\')"><i class="glyphicon glyphicon-trash"></i></a>';
                $edit_tag='<a href="'. url("admin-panel/portfoliomodule/category/".$row->id."/edit") .'" type="button" class="btn btn-primary"><i class="fa fa-pencil" aria-hidden="true"></i></a>';

                return $edit_tag.' '.$delete_tag;

            })
            ->addColumn('photo', function($row) {
                if($row->photo){
                    return '<img width="100" height="100" src='. asset("images/project/" . $row->photo).'/>';
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
        return view('portfoliomodule::portfolioCategory.create');
    }

    /**
     * Store a newly created resource in storage.
     * @param  Request $request
     * @return Response
     */
    public function store(Request $request)
    {
        $categData = $request->except('_token');
        $categData['created_by'] = auth()->user()->id;
        if ($request->hasFile('cover_photo')) {
            $image = $request->file('cover_photo');
            $imageName = $this->upload($image, 'project', true); // resize option executed.
            $categData['cover_photo'] = $imageName;
        }
        $this->portfolioCategRepo->save($categData);

        return redirect('admin-panel/portfoliomodule/category')->with('success', 'success');
    }

    /**
     * Show the form for editing the specified resource.
     * @return Response
     */
    public function edit($id)
    {
        $category = $this->portfolioCategRepo->find($id);

        return view('portfoliomodule::portfolioCategory.edit', ['category' => $category]);
    }

    /**
     * Update the specified resource in storage.
     * @param  Request $request
     * @return Response
     */
    public function update(Request $request, $id)
    {
        $data = $request->except('_token', '_method');
        if ($request->hasFile('cover_photo')) {
            $image = $request->file('cover_photo');
            $imageName = $this->upload($image, 'project', true); // resize option executed.
            $data['cover_photo'] = $imageName;
        }
        $activeLangCode = \LanguageHelper::getLangCode();

        $portofolio_trans = $request->only($activeLangCode);


        $this->portfolioCategRepo->update($id, $data ,$portofolio_trans);

        return redirect('admin-panel/portfoliomodule/category')->with('updated', 'updated');
    }

    /**
     * Remove the specified resource from storage.
     * @return Response
     */
    public function destroy($id)
    {
        $categ = $this->portfolioCategRepo->find($id);
        $this->portfolioCategRepo->delete($categ);

        return redirect()->back();
    }
}
