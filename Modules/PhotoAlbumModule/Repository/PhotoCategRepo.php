<?php

namespace Modules\PhotoAlbumModule\Repository;
use Modules\PhotoAlbumModule\Entities\PhotoCateg;

class PhotoCategRepo{
    public function find($id){
        $photoCateg=PhotoCateg::where('id',$id)->first();
        return $photoCateg;
    }
    public function findAll(){
        $photoCategs=PhotoCateg::with(['translations'])->get();
        return $photoCategs;
    }
    public function save($categdata){
        $photoCateg=PhotoCateg::create($categdata);
        return $photoCateg;
    }

    public function update($id,$photocateg){
        $photoCateg=PhotoCateg::findorFail($id)->first();
        $photoCateg->update($photocateg);
        return $photoCateg;
    }

    public function delete($id){
        PhotoCateg::destroy($id);

    }
}