<?php

namespace Modules\FrontModule\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Routing\Controller;
use Modules\ServiceModule\Repository\ServiceRepository;

class ServiceFrontController extends Controller
{
    private $serviceRepo;

    public function __construct(ServiceRepository $serviceRepo) {
        $this->serviceRepo = $serviceRepo;
    }

    /**
     * Display a listing of the resource.
     * @return Response
     */
    public function indexServiceCategory()
    {
        return view('frontmodule::index');
    }

    /**
     * Display a listing of the resource.
     * @return Response
     */
    public function indexService()
    {
        return view('frontmodule::create');
    }

    /**
     * Display a listing of services by category_id.
     * @param Request $request
     * @return Response
     */
    public function indexServiceByCategory($category_id)
    {
        //
    }

    /**
     * Show the specified resource.
     * @param int $id
     * @return Response
     */
    public function showService($id)
    {
        return view('frontmodule::show');
    }
}
