<?php

namespace Modules\VideoModule\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Routing\Controller;
use Modules\VideoModule\Repository\VideoRepo;
use Modules\VideoModule\Repository\VideoCategRepo;

class VideoController extends Controller
{
    private $vidrepo, $vidcategrepo;

    public function __construct(VideoRepo $vidrepo, VideoCategRepo $vidcategrepo)
    {
        $this->vidrepo = $vidrepo;
        $this->vidcategrepo = $vidcategrepo;
    }

    /**
     * Display a listing of the resource.
     * @return Response
     */
    public function index()
    {
        $vids = $this->vidrepo->findAll();
        return view('VideoModule::videos.index', ['vids' => $vids]);
    }

    /**
     * Show the form for creating a new resource.
     * @return Response
     */
    public function create()
    {
        $categs = $this->vidcategrepo->findAll();

        return view('VideoModule::videos.create', compact('categs'));
    }

    /**
     * Store a newly created resource in storage.
     * @param  Request $request
     * @return Response
     */
    public function store(Request $request)
    {
        $vidData = $request->except('_token');
        $vidData['created_by'] = auth()->user()->id;
        if(! $request->en)
        {
            $vidData['en'] = $request->ar;
        }
        $this->vidrepo->save($vidData);

        return redirect('admin-panel/videos/video')->with('success', 'success');
    }

    /**
     * Show the form for editing the specified resource.
     * @return Response
     */
    public function edit($id)
    {
        $categs = $this->vidcategrepo->findAll();
        $vid = $this->vidrepo->find($id);

        return view('VideoModule::videos.edit', ['vid' => $vid, 'categs' => $categs]);
    }

    /**
     * Update the specified resource in storage.
     * @param  Request $request
     * @return Response
     */
    public function update(Request $request, $id)
    {
        $data = $request->except('_method', '_token');
        $this->vidrepo->update($id, $data);

        return redirect('admin-panel/videos/video')->with('updated', 'updated');
    }

    /**
     * Remove the specified resource from storage.
     * @return Response
     */
    public function destroy($id)
    {
        $this->vidrepo->delete($id);

        return redirect('admin-panel/videos/video');
    }
}
