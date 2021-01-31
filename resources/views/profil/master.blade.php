
@extends('layouts.dasbor')

@section('content')
    <div class="content-wrapper">
        <div class="card">
            <div class="card-body">

                <!-- Profile Image -->
                <div class="card card-primary card-outline">
                <div class="card-body box-profile">
                    <div class="text-center">
                    <img src="lte/dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
                    </div>

                    <h3 class="profile-username text-center">Yustinus Nugroho, S.T.</h3>

                    <p class="text-muted text-center">Bid. Aplikasi Informatika</p>

                    <ul class="list-group list-group-unbordered mb-3">
                    <li class="list-group-item">
                        <b>NIP</b> <a class="float-right">1985120120011001</a>
                    </li>
                    <li class="list-group-item">
                        <b>Nomor Telepon</b> <a class="float-right">08123456780</a>
                    </li>
                    <li class="list-group-item">
                        <b>Alamat</b> <a class="float-right">Jl. Damai No. 9 Yogyakarta, Indonesia</a>
                    </li>
                    </ul>

                    <a href="#" class="btn btn-primary btn-block"><b>Edit Data</b></a>
                </div>
                <!-- /.card-body -->
                </div>
                <!-- /.card -->

            <!-- /.card -->
            </div>
        </div>
    </div>


@endsection