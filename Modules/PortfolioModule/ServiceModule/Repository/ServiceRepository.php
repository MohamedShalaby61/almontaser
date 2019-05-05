<?php

namespace Modules\ServiceModule\Repository;

use File;
use Modules\ServiceModule\Entities\ServiceMod\Service;


class ServiceRepository
{
    public function find($id)
    {
        $service = Service::where('id', $id)->first();

        return $service;
    }

    /**
     * Return number of services.
     *
     * @return  [type]  [return description]
     */
    public function NumOfServices()
    {
        return Service::all()->count();
    }

    public function findAll()
    {
        $services = Service::with(['service_category', 'translations'])->get();

        return $services;
    }

    public function save($data)
    {
        $service = Service::create($data);

        return $service;
    }

    public function update($id, $data, $dataTrans)
    {
        $service = Service::find($id);
        $service->update($data);

        foreach (\LanguageHelper::getLang() as $lang) {

            if (isset($dataTrans[$lang->lang]['title'])) {
                $service->translate('' . $lang->lang)->title = $dataTrans[$lang->lang]['title'];
            }
            if (isset($dataTrans[$lang->lang]['description'])) {

                $service->translate('' . $lang->lang)->description = $dataTrans[$lang->lang]['description'];
            }

            if (isset($dataTrans[$lang->lang]['meta_title'])) {
                $service->translate('' . $lang->lang)->slug = $dataTrans[$lang->lang]['slug'];
                $service->translate('' . $lang->lang)->meta_title = $dataTrans[$lang->lang]['meta_title'];
                $service->translate('' . $lang->lang)->meta_desc = $dataTrans[$lang->lang]['meta_desc'];
                $service->translate('' . $lang->lang)->meta_keywords = $dataTrans[$lang->lang]['meta_keywords'];
            }

            $service->save();
        }
        return $service;
    }

    public function delete($data)
    {
        if ($data->photo) {
            $file_path = public_path() . '/images/service/' . $data->photo;
            File::delete($file_path);
        }

        Service::destroy($data->id);
    }
}

