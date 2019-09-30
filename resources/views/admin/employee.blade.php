@extends('layouts.master')

@section('content')
<section class="content-header">
      <h1>
        Data Pegawai        
        <button type="button" class="btn btn-default pull-right" data-toggle="modal" data-target="#addEmployee">Tambah Pegawai <i class="fa fa-plus pull-left"></i></button>

          <!-- Modal -->
          <div id="addEmployee" class="modal fade" role="dialog">
            <div class="modal-dialog">
              <!-- konten modal-->
              <div class="modal-content">
                <!-- heading modal -->
                <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal">&times;</button>
                  <h4 class="modal-title">Tambah Pegawai</h4>
                </div>
                <!-- body modal -->
                <form method="post">
                <div class="modal-body">
                    <div class="form-group">
                        <h4 for="fullName">Nama Lengkap</h4>
                        <input type="text" class="form-control" id="fullName" placeholder="Masukan Nama Lengkap">
                    </div>
                    <div class="form-group">
                        <h4 for="NIP">NIP</h4>
                        <input type="text" class="form-control" id="nip" placeholder="Masukan NIM">
                    </div>
                    <div class="form-group">
                        <h4 for="division">Bidang</h4>
                        <select class="form-control">
                            <option>Sekretaris</option>
                            <option>Informasi dan Komunikasi Publik</option>
                            <option>Layanan Teknologi Informatika</option>
                            <option>Aplikasi Informatika</option>
                            <option>Keamanan dan Informasi Persandian</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <h4 for="newPass">Password</h4>
                        <input type="password" class="form-control" placeholder="Password">
                    </div>
                    <div class="form-group">
                        <h4 for="rePass">Retype Password</h4>
                        <input type="password" class="form-control" placeholder="Retype password">
                    </div>
                </div>
                </form>
                <!-- footer modal -->
                <div class="modal-footer">
                  <button type="button" class="btn btn-success" data-dismiss="modal">Simpan</button>
                </div>
              </div>
            </div>
          </div>
      </h1>
      

</section>
<section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <!-- /.box-header -->
            <div class="box-body table-responsive no-padding">
              <table class="table table-hover">
                <tbody><tr>
                  <th>ID</th>
                  <th>Nama Pegawai</th>
                  <th>NIP</th>
                  <th>Bidang</th>
                  <th>Proses</th></tr>
                  <tr>
                  <td>001</td>
                  <td>Yustinus</td>
                  <td>19808008101882</td>
                  <td>Sekretaris</td>
                  <td>
                    <button type="button" class="btn btn-success btn-xs" data-toggle="modal" data-target="#editEmployee">Edit</button>
                     <!-- Modal -->
                          <div id="editEmployee" class="modal fade" role="dialog">
                            <div class="modal-dialog">
                              <!-- konten modal-->
                              <div class="modal-content">
                                <!-- heading modal -->
                                <div class="modal-header">
                                  <button type="button" class="close" data-dismiss="modal">&times;</button>
                                  <h4 class="modal-title">Edit Data Pegawai</h4>
                                </div>
                                <!-- body modal -->
                                <form method="post">
                                <div class="modal-body">
                                    <div class="form-group">
                                        <h4 for="fullName">Nama Lengkap</h4>
                                        <input type="text" class="form-control" id="fullName" placeholder="Masukan Nama Lengkap">
                                    </div>
                                    <div class="form-group">
                                        <h4 for="NIP">NIP</h4>
                                        <input type="text" class="form-control" id="nip" placeholder="Masukan NIM">
                                    </div>
                                    <div class="form-group">
                                        <h4 for="division">Bidang</h4>
                                        <select class="form-control">
                                            <option>Sekretaris</option>
                                            <option>Informasi dan Komunikasi Publik</option>
                                            <option>Layanan Teknologi Informatika</option>
                                            <option>Aplikasi Informatika</option>
                                            <option>Keamanan dan Informasi Persandian</option>
                                  </select>
                                    </div>
                                    <div class="form-group">
                                        <h4 for="newPass">Password</h4>
                                        <input type="password" class="form-control" placeholder="Password">
                                    </div>
                                    <div class="form-group">
                                        <h4 for="rePass">Retype Password</h4>
                                        <input type="password" class="form-control" placeholder="Retype password">
                                    </div>
                                </div>
                                </form>
                                <!-- footer modal -->
                                <div class="modal-footer">
                                  <button type="button" class="btn btn-success" data-dismiss="modal">Simpan</button>
                                </div>
                              </div>
                            </div>
                          </div>

                    <button type="button" class="btn btn-danger btn-xs"data-toggle="modal" data-target="#dltEmployee">Hapus</button>
                    <!-- Modal -->
                          <div id="dltEmployee" class="modal modal-danger fade" role="dialog">
                            <div class="modal-dialog">
                              <!-- konten modal-->
                              <div class="modal-content">
                                <!-- heading modal -->
                                <div class="modal-header">
                                  <button type="button" class="close" data-dismiss="modal">&times;</button>
                                  <h4 class="modal-title">Hapus Data Pegawai</h4>
                                </div>
                                <!-- body modal -->
                                <div class="modal-body">
                                    <p> Anda yakin ingin menghapus pegawai ini? </p>
                                </div>
                                </form>
                                <!-- footer modal -->
                                <div class="modal-footer">
                                  <button type="button" class="btn btn-success" data-dismiss="modal">Ya</button>
                                </div>
                              </div>
                            </div>
                          </div>

                  </td>
                  </tr>
              </tbody></table>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
      </div>
</section>

@endsection('content')