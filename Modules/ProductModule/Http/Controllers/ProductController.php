<?php

namespace Modules\ProductModule\Http\Controllers;

use File;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Routing\Controller;
use Modules\CommonModule\Helper\UploaderHelper;
use Modules\ProductModule\Repository\ProductRepository;
use Modules\ProductModule\Repository\ProductPhotoRepository;
use Modules\ProductModule\Repository\ProductCategoryRepository;

class ProductController extends Controller
{
    use UploaderHelper;

    private $productRepo, $categoryRepo, $productPicRepo;

    public function __construct(
        ProductRepository $productRepo,
        ProductCategoryRepository $categoryRepo,
        ProductPhotoRepository $productPicRepo
    )
    {

        $this->productRepo = $productRepo;
        $this->categoryRepo = $categoryRepo;
        $this->productPicRepo = $productPicRepo;
       // $this->serviceCategRepo = $serviceCategRepo;
    }

    /**
     * Display a listing of the resource.
     * @return Response
     */
    public function index()
    {
        $products = $this->productRepo->findAll();

        return view('productmodule::product.index', ['products' => $products]);
    }

    /**
     * Show the form for creating a new resource.
     * @return Response
     */
    public function create()
    {
        $categories = $this->categoryRepo->findAllParent();

        return view('productmodule::product.create', ['categories' => $categories]);
    }

    /**
     * Store a newly created resource in storage.
     * @param  Request $request
     * @return Response
     */
    public function store(Request $request)
    {
        // dd($request->all());
        $productData = $request->except('_token', 'product_categ', 'photo', 'photos', 'volume', 'measure', 'num_of_item', 'item_cost');
        $product_categ = $request->get('product_categ');
        $productData['created_by'] = auth()->user()->id;


        if ($request->hasFile('photo'))
        {
            $image = $request->file('photo');
            $imageName = $this->upload($image, 'products', true); // resize option executed.
            $productData['photo'] = $imageName;
        }

        # Loop through product_photos_many to save photos first.
        $product_pics = [];
        if ($request->hasFile('photos')) {
            $photos = $request->file('photos');
            $product_pics = $this->uploadAlbum($photos, 'products');
        }

        $this->productRepo->save($productData, $product_pics, $product_categ);

        return redirect('admin-panel/product')->with('success', 'success');
    }

    /**
     * Show the form for editing the specified resource.
     * @return Response
     */
    public function edit($id)
    {
        $product = $this->productRepo->find($id);
        $categories = $this->categoryRepo->findAllParent();

        foreach ($product->categories as $value) {
            $product_categ_ids[] = $value->id;
        }

        return view('productmodule::product.edit', [
            'product' => $product,
            'categories' => $categories,
            'selected_categ_ids' => $product_categ_ids
        ]);
    }

    /**
     * Update the specified resource in storage.
     * @param  Request $request
     * @return Response
     */
    public function update(Request $request, $id)
    {
        $productPic = $this->productRepo->find($id);
        $product = $request->except('_token', 'photo', '_method', 'product_categ', 'ar', 'en', 'volume', 'measure', 'num_of_item', 'item_cost');
        $product_categ = $request->get('product_categ');

        $activeLangCode = \LanguageHelper::getLangCode();

        $product_trans = $request->only($activeLangCode);

        if ($request->hasFile('photo')) {
            // Delete old image first.
            $thumbnail_path = public_path() . '/images/products/thumb/' . $productPic->photo;
            File::delete($thumbnail_path);

            // Save the new one.
            $image = $request->file('photo');
            $imageName = $this->upload($image, 'products', true);
            $product['photo'] = $imageName;
        }

        $this->productRepo->update($id, $product, $product_trans, $product_categ);

        return redirect('/admin-panel/product')->with('updated', 'updated');
    }

    /**
     * Remove the specified resource from storage.
     * @return Response
     */
    public function destroy($id)
    {
        $product = $this->productRepo->find($id);

        # Get The product photo album, then pass it to repo to delete it
        $this->productPicRepo->delete($product);

        # Delete the Main photo and Thumbnail.
        $this->productRepo->delete($product);

        return redirect()->back();
    }
}
