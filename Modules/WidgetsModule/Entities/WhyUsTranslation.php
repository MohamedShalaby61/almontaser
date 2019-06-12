<?php

namespace Modules\WidgetsModule\Entities;

use Illuminate\Database\Eloquent\Model;

class WhyUsTranslation extends Model
{
    protected $fillable = ['title','content'];
    public $timestamps = false;
    protected $table = 'why_us_translation';
}
