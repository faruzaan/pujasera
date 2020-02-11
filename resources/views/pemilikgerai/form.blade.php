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
                {{empty($pemilikgerai) ? 'Tambah' : 'Edit'}}
                pemilik</h1>
              </div>
              <form class="user" action="{{empty($pemilikgerai) ? url('pemilikgerai/add') : url("pemilikgerai/$pemilikgerai->id_pemilik/edit")}}" method="POST">
              	{{ csrf_field() }}

                @if (!empty($pemilikgerai))
                  {{method_field('patch')}}
                @endif
                <div class="form-group">
                    <input type="text" class="form-control form-control-user" name="nama_pemilik" id="Nama" placeholder="Nama" value="{{ @$pemilikgerai->nama_pemilik }}">                
                </div>
                <div class="form-group">
                    <input type="text" class="form-control form-control-user" name="alamat" id="Alamat" placeholder="Alamat" value="{{ @$pemilikgerai->alamat }}">                
                </div>
                <div class="form-group">
                    <input type="text" class="form-control form-control-user" name="no_tlp" id="Nomer_Telepon" placeholder="Nomer Telepon" value="{{ @$pemilikgerai->no_tlp }}">                
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