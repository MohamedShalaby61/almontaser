<?php

namespace Modules\ConfigModule\Entities;

use Illuminate\Database\Eloquent\Model;

class Config extends Model
{
    protected $fillable = [];

    public function config_categories()
    {
        return $this->belongsTo(Config_category::class);
    }
}
