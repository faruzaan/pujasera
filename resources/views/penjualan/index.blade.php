@extends('templates/header')
@section('content')

        <!-- Begin Page Content -->
        <div class="container-fluid">
          @include('templates/feedback')
          <!-- Page Heading -->
          <h1 class="h3 mb-2 text-gray-800">Tabel Gerai</h1>
          <p class="mb-4">Data Informasi Gerai</a>.</p>

          <!-- DataTales Example -->
          <div class="card shadow mb-4">
            <div class="card-header py-3">
              <div class="box">
                <div class="box-header with-border">
                  <a href="{{url('penjualan/add')}}" class="btn btn-primary btn-user btn-block mt-2">Tambah Penjualan</a>
                </div>
              </div>
            </div>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered" id="data_Table" width="100%" cellspacing="0">
                  <thead>
                    <tr>
                      <th>No</th>   
                      <th>Pegawai</th>
                      <th>Tanggal</th>
                      <th>Total Harga</th>
                      <th>Bayar</th>
                      <th>Kembali</th>
                      <th>Aksi</th>
                    </tr>
                  </thead>
                  <tbody>
                    @foreach ($penjualan as $row)
                    <tr>
                      <td>{{ !empty($i) ? ++$i : $i = 1 }}</td>
                      <td>{{ $row->pegawai->nama_pegawai }}</td>
                      <td>{{ $row-> tgl_penjualan }}</td>
                      <td>{{ $row-> total_harga }}</td>
                      <td>{{ $row-> bayar }}</td>
                      <td>{{ $row-> kembali }}</td>
                      <td>
                        <a title="Edit" href="{{url("penjualan/$row->id_penjualan/detail")}}" class="btn btn-sm btn-warning"><i class="fas fa-pen-square"></i>
                        </a>
                        <a title="Edit" href="{{url("penjualan/$row->id_penjualan/edit")}}" class="btn btn-sm btn-warning"><i class="fas fa-pen-square"></i>
                        </a>
                        <form action="{{url("penjualan/$row->id_penjualan/delete")}}" method="POST" style="display: inline;">
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