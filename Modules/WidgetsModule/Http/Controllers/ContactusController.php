<?php

namespace Modules\WidgetsModule\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Routing\Controller;
use Modules\WidgetsModule\Entities\Contactus;

class ContactusController extends Controller
{
    /**
     * Display a listing of the resource.
     * @return Response
     */
    public function index()
    {
        $contacts = Contactus::all();

        return view('widgetsmodule::contact_us.index', ['contacts' => $contacts]);
    }


    /**
     * Display a custom message.
     * @return Response
     */
    public function show($id)
    {
        $contact = Contactus::where('id', $id)->first();

        return view('widgetsmodule::contact_us.show', ['contact' => $contact]);
    }
}
