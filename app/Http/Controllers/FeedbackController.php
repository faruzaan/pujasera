<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
/**
 * Class Feedbacks
 */
class FeedbackController extends Controller
{
    /**
     * Method untuk menampilkan halaman pengisian feedback
     */
    public function index()
    {
    	return view('contents/feedback');
    }
    /**
     * Method untuk menampilkan halaman tabel feedback dengan mengambil data dari database
     */
    public function index2()
    {
    	$data['feedback'] = \App\Feedback::all(); 
    	return view('feedback/index')->with($data);
    }
    /**
     * Method untuk menampilkan halaman terima kasih
     */
    public function makasih()
    {
    	return view('contents/makasih');
    }
    /**
     * Method Untuk Menambahkan Data Feedback
     * @param[in] request argumen yang menyimpan data yang akan ditambahkan
     */
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
        else return redirect('/')->with('error','Data Gagal Ditambahkan');
    }
    /**
     * Method Menampilkan halaman edit data feedback dengan data dari database
     * @param[in] id argumen yang menyimpan nilai id feedback
     */
    public function edit($id)
    {
        $data['feedback'] = \App\Feedback::where('id',$id)->first();
        return view('feedback/form')->with($data);
    }
    /**
     * Method Untuk merubah data feedback
     * @param[in] id argumen yang menyimpan nilai id feedback
     * @param[in] request argumen yang menyimpan data yang akan disimpan
     */
    public function update(Request $request,$id)
    {
        
        // $this->validate($request, $rules);

        $input = $request->all();
        $result = \App\Feedback::where('id', $id)->first();
        $status = $result->update($input);

        if ($status) return redirect('/feedback')->with('success','Data Berhasil Diubah');
        else return redirect('/feedback')->with('error','Data Gagal Diubah');
    }
    /**
     * Method Untuk Menghapus Data Feedback
     */
    public function destroy(Request $request, $id)
    {
        $result = \App\Feedback::where('id',$id)->first();
        $status = $result->delete();

        if ($status) return redirect('/feedback')->with('success','Data Berhasil Dihapus');
        else return redirect('/feedback')->with('error','Data Gagal Dihapus');
    }
}
