<?php

namespace App\Http\Controllers\Auth;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\LoginRequest;
use App\Http\Requests\OtpRequest;
use App\Http\Requests\RegisterRequest;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use Illuminate\Auth\Events\Registered;
use Illuminate\Foundation\Auth\EmailVerificationRequest;

class AuthController extends Controller
{
  public function index(){
    return view('components.auth.login');
  }

  public function authenticated(LoginRequest $request){

    $credentials = $request->only('email','password');

    if(Auth::attempt($credentials)){

      $request->session()->regenerate();

      return redirect()->intended(route('dashboard'));
    }

    return back()->withErrors('The provided credentials do not match our records.')->onlyInput('email');

  }

  public function register(){
    return view('components.auth.register');
  }

  public function store_user(RegisterRequest $request){

    $user = User::create([
          'username' => $request->username,
          'email' => $request->email,
          'password' => Hash::make($request->password)
        ]);

    event(new Registered($user));

    Auth::login($user);

    return redirect(route('verification.notice'))->withSuccess('Your account has been registered!');
  }

  public function email_verify(){
    return view('auth.verify-email');
  }

  public function verification(EmailVerificationRequest $request)
  {
    $request->fulfill();

    return redirect('/login');
  }

  public function logout(Request $request){
    Auth::logout();

    $request->session()->invalidate();

    $request->session()->regenerateToken();

    return redirect('/');
  }
}
