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
                    <button type="button" class="btn btn-success btn-xs">Edit</button>
                    <button type="button" class="btn btn-danger btn-xs">Hapus</button>
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