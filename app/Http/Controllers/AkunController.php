<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AkunController extends Controller
{
    public function index()
    {
    	$data['result'] = \App\Akun::all();
    	return view('contents/akun')->with($data);
    }
    public function create()
    {
    	return view('contents/form');
    }
    public function store(Request $request)
    {
    	$input = $request->all();
    	$status = \App\Akun::create($input);

    	return redirect('/contents/akun');
    }
}
