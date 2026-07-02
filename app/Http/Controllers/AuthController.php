<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Laravel\Socialite\Facades\Socialite;

class AuthController extends Controller
{

    /*
    |--------------------------------------------------------------------------
    | REGISTER
    |--------------------------------------------------------------------------
    */

    public function register(Request $request)
    {
        $request->validate([

            'name' => 'required|string|min:2|max:100',

            'email' => 'required|email|unique:users,email',

            'password' => 'required|min:6|confirmed',

        ]);

        $user = User::create([

            'name' => $request->name,

            'email' => $request->email,

            'password' => Hash::make($request->password),

            'role' => 'user',

        ]);

        Auth::login($user);

        $request->session()->regenerate();

        return redirect('/')
            ->with('success', 'Account Created Successfully');
    }


    /*
    |--------------------------------------------------------------------------
    | LOGIN
    |--------------------------------------------------------------------------
    */

    public function login(Request $request)
    {
        $request->validate([

            'login_email' => 'required|email',

            'password' => 'required|min:6',

        ]);

        $credentials = [

            'email' => $request->login_email,

            'password' => $request->password,

        ];

        $remember = $request->has('remember');

        if (Auth::attempt($credentials, $remember)) {

            $request->session()->regenerate();

            return redirect('/')
                ->with('success', 'Login Successful');
        }

        return back()->withErrors([

            'login' => 'Invalid Email or Password'

        ]);
    }


    /*
    |--------------------------------------------------------------------------
    | LOGOUT
    |--------------------------------------------------------------------------
    */

    public function logout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/')
            ->with('success', 'Logged Out Successfully');
    }


    /*
    |--------------------------------------------------------------------------
    | GOOGLE LOGIN
    |--------------------------------------------------------------------------
    */

    public function googleRedirect()
    {
        return Socialite::driver('google')->redirect();
    }

    public function googleCallback(Request $request)
    {
        $googleUser = Socialite::driver('google')
            ->stateless()
            ->user();

        $user = User::updateOrCreate(

            [
                'email' => $googleUser->email
            ],

            [
                'name' => $googleUser->name,

                'avatar' => $googleUser->avatar,

                'password' => bcrypt('dummy123456'),

                'role' => 'user',
            ]
        );

        Auth::login($user);

        $request->session()->regenerate();

        return redirect('/')
            ->with('success', 'Google Login Successful');
    }


    /*
    |--------------------------------------------------------------------------
    | FACEBOOK LOGIN
    |--------------------------------------------------------------------------
    */

    public function facebookRedirect()
    {
        return Socialite::driver('facebook')->redirect();
    }

    public function facebookCallback(Request $request)
    {
        $facebookUser = Socialite::driver('facebook')
            ->stateless()
            ->user();

        $email = $facebookUser->email
            ?? $facebookUser->id . '@facebook.com';

        $user = User::updateOrCreate(

            [
                'email' => $email
            ],

            [
                'name' => $facebookUser->name,

                'avatar' => $facebookUser->avatar,

                'password' => bcrypt('dummy123456'),

                'role' => 'user',
            ]
        );

        Auth::login($user);

        $request->session()->regenerate();

        return redirect('/')
            ->with('success', 'Facebook Login Successful');
    }
}