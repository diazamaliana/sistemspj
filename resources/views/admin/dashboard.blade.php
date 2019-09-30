@extends('layouts.master')

@section('content')
<section class="content-header">
      <h1>
        Dashboard
      </h1>

</section>
<section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Daftar Kegiatan</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body table-responsive ">
              <table class="table table-hover pull-left">
                <tbody>
                <tr>
                  <th>ID</th>
                  <th>Data Kegiatan</th>
                  <th>Data Pelaksana</th>
                  <th>Unduh Dokumen</th>
                  <th>Proses</th>
                </tr>
                <tr>
                  <td>001</td>
                  <td>
                    <div class="body-group pull-left">
                      <p><i class="fa fa-tag pull-left"></i><b> Jenis Kegiatan : </b> Rapat Biasa</p>
                      <p><i class="fa fa-book pull-left"></i><b> Nama Acara     : </b> Rapat Biasa terkait Pembuatan SI</p>
                      <p><i class="fa fa-calendar pull-left"></i><b> Tanggal Mulai Acara:</b> 1 Oktober 2019 </p>
                      <p><b>Waktu Mulai Acara  :</b> 08.00<i class="fa fa-clock-o pull-left"></i></p>
                      <p><i class="fa fa-calendar pull-left"></i><b> Tanggal Selesai Acara:</b> 1 Oktober 2019 </p>
                      <p><b>Waktu Selesai Acara  : </b>09.00 <i class="fa fa-clock-o pull-left"></i></p>
                      <p><i class="fa fa-map-pin pull-left"></i><b> Tempat Acara    : </b> Ruang DCS Diskominfo DIY</p>
                    </div>
                  </td>
                  <td>
                    <div class="body-group pull-justify">
                      <p><i class="fa fa-user pull-left"></i><b> Ketua Pelaksana  : </b> Yustinus</p>
                      <p><i class="fa fa-database pull-left"></i><b> NIM : </b> 198910281095672001</p>
                    </div>
                  </td>
                  <td>
                    <div class="body-group pull-left">
                      <a class="btn btn-block btn-default btn-xm"><i class="fa fa-print pull-left"></i>  Daftar Hadir </a>
                      <a class="btn btn-block btn-default btn-xm"><i class="fa fa-print pull-left"></i>  Notulensi </a>
                    </div>
                  </td>
                  <td>
                    <button type="button" class="btn btn-success btn-xs" data-toggle="modal" data-target="#editEvent1">Edit</button>
                    
                     <!-- Modal -->
                          <div id="editEvent1" class="modal fade" role="dialog">
                            <div class="modal-dialog">
                              <!-- konten modal-->
                              <div class="modal-content">
                                <!-- heading modal -->
                                <div class="modal-header">
                                  <button type="button" class="close" data-dismiss="modal">&times;</button>
                                  <h4 class="modal-title">Edit Data Kegiatan</h4>
                                </div>
                                <!-- body modal -->
                                <form method="post">
                                <div class="modal-body">
                                <div class="form-group">
                                    <label for="nameEvent1">Nama Acara</label>
                                    <input type="text" class="form-control" id="nameEvent1" placeholder="Masukan Nama Acara">
                                </div>
                                <div class="form-group">
                                    <label for="descEvent1">Deskripsi Acara</label>
                                    <textarea class="form-control" id="descEvent1" placeholder="Tuliskan Deskripsi Acara"></textarea>
                                </div>
                                <div class="form-group">
                                    <label for="dateDoc">Tanggal Pembuatan Dokumen</label>
                                    <input type="month" class="form-control" id="dateDoc" placeholder="Pilih Tanggal Pembuatan Dokumen">
                                </div>
                                <div class="form-group">
                                    <label for="startDate">Tanggal Acara Mulai</label>
                                    <input type="datetime-local" class="form-control" id="startDate" placeholder="Pilih Tanggal Acara di Mulai">
                                </div>
                                <div class="form-group">
                                    <label for="endDate">Tanggal Acara Selesai</label>
                                    <input type="datetime-local" class="form-control" id="endDate" placeholder="Pilih Tanggal Acara Berakhir">
                                </div>
                                <div class="form-group">
                                    <label for="placeEvent1">Tempat Acara</label>
                                    <input type="text" class="form-control" id="placeEvent1" placeholder="Masukan Tempat Acara">
                                </div>
                                <div class="form-group">
                                    <label for="participant">Jumlah Peserta</label>
                                    <input type="number" class="form-control" id="participant" placeholder="Tentukan Jumlah Peserta">
                                </div>
                                <div class="form-group">
                                    <label for="note">Notulensi</label>
                                    <textarea class="form-control" id="Notulensi" placeholder="Tuliskan Notulensi Acara (Dapat diisi setelah selesai acara)"></textarea>
                                </div>
                                <div class="box-header with-border">
                                  <h3 class="box-title">Data Pelaksana</h3>
                                </div>
                                  <div class="form-group">
                                        <label for="head">Ketua Pelaksana</label>
                                        <input type="text" class="form-control" id="head" placeholder="Tuliskan Nama Ketua/Penanggungjawab">
                                  </div>
                                  <div class="form-group">
                                        <label for="nip">NIP</label>
                                        <input type="text"class="form-control" id="head" placeholder="Tuliskan Nama Ketua/Penanggungjawab">
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
                    <button type="button" class="btn btn-danger btn-xs"data-toggle="modal" data-target="#dltEvent1">Hapus</button>
                     <!-- Modal -->
                     <div id="dltEvent1" class="modal modal-danger fade" role="dialog">
                            <div class="modal-dialog">
                              <!-- konten modal-->
                              <div class="modal-content">
                                <!-- heading modal -->
                                <div class="modal-header">
                                  <button type="button" class="close" data-dismiss="modal">&times;</button>
                                  <h4 class="modal-title">Hapus Data Kegiatan</h4>
                                </div>
                                <!-- body modal -->
                                <div class="modal-body">
                                    <p> Anda yakin ingin menghapus data kegiatan ini? </p>
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

                <tr>
                  <td>002</td>
                  <td>
                    <div class="body-group pull-left">
                      <p><i class="fa fa-tag pull-left"></i><b> Jenis Kegiatan : </b> Rapat Koordinasi</p>
                      <p><i class="fa fa-book pull-left"></i><b> Nama Acara     : </b> Rapat Pembahasan SDGS</p>
                      <p><i class="fa fa-calendar pull-left"></i><b> Tanggal Mulai Acara:</b> 22 April 2019 </p>
                      <p><b>Waktu Mulai Acara  :</b> 16.30 <i class="fa fa-clock-o pull-left"></i></p>
                      <p><i class="fa fa-calendar pull-left"></i><b> Tanggal Selesai Acara:</b> 22 April 2019  </p>
                      <p><b>Waktu Selesai Acara  :</b> 18.00 <i class="fa fa-clock-o pull-left"></i></p>
                      <p><i class="fa fa-map-pin pull-left"></i><b> Tempat Acara    : </b> Ruang DCS Diskominfo DIY</p>
                    </div>
                  </td>
                  <td>
                    <div class="body-group pull-justify">
                      <p><i class="fa fa-user pull-left"></i><b> Ketua Pelaksana  : </b> Ir. RONY PRIMANTO HARI, MT</p>
                      <p><i class="fa fa-database pull-left"></i><b> NIM : </b> 196112071990031002</p>
                    </div>
                  </td>
                  <td>
                    <div class="body-group pull-left">
                      <a class="btn btn-block btn-default btn-xm"><i class="fa fa-print pull-left"></i>  Daftar Hadir </a>
                      <a class="btn btn-block btn-default btn-xm"><i class="fa fa-print pull-left"></i>  Notulensi </a>
                      <a class="btn btn-block btn-default btn-xm"><i class="fa fa-print pull-left"></i>  SK Narasumber </a>
                      <a class="btn btn-block btn-default btn-xm"><i class="fa fa-print pull-left"></i>  TOR </a>
                    </div>
                  </td>
                  <td>
                    <button type="button" class="btn btn-success btn-xs">Edit</button>
                    <button type="button" class="btn btn-danger btn-xs">Hapus</button>
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