<?php

namespace Modules\PhotoAlbumModule\Entities;

use Illuminate\Database\Eloquent\Model;

class PhotoTranslation extends Model
{
    protected $fillable = ['title'];
    public $timestamps = false;
    protected $table = 'photo__translations';

}
