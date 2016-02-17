<?php

namespace App\Http\Controllers\Auth;

use App\User;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\ThrottlesLogins;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Registration & Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users, as well as the
    | authentication of existing users. By default, this controller uses
    | a simple trait to add these behaviors. Why don't you explore it?
    |
    */

    use AuthenticatesUsers, ThrottlesLogins;

    /**
     * Where to redirect users after login / registration.
     *
     * @var string
     */
    protected $redirectTo = '/';

    /**
     * @var User
     */
    private $user;

    /**
     * Create a new authentication controller instance.
     *
     * @param User $user
     */
    public function __construct(User $user)
    {
        $this->middleware('guest', ['except' => 'getLogout']);
        $this->user = $user;
    }

    public function postLogin(Request $request)
    {
        $this->validate($request, ['name' => 'required']);

        $credentials = $request->only('name');

        if ($user = $this->user->validate($credentials)) {
            Auth::login($user);

            return redirect()->intended($this->redirectPath());
        }

        return $this->sendFailedLoginResponse($request);
    }
}
