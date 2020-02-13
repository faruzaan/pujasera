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
                </div>
              </div>
            </div>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered" id="data_Table" width="100%" cellspacing="0">
                  <thead>
                    <tr>
                      <th>No</th>   
                      <th>Pelanggan</th>
                      <th>Email</th>
                      <th>Feedback</th>
                      <th>Rating</th>
                      <th>Aksi</th>
                    </tr>
                  </thead>
                  <tbody>
                    @foreach ($feedback as $row)
                    <tr>
                      <td>{{ !empty($i) ? ++$i : $i = 1 }}</td>
                      <td>{{ $row-> nama_pelanggan }}</td>
                      <td>{{ $row-> email }}</td>
                      <td>{{ $row-> feedback_pelanggan }}</td>
                      <td>{{ $row-> service_rating }}</td>
                      <td><a title="Edit" href="{{url("feedback/$row->id/edit")}}" class="btn btn-sm btn-warning"><i class="fas fa-pen-square"></i></a>
                        <form action="{{url("feedback/$row->id/delete")}}" method="POST" style="display: inline;">
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