<?php

namespace Modules\WidgetsModule\Repository;

use File;
use Modules\WidgetsModule\Entities\acheive;
use Modules\WidgetsModule\Entities\acheiveTranslation;

/**
 * SliderRepository Class, will deal with all data of Slider,
 * Including its images and relations.
 */
class AcheiveRepository
{
  
  public function find($id)
  {
    $acheive =Acheive::where('id', $id)->first();

    return $acheive; 
  }

  public function findAll()
  {
    $acheive = Acheive::all();

    return $acheive;
  }

  public function save($data)
  {
    $acheive = Acheive::create($data);
    return $acheive;
  }

  public function delete($acheive)
  {
    if ($acheive->icon) {
      $file_path = public_path() . '/images/acheives/' . $acheive->icon;

      File::delete($file_path);
    }

    Acheive::destroy($acheive->id);
  }

  public function update($id, $data, $data_trans)
  {
    $acheive = Acheive::find($id);
    $acheive->update($data);

    foreach (\LanguageHelper::getLang() as $lang) {
        $acheive->translate('' . $lang->lang)->title = $data_trans[$lang->lang]['title'];
        $acheive->translate('' . $lang->lang)->number = $data_trans[$lang->lang]['number'];
      
      $acheive->save();
    }
    return $acheive;
  }
}
