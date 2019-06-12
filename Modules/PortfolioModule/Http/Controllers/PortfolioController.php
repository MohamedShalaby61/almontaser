<?php

namespace Modules\PortfolioModule\Http\Controllers;

use File;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Routing\Controller;
use Modules\CommonModule\Helper\UploaderHelper;
use Modules\PortfolioModule\Repository\PortfolioRepository;
use Modules\PortfolioModule\Repository\PortfolioPhotoRepository;
use Modules\PortfolioModule\Repository\PortfolioCategoryRepository;
use Yajra\DataTables\DataTables;

class PortfolioController extends Controller
{
    use UploaderHelper;

    protected $portfolioRepo, $categRepo, $portfolioPhotoRepo;

    public function __construct(
        PortfolioRepository $portfolioRepo,
        PortfolioCategoryRepository $categRepo,
        PortfolioPhotoRepository $portfolioPhotoRepo
    ){
        $this->portfolioRepo = $portfolioRepo;
        $this->categRepo = $categRepo;
        $this->portfolioPhotoRepo = $portfolioPhotoRepo;
    }

    /**
     * Display a listing of the resource.
     * @return Response
     */
    public function index()
    {
        $projects = $this->portfolioRepo->findAll();
        return view('portfoliomodule::Portfolio.index', ['projects' => $projects]);
    }


    //yajra datatable
    function  dataTables(){
        $projects = $this->portfolioRepo->findAll();
        return DataTables::of($projects)


            ->addColumn('title', function($row) {
                return  $row->title;
            })

            ->addColumn('portfolio_category', function($row) {
                return  $row->portfolio_category->title;
            })


            ->addColumn('operation', function($row) {

                $delete_tag='<a href="'. url('admin-panel/portfoliomodule/project/delete', $row->id) .'" class="btn btn btn-danger" onclick="return confirm(\'Are you sure, You want to delete this Data?\')"><i class="glyphicon glyphicon-trash"></i></a>';
                $edit_tag='<a href="'. url("admin-panel/portfoliomodule/project/".$row->id."/edit") .'" type="button" class="btn btn-primary"><i class="fa fa-pencil" aria-hidden="true"></i></a>';

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
        $categories = $this->categRepo->findAll();
        return view('portfoliomodule::Portfolio.create', ['categs' => $categories]);
    }

    /**
     * Store a newly created resource in storage.
     * @param  Request $request
     * @return Response
     */
    public function store(Request $request)
    {
        $projectData = $request->except('_token', 'photo', 'photos');
        $projectData['created_by'] = auth()->user()->id;

        if ($request->hasFile('photo')) {
            $image = $request->file('photo');
            $imageName = $this->upload($image, 'project', true); // resize option executed.
            $projectData['photo'] = $imageName;
        }

        # Loop through project_photos_many to save photos first.
        $project_photos = [];
        if ($request->hasFile('photos')) {
            $photos = $request->file('photos');
            $project_photos = $this->uploadAlbum($photos, 'project');
        }

        $this->portfolioRepo->save($projectData, $project_photos);

        return redirect('admin-panel/portfoliomodule/project')->with('success', 'success');
    }

    /**
     * Show the form for editing the specified resource.
     * @return Response
     */
    public function edit($id)
    {
        $project = $this->portfolioRepo->find($id);
        $categories = $this->categRepo->findAll();

        return view('portfoliomodule::Portfolio.edit', ['project' => $project], ['categs' => $categories]);
    }

    /**
     * Update the specified resource in storage.
     * @param  Request $request
     * @return Response
     */
    public function update(Request $request, $id)
    {

        $projectPic = $this->portfolioRepo->find($id);
        $project = $request->except('_token', '_method', 'photo');

        $activeLangCode = \LanguageHelper::getLangCode();

        $portofolio_trans = $request->only($activeLangCode);


        if ($request->hasFile('photo')) {
            // Delete old image first.
            $thumbnail_path = public_path() . '/images/project/thumb/' . $projectPic->photo;
            File::delete($thumbnail_path);

            // Save the new one.
            $image = $request->file('photo');
            $imageName = $this->upload($image, 'project', true);
            $project['photo'] = $imageName;
        }

        $this->portfolioRepo->update($id, $project,$portofolio_trans);

        return redirect('admin-panel/portfoliomodule/project')->with('updated', 'updated');
    }

    /**
     * Remove the specified resource from storage.
     * @return Response
     */
    public function destroy($id)
    {
        $project = $this->portfolioRepo->find($id);
        $this->portfolioPhotoRepo->delete($project);
        $this->portfolioRepo->delete($project);

        return redirect()->back();
    }
}
