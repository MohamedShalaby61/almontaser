<?php

namespace Modules\BlogModule\Entities;

use Dimsav\Translatable\Translatable;
use Illuminate\Database\Eloquent\Model;

class BlogCategory extends Model
{
    protected $table = 'blog_categories';

    use Translatable;
    public $translatedAttributes = ['title', 'description', 'slug', 'meta_title', 'meta_desc', 'meta_keywords'];

    protected $fillable = ['created_by','parent_id', 'slug', 'photo'];

    public $translationModel = BlogCategoryTranslation::class;


    /**
     * Making Relation on the SELF-JOIN DB.
     *
     ** NOTE: 2 relations are made in the same model, due to SELF-JOIN.
     *
     * @return void
     */
    public function child()
    {
        return $this->hasMany(BlogCategory::class, 'parent_id', 'id');
    }

    public function parent()
    {
        return $this->belongsTo(BlogCategory::class, 'parent_id', 'id');
    }

    public function blogs(){
        return $this->belongsToMany(Blog::class,'blog_category','blog_category_id','blog_id')->withTimestamps();
    }
}
