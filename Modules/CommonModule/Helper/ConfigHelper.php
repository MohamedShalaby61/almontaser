<?php

namespace Modules\CommonModule\Helper;

use Modules\Categories\Entities\Category;

class ConfigHelper
{
  /**
   * Retrieve all categories from db.
   *
   * @return void
   */
  public static function getCategs()
  {
    $categs = Category::where('type', 'car')->get();

    return $categs;
  }
}
