<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestController extends Controller
{
    public function index()
    {
    	$data['item'] = Toko::find(4)->buku()->get();
    	return view('test')->with($data);
    }
}
