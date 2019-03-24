<?php

namespace Modules\BlogModule\Repository;

use Modules\BlogModule\Entities\BlogCategory;


class BlogCategoryRepository /*implements the interface*/
{
    # Show
    public function find($id)
    {
        $category = BlogCategory::with(['parent', 'child', 'translations', 'blogs', 'blogs.translations'])->where('id', $id)->first();

        return $category;
    }

    # Index
    public function findAll()
    {
        $categs = BlogCategory::with(['parent', 'child', 'translations', 'blogs', 'blogs.translations'])->get();
        return $categs;
    }

    public function findAllParent()
    {
        $categs = BlogCategory::with(['parent', 'child', 'translations', 'blogs', 'blogs.translations'])
            ->where('parent_id', null)->get();
        return $categs;
    }


    # Insert
    public function save($categoryData)
    {
        $categ = BlogCategory::create($categoryData);

        return $categ;
    }

    # Edit
    public function update($id, $data, $data_trans)
    {
        $category = BlogCategory::find($id);
        $category->update($data);

        foreach (\LanguageHelper::getLang() as $lang) {

            if (isset($data_trans[$lang->lang]['title'])) {
                $category->translate('' . $lang->lang)->title = $data_trans[$lang->lang]['title'];
            }

            if (isset($data_trans[$lang->lang]['description'])) {
                $category->translate('' . $lang->lang)->description = $data_trans[$lang->lang]['description'];
            }

            if (isset($data_trans[$lang->lang]['meta_title'])) {
                $category->translate('' . $lang->lang)->slug = $data_trans[$lang->lang]['slug'];
                $category->translate('' . $lang->lang)->meta_title = $data_trans[$lang->lang]['meta_title'];
                $category->translate('' . $lang->lang)->meta_desc = $data_trans[$lang->lang]['meta_desc'];
                $category->translate('' . $lang->lang)->meta_keywords = $data_trans[$lang->lang]['meta_keywords'];
            }

            $category->save();
        }
        return $category;
    }

    # Destroy
    public function delete($id)
    {
        BlogCategory::destroy($id);
    }
}
