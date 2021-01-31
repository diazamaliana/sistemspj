<div class="card">
                <div class="card-header">
                    <h3 class="card-title">Daftar Dokumen Pendukung</h3>

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
                      <th>Nama Dokumen</th>
                      <th>Tanggal Pembuatan</th>
                      <th>Unduh Dokumen</th>
                      <th>Proses</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                        <td>1.</td>
                        <td>
                            SK PEMBICARA - Dr. Eng. Silmi Fauziati, S.T., M.T.,
                        </td>
                        <td>
                            20 Oktober 2019
                        </td>
                        <td>
                            <button type="button" class="btn btn-secondary px-3"><i class="fa fa-print" aria-hidden="true"></i> Unduh Dokumen</button>
                        </td>
                        <td>
                            <button type="button" class="btn btn-info btn-sm" data-toggle="modal" data-target="#editData">Edit</button>
                            @include('dokumen_pendukung.edit')
                            <button type="button" class="btn btn-danger btn-sm"data-toggle="modal" data-target="#deleteData">Hapus</button>
                            @include('dokumen_pendukung.delete')
                            
                        </td>
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