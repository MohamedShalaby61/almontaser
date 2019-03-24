<?php

namespace Modules\ProductModule\Repository;

use File;
use Modules\CommonModule\Helper\BaseHelper;
use Modules\ProductModule\Entities\Product;
use Modules\ProductModule\Entities\ProductCategory;
use Modules\ProductModule\Repository\ProductPhotoRepository;

class ProductRepository
{
    use BaseHelper;

    private $productPicRepo;

    public function __construct(ProductPhotoRepository $productPicRepo)
    {
        $this->productPicRepo = $productPicRepo;
    }

    /**
     * Return number of products.
     *
     * @return  [type]  [return description]
     */
    public function NumOfProducts()
    {
        return Product::all()->count();
    }


    public function find($id)
    {
        $product = Product::where('id', $id)->with('categories')->first();

        return $product;
    }

    # Index
    public function findAll()
    {
        $products = Product::with(['categories', 'translations'])->get();

        return $products;
    }

    # Limit 6
    public function find_limit()
    {
        $products = Product::with(['categories', 'translations'])->limit(6)->get();

        return $products;
    }

    # Insert
    public function save($productData, $product_pics, $product_categ)
    {
        $product = Product::create($productData);


        $this->productPicRepo->save($product, $product_pics);

        $product->categories()->sync($product_categ);
    }

    public function delete($product)
    {
        if ($product->photo) {
            $file_path = public_path() . '/images/products/' . $product->photo;
            $thumbnail_path = public_path() . '/images/products/thumb/' . $product->photo;
            File::delete([$file_path, $thumbnail_path]);
        }
        Product::destroy($product->id);
    }

    # Edit
    public function update($id, $data, $data_trans, $product_categ)
    {
        $product = Product::find($id);

        $product->update($data);
        $product->categories()->sync($product_categ);

        foreach (\LanguageHelper::getLang() as $lang) {

            if (isset($data_trans[$lang->lang]['title'])) {
                $product->translate('' . $lang->lang)->title = $data_trans[$lang->lang]['title'];
            }
            if (isset($data_trans[$lang->lang]['description'])) {
                $product->translate('' . $lang->lang)->description = $data_trans[$lang->lang]['description'];
            }
            if (isset($data_trans[$lang->lang]['meta_title'])) {
                $product->translate('' . $lang->lang)->meta_title = $data_trans[$lang->lang]['meta_title'];
                $product->translate('' . $lang->lang)->meta_keywords = $data_trans[$lang->lang]['meta_keywords'];
                $product->translate('' . $lang->lang)->meta_desc = $data_trans[$lang->lang]['meta_desc'];
            }

            $product->save();
        }
        return $product;
    }
}
