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
                Pesanan</h1>
              </div>
              <form class="user" action="{{empty($result) ? url('pemesanan/add') : url("pemesanan/$result->id_pemesanan/edit")}}" method="POST">
              	{{ csrf_field() }}

                @if (!empty($result))
                  {{method_field('patch')}}
                @endif
                <div class="form-group">
                    <input type="text" class="form-control form-control-user" name="nama_pemesan" id="Nama" placeholder="Nama Pemesan">
                </div>
                <?php
                //Columns must be a factor of 12 (1,2,3,4,6,12)
                $numOfCols = 2;
                $rowCount = 0;
                $bootstrapColWidth = 12
                ?>
                <div class="form-group row">
                <?php
                  foreach ($rows as $row){
                ?>  
                  <div class="col-md-6 mb-3 mb-sm-0">
                    <label for="{{ @$row->nama_item }}">{{ @$row->nama_item }}</label>
                      <input type="number" class="form-control form-control-user" name="id_item" id="{{ @$row->nama_item }}" placeholder="Jumlah">
                  </div>
                <?php
                  $rowCount++;
                  if($rowCount % $numOfCols == 0) echo '</div><div class="form-group row">';
                }
                ?>
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