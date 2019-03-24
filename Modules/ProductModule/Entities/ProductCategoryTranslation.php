<?php

namespace Modules\ProductModule\Entities;

use Illuminate\Database\Eloquent\Model;

class ProductCategoryTranslation extends Model
{
    public $timestamps = false;

    protected $table = 'product_categories_translations';

    protected $fillable = ['title', 'description', 'meta_title', 'meta_desc', 'meta_keywords', 'slug'];
}
