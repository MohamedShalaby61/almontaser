<?php

namespace Modules\ConfigModule\Entities;

use Illuminate\Database\Eloquent\Model;

class ConfigCategory extends Model
{
    protected $fillable = [];

    protected $table='config_categories';

    public function configs()
    {
        return $this->hasMany(Config::class, 'category_id');
    }
}
