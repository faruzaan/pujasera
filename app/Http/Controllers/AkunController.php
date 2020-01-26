<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AkunController extends Controller
{
    public function index()
    {
    	$data['result'] = \App\Akun::all();
    	return view('akun/index')->with($data);
    }
    public function create()
    {
    	return view('akun/form');
    }
    public function store(Request $request)
    {
    	$input = $request->all();
    	$status = \App\Akun::create($input);

        $userawal = substr($request->nama_user,0,2);
        $userakhir = substr($request->no_user,-2);
        $user = $userawal.$userakhir;
        $passawal = substr($request->nama_user,-2);
        $passakhir = $request->jk_user;
        $pass = bcrypt($passawal.$passakhir);

        $input2 = [
            'nama_user' => $request->nama_user,
            'username' => $user,
            'password' => $pass
        ];
        $status = \App\User::create($input2);

        if ($status) return redirect('/akun')->with('success','Data Berhasil Ditambahkan');
        else return redirect('/akun')->with('error','Data Gagal Ditambahkan');
    }
    public function edit($id)
    {
        $data['result'] = \App\Akun::where('id_user',$id)->first();
        return view('akun/form')->with($data);
    }
    public function update(Request $request,$id)
    {
        // $rules = [
        //     'nama_user' => 'required|max:100',
        //     'jk_user' => 'required|max:100',
        //     'alamat_user' => 'required|max:100',
        //     'no_user' => 'required|max:100',
        //     'status_user' => 'required|max:100'
        // ];
        // $this->validate($request, $rules);

        $input = $request->all();
        $result = \App\Akun::where('id_user', $id)->first();
        $status = $result->update($input);

        if ($status) return redirect('/akun')->with('success','Data Berhasil Diubah');
        else return redirect('/akun')->with('error','Data Gagal Diubah');
    }
    public function destroy(Request $request, $id)
    {
        $result = \App\Akun::where('id_user',$id)->first();
        $status = $result->delete();

        if ($status) return redirect('/akun')->with('success','Data Berhasil Dihapus');
        else return redirect('/akun')->with('error','Data Gagal Dihapus');
    }
}
