<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class landingPageController extends Controller
{
    public function landingPage(){
        $data = DB::table('menus')->get();

        return view('landingPage', [
            'data' => $data
        ]);
    }
}
