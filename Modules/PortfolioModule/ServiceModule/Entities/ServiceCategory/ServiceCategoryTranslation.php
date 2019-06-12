<?php

namespace Modules\ServiceModule\Entities\ServiceCategory;

use Illuminate\Database\Eloquent\Model;

class ServiceCategoryTranslation extends Model
{
    protected $fillable = ['title', 'description'];
    public $timestamps = false;
    protected $table = 'service_category_translation';
}
