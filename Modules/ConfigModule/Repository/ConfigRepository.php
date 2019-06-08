<?php
/**
 * Created by PhpStorm.
 * User: mallahsoft
 * Date: 1/15/19
 * Time: 12:18 PM
 */

namespace Modules\ConfigModule\Repository;


use Modules\ConfigModule\Entities\Config;
use Modules\ConfigModule\Entities\ConfigCategory;

class ConfigRepository
{


    static function findAll()
    { 
       
        $configArr = [];

        $all = Config::all();

        foreach ($all as $item) {
            $configArr[$item->var] = $item->value;
        }

        return $configArr;
    }
  

}