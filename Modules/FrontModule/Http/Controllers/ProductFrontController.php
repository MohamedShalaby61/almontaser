<?php

namespace Modules\FrontModule\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Routing\Controller;
use Modules\CommonModule\Helper\UploaderHelper;
use Modules\ProductModule\Repository\ProductRepository;
use Modules\ProductModule\Repository\ProductCategoryRepository;
use Modules\WidgetsModule\Repository\SliderRepository;
use Modules\ServiceModule\Repository\ServiceRepository;
use Modules\ServiceModule\Repository\ServiceCategoryRepository;
use Modules\WidgetsModule\Repository\ContactusRepository;
use Modules\WidgetsModule\Repository\TestimonialRepository;
use Modules\ConfigModule\Repository\ConfigRepository;
use phpDocumentor\Reflection\Types\This;
use session;

class ProductFrontController extends Controller
{
    use UploaderHelper;
    private $productRepo;
    private $categoryRepo;
    private $sliderRepo;
    private $serviceRepo;
    private $serviceCategRepo;
    private $monialRepo;
    private $contactRepo;
    private $confRepo; 


    public function __construct(ProductCategoryRepository $categoryRepo ,  ConfigRepository $confRepo,ProductRepository $productRepo ,SliderRepository $sliderRepo,ServiceRepository  $serviceRepo,ServiceCategoryRepository $serviceCategRepo ,TestimonialRepository $monialRepo ,ContactusRepository $contactRepo)
    {
        $this->sliderRepo = $sliderRepo; 
        $this->productRepo = $productRepo;
        $this->serviceRepo = $serviceRepo;
        $this->serviceCategRepo = $serviceCategRepo;
        $this->monialRepo=$monialRepo;
        $this->contactRepo=$contactRepo;
        $this->confRepo=$confRepo;
        $this->categoryRepo=$categoryRepo;
      
      
    }
   

    /**
     * Display a listing of the resource.
     * @return Response
     */
    

    /**
     * Display a listing of the resource.
     * @return Response
     */
    public function index()
    {
        $sliders = $this->sliderRepo->findAll();
        $products = $this->productRepo->findAll();
        $services = $this->serviceRepo->findAll();
        $categories = $this->serviceCategRepo->findAll();
        $monial = $this->monialRepo->findAll();
        $categs=$this->categoryRepo->findAll();
       

        return view('frontmodule::index', ['categs'=>$categs,'products' => $products, 'sliders'=>$sliders, 'services'=>$services,'categories'=>$categories,'monial'=>$monial]);
    }
    

    /**
     * Display a listing of products by category_id.
     * @param Request $request
     * @return Response
     */
    public function store(Request $request)
    {
        $data = $request->except('_token');

        $this->contactRepo->save($data);
        return response()->json(['success'=>'Data is successfully added']);

      //  return view('frontmodule::index')->with('success', 'success');
    }

    /**
     * Show the specified resource.
     * @param int $id
     * @return Response
     */
    public function language($locale){
        Session::put('locale', $locale);
        return redirect()->back();
}
}