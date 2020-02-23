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
                Pilih Menu</h1>
              </div>
              <form class="user" action="url('penjualan/add')}}" method="POST" enctype="multipart/form-data">
                {{ csrf_field() }}

                @if (!empty($menu))
                  {{method_field('patch')}}
                @endif
                <div class="form-group">
                  <label class="control-label col-sm-2">Item</label>
                  <div class="col-sm-10">
                    <select name="id_gerai" id="" class="form-control">
                      <option value="" disabled selected hidden>Pilih</option>
                      @foreach (\App\Menu::where('id_gerai',$id) as $gerai)
                        <option value="{{$gerai->id_gerai}}" {{@$menu->id_gerai == $gerai->id_gerai ? 'selected':''}}>{{$gerai->nama_gerai}}</option>
                      @endforeach
                    </select>
                  </div>
                </div>
                <div class="form-group">
                    <input type="text" class="form-control form-control-user" name="nama_menu" id="Nama" placeholder="Nama" value="{{ @$menu->nama_menu }}">                
                </div>
                <div class="form-group">
                    <input type="text" class="form-control form-control-user" name="harga_menu" id="Jenis" placeholder="Harga" value="{{ @$menu->harga_menu }}">                
                </div>
                <div class="form-group">  
                  <div class="col-sm-6">
                    <label for="">Status Menu</label><br>
                    <input type="radio" name="status_menu" value="Aktif" {{(@$menu->status_menu=="Aktif")? "checked":""}}> Aktif
                    <input type="radio" name="status_menu" value="Tidak Aktif" {{(@$menu->status_menu=="Tidak Aktif")? "checked":""}}> Tidak Aktif
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