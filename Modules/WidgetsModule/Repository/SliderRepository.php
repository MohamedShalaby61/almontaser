<?php

namespace Modules\WidgetsModule\Repository;

use File;
use Modules\WidgetsModule\Entities\Slider\Slider;


/**
 * SliderRepository Class, will deal with all data of Slider,
 * Including its images and relations.
 */
class SliderRepository
{
  
  public function find($id)
  {
    $slider = Slider::where('id', $id)->first();

    return $slider;
  }

  public function findAll()
  {
    $sliders = Slider::all();

    return $sliders;
  }

  public function save($sliderData)
  {
    $slider = Slider::create($sliderData);
    return $slider;
  }

  public function delete($slider)
  {
    if ($slider->photo) {
      $file_path = public_path() . '/images/sliders/' . $slider->photo;

      File::delete($file_path);
    }

    Slider::destroy($slider->id);
  }

  public function update($id, $data, $data_trans)
  {
    $slider = Slider::find($id);
    $slider->update($data);

    foreach (\LanguageHelper::getLang() as $lang) {
      $slider->translate('' . $lang->lang)->title = $data_trans[$lang->lang]['title'];
      $slider->translate('' . $lang->lang)->description = $data_trans[$lang->lang]['description'];
      
      $slider->save();
    }
    return $slider;
  }
}
