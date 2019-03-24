<?php

namespace Modules\PortfolioModule\Repository;

use File;
use Modules\CommonModule\Helper\BaseHelper;


/**
 * PortfolioPhotoRepository Class will deal with some operations,
 * on the One project.
 * 
 * @method findAll(), save(), delete().
 */
class PortfolioPhotoRepository
{

  use BaseHelper;

  /**
   * Find All images By car_id.
   *
   * @return void
   */
  // public function findAll($car_id)
  // {
  //   $cars = Car::with('car_photo')->where('id', $car_id)->get();

  //   return $cars;
  // }

  /**
   * Save Current Uploaded image on the car Slider page.
   *
   * @return void
   */
  public function save($projectData, $project_photos)
  {
    $project_photos_many = $this->prepareData($project_photos, 'photo'); //* 'photo' IS COL NAME IN DB.

    $projectData->portfolio_photo()->createMany($project_photos_many); // using relation: Photo Album Inserted.
  }

  /**
   * Delete Images.
   *
   * @return void
   */
  public function delete($project)
  {
    # Delete Photo Albums from /Images/project.
    if ($project->portfolio_photo->all()) {
      $file_path = [];
      foreach($project->portfolio_photo->all() as $photo){
        $file_path[] = public_path() . '/images/project/' . $photo->photo;
      }
      
      File::delete($file_path);
    }
  }
}
