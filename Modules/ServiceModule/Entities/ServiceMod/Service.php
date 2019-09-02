<?php

namespace Modules\ServiceModule\Entities\ServiceMod;

use Dimsav\Translatable\Translatable;
use Illuminate\Database\Eloquent\Model;
use Modules\ServiceModule\Entities\ServiceCategory\ServiceCategory;

class Service extends Model
{
    use Translatable;

    protected $table = 'service';
    protected $fillable = ['feature','photo','cover_photo', 'service_category_id', 'created_by'];
    public $translatedAttributes = ['slug', 'title', 'description', 'meta_title', 'meta_desc', 'meta_keywords'];
    public $translationModel = ServiceTranslation::class;

    # Relation
    public function service_category()
    {
        return $this->belongsTo(ServiceCategory::class);
    }
}
