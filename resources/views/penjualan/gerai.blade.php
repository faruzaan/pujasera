@extends('templates/header')
@section('content')

        <!-- Begin Page Content -->
        <div class="container-fluid">
          @include('templates/feedback')
          <!-- Page Heading -->
          <h1 class="h3 mb-2 text-gray-800">Pilih Gerai</h1>
          <p class="mb-4">Data Gerai</a>.</p>

          <!-- DataTales Example -->
          <div class="card shadow mb-4">
            <div class="card-body">
              <?php
                //Columns must be a factor of 12 (1,2,3,4,6,12)
                $numOfCols = 4;
                $rowCount = 0;
                $bootstrapColWidth = 12 / $numOfCols;
              ?>
              <div class="row">
              <?php
                foreach (\App\Gerai::all() as $gerai){
              ?>  

                <div class="card col-md-<?php echo $bootstrapColWidth; ?>" style="width: 18rem;">
                  <img class="card-img-top" src="{{asset('assets')}}/img/gerai/{{$gerai->nama_gerai}}.jpg" alt="Card image cap">
                  <div class="card-body">
                    <h5 class="card-title">{{$gerai->nama_gerai}}</h5>
                    <a href="{{url("penjualan/$gerai->id_gerai/pilih")}}" class="btn btn-primary">Pilih</a>
                  </div>
                </div>
              <?php
                  $rowCount++;
                  if($rowCount % $numOfCols == 0) echo '</div><div class="row">';
                }
              ?>
              </div>


              <!-- contoh -->
              <!-- @foreach (\App\Gerai::all() as $gerai)
                <div class="card" style="width: 18rem;">
                  <img class="card-img-top" src="{{asset('assets')}}/img/gerai/{{$gerai->nama_gerai}}.jpg" alt="Card image cap">
                  <div class="card-body">
                    <h5 class="card-title">{{$gerai->nama_gerai}}</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    <a href="#" class="btn btn-primary">Go somewhere</a>
                  </div>
                </div>
              @endforeach -->
              </div>
            </div>
          </div>

        </div>
        <!-- /.container-fluid -->

      </div>
      <!-- End of Main Content -->

@endsection