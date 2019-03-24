<?php

namespace Modules\VideoModule\Entities;

use Illuminate\Database\Eloquent\Model;

class VideoCategTranslation extends Model
{
    protected $fillable = ['title'];
    public $timestamps = false;
    protected $table = 'videocateg_translation';
}
