<?php

namespace Modules\PhotoAlbumModule\Entities;

use Dimsav\Translatable\Translatable;
use Illuminate\Database\Eloquent\Model;

class PhotoCateg extends Model
{
    use Translatable;

    protected $table = 'photo_categs';
    public $translatedAttributes = ['title'];
    public $translationModel = PhotoCategTranslation::class;

    public function photocateg()
    {
        return $this->hasMany(Photo::class);
    }
}
