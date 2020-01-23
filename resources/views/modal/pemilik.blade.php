<div class="modal fade bd-example-modal-lg" id="modal-pemilik" tabindex="-1" role="dialog" aria-labelledby="modal-pemilik" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Pilih Pemilik</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="table-responsive">
          
        
          <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
            <thead>
              <tr>
                <th>Nama</th>
                <th>JK</th>                      
                <th>No HP</th>
                <th>Aksi</th>
               </tr>
              </thead>
              <tbody>
                @foreach ($resultpemilik as $rowpem)
                <tr>
                  <td>{{ $rowpem-> nama_user }}</td>
                  <td>{{ $rowpem-> jk_user }}</td>
                  <td>{{ $rowpem-> no_user }}</td>
                  <td>
                    <a href="#" class="pilih-pemilik btn btn-primary btn-user btn-block">Pilih</a>
                  </td>
                </tr>
                @endforeach
              </tbody>
          </table>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>