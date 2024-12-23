<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
  public function login(){
    return view('auth.login');
  }
  public function loginProses(Request $request){
    $credentials = $request->validate([
      'username' => ['required'],
      'password' => ['required'],
  ]);

  if (Auth::attempt($credentials)) {
      $request->session()->regenerate();

      return redirect()->route('landingPage');
  }

  return back()->withErrors([
      'email' => 'The provided credentials do not match our records.',
  ])->onlyInput('username');
    
    return view('landingPage');
  }
}
