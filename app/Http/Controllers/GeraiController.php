<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class GeraiController extends Controller
{
    public function index()
    {
    	$data['gerai'] = \App\Gerai::all();
    	return view('gerai/index')->with($data);
    }
    public function create()
    {
    	return view('gerai/form');
    }
    public function store(Request $request)
    {
    	$input = $request->all();
    	$gerai = DB::table('tb_gerai')->orderBy('id_gerai','desc')->take(1)->get();
        if (empty($gerai)) {
            $id = "G001";
        }else{
            $id = $gerai[0]->id_gerai;
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
            $id = 'G'.$int3.$int2.$int1;
        }
    	$status = \App\Gerai::create([
            'id_gerai' => $id,
            'id_pemilik' => $request['id_pemilik'],
            'nama_gerai' => $request['nama_gerai'],
            'jenis_gerai' => $request['jenis_gerai'],
        ]);

        if ($status) return redirect('/gerai')->with('success','Data Berhasil Ditambahkan');
        else return redirect('/gerai')->with('error','Data Gagal Ditambahkan');
    }
    public function edit($id)
    {
        $data['gerai'] = \App\Gerai::where('id_gerai',$id)->first();
        return view('gerai/form')->with($data);
    }
    public function update(Request $request,$id)
    {
        
        // $this->validate($request, $rules);

        $input = $request->all();
        $result = \App\Gerai::where('id_gerai', $id)->first();
        $status = $result->update($input);

        if ($status) return redirect('/gerai')->with('success','Data Berhasil Diubah');
        else return redirect('/gerai')->with('error','Data Gagal Diubah');
    }
    public function destroy(Request $request, $id)
    {
        $result = \App\Gerai::where('id_gerai',$id)->first();
        $status = $result->delete();

        if ($status) return redirect('/gerai')->with('success','Data Berhasil Dihapus');
        else return redirect('/gerai')->with('error','Data Gagal Dihapus');
    }
}
