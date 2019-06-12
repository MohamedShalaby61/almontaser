<?php

namespace Modules\ConfigModule\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Routing\Controller;
use Modules\CommonModule\Helper\UploaderHelper;
use Modules\ConfigModule\Entities\Config;
use Modules\ConfigModule\Entities\ConfigCategory;
use View;

class ConfigController extends Controller
{
    use UploaderHelper;
    
    /**
     * Display a listing of the resource.
     * @return Response
     */
    public function index()
    { 
        $config_categs = ConfigCategory::with(['configs'])->get();

        return view('config::configs.index', ['config_categs' => $config_categs]);
    }


    /**
     * Update the specified resource in storage.
     * @param  Request $request
     * @return Response
     */
    public function update(Request $request)
    {
        $data = $request->except('_token');

        foreach ($data as $key => $val) {


            if ($request->hasFile($key)) {
                $image = $request->file($key);
                $val = $this->upload($image, 'config');
                $config = Config::where('var', $key)->update(["value" => $val]);

            } else {
                $config = Config::where('var', $key)->update(["value" => $val]);
            }
        }
        return redirect('admin-panel/config-module')->with('updated', 'updated');
    }
}
