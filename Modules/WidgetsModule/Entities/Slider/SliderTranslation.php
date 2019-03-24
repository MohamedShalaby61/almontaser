<?php

namespace Modules\WidgetsModule\Entities\Slider;

use Illuminate\Database\Eloquent\Model;

class SliderTranslation extends Model
{
    protected $fillable = ['title', 'description'];
    public $timestamps = false;
    protected $table = 'sliders_translation';
}
