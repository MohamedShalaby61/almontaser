<?php

namespace Modules\WidgetsModule\Repository;

use File;
use Modules\WidgetsModule\Entities\Team\Team;


/**
 * SliderRepository Class, will deal with all data of Slider,
 * Including its images and relations.
 */

class TeamRepository
{
  public function find($id)
  {
    $team = Team::where('id', $id)->first();

    return $team;
  }

  public function findAll()
  {
    $teams = Team::with('translations')->get();

    return $teams;
  }

  public function find_limit()
  {
    $teams = Team::with('translations')->limit(4)->get();

    return $teams;
  }

  public function save($data)
  {
    $team = Team::create($data);

    return $team;
  }

  public function update($id, $data, $data_trans)
  {
    $team = Team::find($id);
    $team->update($data);

    foreach (\LanguageHelper::getLang() as $lang) {
      $team->translate('' . $lang->lang)->name = $data_trans[$lang->lang]['name'];
      $team->translate('' . $lang->lang)->description = $data_trans[$lang->lang]['description'];
      $team->translate('' . $lang->lang)->job_title = $data_trans[$lang->lang]['job_title'];
      $team->translate('' . $lang->lang)->meta_desc = $data_trans[$lang->lang]['meta_desc'];
      $team->translate('' . $lang->lang)->meta_keywords = $data_trans[$lang->lang]['meta_keywords'];
      $team->translate('' . $lang->lang)->slug = $data_trans[$lang->lang]['slug'];
      $team->translate('' . $lang->lang)->meta_title = $data_trans[$lang->lang]['meta_title'];

      $team->save();
    }
    return $team;

  }

  public function delete($team)
  {
    if ($team->photo) {
      $file_path = public_path() . '/images/team/' . $team->photo;

      File::delete($file_path);
    }

    Team::destroy($team->id);
  }

}
