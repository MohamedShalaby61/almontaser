<?php

namespace Modules\FrontModule\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Routing\Controller;
use Modules\VideoModule\Repository\VideoRepo;

class VideoFrontController extends Controller
{
    private $videoRepo;

    public function __construct(VideoRepo $videoRepo) {
        $this->videoRepo = $videoRepo;
    }

    /**
     * Display a listing of the resource.
     * @return Response
     */
    public function indexVideoCategory()
    {
        return view('frontmodule::index');
    }

    /**
     * Display a listing of the resource.
     * @return Response
     */
    public function indexVideo()
    {
        return view('frontmodule::create');
    }

    /**
     * Display a listing of videos by category_id.
     * @param Request $request
     * @return Response
     */
    public function indexVideoByCategory($category_id)
    {
        //
    }

    /**
     * Show the specified resource.
     * @param int $id
     * @return Response
     */
    public function showVideo($id)
    {
        return view('frontmodule::show');
    }
}
