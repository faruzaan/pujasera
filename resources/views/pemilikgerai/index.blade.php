@extends('templates/header')
@section('content')

        <!-- Begin Page Content -->
        <div class="container-fluid">
          @include('templates/feedback')
          <!-- Page Heading -->
          <h1 class="h3 mb-2 text-gray-800">Tabel Pemilik Gerai</h1>
          <p class="mb-4">Data Informasi Pemilik Gerai</a>.</p>

          <!-- DataTales Example -->
          <div class="card shadow mb-4">
            <div class="card-header py-3">
              <div class="box">
              	<div class="box-header with-border">
              		<a href="{{url('pemilikgerai/add')}}" class="btn btn-primary btn-user btn-block mt-2">Tambah Pemilik Gerai</a>
              	</div>
              </div>
            </div>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered" id="data_Table" width="100%" cellspacing="0">
                  <thead>
                    <tr>
                   	  <th>No</th> 	
                      <th>Nama</th>
                      <th>Alamat</th>
                      <th>No Telepon</th>
                      <th>Aksi</th>
                    </tr>
                  </thead>
                  <tbody>
                  	@foreach ($pemilikgerai as $row)
                  	<tr>
                  		<td>{{ !empty($i) ? ++$i : $i = 1 }}</td>
                  		<td>{{ $row-> nama_pemilik }}</td>
                      <td>{{ $row-> alamat }}</td>
                  		<td>{{ $row-> no_tlp }}</td>
                  		<td><a title="Edit" href="{{url("pemilikgerai/$row->id_pemilik/edit")}}" class="btn btn-sm btn-warning"><i class="fas fa-pen-square"></i></a>
                  			<form action="{{url("pemilikgerai/$row->id_pemilik/delete")}}" method="POST" style="display: inline;">
                  				{{csrf_field()}}
                  				{{method_field('DELETE')}}

                  				<button class="btn btn-sm btn-danger">
                  					<i title="Hapus" class="fas fa-minus-square"></i>
                  				</button>
                  			</form>

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