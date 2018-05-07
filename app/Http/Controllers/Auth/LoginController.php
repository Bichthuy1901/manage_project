<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use Auth;

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
    //protected $redirectTo = '/home';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    public function username()
    {
        return 'name';
    }

    public function login(Request $request)
    {
        $data = [
            'name' => $request->name,
            'password' => $request->password,
        ];

        $auth = Auth::attempt($data);
        
        if ($auth) {
            if (Auth::user()->userable_type == 'App/Models/Student') {
                return redirect()->route('student.project_request.create');
            }

            if (Auth::user()->userable_type == 'App/Models/Admin') {
                return redirect()->route('dashboard');
            }

            if (Auth::user()->userable_type == 'App/Models/Trainer') {
                return redirect()->route('trainer');
            }
        }
        return redirect()->back();
    }
}
