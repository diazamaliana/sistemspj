<!-- Modal -->
<div class="modal fade" id="addData" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Tambah Data Pegawai</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
            <form>
                <div class="form-group">
                    <label for="formGroupExampleInput">Nama Lengkap</label>
                    <input type="text" class="form-control" id="formGroupExampleInput" placeholder="Drs. Joko Anwar">
                    <br>
                    <label for="formGroupExampleInput">NIP</label>
                    <input type="text" class="form-control" id="formGroupExampleInput" placeholder="1986102820071001">
                    <br>
                    <label for="formGroupExampleInput">Bidang</label>
                    <select id="inputState" class="form-control">
                        <option selected>Pilih...</option>
                        <option>Kepala Dinas</option>
                        <option>Sekretaris</option>
                        <option>Bid. Informasi dan Komunikasi Publik</option>
                        <option>Bid. Aplikasi Informatika</option>
                        <option>Bid. Keamanan Informasi dan Persandian</option>
                    </select>    
                    <br>
                    <label for="formGroupExampleInput">Password</label>
                    <input type="text" class="form-control" id="formGroupExampleInput" placeholder="Password">
                    <br>
                    <label for="formGroupExampleInput">Re-type Password</label>
                    <input type="text" class="form-control" id="formGroupExampleInput" placeholder="Ulangi Password">
                    <br>
                    <label for="formGroupExampleInput">Hak Akses</label>
                    <select id="inputState" class="form-control">
                        <option selected>Pilih...</option>
                        <option>Administrator</option>
                        <option>Staff</option>
                    </select>    
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