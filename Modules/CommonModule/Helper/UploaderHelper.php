<?php

namespace Modules\CommonModule\Helper;

use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;

trait UploaderHelper
{
    /**
     * upload file through $request, Compress it.
     * to the server in public folder: /public/images/{categoryNameFolder}.
     * if_not_exist : create it with 775 permission.
     *
     * @param Request $request
     * @return void
     */
    public function upload($imageFromRequest, $imageFolder, $resize = false)
    {
        $fileName = time() . $imageFromRequest->getClientOriginalName();
        $location = public_path('images/' . $imageFolder . '/' . $fileName);

        # Make folder if not exist.
        if (!file_exists(public_path('images/'.$imageFolder))) {
            mkdir(public_path('images/'.$imageFolder), 0777, true);
            if($resize == true) mkdir(public_path('images/'.$imageFolder.'/thumb'), 0777, true);
        }

        $image = Image::make($imageFromRequest);
        $image->save($location, 30);

        # Optional Resize.
        if ($resize == true) {
            $image->resize(100, 70);
            $newlocation = public_path('images/' . $imageFolder . '/thumb' . '/' . $fileName);
            $image->save($newlocation, 40);
        }


        return $fileName;
    }

    public function uploadFile($fileFromRequest,$fileFolder){

        $fileName = time().'.'.$fileFromRequest->getClientOriginalExtension();
        $location = public_path('files/'. $fileFolder . '/');
        $fileFromRequest->move($location, $fileName);

        return $fileName;

    }

    /**
     * Call upload() func to upload photo album.
     *
     * @param [type] $photos
     * @return void
     */
    public function uploadAlbum($photos, $folder = 'cars')
    {
        foreach ($photos as $album) {
            $imageName = $this->upload($album, $folder);
            $car_photos[] = $imageName;
        }
        return $car_photos;
    }
}
