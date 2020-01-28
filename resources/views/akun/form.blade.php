@extends('templates/header')
@section('content')

	<div class="card o-hidden border-0 shadow-lg my-5">
      <div class="card-body p-0">
        <!-- Nested Row within Card Body -->
        @include('templates/feedback')
        <div class="row">
          <div class="col-lg">
            <div class="p-5">
              <div class="text-center">
                <h1 class="h4 text-gray-900 mb-4">
                {{empty($result) ? 'Tambah' : 'Edit'}}
                Akun</h1>
              </div>
              <form class="user" action="{{empty($result) ? url('akun/add') : url("akun/$result->id_user/edit")}}" method="POST">
              	{{ csrf_field() }}

                @if (!empty($result))
                  {{method_field('patch')}}
                @endif
                <div class="form-group">
                    <input type="text" class="form-control form-control-user" name="nama_user" id="Nama" placeholder="Nama" value="{{ @$result->nama_user }}">                
                </div>
                <div class="form-group">
                    <input type="text" class="form-control form-control-user" name="username" id="Nama" placeholder="Username" value="{{ @$result->username }}">                
                </div>
                <div class="form-group">
                    <input type="text" class="form-control form-control-user" name="password" id="Nama" placeholder="Password" value="{{ @$result->password }}">                
                </div>
                <div class="form-group">  
                  <div class="col-sm-6">
                    <input type="radio" name="jk_user" value="L" {{(@$result->jk_user=="L")? "checked":""}}> Laki-Laki
  					        <input type="radio" name="jk_user" value="P" {{(@$result->jk_user=="P")? "checked":""}}> Perempuan
                  </div>
                </div>  
                <div class="form-group">
                  <input type="text" class="form-control form-control-user" name="alamat_user" id="Alamat" placeholder="Alamat" value="{{ @$result->alamat_user }}">
                </div>
                <div class="form-group row">
                  <div class="col-sm-6 mb-3 mb-sm-0">
                    <input type="number" class="form-control form-control-user" name="no_user" id="NoHP" placeholder="No HP" value="{{ @$result->no_user }}">
                  </div>
                </div>
                <div class="form-group row">
                  <div class="col-sm-6 mb-3 mb-sm-0">
                    <input type="radio" name="status_user" value="Admin" {{(@$result->status_user=="Admin")? "checked":""}}> Admin
                    <input type="radio" name="status_user" value="Pemilik Toko" {{(@$result->status_user=="Pemilik Toko")? "checked":""}}> Pemilik Toko
                    <input type="radio" name="status_user" value="Penjaga Toko" {{(@$result->status_user=="Penjaga Toko")? "checked":""}}> Penjaga Toko
                    <input type="radio" name="status_user" value="Kasir" {{(@$result->status_user=="Kasir")? "checked":""}}> Kasir
                  </div>
                </div>
                <div class="form-group">
                  <input type="text" class="form-control form-control-user" name="keterangan_user" id="Alamat" placeholder="Keterangan User" value="{{ @$result->keterangan_user }}">
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