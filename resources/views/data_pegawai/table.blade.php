            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Daftar Pegawai Diskominfo DIY</h3>

                    <div class="card-tools">
                    <div class="input-group input-group-sm" style="width: 150px;">
                        <input type="text" name="table_search" class="form-control float-right" placeholder="Cari Data">

                        <div class="input-group-append">
                        <button type="submit" class="btn btn-default">
                            <i class="fas fa-search"></i>
                        </button>
                        </div>
                    </div>
                    </div>
                </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table class="table table-bordered">
                  <thead>
                    <tr>
                      <th style="width: 10px">#</th>
                      <th>Nama Pegawai</th>
                      <th>NIP</th>
                      <th>Bidang</th>
                      <th>Hak Akses</th>
                      <th>Proses</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td>1.</td>
                      <td>Yustinus Nugroho, S.T</td>
                      <td>1985120120011001</td>
                      <td>Bid. Aplikasi Informatika</td>
                      <td><small class="badge badge-danger">Administrator</small></td>
                      <td>
                        <button type="button" class="btn btn-info btn-sm" data-toggle="modal" data-target="#editData">Edit</button>
                        @include('data_pegawai.edit')
                    </td>
                    </tr>
                    <tr>
                      <td>2.</td>
                      <td>Drs. Bayu Februarino Putro </td>
                      <td>1978120120011001</td>
                      <td>Bid. Aplikasi Informatika</td>
                      <td><small class="badge badge-warning">Staff</small></td>
                      <td>
                        <button type="button" class="btn btn-info btn-sm" data-toggle="modal" data-target="#editData">Edit</button>
                        @include('data_pegawai.edit')
                        <button type="button" class="btn btn-danger btn-sm"data-toggle="modal" data-target="#deleteData">Hapus</button>
                        @include('data_pegawai.delete')

                    </tr>
                    <tr>
                      <td>3.</td>
                      <td>Dr. Sayuri Egaravanda, M. Eng. </td>
                      <td>1989120120011001</td>
                      <td>Bid. Informasi dan Komunikasi Publik</td>
                      <td><small class="badge badge-warning">Staff</small></td>
                      <td>
                        <button type="button" class="btn btn-info btn-sm" data-toggle="modal" data-target="#editData">Edit</button>
                        @include('data_pegawai.edit')
                        <button type="button" class="btn btn-danger btn-sm"data-toggle="modal" data-target="#deleteData">Hapus</button>
                        @include('data_pegawai.delete')
                    </tr>
                   
                  </tbody>
                </table>
              </div>
              <!-- /.card-body -->
              <div class="card-footer clearfix">
                <ul class="pagination pagination-sm m-0 float-right">
                  <li class="page-item"><a class="page-link" href="#">«</a></li>
                  <li class="page-item"><a class="page-link" href="#">1</a></li>
                  <li class="page-item"><a class="page-link" href="#">2</a></li>
                  <li class="page-item"><a class="page-link" href="#">3</a></li>
                  <li class="page-item"><a class="page-link" href="#">»</a></li>
                </ul>
              </div>
            </div>