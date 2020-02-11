<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class PegawaiController extends Controller
{
    public function index()
    {
    	$data['pegawai'] = \App\Pegawai::all();
    	return view('pegawai/index')->with($data);
    }
    public function create()
    {
    	return view('pegawai/form');
    }
    public function store(Request $request)
    {
    	$input = $request->all();
    	$pegawai = DB::table('tb_pegawai')->orderBy('id_pegawai','desc')->take(1)->get();
    	$id = $pegawai[0]->id_pegawai;
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
    	$id = 'P'.$int3.$int2.$int1;
    	$status = \App\Pegawai::create([
            'id_pegawai' => $id,
            'id_jabatan' => $request['id_jabatan'],
            'nama_pegawai' => $request['nama_pegawai'],
            'alamat_pegawai' => $request['alamat_pegawai'],
            'nomer_tlp' => $request['nomer_tlp'],
            'username' => $request['username'],
            'password' => Hash::make($request['password']),
            'status_pegawai' => $request['status_pegawai'],
        ]);

        if ($status) return redirect('/pegawai')->with('success','Data Berhasil Ditambahkan');
        else return redirect('/pegawai')->with('error','Data Gagal Ditambahkan');
    }
    public function edit($id)
    {
        $data['result'] = \App\Item::where('id_item',$id)->first();
        return view('item/form')->with($data);
    }
    public function update(Request $request,$id)
    {
        
        // $this->validate($request, $rules);

        $input = $request->all();
        $result = \App\Item::where('id_item', $id)->first();
        $status = $result->update($input);

        if ($status) return redirect('/item')->with('success','Data Berhasil Diubah');
        else return redirect('/item')->with('error','Data Gagal Diubah');
    }
    public function destroy(Request $request, $id)
    {
        $result = \App\Item::where('id_item',$id)->first();
        $status = $result->delete();

        if ($status) return redirect('/item')->with('success','Data Berhasil Dihapus');
        else return redirect('/item')->with('error','Data Gagal Dihapus');
    }
}
