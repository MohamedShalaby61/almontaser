<?php

namespace Modules\WidgetsModule\Repository;

use File;
use Modules\WidgetsModule\Entities\Testimonial;

/**
 * TestimonialRepository Class, will deal with all data of People Opinions,
 * Including its images and relations.
 */

class TestimonialRepository
{

  public function find($id)
  {
    $monial = Testimonial::where('id', $id)->first();

    return $monial;
  }


  public function findAll()
  {
    $monials = Testimonial::all();

    return $monials;
  }

  public function find_limit()
  {
    $monials = Testimonial::limit(4)->get();

    return $monials;
  }


  public function save($monialData)
  {
    $monial = Testimonial::create($monialData);
    return $monial;
  }


  public function delete($monialData)
  {
    if ($monialData->photo) {
      $file_path = public_path() . '/images/testimonials/' . $monialData->photo;

      File::delete($file_path);
    }

    Testimonial::destroy($monialData->id);
  }


  public function update($id, $data)
  {
    $monial = Testimonial::find($id);

    $monial->update($data);

    return $monial;
  }
}
