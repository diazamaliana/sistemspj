<div class="card">
                <div class="card-header">
                    <h3 class="card-title">Daftar Kegiatan Diskominfo DIY</h3>

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
                      <th>Data Kegiatan</th>
                      <th>Data Pelaksana</th>
                      <th>Unduh Dokumen</th>
                      <th>Proses</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                        <td>1.</td>
                        <td>
                            <i class="fas fa-tag fa-1x"></i><b> Jenis Kegiatan:</b>Rapat Rutin
                            <br>
                            <i class="fas fa-book fa-1x"></i><b> Nama Acara:</b> Pembuatan Sistem Informasi
                            <br>
                            <i class="fas fa-calendar fa-1x"></i><b> Tanggal Mulai Acara:</b> 1 Oktober 2019
                            <br>
                            <i class="fas fa-clock fa-1x"></i><b> Waktu Mulai Acara:</b> 08:00 WIB
                            <br>
                            <i class="fas fa-calendar fa-1x"></i><b> Tanggal Selesai Acara:</b> 1 Oktober 2019
                            <br>
                            <i class="fas fa-clock fa-1x"></i><b> Waktu Selesai Acara:</b> 09:30 WIB
                            <br>
                            <i class="fas fa-home fa-1x"></i><b> Tempat Acara:</b> Ruang DCS Diskominfo
                        </td>
                        <td>
                            <i class="fas fa-user fa-1x"></i><b> Ketua Pelaksana:</b>Yustinus Nugroho, S.T.
                            <br>
                            <i class="fas fa-id-card fa-1x"></i><b> NIM:</b> 1985120120011001
                        </td>
                        <td>
                            <button type="button" class="btn btn-secondary px-3"><i class="fa fa-print" aria-hidden="true"></i> Daftar Hadir</button>
                            <br>
                            <br>
                            <button type="button" class="btn btn-secondary px-3"><i class="fa fa-print" aria-hidden="true"></i> Notulensi</button>
                        </td>
                        <td>
                            <a href="{{url('/edit-pembuatan-sistem-informasi')}}" class="btn btn-info btn-sm">Edit</a>
                            <button type="button" class="btn btn-danger btn-sm"data-toggle="modal" data-target="#deleteData">Hapus</button>
                            @include('data_kegiatan.delete')
                            
                        </td>
                    </tr>
                    <tr>
                    <td>2.</td>
                        <td>
                            <i class="fas fa-tag fa-1x"></i><b> Jenis Kegiatan:</b>Rapat Koordinasi
                            <br>
                            <i class="fas fa-book fa-1x"></i><b> Nama Acara:</b> Pembahasan SDGS
                            <br>
                            <i class="fas fa-calendar fa-1x"></i><b> Tanggal Mulai Acara:</b> 22 April 2019
                            <br>
                            <i class="fas fa-clock fa-1x"></i><b> Waktu Mulai Acara:</b> 08:00 WIB
                            <br>
                            <i class="fas fa-calendar fa-1x"></i><b> Tanggal Selesai Acara:</b> 22 April 2019
                            <br>
                            <i class="fas fa-clock fa-1x"></i><b> Waktu Selesai Acara:</b> 11:00 WIB
                            <br>
                            <i class="fas fa-home fa-1x"></i><b> Tempat Acara:</b> Ruang DCS Diskominfo
                        </td>
                        <td>
                            <i class="fas fa-user fa-1x"></i><b> Ketua Pelaksana:</b>Ir. Rony Primanto Hari, M.T.
                            <br>
                            <i class="fas fa-id-card fa-1x"></i><b> NIM:</b> 1985120120011001
                        </td>
                        <td>
                            <button type="button" class="btn btn-secondary px-3"><i class="fa fa-print" aria-hidden="true"></i> Daftar Hadir</button>
                            <br>
                            <br>
                            <button type="button" class="btn btn-secondary px-3"><i class="fa fa-print" aria-hidden="true"></i> Notulensi</button>
                            <br>
                            <br>
                            <button type="button" class="btn btn-secondary px-3"><i class="fa fa-print" aria-hidden="true"></i> SK Pembicara</button>
                            <br>
                            <br>
                            <button type="button" class="btn btn-secondary px-3"><i class="fa fa-print" aria-hidden="true"></i> TOR</button>
                        </td>
                        <td>
                            <a href="{{url('/edit-pembuatan-sistem-informasi')}}" class="btn btn-info btn-sm">Edit</a>
                            <button type="button" class="btn btn-danger btn-sm"data-toggle="modal" data-target="#deleteData">Hapus</button>
                            @include('data_kegiatan.delete')
                            
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