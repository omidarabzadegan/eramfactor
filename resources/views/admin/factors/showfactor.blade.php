@extends('layouts.admin.master')
@section('content')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2 mt-4">
                    <div class="col-12">
                        <h1 class="m-0 text-dark">
                            <a class="nav-link drawer" data-widget="pushmenu" href="{{ Route('store.factor') }}"><i
                                    class="fa fa-bars"></i></a>
                            فاکتور ها
                            <a class="btn btn-primary float-left text-white py-2 px-4" href="users-add.php">افزودن فاکتور
                                جدید</a>
                        </h1>
                    </div><!-- /.col -->
                </div><!-- /.row -->
            </div><!-- /.container-fluid -->
        </div>
        <!-- /.content-header -->
        <div class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <h3 class="card-title">فاکتور مشتری {{ $factor['name'] }}</h3>
                            </div>
                            <br>
                            <div style="margin-right: 30px;" class="border-1">
                                نام : {{ $factor['name'] }}
                                <br>
                                <br>
                                <br>
                                شماره تماس : {{ $factor['phone'] }}
                                <br>
                                <br>
                                <br>
                                شناسه موبایل : {{ $factor['imei'] }}
                            </div>
                            <br>
                            <div class="d-inline-flex p-2 text-danger">{!! $law->description !!}</div>
                            <div class="d-flex justify-content-center"><button class="btn btn-primary btn-lg btn-block" onclick="window.print()">چاپ فاکتور</button></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
