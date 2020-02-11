@extends('templates/header')
@section('content')

        <!-- Begin Page Content -->
        <div class="container-fluid">
          @include('templates/feedback')
          <!-- Page Heading -->
          <h1 class="h3 mb-2 text-gray-800">Tabel Pegawai</h1>
          <p class="mb-4">Data Informasi Pegawai</a>.</p>

          <!-- DataTales Example -->
          <div class="card shadow mb-4">
            <div class="card-header py-3">
              <div class="box">
              	<div class="box-header with-border">
              		<a href="{{url('pegawai/add')}}" class="btn btn-primary btn-user btn-block mt-2">Tambah Pegawai</a>
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
                      <th>Jabatan</th>
                      <th>No Telepon</th>
                      <th>Status</th>
                      <th>Aksi</th>
                    </tr>
                  </thead>
                  <tbody>
                  	@foreach ($pegawai as $row)
                  	<tr>
                  		<td>{{ !empty($i) ? ++$i : $i = 1 }}</td>
                  		<td>{{ $row-> nama_pegawai }}</td>
                      <td>{{ $row-> alamat_pegawai }}</td>
                  		<td>{{ $row->jabatan->nama_jabatan }}</td>
                  		<td>{{ $row-> nomer_tlp }}</td>
                  		<td>{{ $row-> status_pegawai }}</td>
                  		<td><a title="Edit" href="{{url("pegawai/$row->id_user/edit")}}" class="btn btn-sm btn-warning"><i class="fas fa-pen-square"></i></a>
                  			<form action="{{url("pegawai/$row->id_user/delete")}}" method="POST" style="display: inline;">
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