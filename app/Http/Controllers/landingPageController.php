<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class LandingPageController extends Controller
{

    
        public function landingPage()
        {
            $data = DB::table('menus')->get();
    
            return view('landingPage', [
                'data' => $data
            ]);
        }
    
        public function filterMenu($category)
        {
            if ($category === 'all') {
                $data = DB::table('menus')->get();
            } else {
                $data = DB::table('menus')->where('kategori_id', $category)->get();
            }
    
            return view('landingPage', [
                'data' => $data,
                'category' => $category
            ]);
        }
    }
    

