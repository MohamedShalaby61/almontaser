<?php

namespace Modules\ServiceModule\Entities\ServiceCategory;

use Dimsav\Translatable\Translatable;
use Illuminate\Database\Eloquent\Model;

class ServiceCategory extends Model
{
    use Translatable;

    protected $table = 'service_category';
    protected $fillable = ['created_by','photo','cover_photo'];
    public $translatedAttributes = ['title', 'description'];
    public $translationModel = ServiceCategoryTranslation::class;

    # Relation
    public function service()
    {
        return $this->hasMany(Service::class);
    }
}
