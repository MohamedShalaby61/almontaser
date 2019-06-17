<?php

namespace Modules\FrontModule\Repository;

use Modules\BlogModule\Entities\BlogCategory;
use Modules\BlogModule\Entities\BlogTranslation;
use Modules\WidgetsModule\Entities\Team\Team;
use Modules\ServiceModule\Entities\ServiceMod\Service;
use Modules\ServiceModule\Entities\ServiceMod\ServiceTranslation;
use Modules\BlogModule\Entities\Blog;
use Modules\WidgetsModule\Entities\Front;
use Modules\WidgetsModule\Entities\Slider\Slider;
use Modules\WidgetsModule\Entities\Testimonial;
use Modules\WidgetsModule\Entities\Acheive;
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
        $doctor = Team::all()->first();
        return $doctor;
    }
    public function findBlog($title)
    {
        $blog = Blog::all()->where('title',str_replace('-',' ',$title))->first();
        //dd($blog);
        return $blog;
    }

    public function findCategories()
    {
        $cats = BlogCategory::all();
        return $cats;
    }
    public function findCategoryById($id)
    {
        $cats = BlogCategory::query()->where('id',$id)->first();
        return $cats;
    }
    public function findFeatures($num)
    {
        $feature = Service::query()->limit($num)->get();
        return $feature;
    }
    public function findAllDoctor()
    {
        $doctor = Team::all();
        return $doctor;
    }
    public function findAllBlog()
    {
        $blog = Blog::paginate(9);
        return $blog;
    }
    public function findTestimonials()
    {
        $review = Testimonial::all();
        return $review;
    }
    public function findLimitBlogs($num)
    {
        $review = Blog::query()->limit($num)->get();
        return $review;
    }
    public function findAllServices()
    {
        $review = Service::all();
        return $review;
    }
    public function findLimitServices()
    {
        $review = Service::query()->limit(6)->get();
        return $review;
    }
    public function findAllAcheive()
    {
        $review = Acheive::all();
        return $review;
    }
    public function findServiceByTitle($title)
    {
        $service = ServiceTranslation::where('title',str_replace('-', ' ', $title))->first();
        return $service;
    }
}
