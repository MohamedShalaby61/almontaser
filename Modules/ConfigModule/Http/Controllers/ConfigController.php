<?php

namespace Modules\ConfigModule\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\DB;
use Modules\CommonModule\Helper\UploaderHelper;
use Modules\ConfigModule\Entities\Config;
use Modules\ConfigModule\Entities\ConfigCategory;
use Modules\ConfigModule\Entities\ConfigTranslation;
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
        //dd($data);
        foreach ($data as $key => $val) {
            // if a static value
            //dd($data);
            if (!is_array($val))
            {
                if ($request->hasFile($key)) {
                    $image = $request->file($key);
                    $val = $this->upload($image, 'config');
                    $config = Config::where('var', $key)->update(["static_value" => $val]);

                }else {
                    $config = Config::where('var', $key)->update(["static_value" => $val]);
                }
            }else {
                // if not static and value is define in config translation
                //dd($val);
                        foreach ($val as $index=> $value){
                            if ($request->hasFile($index)) {
                                $image = $request->file($index);
                                $value = $this->upload($image, 'config');
                                $config = DB::table('configs')
                                    ->select('configs.*')
                                    ->join('config_translations','config_translations.config_id','=','configs.id')
                                    ->where('locale',$key)
                                    ->where('var',$index)
                                    ->update(['value' => $value]);

                            }else {
                                $config = DB::table('configs')
                                    ->select('configs.*')
                                    ->join('config_translations','config_translations.config_id','=','configs.id')
                                    ->where('locale',$key)
                                    ->where('var',$index)
                                    ->update(['value' => $value]);
                            }
                        }

                }
            }
        return redirect('admin-panel/config-module')->with('updated', 'updated');
    }
}
