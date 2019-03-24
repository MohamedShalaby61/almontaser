<?php

namespace Modules\PhotoAlbumModule\Repository;

use Modules\PhotoAlbumModule\Entities\Photo;


class PhotoRepo{

     public function find($id){
         $photo=Photo::where("id",$id)->first();
         return $photo;
     }

    public function findAll(){
        $photos=Photo::with(["translations","photocateg"])->get();
        return $photos;
    }

    public function save($photo){
       $photosave=Photo::create($photo);

       return $photosave;
        }

    public function delete($id){

        Photo::destroy($id);
    }

    public function update($id,$data){

        $Photo = Photo::find($id)->update($data);
        $Photo = Photo::find($id);

        return $Photo;
    }


}