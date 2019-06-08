<?php

namespace Modules\WidgetsModule\Repository;

use Modules\WidgetsModule\Entities\Contactus;


class ContactusRepository
{

    

    public function findAll()
    {
        $contacts = Contactus::all();     

        return  $contacts;
    }

    public function save($data)
    {
        return Contactus::create($data);
    }  

    

   
}
