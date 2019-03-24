<?php

namespace Modules\UserModule\Http\Controllers;

use Validator;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Hash;
use Modules\UserModule\Repository\UserRepository;

class UserLoginController extends Controller
{
    private $userRepo;

    public function __construct(UserRepository $userRepo) {
        $this->userRepo = $userRepo;
    }

    public function loginForm()
    {
        return view("frontmodule::pages.login");
    }


    public function register()
    {
        return view('frontmodule::pages.register');
    }

    public function signup(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'email' => 'required|email|unique:users',
            'password' => 'required|min:4'
        ]);

        if($validator->fails()){
            return redirect()->back()->with('error', 'Email has already been taken, and password must be at least 4 characters.');
        }

        $username = $request->name;
        $email = $request->email;
        $password = bcrypt($request->password);
        $data = array('name' => $username, 'password' => $password, 'email' => $email);

        $user = $this->userRepo->store($data);

        auth()->login($user);
        return redirect()->intended('/front');
    }

    function doUserLogin(Request $request)
    {

        $request->validate([
            'email' => 'required|email',
            'password' => 'required|min:4'
        ]);


        if (auth()->attempt(['email' => $request->email, 'password' => $request->password])) {

            return redirect()->intended('/front');
        } else {
            return redirect()->back()->with('pass_error', 'Email or password are wrong.');
        }
    }

    function userLogout()
    {
        auth()->logout();
        return redirect()->to('/front/login');
    }

    function profile($id)
    {
        $user = $this->userRepo->find($id);

        return view('frontmodule::pages.account', ['user' => $user]);
    }

    public function update_username_mail($id, Request $request)
    {
        $data = $request->except('_token');
        $this->userRepo->update_username($id, $data);

        return redirect()->back()->with('updated', 'updated');
    }

    public function update_password($id, Request $request)
    {
        $old_pass = $this->userRepo->find($id)->password;
        $request_current = $request->current;
        $request_password = bcrypt($request->password);

        if (Hash::check($request_current, $old_pass)) {
            $this->userRepo->update_password($id, array('password' => $request_password));

            return redirect()->back()->with('updated', 'updated');

        }else {
            return redirect()->back()->with('error', "Incorrect Password.");
        }
    }

}
