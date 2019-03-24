<?php

namespace Modules\AdminModule\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Modules\AdminModule\Repository\AdminRepository;
use Modules\AdminModule\Helper\arabicdate;
use Modules\WidgetsModule\Entities\Contactus;
use Modules\ProductModule\Repository\ProductRepository;
use Modules\ServiceModule\Repository\ServiceRepository;
use Modules\PortfolioModule\Repository\PortfolioRepository;
use Modules\BlogModule\Repository\BlogRepository;
use Modules\WidgetsModule\Repository\BookingRepository;

class AdminController extends Controller
{
    use arabicdate;

    public $adminRepo;
    private $productRepo, $bookingRepo, $serviceRepo, $portfolioRepo, $blogRepo;

    public function __construct(
        AdminRepository $adminRepository,
        ProductRepository $productRepo,
        ServiceRepository $serviceRepo,
        PortfolioRepository $portfolioRepo,
        BlogRepository $blogRepo,
        BookingRepository $bookingRepo
    )
    {
        $this->middleware('auth:admin');
        $this->adminRepo = $adminRepository;
        $this->productRepo = $productRepo;
        $this->serviceRepo = $serviceRepo;
        $this->portfolioRepo = $portfolioRepo;
        $this->blogRepo = $blogRepo;
        $this->bookingRepo = $bookingRepo;
    }

    function dashboard()
    {
        $contacts = Contactus::all();
        $products = $this->productRepo->NumOfProducts();
        $services = $this->serviceRepo->NumOfServices();
        $projects = $this->portfolioRepo->NumOfProjects();
        $blogs = $this->blogRepo->NumOfBlogs();

        $bookings = $this->bookingRepo->findAll();

        return view('adminmodule::admins.dashboard', [
            'contacts' => $contacts,
            'products' => $products,
            'services' => $services,
            'projects' => $projects,
            'bookings' => $bookings,
            'blogs' => $blogs,
        ]);
    }

    function index()
    {
        $admins=$this->adminRepo->findAll();
        $date = $this->ArabicDate();

        return view('adminmodule::admins.index', [
            'admins' => $admins,
            'date' => $date
        ]);
    }



    function create()
    {
        return view('adminmodule::admins.create');
    }

    function store(Request $request)
    {
        $data = $request->except('_token', 'role');
        $data['role'] = $request->role;
        $role = $data['role'];
        $this->adminRepo->save($data, $role);

        return redirect('admin-panel/admins')->with('success','Successfully add');
    }

    function edit($id){

        $admin=$this->adminRepo->findById($id);
        $roles = [1 => 'superadmin', 2 => 'admin', 3 => 'writer'];

        return view('adminmodule::admins.edit',compact('admin', 'roles'));
    }

    function update(Request $request,$id){
        $data = $request->except('_token', 'role');
        $role = $request->role;
        $this->adminRepo->update($data,$id, $role);

        return redirect('admin-panel/admins')->with('success','Successfully Edit');
    }

    public function destroy($id)
    {
        $admin = $this->adminRepo->findById($id);
        $this->adminRepo->delete($admin);

        return redirect()->back();
    }
}
