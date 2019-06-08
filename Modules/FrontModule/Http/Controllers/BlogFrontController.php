<?php

namespace Modules\FrontModule\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Routing\Controller;
use Modules\BlogModule\Repository\BlogRepository;

class BlogFrontController extends Controller
{
    private $blogRepo;

    public function __construct(BlogRepository $blogRepo) {
        $this->blogRepo = $blogRepo;
    }

    /**
     * Display a listing of the resource.
     * @return Response
     */
    public function indexBlogCategory()
    {
        return view('frontmodule::index');
    }

    /**
     * Display a listing of the resource.
     * @return Response
     */
    public function indexBlog()
    {
        return view('frontmodule::create');
    }

    /**
     * Display a listing of blogs by category_id.
     * @param Request $request
     * @return Response
     */
    public function indexBlogByCategory($category_id)
    {
        //
    }

    /**
     * Show the specified resource.
     * @param int $id
     * @return Response
     */
    public function showBlog($id)
    {
        return view('frontmodule::show');
    }
}
