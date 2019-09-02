<?php


namespace Modules\FrontModule\Helpers;


use Modules\BlogModule\Entities\Blog;
use Illuminate\Support\Facades\Schema;
use Modules\ConfigModule\Entities\Config;
use Modules\WidgetsModule\Entities\WorkHours;
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
    public  static  function  getWorkHour(){
        $WorkArr = [];

        $all = WorkHours::all()->first();


        if (is_array($all) || is_object($all))
        {
            foreach ($all as $item)
            {
                $WorkArr[$item] = $item;
            }
        }


//        foreach ($all as $item) {
//            $WorkArr[$item] = $item;
//        }

        return $all;
    }



}
