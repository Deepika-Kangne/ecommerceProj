<?php

namespace App\Http\Controllers\Login;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use App\Http\Requests\LoginRequest;

class LoginController extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;
    public function __construct()
    {
       
    }

    public function postLogin(LoginRequest $request)
    {
        $credentials = $request->only('email', 'password');
        // $credentials['user_type'] = 'admin';
        $remember_me = false;
        if ($request->has('remember_token')) {
            $remember_me = true;
        }
        if (Auth::attempt($credentials, $remember_me)) {
            // return redirect()->intended('admin');
            return view('admin.dashboard');
        } else {  
            \Session::flash('error','Incorrect email or password. Please try again.');
            return redirect()->back()->withInput();
        }
    }

    public function destroy()
    {
        auth()->logout();
        return view('login/login');
    }
}