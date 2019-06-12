<?php

namespace Modules\AdminModule\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;


class AdminLoginController extends Controller
{
    function showLoginForm()
    {
        if (auth()->guard('admin')->check()) {
            return redirect()->intended('/admin-panel/');
        }else{
            return view('adminmodule::admin_login.login');
        }
    }

    function doAdminLogin(Request $request)
    {

        $this->validate($request, [
            'email' => 'required|email',
            'password' => 'required|min:4'
        ]);

        $rememberme = request()->has('rememberme') ? 1 : 0;
        if (auth()->guard('admin')->attempt(['email' => $request->email, 'password' => $request->password],$rememberme)) {

            return redirect()->intended('/admin-panel/');
        }

        return redirect()->back()->withErrors(['error' => 'البريد الالكتروني او كلمة المرور غير صحيحة']);
    }

    function adminLogout()
    {
        auth()->guard('admin')->logout();
        return redirect()->to('admin-panel');
    }

}
