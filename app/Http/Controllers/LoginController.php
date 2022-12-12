<?php

namespace App\Http\Controllers;

use App\Models\DetailUser;
use App\Models\User;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Laravel\Socialite\Facades\Socialite; //tambahkan library socialite


class LoginController extends Controller
{
    public function index()
    {
        return view("login");
    }

    public function authenticate(Request $request)
    {
        $credentials = $request->validate([
            'email' => 'required|email',
            'password' => ['required'],
        ]);

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();

            if (auth()->user()->role == "user") {
                return redirect()->route('home');
            } else {
                Auth::logout();
                $request->session()->invalidate();
                $request->session()->regenerateToken();

                return back()->withErrors([
                    'failed' => 'login from admin login',
                ]);
            }
        }

        return back()->withErrors([
            'failed' => 'email & password did not match',
        ])->onlyInput('email');
    }

    public function logout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/login');
    }

    //tambahkan script di bawah ini
    public function redirectToProvider()
    {
        return Socialite::driver('google')->redirect();
    }

    public function handleProviderCallback(Request $request)
    {
        try {
            $user_google    = Socialite::driver('google')->user();
            $user           = User::where('email', $user_google->getEmail())->first();

            //jika user ada maka langsung di redirect ke halaman home
            //jika user tidak ada maka simpan ke database
            //$user_google menyimpan data google account seperti email, foto, dsb
            // dd($user_google,);
            if ($user != null) {
                auth()->login($user, true);
                return redirect()->route('home');
            } else {
                $create = User::Create([
                    'email'             => $user_google->getEmail(),
                    'name'              => $user_google->getName(),
                    'password'          => 0,
                    'role'              => "user",
                    'email_verified_at' => now()
                ]);

                $avatar = rtrim($user_google->getAvatar(), "=s96-c");

                auth()->login($create, true);

                return redirect()->route('sign_up_step_1_view')->with('user_id', $create['id'])->with('avatar', $avatar);
            }
        } catch (Exception $e) {
            return redirect()->route('login');
        }
    }
}
