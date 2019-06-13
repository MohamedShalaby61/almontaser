<?php

namespace Modules\CommonModule\Helper;

use Modules\CommonModule\Entities\Language;

class LanguageHelper
{
  /**
   * Retrieve all active lang from db.
   * active lang has [1] property.
   *
   * @return void
   */
  public function getLang()
  {
    $lang = Language::where('active', '=', 1)->where('lang_type','=',0)->get();

    return $lang;
  }
    public function getStaticLang()
    {
        $lang = Language::where('active', '=', 1)->where('lang_type','=',1)->get();

        return $lang;
    }

    public function getLangCode()
    {
        $lang = Language::where('active', '=', 1)->where('lang_type','=',0)->get();
        $result = [];
        foreach ($lang as $item) {
            $result[]=$item->lang;
        }

        return $result;
    }
  public function getStaticLangCode()
  {
      $lang = Language::where('active', '=', 1)->where('lang_type','=',1)->get();
      $result = [];
      foreach ($lang as $item) {
          $result[]=$item->lang;
      }

      return $result;
  }
    

  /**
   * Retrieve all langs from DB.
   *
   * @return  [type]  [return description]
   */
  public static function getAllLangs()
  {
      $langs = Language::all();

      return $langs;
  }

  public static function activateLangs($ar_lang, $en_lang)
  {

    Language::where('lang', 'ar')->update(['active' => $ar_lang]);
    Language::where('lang', 'en')->update(['active' => $en_lang]);
  }
}
