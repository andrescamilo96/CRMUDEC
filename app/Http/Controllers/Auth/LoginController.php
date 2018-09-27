<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;

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
    /*protected $redirectTo = '/home';*/

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public $maxAttempts = 3; // change to the max attemp you want.
    public $decayMinutes = 1; // change to the minutes you want.

    public function __construct()
    {
         $this->middleware('guest')->except('logout');
    }

    public function redirectPath()
    {
        if(auth()->user()->hasRoles(['admin'])){
            return'/admin';
        }
        if(auth()->user()->hasRoles(['empresa'])){
            return  '/indexempresa';
        }
        if(auth()->user()->hasRoles(['graduado'])){
            return'/home';
        }
    }
}
