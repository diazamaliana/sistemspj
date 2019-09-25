@extends('layouts.master')

@section('content')
<section class="content-header">
      <h1>
        Data Pegawai
        <button type="button" class="btn btn-default pull-right"><i class="fa fa-plus"></i> Tambah Anggota </button>
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
                  <th>Divisi</th>
                  <th>Proses</th>
              </tbody></table>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
      </div>
</section>

@endsection('content')