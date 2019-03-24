<?php

namespace Modules\WidgetsModule\Repository;

use Modules\WidgetsModule\Entities\WorkHours;


class WorkHoursRepository
{
    public function findAll()
    {
        $hours = WorkHours::all();

        return $hours;
    }

    public function find($id)
    {
        $hour = WorkHours::where('id', $id)->first();

        return $hour;
    }

    public function save($data)
    {
        return WorkHours::create($data);
    }

    public function update($data, $id)
    {
        $hour = WorkHours::find($id);
        $hour->update($data);

        return $hour;
    }

    public function delete($id)
    {
        return WorkHours::destroy($id);
    }
}
