<?php

namespace Modules\PhotoAlbumModule\Entities;

use Illuminate\Database\Eloquent\Model;

class PhotoCategTranslation extends Model
{
    protected $fillable = ['title'];
    public $timestamps = false;
    protected $table = 'photo_categ_translations';
}
