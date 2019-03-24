<?php

namespace Modules\ProductModule\Repository;

use File;
use Modules\CommonModule\Helper\BaseHelper;
use Modules\ProductModule\Entities\Product;

class ProductPhotoRepository
{

  use BaseHelper;

  /**
   * Find All images By product_id.
   *
   * @return void
   */
  public function findAll($product_id)
  {
    $products = Product::with('product_photo')->where('id', $product_id)->get();

    return $products;
  }

  /**
   * Save Current Uploaded image on the Propduct page.
   *
   * @return void
   */
  public function save($product, $product_pics)
  {
    $product_photos_many = $this->prepareData($product_pics, 'photo'); //* 'photo' IS COL NAME IN DB.

    $product->product_photo()->createMany($product_photos_many); // using relation: Photo Album Inserted.
  }

  /**
   * Delete Images.
   *
   * @return void
   */
  public function delete($product)
  {
    # Delete Photo Albums from /Images/products.
    if ($product->product_photo->all()) {
      $file_path = [];
      foreach ($product->product_photo->all() as $photo) {
        $file_path[] = public_path() . '/images/products/' . $photo->photo;
      }

      File::delete($file_path);
    }
  }
}
