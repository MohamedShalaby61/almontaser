<?php

namespace Modules\WidgetsModule\Entities;

use Illuminate\Database\Eloquent\Model;

class WorkHours extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'work_hours';

    protected $fillable = ['day', 'from', 'to'];
}
