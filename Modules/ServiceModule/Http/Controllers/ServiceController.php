<?php

namespace Modules\ServiceModule\Http\Controllers;

use File;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Routing\Controller;
use Modules\CommonModule\Helper\UploaderHelper;
use Modules\ServiceModule\Entities\ServiceMod\Service;
use Modules\ServiceModule\Repository\ServiceRepository;
use Modules\ServiceModule\Repository\ServiceCategoryRepository;
use Yajra\DataTables\DataTables;

class ServiceController extends Controller
{
    use UploaderHelper;

    protected $serviceRepo, $serviceCategRepo;

    public function __construct(ServiceRepository $serviceRepo, ServiceCategoryRepository $serviceCategRepo)
    {
        $this->serviceRepo = $serviceRepo;
        $this->serviceCategRepo = $serviceCategRepo;

    }
    public function index()
    {
        $services = $this->serviceRepo->findAll();

        return view('servicemodule::ServiceMod.index', ['services' => $services ]);
    }



    function  dataTables(){
        $services = $this->serviceRepo->findAll();

        return DataTables::of($services)


            ->addColumn('title', function($row) {
                return  $row->title;
            })

            ->addColumn('service_category', function($row) {
                return  $row->service_category->title;
            })
            ->addColumn('feature','servicemodule::ServiceMod.btn.feature')


            ->addColumn('operation', function($row) {

                $delete_tag='<a href="'. url('admin-panel/servicemodule/service/delete', $row->id) .'" class="btn btn btn-danger" onclick="return confirm(\'Are you sure, You want to delete this Data?\')"><i class="glyphicon glyphicon-trash"></i></a>';
                $edit_tag='<a href="'. url("admin-panel/servicemodule/service/".$row->id."/edit") .'" type="button" class="btn btn-primary"><i class="fa fa-pencil" aria-hidden="true"></i></a>';

                return $edit_tag.' '.$delete_tag;

            })
            ->addColumn('photo', function($row) {
                if($row->photo){
                    return '<img width="100" height="100" src='. asset("images/service/" . $row->photo).'/>';
                } else {
                    return '<strong> No Photo </strong>';
                }
            })

            ->rawColumns(['operation' => 'operation', 'photo' => 'photo','feature'=>'feature'])

            ->make(true);
    }

    public function create()
    {
        $serviceCategs = $this->serviceCategRepo->findAll();
        return view('servicemodule::ServiceMod.create', ['categs' => $serviceCategs]);
    }

    public function store(Request $request)
    {
        $serviceData = $request->except('_token', 'photo');
        $serviceData['created_by'] = auth()->user()->id;

        if ($request->hasFile('photo')) {
            $image = $request->file('photo');
            $imageName = $this->upload($image, 'service');
            $serviceData['photo'] = $imageName;
        }

        $this->serviceRepo->save($serviceData);

        return redirect('admin-panel/servicemodule/service/')->with('success', 'success');
    }

    public function edit($id)
    {
        $service = $this->serviceRepo->find($id);
        $categs = $this->serviceCategRepo->findAll();

        return view('servicemodule::ServiceMod.edit', ['service' => $service, 'categs' => $categs]);
    }

    public function update(Request $request, $id)
    {
        $activeLangCode = \LanguageHelper::getLangCode();


        $servicePic = $this->serviceRepo->find($id);
        $service = $request->except('_token', 'photo', '_method');

        $dataTrans = $request->only($activeLangCode);

        if ($request->hasFile('photo')) {
            // Delete old image first.
            $thumbnail_path = public_path() . '/images/service/' . $servicePic->photo;
            File::delete($thumbnail_path);

            // Save the new one.
            $image = $request->file('photo');
            $imageName = $this->upload($image, 'service');
            $service['photo'] = $imageName;
        }

        if ($request->hasFile('cover_photo')) {
            // Delete old image first.
            $thumbnail_path = public_path() . '/images/service/' . $servicePic->cover_photo;
            File::delete($thumbnail_path);

            // Save the new one.
            $image = $request->file('cover_photo');
            $imageName = $this->upload($image, 'service');
            $service['cover_photo'] = $imageName;
        }



        $this->serviceRepo->update($id, $service, $dataTrans);

        return redirect('admin-panel/servicemodule/service')->with('updated', 'updated');
    }

    public function destroy($id)
    {
        $service = $this->serviceRepo->find($id);
        $this->serviceRepo->delete($service);

        return redirect()->back();
    }

    public function change_feature(Request $request)
    {
        $service = Service::find($request->id);
        if ($request->feature == 1){
            $service->update(['feature'=>0]);
        }else if($request->feature == 0){
            $service->update(['feature'=>1]);
        }
        return $service->feature;
    }
}
