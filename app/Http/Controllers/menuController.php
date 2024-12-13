<?php

namespace App\Http\Controllers;

use App\Models\Menu;
use Illuminate\Support\Facades\DB;


use Illuminate\Http\Request;

class menuController extends Controller
{
    public function create(){
        return view('create');
    }

    public function store(Request $request){
        // dd($request->all());

        $data =  DB::table('menus')->insert([
            "namaMenu" => $request->input('namaMenu'),
            "harga" => $request->input('harga'),
            "deskripsi" => $request->input('deskripsi'),
            "role" => $request->input('role'),
            "kategori_id" => $request->input('kategori_id')
          ]);

          return redirect()->route('landingPage');
    }

    public function update(Request $request, $id) {
        $menus = Menu::find($id);

        $menus->namaMenu = $request->input('namaMenu');
        $menus->harga = $request->input('harga');
        $menus->deskripsi = $request->input('deskripsi');
        $menus->role = $request->input('role');
        // $menus->kategori_id = $request->input('kategori_id');

        $menus->update();

        return redirect()->route('landingPage');
    }

    public function edit($id) {
        return view('edit', ['menus'=>Menu::find($id)]);
    }


    public function delete($id) {
            $data = DB::table('menus')
                ->where('id', $id)
                ->delete();

                return redirect()->route('landingPage');
    }

    public function show($category)
    {
        $menus = Menu::where('kategori_id', $category)->get();

        // Kirim data ke view
        return redirect()->route('landingPage', [
            'data' => $menus
        ]);

    }
}