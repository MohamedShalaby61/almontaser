<?php

namespace Modules\WidgetsModule\Entities;

use Illuminate\Database\Eloquent\Model;

class Partner extends Model
{
    protected $fillable = ['link', 'photo', 'created_by'];
}
