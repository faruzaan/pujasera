@extends('templates/header')
@section('content')

        <!-- Begin Page Content -->
        <div class="container-fluid">
          @include('templates/feedback')
          <!-- Page Heading -->
          <h1 class="h3 mb-2 text-gray-800">Tabel Pemesanan</h1>
          <p class="mb-4">Data Informasi Pemesanan</a>.</p>

          <!-- DataTales Example -->
          <div class="card shadow mb-4">
            <div class="card-header py-3">
              <div class="box">
              	<div class="box-header with-border">
              		<a href="{{url('pemesanan/add')}}" class="btn btn-primary btn-user btn-block mt-2">Tambah Pesanan</a>
              	</div>
              </div>
            </div>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered" id="data_Table" width="100%" cellspacing="0">
                  <thead>
                    <tr>
                   	  <th>Id</th> 	
                      <th>Nama Pemesan</th>
                      <th>Penjaga Toko</th>
                      <th>Toko</th>
                      <th>Nama Item</th>
                      <th>Jumlah</th>
                      <th>Status Pesanan</th>
                      <th>Aksi</th>
                    </tr>
                  </thead>
                  <tbody>
                  	@foreach ($result as $row)
                  	<tr>
                  		<td>{{ !empty($i) ? ++$i : $i = 1 }}</td>
                  		<td>{{ $row-> nama_pemesan }}</td>
                  		<td>{{ $row-> nama_user }}</td>
                  		<td>{{ $row-> nama_toko }}</td>
                      <td>{{ $row-> nama_item }}</td>
                      <td>{{ $row-> jumlah }}</td>
                      <td>{{ $row-> status_pemesanan }}</td>
                  		<td><a href="{{url("pemesanan/$row->id_pemesanan/edit")}}" class="btn btn-sm btn-warning"><i class="fas fa-pen-square"></i></a>
                  			<!-- <form action="{{url("pemesanan/$row->id_pemesanan/delete")}}" method="POST" style="display: inline;">
                  				{{csrf_field()}}
                  				{{method_field('DELETE')}}

                  				<button class="btn btn-sm btn-danger">
                  					<i class="fas fa-minus-square"></i>
                  				</button>
                  			</form> -->

                  		</td>
                  	</tr>
                    @endforeach
                  </tbody>
                </table>
              </div>
            </div>
          </div>

        </div>
        <!-- /.container-fluid -->

      </div>
      <!-- End of Main Content -->

@endsection