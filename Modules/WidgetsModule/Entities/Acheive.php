<?php

namespace Modules\WidgetsModule\Entities;

use Illuminate\Database\Eloquent\Model;

use Dimsav\Translatable\Translatable;

use Modules\WidgetsModule\Entities\AcheiveTranslation;

class acheive extends Model
{
    use Translatable;

    protected $table = 'acheive';
    protected $fillable = ['icon','number'];
    public $translatedAttributes = ['title','content'];
    public $translationModel = AcheiveTranslation::class;
    
}
