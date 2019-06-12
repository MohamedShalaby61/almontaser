<?php

namespace Modules\WidgetsModule\Repository;

use File;
use Modules\WidgetsModule\Entities\WhyUs;


/**
 * why_usRepository{} Class, will deal with all data of why_uss,
 * Including its images and relations.
 */
class WhyUsRepository
{

  public function find($id)
  {
    $why_us = WhyUs::where('id', $id)->first();

    return $why_us;
  }

  public function findAll()
  {
    $why_us = WhyUs::with(['translations'])->get();

    return $why_us;
  }

  public function save($why_usData)
  {
    $why_us = WhyUs::create($why_usData);

    return $why_us;
  }

  public function delete($why_us)
  {
    if ($why_us->photo) {
        $file_path = public_path() . '/images/why_us/' . $why_us->photo;

        File::delete($file_path);
    }

      WhyUs::destroy($why_us->id);
  }

  public function update($id, $data, $data_trans)
  {
    $why_us = WhyUs::find($id);
    $why_us->update($data);

    foreach (\LanguageHelper::getLang() as $lang) {
      $why_us->translate('' . $lang->lang)->title = $data_trans[$lang->lang]['title'];
      $why_us->translate('' . $lang->lang)->content = $data_trans[$lang->lang]['content'];
      $why_us->translate('' . $lang->lang)->meta_desc = $data_trans[$lang->lang]['meta_desc'];
      $why_us->translate('' . $lang->lang)->meta_keywords = $data_trans[$lang->lang]['meta_keywords'];
      $why_us->translate('' . $lang->lang)->slug = $data_trans[$lang->lang]['slug'];
      $why_us->translate('' . $lang->lang)->meta_title = $data_trans[$lang->lang]['meta_title'];

      $why_us->save();
    }
    return $why_us;

  }
}

