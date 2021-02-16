<?php

namespace Modules\FrontModule\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Routing\Controller;
use Modules\ConfigModule\Entities\Config;
use Modules\ServiceModule\Entities\ServiceMod\Service;
use Modules\WidgetsModule\Entities\Slider\Slider;
use Modules\WidgetsModule\Repository\SliderRepository;

class FrontModuleController extends Controller
{

    private $repository;

    public function __construct(SliderRepository $repository){

       $this->repository = $repository ;

    }


    public function index()
    {

        $sliders = Slider::query()->with(['translations'])->get();
        $services = Service::query()->with(['translations'])->get();
        $configs = Config::query()->get();
        $configArr = [];
        foreach ($configs as $config)
        {
            if ($config->is_status == 0)
            {
                $configArr[$config->var] = $config->value;
            }else {
                $configArr[$config->var] = $config->static_value;
            }
        }
        return view('frontmodule::index',compact('sliders','services','configArr'));
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
