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
                Toko</h1>
              </div>
              <form class="user" action="{{empty($result) ? url('toko/add') : url("toko/$result->id_toko/edit")}}" method="POST">
              	{{ csrf_field() }}

                @if (!empty($result))
                  {{method_field('patch')}}
                @endif
                <div class="form-group">
                    <input type="text" class="form-control form-control-user" name="nama_toko" id="Nama" placeholder="Nama Toko" value="{{ @$result->nama_toko }}">
                </div>
                <div class="form-group row">
                  <div class="col-sm-9 mb-3 mb-sm-0">
                    <input readonly="" type="text" class="form-control form-control-user" name="id_user" id="id_user" placeholder="Pemilik Toko" value="{{ @$result->id_user }}">
                  </div>
                  @if (empty($result))
                    <button type="button" class="col-sm-3 btn btn-primary btn-user btn-block" data-toggle="modal" data-target="#modal-pemilik">
                        Pilih Pemilik
                    </button>
                  @endif
                  
                </div>
                <div class="form-group">
                  <input type="text" class="form-control form-control-user" name="no_toko" id="notoko" placeholder="No Toko" value="{{ @$result->no_toko }}">
                  
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
    @include('modal/pemilik')
  @endif
  

@endsection
@push('script')
  <script>
    $('.pilih-pemilik').click(function(){
      let namapemilik = $(this).closest('tr').find('td:eq(0)').text();
      $('#id_user').val(namapemilik);
      $('#modal-pemilik').modal('hide');
    });
  </script>
@endpush