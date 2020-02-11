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
                {{empty($gerai) ? 'Tambah' : 'Edit'}}
                Gerai</h1>
              </div>
              <form class="user" action="{{empty($gerai) ? url('gerai/add') : url("gerai/$gerai->id_gerai/edit")}}" method="POST">
              	{{ csrf_field() }}

                @if (!empty($gerai))
                  {{method_field('patch')}}
                @endif
                <div class="form-group">
                  <label class="control-label col-sm-2">Pemilik</label>
                  <div class="col-sm-10">
                    <select name="id_pemilik" id="" class="form-control">
                      <option value="" disabled selected hidden>Pilih</option>
                      @foreach (\App\PemilikGerai::all() as $pemilik)
                        <option value="{{$pemilik->id_pemilik}}" {{@$gerai->id_pemilik == $pemilik->id_pemilik ? 'selected':''}}>{{$pemilik->nama_pemilik}}</option>
                      @endforeach
                    </select>
                  </div>
                </div>
                <div class="form-group">
                    <input type="text" class="form-control form-control-user" name="nama_gerai" id="Nama" placeholder="Nama" value="{{ @$gerai->nama_gerai }}">                
                </div>
                <div class="form-group">
                    <input type="text" class="form-control form-control-user" name="jenis_gerai" id="Jenis" placeholder="Jenis" value="{{ @$gerai->jenis_gerai }}">                
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