<?php

namespace Modules\VideoModule\Entities;

use Illuminate\Database\Eloquent\Model;

class VideoTranslation extends Model
{
    protected $fillable = ['title'];
    public $timestamps = false;
    protected $table = 'video_translation';
}
