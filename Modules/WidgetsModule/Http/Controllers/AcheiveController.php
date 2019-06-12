<?php

namespace Modules\WidgetsModule\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Routing\Controller;
use Modules\CommonModule\Helper\UploaderHelper;
use Modules\WidgetsModule\Repository\AcheiveRepository;
use File;


class AcheiveController extends Controller
{
   
    use UploaderHelper;
    private $acheiveRepo;

    public function __construct(AcheiveRepository $acheiveRepo)
    {
        $this->acheiveRepo = $acheiveRepo;
    }
 
    /**
     * Display a listing of the resource.
     * @return Response
     */
    public function index()
    {
        $acheives = $this->acheiveRepo->findAll();

        return view('widgetsmodule::acheive.index', ['acheives' => $acheives]);
    }

    /**
     * Show the form for creating a new resource.
     * @return Response
     */
    public function create()
    {
        return view('widgetsmodule::acheive.create');
    }

    /**
     * Store a newly created resource in storage.
     * @param  Request $request
     * @return Response
     */
    public function store(Request $request)
    {
        $acheiveData = $request->except( 'icon');
      

        if($request->hasFile('icon'))
        {
            $image = $request->file('icon');
            $imageName = $this->upload($image, 'acheives');
            $acheiveData['icon'] = $imageName;
        }

        $this->acheiveRepo->save($acheiveData);

        return redirect('admin-panel/widgets/acheive/')->with('success', 'success');
    }

    /**
     * Show the form for editing the specified resource.
     * @return Response
     */
    public function edit($id)
    {
        $acheive = $this->acheiveRepo->find($id);

        return view('widgetsmodule::acheive.edit', ['acheive' => $acheive]);
    }

    /**
     * Update the specified resource in storage.
     * @param  Request $request
     * @return Response
     */
    public function update(Request $request, $id)
    {/* dd($request->all()); */
        $acheivePic = $this->acheiveRepo->find($id);
        $acheive = $request->except('_method', '_token', 'photo', 'ar', 'en');
        $acheiveTrans = $request->only('ar', 'en');

        if ($request->hasFile('icon')) {
            // Delete old image first.
            $oldPic = public_path() . '/images/acheives/' . $acheivePic->icon;
            File::delete($oldPic);

            // Save the new one.
            $image = $request->file('icon');
            $imageName = $this->upload($image, 'acheives');
            $acheive['icon'] = $imageName;
        }

        $this->acheiveRepo->update($id, $acheive, $acheiveTrans);

        return redirect('admin-panel/widgets/acheive')->with('updated', 'updated');
    }

    /**
     * Remove the specified resource from storage.
     * @return Response
     */
    public function destroy($id)
    {
       $acheive = $this->acheiveRepo->find($id);
       $this->acheiveRepo->delete($acheive);

       return redirect()->back();
    }
}