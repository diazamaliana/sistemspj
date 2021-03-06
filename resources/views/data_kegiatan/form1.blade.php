@extends('layouts.dasbor')

@section('content')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
            <div class="col-sm-6">
                <h6 class="m-0 text-dark">Data Kegiatan</h6>
                <h1>Form Rapat Rutin</h1>
            </div><!-- /.col -->
           
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
        </div>
        <!-- /.content-header -->

        <!-- Main content -->
        <section class="content">
        <div class="container-fluid">
        <div class="col-md-12">
            <!-- general form elements -->
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Formulir Rapat Rutin</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form>
                <div class="card-body">
                  <div class="form-row">
                    <div class="form-group col-md-6">
                      <label for="event1">Nama Acara</label>
                      <input type="text" class="form-control" id="event1" placeholder="Masukkan nama acara/kegiatan">
                      <br>
                      <label for="descEvent1">Deskripsi Acara</label>
                      <textarea class="form-control" id="descEvent1" rows="2" placeholder="Tambahkan deskripsi acara"></textarea>
                      <br>
                      <label for="dateDoc1">Tanggal Pembuatan Dokumen</label>
                      <input type="date" class="form-control" id="dateDoc1" placeholder="">
                      <br>
                      <div class="form-row">
                          <div class="form-group col-md-6">
                              <label for="dateStart">Tanggal Mulai Acara</label>
                              <input type="date" class="form-control" id="dateStart" placeholder="Masukkan nama acara/kegiatan">
                              <br>
                              <label for="dateEnd">Tanggal Selesai Acara</label>
                              <input type="date" class="form-control" id="dateEnd" placeholder="Masukkan nama acara/kegiatan">
                          </div>
                          <div class="form-group col-md-6">
                              <label for="timeStart">Waktu Mulai Acara</label>
                              <input type="time" class="form-control" id="timeStart" placeholder="Masukkan nama acara/kegiatan">
                              <br>
                              <label for="timeEnd">Waktu Selesai Acara</label>
                              <input type="time" class="form-control" id="timeEnd" placeholder="Masukkan nama acara/kegiatan">
                          </div>
                      </div>
                      <label for="place1">Tempat Acara</label>
                      <input type="text" class="form-control" id="place1" placeholder="Masukkan nama ruang atau tempat acara/kegiatan diadakan">
                      <br>
                      <label for="participant1">Jumlah Peserta</label>
                      <input type="number" class="form-control" id="participant1" placeholder="Tentukan jumlah peserta">
                      <br>
                      <label for="noteEvent1">Notulensi</label>
                      <textarea class="form-control" id="noteEvent1" rows="5" placeholder="Tambahkan notulensi acara kegiatan (Boleh diisi setelah acara kegiatan) "></textarea>
                      
                    </div>
                    <div class="form-group col-md-6">
                      <label for="pjEvent1">Ketua Pelaksana</label>
                      <input type="text" class="form-control" id="pjEvent1" placeholder="Tambahkan nama ketua pelaksana">
                      <br>
                      <label for="nip">NIP</label>
                      <input type="text" class="form-control" id="pjEvent1" placeholder="Tambahkan NIP ketua pelaksana">
                    </div>
                  </div>
                  
                </div>
                <!-- /.card-body -->
                <div class="card-footer text-right">
                  <button type="submit" class="btn btn-primary">Simpan</button>
                </div>
              </form>
            </div>
            <!-- /.card -->

            
            </div>
            <!-- /.card -->

          </div>
            
        </div><!-- /.container-fluid -->
        </section>
        <!-- /.content -->
    </div>
@endsection