<?php

namespace Modules\WidgetsModule\Entities;

use Illuminate\Database\Eloquent\Model;

class Subscripe extends Model
{
    protected $fillable = ['name', 'email', 'phone'];

    protected $table = 'subscription';
}
