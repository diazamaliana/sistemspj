@extends('layouts.master')

@section('content')
<div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Rapat Biasa</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form role="form">
              <div class="box-body">
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
                    <label for="participant">Jumlah Peserta</label>
                    <input type="number" class="form-control" id="participant" placeholder="Tentukan Jumlah Peserta">
                </div>
                <div class="form-group">
                    <label for="note">Notulensi</label>
                    <textarea class="form-control" id="Notulensi" placeholder="Tuliskan Notulensi Acara (Dapat diisi setelah selesai acara)"></textarea>
                </div>
              </div>
              <!-- /.box-body -->

              <div class="box-footer">
                <button type="submit" class="btn btn-primary">Simpan</button>
              </div>
            </form>
          </div>
@endsection('content')






