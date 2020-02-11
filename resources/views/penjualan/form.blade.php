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
                {{empty($penjualan) ? 'Tambah' : 'Edit'}}
                Penjualan</h1>
              </div>
              <div class="row">
                <div class="col-sm-6">
                  <form class="user" action="{{empty($gerai) ? url('gerai/add') : url("penjualan/$penjualan->id_penjualan/edit")}}" method="POST">
                {{ csrf_field() }}

                    @if (!empty($penjualan))
                      {{method_field('patch')}}
                    @endif
                    <div class="form-group row">
                      <label class="control-label col-sm-2">Gerai</label>
                      <div class="col-sm-10">
                        <select name="id_pemilik" id="" class="form-control">
                          <option value="" disabled selected hidden>Pilih</option>
                          @foreach (\App\Gerai::all() as $gerai)
                            <option value="{{$gerai->id_gerai}}">{{$gerai->nama_gerai}}</option>
                          @endforeach
                        </select>
                      </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-9" for="">Ayam Goreng</label>
                        <a href="#" class="col-sm-3 btn btn-primary">Tambah</a>
                    </div>
                    <button type="submit" class="btn btn-primary btn-user btn-block">Simpan</button>
                    <!-- <a href="login.html" class="btn btn-primary btn-user btn-block">
                      Tambah 
                    </a> -->
                  </form>
                </div>
                <div class="col-sm-6">
                  <table class="table table-bordered">
                    <thead>
                      <tr>
                        <th>No</th>
                        <th>Nama Menu</th>
                        <th>Gerai</th>
                        <th>Jumlah</th>
                        <th>Harga</th>
                      </tr>
                    </thead>
                    <tbody>
                      
                    </tbody>
                  </table>
                </div>
              </div>
              
              
            </div>
          </div>
        </div>
      </div>
    </div>

  </div>

@endsection