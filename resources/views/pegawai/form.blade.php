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
                Pegawai</h1>
              </div>
              <form class="user" action="{{empty($result) ? url('pegawai/add') : url("pegawai/$result->id_user/edit")}}" method="POST">
              	{{ csrf_field() }}

                @if (!empty($result))
                  {{method_field('patch')}}
                @endif
                <div class="form-group">
                    <input type="text" class="form-control form-control-user" name="nama_pegawai" id="Nama" placeholder="Nama" value="{{ @$pegawai->nama_pegawai }}">                
                </div>
                <div class="form-group">
                    <input type="text" class="form-control form-control-user" name="alamat_pegawai" id="Alamat" placeholder="Alamat" value="{{ @$pegawai->alamat_pegawai }}">                
                </div>
                <div class="form-group">
                    <input type="text" class="form-control form-control-user" name="nomer_tlp" id="Nomer_Telepon" placeholder="Nomer Telepon" value="{{ @$pegawai->nomer_tlp }}">                
                </div>
                <div class="form-group">
                    <input type="text" class="form-control form-control-user" name="username" id="Username" placeholder="Username" value="{{ @$pegawai->username }}">                
                </div>
                <div class="form-group">
                    <input type="password" class="form-control form-control-user" name="password" id="Password" placeholder="Password" value="{{ @$pegawai->password }}">                
                </div>
                <!-- <div class="form-group">
                  <div class="col-sm-6 mb-3 mb-sm-0">
                    <label for="">Jabatan</label><br>
                    @foreach (\App\Jabatan::all() as $jabatan)
                      <input type="radio" name="id_jabatan" value="{{ $jabatan->id_jabatan }}" {{($jabatan->id_jabatan==@$pegawai->id_jabatan)? "checked":""}}> {{ $jabatan->id_jabatan }}
                    @endforeach
                  </div>
                </div> -->
                <div class="form-group">
                  <label control-label col-sm-2>Jabatan</label>
                  <div class="col-sm-10">
                    <select name="id_jabatan" id="" class="form-control">
                      @foreach (\App\Jabatan::all() as $jabatan)
                        <option value="{{$jabatan->id_jabatan}}">{{$jabatan->id_jabatan}}</option>
                      @endforeach
                    </select>
                  </div>
                </div>
                <div class="form-group">  
                  <div class="col-sm-6">
                    <label for="">Status Pegawai</label><br>
                    <input type="radio" name="status_pegawai" value="Aktif" {{(@$pegawai->jk_user=="Aktif")? "checked":""}}> Aktif
  					        <input type="radio" name="status_pegawai" value="Tidak Aktif" {{(@$pegawai->jk_user=="Tidak Aktif")? "checked":""}}> Tidak Aktif
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