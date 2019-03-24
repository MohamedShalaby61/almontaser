<?php

namespace Modules\WidgetsModule\Entities;

use Illuminate\Database\Eloquent\Model;

class Contactus extends Model
{
    protected $fillable = ['name', 'email', 'phone', 'message'];

    protected $table = 'contact_us';
}
