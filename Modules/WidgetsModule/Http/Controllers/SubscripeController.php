<?php

namespace Modules\WidgetsModule\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Routing\Controller;
use Modules\WidgetsModule\Entities\Subscripe;

class SubscripeController extends Controller
{
    /**
     * Display a listing of the resource.
     * @return Response
     */
    public function index()
    {
        $subs = Subscripe::all();

        return view('widgetsmodule::subscripe.index', ['subs' => $subs]);
    }
}
