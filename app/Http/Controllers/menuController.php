<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;


use Illuminate\Http\Request;

class menuController extends Controller
{
    public function create(){
        return view('create');
    }

    public function store(Request $request){

        $data =  DB::table('menus')->insert([
            "namaMenu" => $request->input('namaMenu'),
            "harga" => $request->input('harga'),
            "deskripsi" => $request->input('deskripsi'),
            "role" => $request->input('role')
          ]);

          return redirect()->route('landingPage');
    }
  
}