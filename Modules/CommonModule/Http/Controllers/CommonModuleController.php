<?php

namespace Modules\CommonModule\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Lang;
use Illuminate\Support\Facades\Session;
// use Modules\CommonModule\Helper\UploaderHelper;
use Modules\CommonModule\Helper\arabicdate;
use Modules\CommonModule\Helper\LanguageHelper;
use Modules\CommonModule\Entities\Apps;

class CommonModuleController extends Controller
{
    use arabicdate;

    /**
     * Display a listing of the resource.
     * @return Response
     */
    public function index()
    {
        /**
         * use the facade we created.
         * LanguageHelper::getLang();
         */
        $arabic_date = $this->ArabicDate();

        return view('commonmodule::index', ['date' => $arabic_date]);
    }

    public function cat()
    {
        /**
         * use the facade we created.
         * LanguageHelper::getLang();
         */

        return view('commonmodule::index');
    }

    /**
     * Set the Localization of the Content.
     *
     * @return void
     */
    public function setLocal($lang)
    {
        Session::put('applocale', $lang);
        return redirect()->back();
    }
    public function set_lang($lang)
    {
        Session::put('aside_lang', $lang);
        return redirect()->back();
    }

    /**
     * Activate Languages From DB.
     *
     * @param   Request  $request  [$request description]
     *
     * @return  [type]             [return description]
     */
    public function activateLang(Request $request)
    {
        $ar_lang = $request->get('arActivate');
        $en_lang = $request->get('enActivate');

        LanguageHelper::activateLangs($ar_lang, $en_lang);

        return redirect()->to('/admin-panel');
    }

    /**
     * Activate Apps From DB.
     *
     * @param   Request  $request  [$request description]
     *
     * @return  [type]             [return description]
     */
    public function activateApp(Request $request)
    {
        Apps::where('title', 'service')->update(    ['active'   =>    $request->get("service_Activate")]);
        Apps::where('title', 'project')->update(    ['active'   =>    $request->get("project_Activate")]);
        Apps::where('title', 'product')->update(    ['active'   =>    $request->get("product_Activate")]);
        Apps::where('title', 'blog')->update(       ['active'   =>    $request->get("blog_Activate")]);
        Apps::where('title', 'video')->update(      ['active'   =>    $request->get("video_Activate")]);
        Apps::where('title', 'photo')->update(      ['active'   =>    $request->get("photo_Activate")]);
        Apps::where('title', 'slider')->update(     ['active'   =>    $request->get("slider_Activate")]);
        Apps::where('title', 'team')->update(       ['active'   =>    $request->get("team_Activate")]);
        Apps::where('title', 'testimonial')->update(['active'   =>    $request->get("testimonial_Activate")]);
        Apps::where('title', 'partner')->update(    ['active'   =>    $request->get("partner_Activate")]);
        Apps::where('title', 'pages')->update(      ['active'   =>    $request->get("pages_Activate")]);
        Apps::where('title', 'workhours')->update(  ['active'   =>    $request->get("workhours_Activate")]);
        Apps::where('title', 'contactus')->update(  ['active'   =>    $request->get("contactus_Activate")]);
        Apps::where('title', 'bookings')->update(   ['active'   =>    $request->get("bookings_Activate")]);
        Apps::where('title', 'why_us')->update(   ['active'   =>    $request->get("why_us_Activate")]);

        return redirect()->to('/admin-panel');
    }

    /**
     * Redirect user to the activation view.
     *
     * @return  [type]  [return description]
     */
    public function activate()
    {
        $langs = LanguageHelper::getAllLangs();
        return view('commonmodule::Language', ['langs' => $langs]);
    }

    public function apps()
    {
        $apps = Apps::all();

        return view('commonmodule::apps', ['apps' => $apps]);
    }

    /**
     * Show the form for creating a new resource.
     * @return Response
     */
    public function create()
    {
        return view('commonmodule::create');
    }

    /**
     * Store a newly created resource in storage.
     * @param  Request $request
     * @return Response
     */
    public function store(Request $request)
    {
    }

    /**
     * Show the specified resource.
     * @return Response
     */
    public function show()
    {
        return view('commonmodule::show');
    }

    /**
     * Show the form for editing the specified resource.
     * @return Response
     */
    public function edit()
    {
        return view('commonmodule::edit');
    }

    /**
     * Update the specified resource in storage.
     * @param  Request $request
     * @return Response
     */
    public function update(Request $request)
    {
    }

    /**
     * Remove the specified resource from storage.
     * @return Response
     */
    public function destroy()
    {
    }
}
