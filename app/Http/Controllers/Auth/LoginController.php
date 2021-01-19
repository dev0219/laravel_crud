<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use App\User;
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
    
    // protected $redirectTo = RouteServiceProvider::HOME;
    // protected $redirectTo =  '/admin';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
   
    public function __construct()
    {
        // if(Auth::user()) {
        //     $this->redirectTo = '/admin';
        // }
        
        // $this->redirectTo = '/partner';
        // error_log("------------------------------------------------------");
        // dd(Auth::user()->email);
        // print_r(Auth::user());
        $this->middleware('guest')->except('logout');
        
    }

    // Login
    public function showLoginForm(){
       $pageConfigs = ['bodyCustomClass' => 'login-bg', 'isCustomizer' => false];
  
        return view('/auth/login', [
            'pageConfigs' => $pageConfigs
        ]);
      }
      /**
     * Log the user out of the application.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function logout(Request $request)
    {
        $this->guard()->logout();

        error_log("********************* this is the logout *************************");

        $request->session()->invalidate();

        return $this->loggedOut($request) ?: redirect('/login');
    }
}
