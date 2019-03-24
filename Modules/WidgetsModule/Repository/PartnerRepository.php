<?php

namespace Modules\WidgetsModule\Repository;

use File;
use Modules\WidgetsModule\Entities\Partner;


/**
 * PartnerRepository Class, will deal with all data of Partners Data,
 * Including its images and relations.
 */

class PartnerRepository
{

  public function find($id)
  {
    $partner = Partner::where('id', $id)->first();

    return $partner;
  }

  public function findAll()
  {
    $partners = Partner::all();

    return $partners;
  }
  

  public function find_limit()
  {
    $partners = Partner::limit(4)->get();

    return $partners;
  }

  public function save($partnerData)
  {
    $partner = Partner::create($partnerData);
    return $partner;
  }

  public function delete($partnerData)
  {
    if ($partnerData->photo) {
      $file_path = public_path() . '/images/partners/' . $partnerData->photo;

      File::delete($file_path);
    }

    Partner::destroy($partnerData->id);
  }

  public function update($id, $data)
  {
    $partner = Partner::find($id);

    $partner->update($data);

    return $partner;
  }
}
