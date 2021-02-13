<?php

namespace Modules\FrontModule\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Routing\Controller;
use Modules\WidgetsModule\Repository\SliderRepository;

class FrontModuleController extends Controller
{

    private $repository;

    public function __construct(SliderRepository $repository){

       $this->repository = $repository ;

    }


    public function index()
    {
        $sliders = $this->repository->findAll();

        return view('frontmodule::index',compact('sliders'));
    }


    public function create()
    {
        return view('frontmodule::create');
    }


    public function store(Request $request)
    {

    }


    public function show($id)
    {
        return view('frontmodule::show');
    }

    public function edit($id)
    {
        return view('frontmodule::edit');
    }


    public function update(Request $request, $id)
    {

    }


    public function destroy($id)
    {

    }
}
