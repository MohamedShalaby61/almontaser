<?php

namespace Modules\ProductModule\Http\Controllers\Api;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Routing\Controller;
use Modules\CommonModule\Helper\ApiResponseHelper;
use Modules\ProductModule\Repository\ProductCategoryRepository;
use Modules\ProductModule\Transformers\ProductCollection;
use Modules\ProductModule\Transformers\CategoryCollection;
use Modules\ProductModule\Transformers\CategoryResource;

class CategoryApiController extends Controller
{
    use ApiResponseHelper;

    protected $productCategRepo;

    public function __construct(ProductCategoryRepository $productCategRepo)
    {
        $this->productCategRepo = $productCategRepo;
    }

    /**
     * Display a listing of the resource.
     * @return Response
     */
    public function index()
    {
        $product_categories = $this->productCategRepo->findAll();

        $categs = new CategoryCollection($product_categories);

        return $this->setCode(200)->setData($categs)->send();
    }

    /**
     * list all children for specified Parent-Category.
     * @return Response
     */
    public function list_children($id)
    {
        $children = $this->productCategRepo->find_children($id);
        $categs = new CategoryCollection($children);

        return $this->setCode(200)->setData($categs)->send();
    }

    /**
     * list all Products for specified Category.
     * @return Response
     */
    public function list_products($id)
    {
        $products_of_category = $this->productCategRepo->list_products($id);

        if($products_of_category == null)
        {
            return $this->setCode(204)->setData([])->setError('لا توجد بيانات')->send();
        } else{
            $products = new ProductCollection($products_of_category);

            return $this->setCode(200)->setData($products)->send();
        }
    }

    public function list_parent()
    {
        $parents = $this->productCategRepo->list_parent();
        $parent_collection = new CategoryCollection($parents);

        if (!empty($parents)) {
            return $this->setCode(200)->setData($parent_collection)->send();
        } else {
            return $this->setCode(204)->setData([])->setError('لا توجد بيانات')->send();
        }
    }

    /**
     * Show the specified resource.
     * @return Response
     */
    public function show($id)
    {
        $product_category = $this->productCategRepo->find($id);
        $categ_resource = new CategoryResource($product_category);

        if (!empty($product_category)) {
            return $this->setCode(200)->setData($categ_resource)->send();
        } else {
            return $this->setCode(204)->setData([])->setError('لا توجد بيانات')->send();
        }
    }

}
