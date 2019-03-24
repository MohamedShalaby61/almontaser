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


    public static function getLatestBlog(){

        $latest = Blog::with(['categories', 'categories.translations', 'translations'])
            ->limit(5)
            ->orderBy('id', 'desc')->get();
        return $latest;

    }


    public static function getDate(){
        $date = arabicdate::ArabicDate();
        return $date;
    }


    public static function getParentCategory(){

        $parent = BlogCategory::with(['parent', 'child', 'translations', 'blogs', 'blogs.translations'])
            ->where('parent_id', null)->get();
        return $parent;

    }


    public  static  function  getConfig(){
        $configArr = [];

        $all = Config::all();
        foreach ($all as $item) {
            $configArr[$item->var] = $item->value;

        }
        return $configArr;
    }




}