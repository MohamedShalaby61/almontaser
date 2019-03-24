<?php

namespace Modules\CommonModule\Helper;

use Modules\CommonModule\Entities\Apps;

class AppsHelper
{


    public static function getActiveApps()
    {
        $apps = Apps::where('active', '=', 1)->get();
        $result = [];
        foreach ($apps as $app) {
            $result[]=$app->key;
        }

        return $result;
    }

}
