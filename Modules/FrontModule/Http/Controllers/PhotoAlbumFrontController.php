<?php

namespace Modules\FrontModule\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Routing\Controller;
use Modules\PhotoAlbumModule\Repository\PhotoRepo;

class PhotoAlbumFrontController extends Controller
{
    private $photoRepo;

    public function __construct(PhotoRepo $photoRepo) {
        $this->photoRepo = $photoRepo;
    }

    /**
     * Display a listing of the resource.
     * @return Response
     */
    public function indexPhotoCategory()
    {
        return view('frontmodule::index');
    }

    /**
     * Display a listing of the resource.
     * @return Response
     */
    public function indexPhoto()
    {
        return view('frontmodule::create');
    }

    /**
     * Display a listing of photos by category_id.
     * @param Request $request
     * @return Response
     */
    public function indexPhotoByCategory($category_id)
    {
        //
    }

    /**
     * Show the specified resource.
     * @param int $id
     * @return Response
     */
    public function showPhoto($id)
    {
        return view('frontmodule::show');
    }
}
