<?php

namespace Modules\AdminModule\Repository;

use Modules\AdminModule\Entities\Admin;

class AdminRepository
{

    function findAll()
    {
        $admin = Admin::all();
        return $admin;
    }

    function save($admin, $role)
    {
        $admin['password']=bcrypt($admin['password']);
        $admin = Admin::create($admin);
        $admin->assignRole($role);
        return $admin;
    }

    function findById($id)
    {
        $admin = Admin::find($id);
        return $admin;
    }

    function findBy($key,$value){
        $admin = Admin::where($key,$value)->get();
        return $admin;
    }

    function update($adminData,$id, $role)
    {
        $admin = Admin::find($id);
        $admin->syncRoles($role);
        $data['name']=$adminData['name'];
        $data['email']=$adminData['email'];
        if($adminData['password'] && $adminData['password'] !=null ){
            $data['password']=bcrypt($adminData['password']);
        }else{
            $data['password']=$admin->password;
        }
        $admin = $admin->update($data);
        return $admin;
    }

    function delete($admin){
        Admin::destroy($admin->id);
    }

}
