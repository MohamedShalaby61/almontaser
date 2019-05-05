<?php

namespace Modules\ServiceModule\Entities\ServiceMod;

use Illuminate\Database\Eloquent\Model;

class ServiceTranslation extends Model
{
    protected $fillable = ['slug', 'title', 'description', 'meta_title', 'meta_desc', 'meta_keywords'];
    public $timestamps = false;
    protected $table = 'service_translation';
}
