<?php

namespace Modules\UserModule\Repository;

use Modules\UserModule\Entities\User;


class UserRepository
{
    public function find($id)
    {
        $user = User::where('id', $id)->first();

        return $user;
    }

    public function findAll()
    {
        $users = User::all();

        return $users;
    }

    public function store($data)
    {
        $user = User::create($data);

        return $user;
    }

    public function update_username($id, $data)
    {
        $user = User::where('id', $id)->first();
        $user->update($data);

        return $user;
    }

    public function update_password($id, $data)
    {
        $user = User::where('id', $id)->first();
        $user->update($data);

        return $user;
    }
}
