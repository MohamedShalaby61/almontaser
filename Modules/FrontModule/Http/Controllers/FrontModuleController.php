<?php
namespace Modules\FrontModule\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\View;
use Modules\FrontModule\Repository\FrontRepository;
use Modules\WidgetsModule\Entities\Contactus;
use Modules\WidgetsModule\Entities\Booking;
use Modules\WidgetsModule\Entities\WhyUs;
use Modules\WidgetsModule\Entities\WorkHours;

class FrontModuleController extends Controller
{
    private $frontRepository;
    public function __construct(
        FrontRepository $frontRepository
    )
    {
        $this->frontRepository = $frontRepository;
        $workhours = WorkHours::all();

        View::share('workhours',$workhours);
    }
    public function index()
    {
        $asks = WhyUs::all();
        $sliders = $this->frontRepository->SliderAll();
        $doctor = $this->frontRepository->findDoctor();
        $doctors = $this->frontRepository->findAllDoctor();
        $features = $this->frontRepository->findFeatures(6);
        $reviews = $this->frontRepository->findTestimonials();
        $acheives = $this->frontRepository->findAllAcheive();
        $blogs = $this->frontRepository->findLimitBlogs(3);
        $servicess = $this->frontRepository->findAllServiceCategories();
        //dd($services);
        $video = $this->frontRepository->findVideo();
        return view('frontmodule::index',compact('asks','sliders','doctor','features','doctors','reviews','blogs','servicess','video','acheives'));
    }

    /**
     * Show the form for creating a new resource.
     * @return Response
     */
    public function about_us()
    {
        $servicess = $this->frontRepository->findAllServiceCategories();
        $services = $this->frontRepository->findAllServices();
        $doctor = $this->frontRepository->findDoctor();
        $doctors = $this->frontRepository->findAllDoctor();
        $acheives = $this->frontRepository->findAllAcheive();
        $blogs = $this->frontRepository->findLimitBlogs(3);
        $video = $this->frontRepository->findVideo();
        $features = $this->frontRepository->findFeatures(6);
        return view('frontmodule::pages.about_us',compact('features','servicess','services','doctor','doctors','acheives','blogs','video'));
    }
    public function question()
    {
        $servicess = $this->frontRepository->findAllServiceCategories();
        $services = $this->frontRepository->findAllServices();
        $doctor = $this->frontRepository->findDoctor();
        $doctors = $this->frontRepository->findAllDoctor();
        $acheives = $this->frontRepository->findAllAcheive();
        $features = $this->frontRepository->findFeatures(3);
        return view('frontmodule::pages.question',compact('features','servicess','services','doctor','doctors','acheives'));
    }
    public function contact()
    {
        $servicess = $this->frontRepository->findAllServiceCategories();
        $services = $this->frontRepository->findAllServices();
        $doctor = $this->frontRepository->findDoctor();
        $doctors = $this->frontRepository->findAllDoctor();
        $acheives = $this->frontRepository->findAllAcheive();
        $features = $this->frontRepository->findFeatures(6);
        return view('frontmodule::pages.contact',compact('features','servicess','services','doctor','doctors','acheives'));
    }
    public function services(Request $req)
    {
        $servicess = $this->frontRepository->findAllServiceCategories();
        if (!request()->has('q')){
            $services = $this->frontRepository->findAllServices();
        }else{
            $services = $this->frontRepository->searchAllServices( $req);
        }
        $doctor = $this->frontRepository->findDoctor();
        $doctors = $this->frontRepository->findAllDoctor();
        $acheives = $this->frontRepository->findAllAcheive();
        $features = $this->frontRepository->findFeatures(6);
        return view('frontmodule::pages.services',compact('features','servicess','services','doctor','doctors','acheives'));
    }
    public function blogs()
    {
        $servicess = $this->frontRepository->findAllServiceCategories();
        $services = $this->frontRepository->findAllServices();
        $blogs = $this->frontRepository->findAllBlog();
        $acheives = $this->frontRepository->findAllAcheive();
        $features = $this->frontRepository->findFeatures(6);
        return view('frontmodule::pages.blog',compact('features','servicess','services','blogs','acheives'));
    }

    public function photos()
    {
        $servicess = $this->frontRepository->findAllServiceCategories();
        $services = $this->frontRepository->findAllServices();
        $photos = $this->frontRepository->findAllPhoto();
        $acheives = $this->frontRepository->findAllAcheive();
        $features = $this->frontRepository->findFeatures(6);
        return view('frontmodule::pages.photo',compact('features','servicess','services','photos','acheives'));
    }

    public function videos()
    {
        $servicess = $this->frontRepository->findAllServiceCategories();
        $services = $this->frontRepository->findAllServices();
        $videos = $this->frontRepository->findAllVideos();
        $acheives = $this->frontRepository->findAllAcheive();
        $features = $this->frontRepository->findFeatures(6);
        return view('frontmodule::pages.video',compact('features','servicess','services','videos','acheives'));
    }

    public function send_message(Request $request)
    {
        //dd($request->all());
        $data = $request->validate([
            'name'=>'required',
            'email'=>'required',
            'phone'=>'required',
            'message'=>'required',
        ]);
        $servicess = $this->frontRepository->findAllServiceCategories();
        $sliders = $this->frontRepository->SliderAll();
        $services = $this->frontRepository->findLimitServices();
        $categories = $this->frontRepository->findCategories();
        $blogs = $this->frontRepository->findAllBlog();
        $features = $this->frontRepository->findFeatures(6);
        Booking::create($request->all());
        return view('frontmodule::pages.success_two',compact('features','servicess','sliders','services','blogs'));
    }
    public function send_contact_us(Request $request)
    {
        $servicess = $this->frontRepository->findAllServiceCategories();
        $sliders = $this->frontRepository->SliderAll();
        $services = $this->frontRepository->findLimitServices();
        $categories = $this->frontRepository->findCategories();
        $blogs = $this->frontRepository->findAllBlog();
        $features = $this->frontRepository->findFeatures(6);
        $request->validate(['name','email','phone','message']);
        Contactus::create($request->all());
        return view('frontmodule::pages.success',compact('features','servicess','sliders','services','blogs'))->with('success', 'success');
    }
    public function single_service($title){
        $service = $this->frontRepository->findServiceByTitle($title);
        $services = $this->frontRepository->findLimitServices();
        $servicess = $this->frontRepository->findAllServiceCategories();
        $features = $this->frontRepository->findFeatures(6);
        return view('frontmodule::pages.single_service',compact('features','servicess','services','service'));
    }
    public function single_blog($title){
        $service = $this->frontRepository->findServiceByTitle($title);
        $services = $this->frontRepository->findLimitServices();
        $categories = $this->frontRepository->findCategories();
        $blog = $this->frontRepository->findBlog($title);

        $blogs = $this->frontRepository->findAllBlog();
        $servicess = $this->frontRepository->findAllServiceCategories();
        $features = $this->frontRepository->findFeatures(6);
        return view('frontmodule::pages.single_blog',compact('features','servicess','categories','blogs','blog','service','services'));
    }

    public function categories($id)
    {
        $servicess = $this->frontRepository->findAllServiceCategories();
        $services = $this->frontRepository->findAllServices();
        $blogs = $this->frontRepository->findCategoryById($id);
        $acheives = $this->frontRepository->findAllAcheive();
        $features = $this->frontRepository->findFeatures(6);
        return view('frontmodule::pages.categories',compact('features','servicess','services','blogs','acheives'));
    }

    public function services_categories($id)
    {
        $servicess = $this->frontRepository->findAllServiceCategories();
        $services = $this->frontRepository->findServicesByCategory($id);
        //dd($services);
        //$cats = $this->frontRepository->findAllServiceCategories();
        $acheives = $this->frontRepository->findAllAcheive();
        $features = $this->frontRepository->findFeatures(6);
        return view('frontmodule::pages.services_categories',compact('features','servicess','services','acheives'));
    }
}
