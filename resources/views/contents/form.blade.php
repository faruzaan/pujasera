@extends('templates/header')
@section('content')

	<div class="card o-hidden border-0 shadow-lg my-5">
      <div class="card-body p-0">
        <!-- Nested Row within Card Body -->
        <div class="row">
          <div class="col-lg">
            <div class="p-5">
              <div class="text-center">
                <h1 class="h4 text-gray-900 mb-4">Tambah Akun</h1>
              </div>
              <form class="user" action="{{url('akun/add')}}" method="POST">
              	{{ csrf_field() }}
                <div class="form-group row">
                  <div class="col-sm-6 mb-3 mb-sm-0">
                    <input type="text" class="form-control form-control-user" name="nama_user" id="Nama" placeholder="Nama">
                  </div>
                  <div class="col-sm-6">
                    <input type="radio" name="jk_user" value="L" checked> Laki-Laki
  					<input type="radio" name="jk_user" value="P"> Perempuan
                  </div>
                </div>
                <div class="form-group">
                  <input type="text" class="form-control form-control-user" name="alamat_user" id="Alamat" placeholder="Alamat">
                </div>
                <div class="form-group row">
                  <div class="col-sm-6 mb-3 mb-sm-0">
                    <input type="number" class="form-control form-control-user" name="no_user" id="NoHP" placeholder="No HP">
                  </div>
                </div>
                <div class="form-group row">
                  <div class="col-sm-6 mb-3 mb-sm-0">
                    <input type="password" class="form-control form-control-user" name="password_user" id="Password" placeholder="Password">
                  </div>
                </div>
                <div class="form-group row">
                  <div class="col-sm-6 mb-3 mb-sm-0">
                    <input type="text" class="form-control form-control-user" name="status_user" id="Status" placeholder="Status">
                  </div>
                </div>
                <button type="submit" class="btn btn-primary btn-user btn-block">Simpan</button>
                <!-- <a href="login.html" class="btn btn-primary btn-user btn-block">
                  Tambah 
                </a> -->
            </div>
          </div>
        </div>
      </div>
    </div>

  </div>

@endsection