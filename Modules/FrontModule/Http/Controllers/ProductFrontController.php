<?php

namespace Modules\FrontModule\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Routing\Controller;
use Modules\ProductModule\Repository\ProductRepository;

class ProductFrontController extends Controller
{
    private $productRepo;

    public function __construct(ProductRepository $productRepo) {
        $this->productRepo = $productRepo;
    }

    /**
     * Display a listing of the resource.
     * @return Response
     */
    public function indexProductCategory()
    {
        return view('frontmodule::index');
    }

    /**
     * Display a listing of the resource.
     * @return Response
     */
    public function indexProduct()
    {
        return view('frontmodule::create');
    }

    /**
     * Display a listing of products by category_id.
     * @param Request $request
     * @return Response
     */
    public function indexProductByCategory($category_id)
    {
        //
    }

    /**
     * Show the specified resource.
     * @param int $id
     * @return Response
     */
    public function showProduct($id)
    {
        return view('frontmodule::show');
    }
}
