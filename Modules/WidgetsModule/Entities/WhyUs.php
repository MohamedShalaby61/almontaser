<?php

namespace Modules\WidgetsModule\Entities;

use Illuminate\Database\Eloquent\Model;
use Dimsav\Translatable\Translatable;
use Modules\WidgetsModule\Entities\WhyUsTranslation;

class WhyUs extends Model
{
	use Translatable;

	protected $table = 'why_us';
    public $translatedAttributes = ['title', 'content'];
    protected $fillable = ['photo'];
    public $translationModel = WhyUsTranslation::class;
}
