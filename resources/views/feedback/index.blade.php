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
                      <td>
                        <a title="Edit" href="{{url("feedback/$row->id/edit")}}" class="btn btn-sm btn-warning"><i class="fas fa-pen-square"></i>
                        </a>
                        <!-- <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
                          Launch demo modal
                        </button> -->
                        <a href="#" class="btn btn-sm btn-danger" data-toggle="modal" data-target="#exampleModal{{ $row-> id }}">
                            <i title="Hapus" class="fas fa-minus-square"></i>
                          </a>

                      </td>
                    </tr>
                    <div class="modal fade" id="exampleModal{{ $row-> id }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                      <div class="modal-dialog" role="document">
                        <div class="modal-content">
                          <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Yakin Hapus?</h5>
                            <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                              <span aria-hidden="true">×</span>
                            </button>
                          </div>
                          <div class="modal-footer">
                            <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                            <!-- <a class="btn btn-primary" href="login.html">Logout</a> -->
                            <form action="{{url("feedback/$row->id/delete")}}" method="post">
                              {{csrf_field()}}
                              {{method_field('DELETE')}}
                              <button type="submit" class="btn btn-primary">
                                Hapus
                              </button>
                            </form>
                          </div>
                        </div>
                      </div>
                    </div>
                    @endforeach
                  </tbody>
                </table>
                <!-- Modal -->

              </div>
            </div>
          </div>

        </div>
        <!-- /.container-fluid -->

      </div>
      <!-- End of Main Content -->

@endsection