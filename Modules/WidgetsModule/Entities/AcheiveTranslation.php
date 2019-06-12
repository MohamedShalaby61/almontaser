<?php

namespace Modules\WidgetsModule\Entities;

use Illuminate\Database\Eloquent\Model;

class acheiveTranslation extends Model
{
    protected $fillable = ['title','number','content'];
    public $timestamps = false;
    protected $table = 'acheive_translation';
}
 