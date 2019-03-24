<?php

namespace Modules\WidgetsModule\Entities;

use Dimsav\Translatable\Translatable;
use Illuminate\Database\Eloquent\Model;
use Modules\WidgetsModule\Entities\PageTranslation;

class Page extends Model
{
    use Translatable;

    protected $table = 'pages';
    protected $fillable = ['photo', 'created_by'];
    public $translatedAttributes = ['title', 'content', 'meta_title','meta_desc', 'meta_keywords', 'slug'];
    public $translationModel = PageTranslation::class;
}
