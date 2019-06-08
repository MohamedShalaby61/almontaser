<?php

namespace Modules\WidgetsModule\Repository;

use File;
use Modules\WidgetsModule\Entities\Page;


/**
 * PageRepository{} Class, will deal with all data of Pages,
 * Including its images and relations.
 */
class PageRepository
{

  public function find($id)
  {
    $page = Page::where('id', $id)->first();

    return $page;
  }

  public function findAll()
  {
    $pages = Page::with(['translations'])->get();

    return $pages;
  }

  public function save($pageData)
  {
    $page = Page::create($pageData);

    return $page;
  }

  public function delete($page)
  {
    if ($page->photo) {
        $file_path = public_path() . '/images/pages/' . $page->photo;

        File::delete($file_path);
    }

      Page::destroy($page->id);
  }

  public function update($id, $data, $data_trans)
  {
    $page = Page::find($id);
    $page->update($data);

    foreach (\LanguageHelper::getLang() as $lang) {
      $page->translate('' . $lang->lang)->title = $data_trans[$lang->lang]['title'];
      $page->translate('' . $lang->lang)->content = $data_trans[$lang->lang]['content'];
      $page->translate('' . $lang->lang)->meta_desc = $data_trans[$lang->lang]['meta_desc'];
      $page->translate('' . $lang->lang)->meta_keywords = $data_trans[$lang->lang]['meta_keywords'];
      $page->translate('' . $lang->lang)->slug = $data_trans[$lang->lang]['slug'];
      $page->translate('' . $lang->lang)->meta_title = $data_trans[$lang->lang]['meta_title'];

      $page->save();
    }
    return $page;

  }
}

