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
                Item</h1>
              </div>
              <form class="user" action="{{empty($result) ? url('item/add') : url("item/$result->id_item/edit")}}" method="POST">
                {{ csrf_field() }}

                @if (!empty($result))
                  {{method_field('patch')}}
                @endif
                <div class="form-group row">
                  <div class="col-sm-9 mb-3 mb-sm-0">
                    <input readonly="" type="text" class="form-control form-control-user" name="id_toko" id="id_toko" placeholder="Pilih Toko" value="{{ @$result->id_toko }}">
                  </div>
                  @if (empty($result))
                    <button type="button" class="col-sm-3 btn btn-primary btn-user btn-block" data-toggle="modal" data-target="#modal-toko">
                      Pilih Toko
                  </button>
                  @endif
                </div>
                <div class="form-group">
                    <input type="text" class="form-control form-control-user" name="nama_item" id="Nama" placeholder="Nama Item" value="{{ @$result->nama_item }}">
                </div>
                <div class="form-group">
                  <input type="number" class="form-control form-control-user" name="harga_item" id="notoko" placeholder="Harga Item" value="{{ @$result->harga_item }}">
                </div>
                <div class="form-group">  
                  <div class="col-sm-6">
                    <input type="radio" name="ket_item" value="Makanan" {{(@$result->ket_item=="Makanan")? "checked":""}}> Makanan
                    <input type="radio" name="ket_item" value="Minuman" {{(@$result->ket_item=="Minuman")? "checked":""}}> Minuman
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
  @if (empty($result))
    @include('modal/pilihtoko')
  @endif
  

@endsection
@push('script')
  <script>
    $('.pilih-toko').click(function(){
      let namatoko = $(this).closest('tr').find('td:eq(0)').text();
      $('#id_toko').val(namatoko);
      $('#modal-toko').modal('hide');
    });
  </script>
@endpush