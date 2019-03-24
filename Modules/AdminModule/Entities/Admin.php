<?php

namespace Modules\AdminModule\Entities;

use Spatie\Permission\Traits\HasRoles;
use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;


class Admin extends Authenticatable
{
    use HasRoles;
    use Notifiable;

    protected $guard = 'admin';
    protected $guard_name = 'admin';

    protected $fillable = [
        'name', 'email', 'password','username',
    ];

    protected $hidden = [
        'password', 'remember_token',
    ];
}
