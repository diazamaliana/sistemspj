@extends('layouts.dasbor')

@section('content')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
            <div class="col-sm-6">
                <h6 class="m-0 text-dark">Data Kegiatan</h6>
                <h1>Form Rapat Koordinasi</h1>
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
                <h3 class="card-title">Formulir Rapat Koordinasi</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form>
                <div class="card-body">
                  <div class="form-row">
                    <div class="form-group col-md-6">
                      <label for="event2">Nama Acara</label>
                      <input type="text" class="form-control" id="event2" placeholder="Masukkan nama acara/kegiatan">
                      <br>
                      <label for="descEvent2">Deskripsi Acara</label>
                      <textarea class="form-control" id="descEvent2" rows="2" placeholder="Tambahkan deskripsi acara"></textarea>
                      <br>
                      <label for="goalEvent2">Tujuan Kegiatan</label>
                      <input type="text" class="form-control" id="goalEvent2" placeholder="Tambahkan tujuan acara/kegiatan">
                      <br>
                      <label for="introEvent2">Latar Belakang</label>
                      <textarea class="form-control" id="introEvent2" rows="2" placeholder="Tambahkan latar belakang acara"></textarea>
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
                      <div class="form-row">
                          <div class="form-group col-md-4">
                              <label for="naraName">Nama Narasumber</label>
                              <input type="text" class="form-control" id="nara1Name" placeholder="Masukkan nama narasumber">
                          </div>
                          <div class="form-group col-md-4">
                          <label for="naraLevel">Jabatan</label>
                              <input type="text" class="form-control" id="naraLevel" placeholder="Jabatan Narasumber/Instansi">
                          </div>
                          <div class="form-group col-md-4">
                          <br>
                                <button type="button" class="btn btn-info float-right"><i class="fas fa-plus"></i> Narasumber</button>
                          </div>
                      </div>
                      <label for="naraTopic">Topik</label>
                      <input type="text" class="form-control" id="naraTopic" placeholder="Topik Narasumber/Instansi">
                      <br>
                      <label for="noteEvent2">Notulensi</label>
                      <textarea class="form-control" id="noteEvent2" rows="5" placeholder="Tambahkan notulensi acara kegiatan (Boleh diisi setelah acara kegiatan) "></textarea>
                      
                    </div>
                    <div class="form-group col-md-6">
                      <label for="pjEvent2">Ketua Pelaksana</label>
                      <input type="text" class="form-control" id="pjEvent2" placeholder="Tambahkan nama ketua pelaksana">
                      <br>
                      <label for="nip">NIP</label>
                      <input type="text" class="form-control" id="pjEvent2" placeholder="Tambahkan NIP ketua pelaksana">
                      <br>
                      <br>
                      <label for="formGroupExampleInput">Dokumen Penanggung Biaya</label>
                        <select id="inputState" class="form-control">
                            <option selected>Pilih...</option>
                            <option>Dinas Kominfo DIY</option>
                            <option>APBD</option>
                        </select>
                        <br>    
                      <div class="form-group" data-select2-id="15">
                        <label>Dokumen Pendukung</label>
                        <select multiple name="event_type[]" class="form-control select2-purple" id="selectEvents">
                        <option ></option>
                        </select>
                     </div>
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