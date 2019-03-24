<?php

namespace Modules\commonModule\Facades;

use Illuminate\Support\Facades\Facade;

class LanguageFacade extends Facade
{
  public static function getFacadeAccessor()
  {
    return 'LanguageHelper';
  }
}