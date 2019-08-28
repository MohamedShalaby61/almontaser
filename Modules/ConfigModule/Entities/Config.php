<?php

namespace Modules\ConfigModule\Entities;

use Dimsav\Translatable\Translatable;
use Illuminate\Database\Eloquent\Model;

class Config extends Model
{
    use Translatable;
    public $translatedAttributes = ['display_name','value'];
    protected $fillable = ['is_static','static_value','type','category_id'];
    public function config_categories()
    {
        return $this->belongsTo(Config_category::class);
    }
}
