<!-- Modal -->
<div class="modal fade" id="editData" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Edit Dokumen</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
            <form>
                <div class="form-group">
                    <label for="formGroupExampleInput">Nama Dokumen</label>
                    <input type="text" class="form-control" id="formGroupExampleInput" placeholder="SK Pembicara Seminar">
                    <br>
                    <label for="formGroupExampleInput">Tanggal Pembuatan Dokumen</label>
                    <input type="date" class="form-control" id="formGroupExampleInput" placeholder="1986102820071001">
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
        <button type="button" class="btn btn-success">Simpan Perubahan</button>
      </div>
    </div>
  </div>
</div>