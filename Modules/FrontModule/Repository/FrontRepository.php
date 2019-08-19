<?php

namespace Modules\FrontModule\Repository;

use Illuminate\Http\Request;
use Modules\BlogModule\Entities\BlogCategory;
use Modules\BlogModule\Entities\BlogTranslation;
use Modules\PhotoAlbumModule\Entities\Photo;
use Modules\ServiceModule\Entities\ServiceCategory\ServiceCategory;
use Modules\WidgetsModule\Entities\Team\Team;
use Modules\ServiceModule\Entities\ServiceMod\Service;
use Modules\ServiceModule\Entities\ServiceMod\ServiceTranslation;
use Modules\BlogModule\Entities\Blog;
use Modules\WidgetsModule\Entities\Front;
use Modules\WidgetsModule\Entities\Slider\Slider;
use Modules\WidgetsModule\Entities\Testimonial;
use Modules\WidgetsModule\Entities\Acheive;
use Modules\VideoModule\Entities\Video;
use DB;

class FrontRepository
{
    # Show

    public function SliderAll()
    {
        $slider = Slider::query();
        return $slider;
    }
    public function findDoctor()
    {
        $doctor = Team::with(['translations'])->first();
        return $doctor;
    }
    public function findBlog($title)
    {
        $blog = Blog::find($title);
        //dd($blog);
        return $blog;
    }

    public function findCategories()
    {
        $cats = BlogCategory::with(['translations']);
        return $cats;
    }
    public function findVideo()
    {
        $video = Video::with(['translations'])->first();
        return $video;
    }
    public function findCategoryById($id)
    {
        $cats = BlogCategory::with(['translations','child','parent','blogs'])->where('id',$id)->first();
        return $cats;
    }
    public function findFeatures($num)
    {
        $feature = Service::with(['translations'])->where('feature',1)->limit($num)->get();
        return $feature;
    }
    public function findAllDoctor()
    {
        $doctor = Team::with(['translations'])->get();
        return $doctor;
    }
    public function findAllBlog()
    {
        $blog = Blog::paginate(9);
        return $blog;
    }
    public function findAllPhoto()
    {
        $photo = Photo::paginate(9);
        return $photo;
    }
    public function findAllVideos()
    {
        $video = Video::paginate(9);
        return $video;
    }
    public function findTestimonials()
    {
        $review = Testimonial::query()->get();
        return $review;
    }
    public function findLimitBlogs($num)
    {
        $review = Blog::with(['translations','admin','categories'])->limit($num)->get();
        return $review;
    }
    public function findAllServices()
    {
        $review = Service::with(['translations'])->get();
        return $review;
    }

    public function searchAllServices($req)
    {
        //$review = ServiceTranslation::with(['translations']);
        $review = DB::table('service')
            ->join('service_translation', 'service.id','=','service_translation.service_id')
            ->select('service.*', 'service_translation.*')
            ->where('title','like','%'. $req->q .'%')
            ->orWhere('description','like','%'. $req->q .'%')
            ->get();

        return $review;
    }
    public function findLimitServices()
    {
        $review = Service::with(['translations','service_category'])->limit(6)->get();
        return $review;
    }
    public function findAllAcheive()
    {
        $review = Acheive::with(['translations'])->limit(3)->get();
        return $review;
    }
    public function findServiceByTitle($title)
    {
        $service = ServiceTranslation::query()->where('title',str_replace('-', ' ', $title))->first();
        return $service;
    }

    public function findAllServiceCategories()
    {
        $services = ServiceCategory::with(['translations'])->get();
        return $services;
    }

    public function findServicesByCategory($id)
    {
        $services = Service::with(['translations'])->where('service_category_id',$id)->get();
        return $services;
    }
}
