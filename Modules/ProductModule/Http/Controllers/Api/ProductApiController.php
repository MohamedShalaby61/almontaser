<?php

namespace Modules\ProductModule\Http\Controllers\Api;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Routing\Controller;
use Modules\CommonModule\Helper\ApiResponseHelper;
use Modules\ProductModule\Repository\ProductRepository;
use Modules\ProductModule\Transformers\ProductCollection;
use Modules\ProductModule\Transformers\ProductResource;

class ProductApiController extends Controller
{
    use ApiResponseHelper;

    protected $productRepo;

    public function __construct(ProductRepository $productRepo)
    {
        $this->productRepo = $productRepo;
    }

    /**
     * Display a listing of Products.
     * @return Response
     */
    public function index()
    {
        // List All Products
        $products = $this->productRepo->findAll();

        $resource_products = new ProductCollection($products);

        return $this->setCode(200)->setData($resource_products)->send();
    }


    /**
     * Show the specified product.
     * @return Response
     */
    public function show($id)
    {
        // Show specified product by {id}
        $product = $this->productRepo->find($id);

        $resource_product = new ProductResource($product);

        if (!empty($product)) {
            return $this->setCode(200)->setData($resource_product)->send();
        } else {
            return $this->setCode(204)->setData([])->setError('لا توجد بيانات')->send();
        }
    }

}
