<?php

namespace Modules\ServiceModule\Entities\ServiceCategory;

use Dimsav\Translatable\Translatable;
use Illuminate\Database\Eloquent\Model;

class ServiceCategory extends Model
{
    use Translatable;

    protected $table = 'service_category';
    protected $fillable = ['created_by'];
    public $translatedAttributes = ['title', 'description'];
    public $translationModel = ServiceCategoryTranslation::class;

    # Relation

    public function services()
    {
        return $this->hasMany('Modules\ServiceModule\Entities\ServiceMod\Service','service_category_id','id');
    }
}
