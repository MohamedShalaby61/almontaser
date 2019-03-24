<?php

namespace Modules\PhotoAlbumModule\Entities;
use Dimsav\Translatable\Translatable;
use Illuminate\Database\Eloquent\Model;


class Photo extends Model
{
    use Translatable;

    protected $table = 'photos';
    public $translatedAttributes = ['title'];
    protected $fillable = ['photo', 'photo_categ_id'];
    public $translationModel = PhotoTranslation::class;

    public function photocateg()
    {
        return $this->belongsTo(PhotoCateg::class);
    }
}

