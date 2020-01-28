<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class ItemController extends Controller
{
    public function index()
    {
    	$data['result'] = DB::table('tb_item')
            ->join('tb_toko', 'tb_item.id_toko', '=', 'tb_toko.id_toko')
            ->select('tb_item.*', 'tb_toko.nama_toko')
            ->get();
    	return view('item/index')->with($data);
    }
    public function create()
    {
        $datapemilik['resultpemilik']=\App\Toko::All();
    	return view('item/form')->with($datapemilik);
    }
    public function store(Request $request)
    {
    	$input = $request->all();
    	$status = \App\Item::create($input);

        if ($status) return redirect('/item')->with('success','Data Berhasil Ditambahkan');
        else return redirect('/item')->with('error','Data Gagal Ditambahkan');
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
