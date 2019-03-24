<?php

namespace Modules\BlogModule\Entities;

use Illuminate\Database\Eloquent\Model;

class BlogCategoryTranslation extends Model
{
    public $timestamps = false;

    protected $table = 'blog_categories_translations';

    protected $fillable = ['title', 'description', 'slug', 'meta_title', 'meta_desc', 'meta_keywords'];
}
