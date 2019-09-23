@extends('layouts.master')

@section('content')
<section class="content-header">
      <h1>
        Rapat Koordinasi/Seminar
        <small>Preview</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Forms</a></li>
        <li class="active">General Elements</li>
      </ol>
</section>

<section class="content">
      <div class="row">
        <!-- left column -->
        <div class="col-md-6">
          <!-- general form elements -->
        <div class="box box-primary">
          <div class="box-header with-border">
              <h3 class="box-title">Data Kegiatan</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form role="form">
              <div class="box-body">
                <div class="form-group">
                    <label for="nameEvent2">Nama Acara</label>
                    <input type="text" class="form-control" id="nameEvent2" placeholder="Masukan Nama Acara">
                </div>
                <div class="form-group">
                    <label for="descEvent2">Deskripsi Acara</label>
                    <textarea class="form-control" id="descEvent2" placeholder="Tuliskan Deskripsi Acara"></textarea>
                </div>
                <div class="form-group">
                    <label for="dateDoc">Tanggal Pembuatan Dokumen</label>
                    <input type="month" class="form-control" id="dateDoc" placeholder="Pilih Tanggal Pembuatan Dokumen">
                </div>
                <div class="form-group">
                    <label for="descEvent2">Latar Belakang Acara</label>
                    <textarea class="form-control" id="descEvent2" placeholder="Tuliskan Latar Belakang Acara"></textarea>
                </div>
                <div class="form-group">
                    <label for="descEvent2">Tujuan Kegiatan</label>
                    <textarea class="form-control" id="descEvent2" placeholder="Tuliskan Tujuan Acara"></textarea>
                </div>
                <div class="form-group">
                  <label>Pilih Dokumen Penimbang</label>
                  <select class="form-control">
                    <option>option 1</option>
                    <option>option 2</option>
                  </select>
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
                  <div class="form-group">
                    <label for="numSpeaker">Jumlah Narasumber</label>
                    <input type="number" class="form-control" id="numSpeaker" placeholder="Tentukan Jumlah Narasumber">
                  </div>
                  
                      <div class="form-group">
                            <label for="nameSpeaker">Nama Narasumber</label>
                            <input type="text" class="form-control" id="nameSpeaker" placeholder="Tuliskan Nama Narasumber">
                      </div>
                      <div class="form-group">
                            <label for="posisitionSpeaker">Jabatan Narasumber</label>
                            <input type="text" class="form-control" id="positionSpeaker" placeholder="Tuliskan Jabatan Narasumber">
                      </div>
                      <div class="form-group">
                            <label for="topicSpeaker">Topik Narasumber</label>
                            <textarea class="form-control" id="topicSpeaker" placeholder="Tuliskan Topik Narasumber"></textarea>
                      </div>
                  <div class="form-group">
                        <label for="nameModerator">Nama Moderator</label>
                        <input type="text" class="form-control" id="nameModerator" placeholder="Tuliskan Nama Moderator">
                  </div>
                  <div class="form-group">
                        <label for="posisitionSpeaker">Jabatan Moderator </label>
                        <input type="text" class="form-control" id="positionSpeaker" placeholder="Tuliskan Jabatan Moderator">
                  </div>
                  </div>
                  <div class="box-footer">
                <button type="submit" class="btn btn-primary">Tambah Acara</button>
              </div>
              </div>
              <!-- /.box-body -->

              
            </form>
      
      
      
        </div>
      </div> 
      </div>
      <!-- /.row -->
</section>

@endsection('content')






