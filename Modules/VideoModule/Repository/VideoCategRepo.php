<?php

namespace Modules\VideoModule\Repository;

use Modules\VideoModule\Entities\VideoCateg;

class VideoCategRepo
{

  public function find($id)
  {
    $categ = VideoCateg::where('id', $id)->first();

    return $categ;
  }

  public function findAll()
  {
    $categs = VideoCateg::with(['translations'])->get();

    return $categs;
  }

  public function save($categData)
  {
    $categ = VideoCateg::create($categData);

    return $categ;
  }

  public function update($id, $vidCateg)
  {
    $categ = VideoCateg::findOrFail($id)->first();

    $categ->update($vidCateg);

    return $categ;
  }

  public function delete($id)
  {
    VideoCateg::destroy($id);
  }

}
