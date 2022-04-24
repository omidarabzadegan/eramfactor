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
                @if (!isset($law))
                    <div class="alert alert-info" role="alert">
                        شما مجاز به ثبت قانون هستید ، اما فقط یک بار این امکان را دارید
                    </div>
                @else
                    <div class="alert alert-danger" role="alert">
                        ثبت قانون جدید مجاز نیست<br>
                        درصورتی که میخواهید مجدد قانونی وارد کنید بر روی <a href="{{ Route('destroy.laws') }}">اینجا</a>
                        کلیک کنید
                    </div>
                @endif
                <div class="row mt-5">
                    <div class="col-md-12">
                        <div class="card card-defualt">
                            <!-- form start -->
                            <form action={{ Route('store.laws') }} method="post">
                                @csrf
                                <div class="card-body">
                                    <div class="row">
                                    </div>
                                    <div class="form-group">
                                        <label>قانون خود را بنویسید</label>
                                        <textarea name="description" id="editor"></textarea>
                                    </div>
                                </div>
                                <!-- /.card-body -->

                                <div class="card-footer">
                                    <button type="submit" class="btn btn-primary float-left">ذخیره کردن</button>
                                </div>
                            </form>
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
