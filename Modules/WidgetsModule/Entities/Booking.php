<?php

namespace Modules\WidgetsModule\Entities;

use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    protected $fillable = ['name', 'phone', 'message', 'date'];

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'bookings';
}
