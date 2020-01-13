@extends('templates/header')
@section('content')

        <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Page Heading -->
          <h1 class="h3 mb-2 text-gray-800">Tabel Akun</h1>
          <p class="mb-4">Data Informasi Akun</a>.</p>

          <!-- DataTales Example -->
          <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary">Tabel Akun</h6>
              <div class="box">
              	<div class="box-header with-border">
              		<a href="{{url('akun/add')}}" class="btn btn-successs">
              			<i class="fas fa-plus-square" style="margin-right: 5px;"></i>Tambah
              		</a>
              	</div>
              </div>
            </div>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                    <tr>
                   	  <th>No</th> 	
                      <th>Nama</th>
                      <th>Password</th>
                      <th>JK</th>
                      <th>Alamat</th>
                      <th>No HP</th>
                      <th>Status</th>
                      <th>Aksi</th>
                    </tr>
                  </thead>
                  <tbody>
                  	@foreach ($result as $row)
                  	<tr>
                  		<td>{{ !empty($i) ? ++$i : $i = 1 }}</td>
                  		<td>{{ $row-> nama_user }}</td>
                  		<td>{{ $row-> password_user }}</td>
                  		<td>{{ $row-> jk_user }}</td>
                  		<td>{{ $row-> alamat_user }}</td>
                  		<td>{{ $row-> no_user }}</td>
                  		<td>{{ $row-> status_user }}</td>
                  		<td><a href="{{url('akun/$row->id_user/edit')}}" class="btn btn-sm btn-warning"><i class="fas fa-pen-square"></i></a>
                  			<form action="{{url('akun/$row->id_user/delete')}}" method="POST" style="display: inline;">
                  				{{csrf_field()}}
                  				{{method_field('DELETE')}}

                  				<button class="btn btn-sm btn-danger">
                  					<i class="fas fa-minus-square"></i>
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