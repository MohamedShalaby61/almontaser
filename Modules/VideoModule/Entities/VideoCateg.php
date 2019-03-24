<?php

namespace Modules\VideoModule\Entities;

use Dimsav\Translatable\Translatable;
use Modules\VideoModule\Entities\Video;
use Illuminate\Database\Eloquent\Model;
use Modules\VideoModule\Entities\VideoCategTranslation;

class VideoCateg extends Model
{
    use Translatable;

    protected $table = 'videocategs';
    protected $fillable = ['created_by'];
    public $translatedAttributes = ['title'];
    public $translationModel = VideoCategTranslation::class;

    public function vidcateg()
    {
        return $this->hasMany(Video::class);
    }
}
