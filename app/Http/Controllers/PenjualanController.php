<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PenjualanController extends Controller
{
    public function index()
    {
    	$data['penjualan'] = \App\Penjualan::all();
    	return view('penjualan/index')->with($data);
    }
    public function create()
    {
    	return view('penjualan/form');
    }
    public function store(Request $request)
    {
    	$input = $request->all();
    	$penjualan = DB::table('tb_penjualan')->orderBy('id_penjualan','desc')->take(1)->get();
    	$id = $penjualan[0]->id_penjualan;
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
    	$id = 'PJ'.$int3.$int2.$int1;
    	$status = \App\Penjualan::create([
            'id_penjualan' => $id,
            'id_pegawai' => auth()->user()->nama_user,
            'tgl_penjualan' => date("Y/m/d"),
            'total_harga' => $request['total_harga'],
            'bayar' => $request['bayar'],
            'kembali' => $request['kembali'],
        ]);

        if ($status) return redirect('/penjualan')->with('success','Data Berhasil Ditambahkan');
        else return redirect('/penjualan')->with('error','Data Gagal Ditambahkan');
    }
    public function edit($id)
    {
        $data['penjualan'] = \App\Penjualan::where('id_penjualan',$id)->first();
        return view('penjualan/form')->with($data);
    }
    public function update(Request $request,$id)
    {
        
        // $this->validate($request, $rules);

        $input = $request->all();
        $result = \App\Penjualan::where('id_penjualan', $id)->first();
        $status = $result->update($input);

        if ($status) return redirect('/penjualan')->with('success','Data Berhasil Diubah');
        else return redirect('/penjualan')->with('error','Data Gagal Diubah');
    }
    public function destroy(Request $request, $id)
    {
        $result = \App\Penjualan::where('id_penjualan',$id)->first();
        $status = $result->delete();

        if ($status) return redirect('/penjualan')->with('success','Data Berhasil Dihapus');
        else return redirect('/penjualan')->with('error','Data Gagal Dihapus');
    }
}
