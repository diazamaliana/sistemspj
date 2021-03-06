@extends('layouts.dasbor')

@section('content')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0 text-dark">Data Pegawai</h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#addData">
                        <i class="fas fa-plus"></i> Tambah Pegawai
                    </button>
                    @include('data_pegawai.add')
                </ol>
            </div>
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
        </div>
        <!-- /.content-header -->

        <!-- Main content -->
        <section class="content">
        <div class="container-fluid">
            @include('data_pegawai.table')
            
        </div><!-- /.container-fluid -->
        </section>
        <!-- /.content -->
    </div>
@endsection
