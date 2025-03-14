<?php

namespace App\Http\Controllers\Dashboard;

use Illuminate\View\View;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Redirect;

class LoginController extends Controller
{

    public function loginForm(): View
    {
        return view('dashboard.auth.login');
    }

    public function checkLoginData(Request $request): RedirectResponse
    {
        $request->validate([
            "email" => "required|email",
            "password" => "required|min:5"
        ]);

        if(Auth::attempt(["email" => $request->email, "password" => $request->password])){
            return redirect()->intended('/dashboard/home');
        }

        return redirect()->route('login')->withErrors('error', 'Credentials are not correct, Please check again!');

    }



    public function logout(Request $request): RedirectResponse
    {
        Auth::logout();
        $request->session()->invalidate(); // destroy the session for the user, even if the user session has shopping items and theme dark
        $request->session()->regenerateToken(); // after logout regenerate and store new session ID to prevent CSRF if stolen
        return redirect()->route('login');
    }
}
