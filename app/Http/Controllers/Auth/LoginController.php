<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = '/home';
    protected $loginPath = '/home';
    /**
     * Create a new controller instance.
     *
     * @return void
     */
  



public function authenticate(Request $request)
{
    $credentials = $request->only('email','password');
    
    if(Auth::attempt($credentials)){

        return redirect()->intended('/');

    }
    else
    {
        return view('login');
    }
}

protected function guard()
{
    return Auth::guard();
}

public function loginview()
{
    return view('login');
}

}
