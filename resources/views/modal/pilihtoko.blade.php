<div class="modal fade bd-example-modal-lg" id="modal-toko" tabindex="-1" role="dialog" aria-labelledby="modal-toko" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Pilih Toko</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="table-responsive">
          
        
          <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
            <thead>
              <tr>
                <th>Id Toko</th>
                <th>Nama Toko</th>
                <th>Pemilik Toko</th>
                <th>Aksi</th>
               </tr>
              </thead>
              <tbody>
                @foreach ($resultpemilik as $rowpem)
                <tr>
                  <td>{{ $rowpem-> id_toko }}</td>
                  <td>{{ $rowpem-> nama_toko }}</td>
                  <td>{{ $rowpem-> pemilik_toko }}</td>
                  <td>
                    <a href="#" class="pilih-toko btn btn-primary btn-user btn-block">Pilih</a>
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