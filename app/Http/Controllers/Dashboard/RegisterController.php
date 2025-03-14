<?php

namespace App\Http\Controllers\Dashboard;

use App\Models\User;
use App\Mail\VerifyEmail;
use Illuminate\View\View;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Carbon\Carbon;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use Illuminate\Http\RedirectResponse;

class RegisterController extends Controller
{
    public function registerForm(): View
    {
        return view('dashboard.auth.register');
    }

    public function submitRegisterData(Request $request): RedirectResponse
    {
        $request->validate([
            "name" => 'required|string',
            "email" => 'required|email|unique:users,email',
            "password" => 'required|confirmed|min:5'
        ]);

        $verificationToken = Str::random(64);

        $user = User::create([
            "name" => $request->name,
            "email" => $request->email,
            "password" => Hash::make($request->password),
            "verification_token" => $verificationToken,
        ]);

        // URL Verification 
        $verificationUrl = url('dashboard/verify-email/' . $verificationToken);

        Mail::send('dashboard.auth.email_verify', ['user' => $user, 'url' => $verificationUrl], function ($message) use ($user) {
            $message->to($user->email)
            ->subject('Verify Your Email Address');
        });
        
        return redirect()->route('login')
            ->with('success', 'You have been register a new account successfully please check your verification Email!');
    }

    public function verifyEmail($token): View
    {
        $user = User::where('verification_token', $token)->first();

        if(!$user){
            return view('dashboard.auth.login')->with('error', "This User not found!");
        }

        $user->update([
            "email_verified_at" => Carbon::now(),
            "verification_token" => null
        ]);

        return view('dashboard.auth.login')->with('success-verify', 'Email verified successfully! You can now log in.');
    }
}
