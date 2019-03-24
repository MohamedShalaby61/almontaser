<?php

namespace Modules\AdminModule\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;


class AdminLoginController extends Controller
{
    function showLoginForm()
    {
        return view('adminmodule::admin_login.login');
    }

    function doAdminLogin(Request $request)
    {

        $this->validate($request, [
            'email' => 'required|email',
            'password' => 'required|min:4'
        ]);


        if (auth()->guard('admin')->attempt(['email' => $request->email, 'password' => $request->password])) {

            return redirect()->intended('/admin-panel/dashboard');
        }

        return redirect()->back()->withErrors(['error' => 'Email or password are wrong.']);
    }

    function adminLogout()
    {
        auth()->guard('admin')->logout();
        return redirect()->to('admin-panel');
    }

}
