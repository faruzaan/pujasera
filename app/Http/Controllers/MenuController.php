<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class MenuController extends Controller
{
    public function index()
    {
    	$data['menu'] = \App\Menu::all();
    	return view('menu/index')->with($data);
    }
    public function create()
    {
    	return view('menu/form');
    }
    public function store(Request $request)
    {
    	$input = $request->all();
    	$menu = DB::table('tb_menu')->orderBy('id_menu','desc')->take(1)->get();
        $id = $menu[0]->id_menu;
        $int1 = substr($id,3,1);
        $int2 = substr($id,2,1);
        $int3 =substr($id,1,1);
        $int1++;
        if ($int1 >= 9) {
            $int2++;
        }
        if ($int2 >= 9) {
            $int3++;
        }
        $id = 'M'.$int3.$int2.$int1;
    	if ($request->hasFile('gambar_menu') && $request->file('gambar_menu')->isValid())
        {
            $filename = $id.".".$request->file('gambar_menu')->getClientOriginalExtension();
            $request->file('gambar_menu')->storeAs('',$filename);
            $input['gambar_menu'] = $filename;
        }

    	$status = \App\Menu::create([
            'id_menu' => $id,
            'id_gerai' => $request['id_gerai'],
            'nama_menu' => $request['nama_menu'],
            'harga_menu' => $request['harga_menu'],
            'status_menu' => $request['status_menu'],
            'gambar_menu' => $input['gambar_menu'],
        ]);

        if ($status) return redirect('/menu')->with('success','Data Berhasil Ditambahkan');
        else return redirect('/menu')->with('error','Data Gagal Ditambahkan');
    }
    public function edit($id)
    {
        $data['menu'] = \App\Menu::where('id_menu',$id)->first();
        return view('menu/form')->with($data);
    }
    public function update(Request $request,$id)
    {
        
        // $this->validate($request, $rules);

        $input = $request->all();
        $result = \App\Menu::where('id_menu', $id)->first();
        if ($request->hasFile('gambar_menu') && $request->file('gambar_menu')->isValid())
        {
            $filename = $result['id_menu'].".".$request->file('gambar_menu')->getClientOriginalExtension();
            $request->file('gambar_menu')->storeAs('',$filename);
            $input['gambar_menu'] = $filename;
        }
        $status = $result->update($input);

        if ($status) return redirect('/menu')->with('success','Data Berhasil Diubah');
        else return redirect('/menu')->with('error','Data Gagal Diubah');
    }
    public function destroy(Request $request, $id)
    {
        $result = \App\Menu::where('id_menu',$id)->first();
        $status = $result->delete();

        if ($status) return redirect('/menu')->with('success','Data Berhasil Dihapus');
        else return redirect('/menu')->with('error','Data Gagal Dihapus');
    }
}
