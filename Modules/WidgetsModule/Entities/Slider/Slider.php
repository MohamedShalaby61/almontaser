<?php

namespace Modules\WidgetsModule\Entities\Slider;

use Dimsav\Translatable\Translatable;
use Illuminate\Database\Eloquent\Model;

class Slider extends Model
{
    use Translatable;

    protected $table = 'sliders';
    protected $fillable = ['photo', 'created_by'];
    public $translatedAttributes = ['title', 'description'];
    public $translationModel = SliderTranslation::class;
}
