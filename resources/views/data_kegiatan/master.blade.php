@extends('layouts.dasbor')

@section('content')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0 text-dark">Data Kegiatan</h1>
            </div><!-- /.col -->
           
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
        </div>
        <!-- /.content-header -->

        <!-- Main content -->
        <section class="content">
        <div class="container-fluid">
            @include('data_kegiatan.table')
            
        </div><!-- /.container-fluid -->
        </section>
        <!-- /.content -->
    </div>
@endsection

