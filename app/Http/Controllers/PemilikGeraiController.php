<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PemilikGeraiController extends Controller
{
    public function index()
    {
    	$data['pemilikgerai'] = \App\PemilikGerai::all();
    	return view('pemilikgerai/index')->with($data);
    }
    public function create()
    {
    	return view('pemilikgerai/form');
    }
    public function store(Request $request)
    {
    	$input = $request->all();
    	$pemilik = DB::table('tb_pemilik_gerai')->orderBy('id_pemilik','desc')->take(1)->get();
    	$id = $pemilik[0]->id_pemilik;
    	$int1 = substr($id,4,1);
    	$int2 = substr($id,3,1);
    	$int3 =substr($id,2,1);
    	$int1++;
    	if ($int1 >= 9) {
    		$int2++;
    	}
    	if ($int2 >= 9) {
    		$int3++;
    	}
    	$id = 'PG'.$int3.$int2.$int1;
    	$status = \App\PemilikGerai::create([
            'id_pemilik' => $id,
            'nama_pemilik' => $request['nama_pemilik'],
            'alamat' => $request['alamat'],
            'no_tlp' => $request['no_tlp'],
        ]);

        if ($status) return redirect('/pemilikgerai')->with('success','Data Berhasil Ditambahkan');
        else return redirect('/pemilikgerai')->with('error','Data Gagal Ditambahkan');
    }
    public function edit($id)
    {
        $data['pemilikgerai'] = \App\PemilikGerai::where('id_pemilik',$id)->first();
        return view('pemilikgerai/form')->with($data);
    }
    public function update(Request $request,$id)
    {
        
        // $this->validate($request, $rules);

        $input = $request->all();
        $result = \App\PemilikGerai::where('id_pemilik', $id)->first();
        $status = $result->update($input);

        if ($status) return redirect('/pemilikgerai')->with('success','Data Berhasil Diubah');
        else return redirect('/pemilikgerai')->with('error','Data Gagal Diubah');
    }
    public function destroy(Request $request, $id)
    {
        $result = \App\PemilikGerai::where('id_pemilik',$id)->first();
        $status = $result->delete();

        if ($status) return redirect('/pemilikgerai')->with('success','Data Berhasil Dihapus');
        else return redirect('/pemilikgerai')->with('error','Data Gagal Dihapus');
    }
}
