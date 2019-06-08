<?php

namespace Modules\WidgetsModule\Entities;

use Illuminate\Database\Eloquent\Model;

use Dimsav\Translatable\Translatable;

use Modules\WidgetsModule\Entities\AcheiveTranslation;

class acheive extends Model
{
    use Translatable;

    protected $table = 'acheive';
    protected $fillable = ['icon'];
    public $translatedAttributes = ['title', 'number'];
    public $translationModel = AcheiveTranslation::class;
    
}
 