<?php

namespace Modules\WidgetsModule\Entities;

use Illuminate\Database\Eloquent\Model;

class PageTranslation extends Model
{
    protected $fillable = ['title', 'content', 'meta_title','meta_desc', 'meta_keywords', 'slug'];
    public $timestamps = false;
    protected $table = 'page_translations';
}
 