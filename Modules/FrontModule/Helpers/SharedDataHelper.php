<?php


namespace Modules\FrontModule\Helpers;


use Modules\BlogModule\Entities\Blog;
use Illuminate\Support\Facades\Schema;
use Modules\ConfigModule\Entities\Config;
use Modules\FrontModule\Helpers\arabicdate;
use Modules\BlogModule\Entities\BlogCategory;
use Modules\VideoModule\Entities\VideoCateg;

class SharedDataHelper
{




    public  static  function  getConfig(){
        $configArr = [];

        $all = Config::all();
        foreach ($all as $item) {
            $configArr[$item->var] = $item->value;

        }
        return $configArr;
    }

    public  static  function  aside_lang(){

        $all = ['ar','en'];
        
        return $all;
    }




}