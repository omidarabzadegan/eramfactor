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

        <!-- Main content -->
        <div class="content">
            <div class="container-fluid">
                @include('errors.messages')
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <h3 class="card-title">لیست کاربران</h3>

                                <div class="card-tools">
                                    <form action={{ Route('all.factors') }}>
                                        <div class="input-group input-group-sm" style="width: 150px;">
                                            <input type="text" name="table_search" class="form-control float-right"
                                                placeholder="جستجو">

                                            <div class="input-group-append">
                                                <button type="submit" class="btn btn-default"><i
                                                        class="fa fa-search"></i></button>
                                            </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <!-- /.card-header -->
                        <div class="table table-striped table-valign-middle mb-0">
                            <table class="table table-hover mb-0">
                                <tbody>
                                    <tr>
                                        <th>آیدی</th>
                                        <th>نام و نام خانوادگی</th>
                                        <th>شماره تماس</th>
                                        <th>تاریخ ورود موبایل</th>
                                        <th>IMEI</th>
                                        <th>عملیات</th>
                                    </tr>
                                    @foreach ($factors as $factor)
                                        <tr>
                                            <td>{{ $factor->id }}</td>
                                            <td>{{ $factor->name }}</td>
                                            <td>{{ $factor->phone }}</td>
                                            <td>{{ $factor->created_at }}</td>
                                            <td>{{ $factor->imei }}</td>
                                            <td>
                                                <a href="#" class="btn btn-warning btn-icons"><i
                                                        class="fa fa-edit"></i></a>
                                                <a href="{{ Route('destroy.factor', $factor->id) }}"
                                                    class="btn btn-danger btn-icons"><i class="fa fa-trash"></i></a>
                                                <a href={{ Route('show.factor', $factor->id) }}
                                                    class="btn btn-primary btn-icons"><i class="fa fa-id-card"></i></a>
                                        </tr>
                                    @endforeach

                                </tbody>
                            </table>
                        </div>
                        <!-- /.card-body -->
                    </div>
                    <!-- /.card -->
                    <div class="d-flex justify-content-center">
                        <ul class="pagination mt-3">
                            {{ $factors->links('pagination::bootstrap-4') }}
                        </ul>
                    </div>
                </div>
            </div>
            <!-- /.row -->
        </div>
        <!-- /.container-fluid -->
    </div>
    <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->
@endsection
