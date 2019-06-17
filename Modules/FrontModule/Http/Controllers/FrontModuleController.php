<?php

namespace Modules\FrontModule\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Routing\Controller;
use Modules\FrontModule\Repository\FrontRepository;
use Modules\WidgetsModule\Entities\Contactus;
use Modules\WidgetsModule\Entities\Booking;
use Modules\WidgetsModule\Entities\WhyUs;

class FrontModuleController extends Controller
{
    private $frontRepository;
    public function __construct(
        FrontRepository $frontRepository
    )
    {
        $this->frontRepository = $frontRepository;
    }
    public function index()
    {
        $asks = WhyUs::all();
        $sliders = $this->frontRepository->SliderAll();
        $doctor = $this->frontRepository->findDoctor();
        $doctors = $this->frontRepository->findAllDoctor();
        $features = $this->frontRepository->findFeatures(6);
        $reviews = $this->frontRepository->findTestimonials();
        $blogs = $this->frontRepository->findLimitBlogs(3);
        $services = $this->frontRepository->findAllServices();
        return view('frontmodule::index',compact('asks','sliders','doctor','features','doctors','reviews','blogs','services'));
    }

    /**
     * Show the form for creating a new resource.
     * @return Response
     */
    public function about_us()
    {
        $services = $this->frontRepository->findAllServices();
        $doctor = $this->frontRepository->findDoctor();
        $doctors = $this->frontRepository->findAllDoctor();
        $acheives = $this->frontRepository->findAllAcheive();
        $blogs = $this->frontRepository->findLimitBlogs(3);
        return view('frontmodule::pages.about_us',compact('services','doctor','doctors','acheives','blogs'));
    }
    public function question()
    {
        $services = $this->frontRepository->findAllServices();
        $doctor = $this->frontRepository->findDoctor();
        $doctors = $this->frontRepository->findAllDoctor();
        $acheives = $this->frontRepository->findAllAcheive();
        return view('frontmodule::pages.question',compact('services','doctor','doctors','acheives'));
    }
    public function contact()
    {
        $services = $this->frontRepository->findAllServices();
        $doctor = $this->frontRepository->findDoctor();
        $doctors = $this->frontRepository->findAllDoctor();
        $acheives = $this->frontRepository->findAllAcheive();
        return view('frontmodule::pages.contact',compact('services','doctor','doctors','acheives'));
    }
    public function services()
    {
        $services = $this->frontRepository->findAllServices();
        $doctor = $this->frontRepository->findDoctor();
        $doctors = $this->frontRepository->findAllDoctor();
        $acheives = $this->frontRepository->findAllAcheive();
        return view('frontmodule::pages.services',compact('services','doctor','doctors','acheives'));
    }
    public function blogs()
    {
        $services = $this->frontRepository->findAllServices();
        $blogs = $this->frontRepository->findAllBlog();
        $acheives = $this->frontRepository->findAllAcheive();
        return view('frontmodule::pages.blog',compact('services','blogs','acheives'));
    }
    public function send_message(Request $request)
    {
        //dd($request->all());
        $data = $request->validate(['name','email','phone','message']);
        Booking::create($request->all());
        return back()->with('success', 'success');
    }
    public function send_contact_us(Request $request)
    {
        $sliders = $this->frontRepository->SliderAll();
        $services = $this->frontRepository->findLimitServices();
        $categories = $this->frontRepository->findCategories();
        $blogs = $this->frontRepository->findAllBlog();
        $request->validate(['name','email','phone','message']);
        Contactus::create($request->all());
        return view('frontmodule::pages.success',compact('sliders','services','blogs'))->with('success', 'success');
    }
    public function single_service($title){
        $service = $this->frontRepository->findServiceByTitle($title);
        $services = $this->frontRepository->findLimitServices();
        return view('frontmodule::pages.single_service',compact('services','service'));
    }
    public function single_blog($title){
        $service = $this->frontRepository->findServiceByTitle($title);
        $services = $this->frontRepository->findLimitServices();
        $categories = $this->frontRepository->findCategories();
        $blog = $this->frontRepository->findBlog($title);
        $blogs = $this->frontRepository->findAllBlog();
        return view('frontmodule::pages.single_blog',compact('categories','blogs','blog','service','services'));
    }

    public function categories($id)
    {
        $services = $this->frontRepository->findAllServices();
        $blogs = $this->frontRepository->findCategoryById($id);
        $acheives = $this->frontRepository->findAllAcheive();
        return view('frontmodule::pages.categories',compact('services','blogs','acheives'));
    }
}
