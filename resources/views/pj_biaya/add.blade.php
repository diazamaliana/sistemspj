<!-- Modal -->
<div class="modal fade" id="addData" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Tambah Penanggung Biaya</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
            <form>
                <div class="form-group">
                    <label for="formGroupExampleInput">Nama Penanggung Biaya</label>
                    <input type="text" class="form-control" id="formGroupExampleInput" placeholder="Dinas Kominfo DIY">
                    <br>
                    <label for="formGroupExampleInput">Alamat Penanggung Biaya</label>
                    <textarea type="text" class="form-control" id="formGroupExampleInput"  placeholder="Jl. Brigjen Katamso, Keparakan, Kec. Mergangsan, Kota Yogyakarta, Daerah Istimewa Yogyakarta 55152"></textarea> 
                    <br>
                    <label for="formGroupExampleInput">Unggah Dokumen</label>
                        <div class="input-group mb-3">
                            <div class="custom-file">
                                <input type="file" class="custom-file-input" id="inputGroupFile02">
                                <label class="custom-file-label" for="inputGroupFile02">Pilih Berkas</label>
                            </div>
                            <div class="input-group-append">
                                <span class="input-group-text">Unggah</span>
                            </div>
                        </div>
                        <small id="emailHelp" class="form-text text-muted">Ukuran berkas maks.5MB</small>
                    <br>
                </div>
            </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
        <button type="button" class="btn btn-success">Simpan</button>
      </div>
    </div>
  </div>
</div>