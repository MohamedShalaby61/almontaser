<?php

namespace Modules\ProductModule\Repository;

use Modules\ProductModule\Entities\ProductCategory;


class ProductCategoryRepository
{
    # Show
    public function find($id)
    {
        $category = ProductCategory::where('id', $id)->first();

        return $category;
    }

    # Index
    public function findAll()
    {

        $categs = ProductCategory::with('translations')->get();

        return $categs;
    }

    public function findAllParent()
    {
        $categs = ProductCategory::with('translations')->where('parent_id', null)->get();
        return $categs;
    }

    /**
     * List All Children for Category [API usage]
     *
     * @param [type] $id
     * @return void
     */
    public function find_children($id)
    {

        $children = ProductCategory::with('translations')->where('parent_id', $id)->get();

        return $children;
    }

    /**
     * List All Children for Category [API usage]
     *
     * @param [type] $id
     * @return void
     */
    public function list_parent()
    {
        $parent = ProductCategory::with('translations')->where('parent_id', null)->get();

        return $parent;
    }

    /**
     * List All Products for Category [API usage]
     *
     * @param [type] $id
     * @return void
     */
    public function list_products($id)
    {
        if (ProductCategory::find($id)) {
            $products_of_category = ProductCategory::with(['products', 'products.translations'])->where('id', $id)->first();

            return $products_of_category->products;

        } else {
            return null;
        }
    }

    # Insert
    public function save($categoryData)
    {
        $categ = ProductCategory::create($categoryData);

        return $categ;
    }

    # Edit
    public function update($id, $data, $data_trans)
    {
        $category = ProductCategory::find($id);
        $category->update($data);

        foreach (\LanguageHelper::getLang() as $lang) {
            if (isset($data_trans[$lang->lang]['title'])) {
                $category->translate('' . $lang->lang)->title = $data_trans[$lang->lang]['title'];
            }
            if (isset($data_trans[$lang->lang]['description'])) {
                $category->translate('' . $lang->lang)->description = $data_trans[$lang->lang]['description'];
            }
            if (isset($data_trans[$lang->lang]['meta_title'])) {
                $category->translate('' . $lang->lang)->meta_title = $data_trans[$lang->lang]['meta_title'];
                $category->translate('' . $lang->lang)->meta_desc = $data_trans[$lang->lang]['meta_desc'];
                $category->translate('' . $lang->lang)->slug = $data_trans[$lang->lang]['slug'];
                $category->translate('' . $lang->lang)->meta_keywords = $data_trans[$lang->lang]['meta_keywords'];
            }
            $category->save();
        }
        return $category;
    }

    # Destroy
    public function delete($id)
    {
        ProductCategory::destroy($id);
    }
}
