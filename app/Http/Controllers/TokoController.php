<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TokoController extends Controller
{
    public function index()
    {
    	$data['result'] = \App\Toko::all();
    	return view('toko/index')->with($data);
    }
    public function create()
    {
        $datapemilik['resultpemilik']=\App\Akun::where('status_user','Pemilik Toko');
    	return view('toko/form')->with($datapemilik);
    }
    public function store(Request $request)
    {
    	$input = $request->all();
    	$status = \App\Toko::create($input);

        if ($status) return redirect('/toko')->with('success','Data Berhasil Ditambahkan');
        else return redirect('/Toko')->with('error','Data Gagal Ditambahkan');
    }
    public function edit($id)
    {
        $data['result'] = \App\Toko::where('id_toko',$id)->first();
        return view('toko/form')->with($data);
    }
    public function update(Request $request,$id)
    {
        $rules = [
            'nama_toko' => 'required|max:100',
            'pemilik_toko' => 'required|max:100',
            'no_toko' => 'required|max:100'
        ];
        // $this->validate($request, $rules);

        $input = $request->all();
        $result = \App\Toko::where('id_toko', $id)->first();
        $status = $result->update($input);

        if ($status) return redirect('/toko')->with('success','Data Berhasil Diubah');
        else return redirect('/toko')->with('error','Data Gagal Diubah');
    }
    public function destroy(Request $request, $id)
    {
        $result = \App\Toko::where('id_toko',$id)->first();
        $status = $result->delete();

        if ($status) return redirect('/toko')->with('success','Data Berhasil Dihapus');
        else return redirect('toko')->with('error','Data Gagal Dihapus');
    }
}
