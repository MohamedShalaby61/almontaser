<?php

namespace Modules\VideoModule\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Routing\Controller;
use Modules\VideoModule\Repository\VideoCategRepo;

class VidCategController extends Controller
{
    private $vidcategrepo;

    public function __construct(VideoCategRepo $vidcategrepo)
    {
        $this->vidcategrepo = $vidcategrepo;
    }

    /**
     * Display a listing of the resource.
     * @return Response
     */
    public function index()
    {
        $categs = $this->vidcategrepo->findAll();
        return view('VideoModule::vidcateg.index', ['categs' => $categs]);
    }

    /**
     * Show the form for creating a new resource.
     * @return Response
     */
    public function create()
    {
        return view('VideoModule::vidcateg.create');
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
        if(! $request->en)
        {
            $categData['en'] = $request->ar;
        }
        $this->vidcategrepo->save($categData);

        return redirect('admin-panel/videos/videocategory')->with('success', 'success');
    }

    /**
     * Show the form for editing the specified resource.
     * @return Response
     */
    public function edit($id)
    {
        $vidcateg = $this->vidcategrepo->find($id);

        return view('VideoModule::vidcateg.edit', ['vidcateg' => $vidcateg]);
    }

    /**
     * Update the specified resource in storage.
     * @param  Request $request
     * @return Response
     */
    public function update(Request $request, $id)
    {
        $vidCateg = $request->except('_method', '_token');
        $this->vidcategrepo->update($id, $vidCateg);

        return redirect('admin-panel/videos/videocategory')->with('updated' , 'updated');
    }

    /**
     * Remove the specified resource from storage.
     * @return Response
     */
    public function destroy($id)
    {
        $this->vidcategrepo->delete($id);

        return redirect('admin-panel/videos/videocategory');
    }
}
