<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FeedbackController extends Controller
{
    public function index()
    {
    	return view('contents/feedback');
    }
    public function index2()
    {
    	$data['feedback'] = \App\Feedback::all();
    	return view('feedback/index')->with($data);
    }
     public function makasih()
    {
    	return view('contents/makasih');
    }
    public function store(Request $request)
    {
    	$rules = [
    		'nama_pelanggan' => 'required|max:100',
    		'email' => 'required|max:100',
    		'feedback_pelanggan' => 'required',
    		'service_rating' => 'required',

    	];

    	$this->validate($request, $rules);

    	$input = $request->all();
    	$status = \App\Feedback::create($input);

        if ($status) return redirect('makasih')->with('success','Data Berhasil Ditambahkan');
        else return redirect('makasih')->with('error','Data Gagal Ditambahkan');
    }
    public function edit($id)
    {
        $data['feedback'] = \App\Feedback::where('id',$id)->first();
        return view('feedback/form')->with($data);
    }
    public function update(Request $request,$id)
    {
        
        // $this->validate($request, $rules);

        $input = $request->all();
        $result = \App\Feedback::where('id', $id)->first();
        $status = $result->update($input);

        if ($status) return redirect('/feedback')->with('success','Data Berhasil Diubah');
        else return redirect('/feedback')->with('error','Data Gagal Diubah');
    }
    public function destroy(Request $request, $id)
    {
        $result = \App\Feedback::where('id',$id)->first();
        $status = $result->delete();

        if ($status) return redirect('/feedback')->with('success','Data Berhasil Dihapus');
        else return redirect('/feedback')->with('error','Data Gagal Dihapus');
    }
}
