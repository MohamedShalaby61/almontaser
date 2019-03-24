<?php

namespace Modules\BlogModule\Entities;

use Illuminate\Database\Eloquent\Model;

class BlogTranslation extends Model
{
    public $timestamps = false;

    protected $table = 'blog_translations';
    protected $fillable = ['title','short_desc','tags', 'description', 'slug', 'meta_title', 'meta_desc', 'meta_keywords'];

}
