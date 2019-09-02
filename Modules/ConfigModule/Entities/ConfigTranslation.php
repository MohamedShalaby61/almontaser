<?php

namespace Modules\ConfigModule\Entities;

use Illuminate\Database\Eloquent\Model;

class ConfigTranslation extends Model
{
    public $timestamps = false;
    protected $fillable = ['display_name','value'];
}
