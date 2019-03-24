<?php

namespace Modules\VideoModule\Repository;

use Modules\VideoModule\Entities\Video;


class VideoRepo
{

  public function find($id)
  {
    $vid = Video::where('id', $id)->first();

    return $vid;
  }


  public function findAll()
  {
    $videos = Video::with(['vidcateg', 'translations'])->get();
    
    return $videos;
  }

  public function save($vidData)
  {
    $vid = Video::create($vidData);

    return $vid;
  }

  public function delete($id)
  {
    Video::destroy($id);
  }

  public function update($id, $data)
  {
    $vid = Video::where('id', $id)->first();

    $vid->update($data);

    return $vid;
  }

}
