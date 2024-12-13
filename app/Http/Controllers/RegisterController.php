<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class RegisterController extends Controller
{
    public function register(){
        return view('auth.register');
      }
      public function landingPage(){
        return view('landingPage');
      }
      public function registerProses(Request $request){
        $data = DB::table('users')->insert([
          "username" => $request->input('username'),
          "email" => $request->input('email'),
          "password" => bcrypt($request->input('password'))
        ]);

        return view('auth.login');
      }
}
