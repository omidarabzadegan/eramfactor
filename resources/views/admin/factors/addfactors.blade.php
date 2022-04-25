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
                            <a class="nav-link drawer" data-widget="pushmenu" href="#"><i class="fa fa-bars"></i></a>
                            صدور فاکتور / افزودن

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
                <div class="row mt-5">
                    <div class="col-md-12">
                        <div class="card card-defualt">
                            <!-- form start -->
                            <form action="{{ Route('store.factor') }}" method="POST">
                                {{ csrf_field() }}
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>نام و نام خانوادگی</label>
                                                <input type="text" class="form-control" name="name" autocomplete="off"
                                                    placeholder="نام و نام خانوادگی را وارد کنید">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>شماره تماس</label>
                                                <input type="phone" class="form-control" name="phone" autocomplete="off"
                                                    placeholder="شماره تماس را وارد کنید">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>IMEI تلفن همراه</label>
                                                <input type="text" class="form-control" name="imei" autocomplete="off"
                                                    placeholder="IMEI موبایل را  را وارد کنید">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label> رمز دستگاه  (درصورت نداشتن رمز خالی بگذارید)</label>
                                                <input type="text" class="form-control" name="password" autocomplete="off"
                                                    placeholder="رمز موبایل را وارد کنید">
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="container">
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-md-4">
                                                <label>تاچ آیدی یا فیس آیدی</label>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="radio" name="faceandtouch" id=""
                                                        value="not_checked" checked>
                                                    <label class="form-check-label" for="">بررسی نشده</label>
                                                </div>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="radio" name="faceandtouch"
                                                        id="inlineRadio2" value="safe">
                                                    <label class="form-check-label" for="">سالم</label>
                                                </div>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="radio" name="faceandtouch"
                                                        id="inlineRadio2" value="broken">
                                                    <label class="form-check-label" for="">خراب</label>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <label>وایرلس</label>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="radio" name="wirless" id=""
                                                        value="not_checked" checked>
                                                    <label class="form-check-label" for="">بررسی نشده</label>
                                                </div>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="radio" name="wirless"
                                                        id="inlineRadio2" value="safe">
                                                    <label class="form-check-label" for="">سالم</label>
                                                </div>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="radio" name="wirless"
                                                        id="inlineRadio2" value="broken">
                                                    <label class="form-check-label" for="">خراب</label>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <label>بلوتوث</label>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="radio" name="bluetooth" id=""
                                                        value="not_checked" checked>
                                                    <label class="form-check-label" for="">بررسی نشده</label>
                                                </div>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="radio" name="bluetooth"
                                                        id="inlineRadio2" value="safe">
                                                    <label class="form-check-label" for="">سالم</label>
                                                </div>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="radio" name="bluetooth"
                                                        id="inlineRadio2" value="broken">
                                                    <label class="form-check-label" for="">خراب</label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="container">
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-md-4">
                                                <label>وویس رکورد</label>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="radio" name="voicerecord" id=""
                                                        value="not_checked" checked>
                                                    <label class="form-check-label" for="">بررسی نشده</label>
                                                </div>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="radio" name="voicerecord"
                                                        id="inlineRadio2" value="safe">
                                                    <label class="form-check-label" for="">سالم</label>
                                                </div>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="radio" name="voicerecord"
                                                        id="inlineRadio2" value="broken">
                                                    <label class="form-check-label" for="">خراب</label>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <label>دوربین جلو</label>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="radio" name="camerafront" id=""
                                                        value="not_checked" checked>
                                                    <label class="form-check-label" for="">بررسی نشده</label>
                                                </div>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="radio" name="camerafront"
                                                        id="inlineRadio2" value="safe">
                                                    <label class="form-check-label" for="">سالم</label>
                                                </div>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="radio" name="camerafront"
                                                        id="inlineRadio2" value="broken">
                                                    <label class="form-check-label" for="">خراب</label>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <label>دوربین پشت</label>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="radio" name="rearcamera" id=""
                                                        value="not_checked" checked>
                                                    <label class="form-check-label" for="">بررسی نشده</label>
                                                </div>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="radio" name="rearcamera"
                                                        id="inlineRadio2" value="safe">
                                                    <label class="form-check-label" for="">سالم</label>
                                                </div>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="radio" name="rearcamera"
                                                        id="inlineRadio2" value="broken">
                                                    <label class="form-check-label" for="">خراب</label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="container">
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-md-4">
                                                <label>میکروفون</label>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="radio" name="microphone" id=""
                                                        value="not_checked" checked>
                                                    <label class="form-check-label" for="">بررسی نشده</label>
                                                </div>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="radio" name="microphone"
                                                        id="inlineRadio2" value="safe">
                                                    <label class="form-check-label" for="">سالم</label>
                                                </div>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="radio" name="microphone"
                                                        id="inlineRadio2" value="broken">
                                                    <label class="form-check-label" for="">خراب</label>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <label>اسپیکر</label>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="radio" name="speacker" id=""
                                                        value="not_checked" checked>
                                                    <label class="form-check-label" for="">بررسی نشده</label>
                                                </div>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="radio" name="speacker"
                                                        id="inlineRadio2" value="safe">
                                                    <label class="form-check-label" for="">سالم</label>
                                                </div>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="radio" name="speacker"
                                                        id="inlineRadio2" value="broken">
                                                    <label class="form-check-label" for="">خراب</label>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <label>اسپیکر گوش</label>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="radio" name="earspeacker" id=""
                                                        value="not_checked" checked>
                                                    <label class="form-check-label" for="">بررسی نشده</label>
                                                </div>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="radio" name="earspeacker"
                                                        id="inlineRadio2" value="safe">
                                                    <label class="form-check-label" for="">سالم</label>
                                                </div>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="radio" name="earspeacker"
                                                        id="inlineRadio2" value="broken">
                                                    <label class="form-check-label" for="">خراب</label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="container">
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-md-4">
                                                <label>سنسور مجاورت</label>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="radio" name="proximitysensor" id=""
                                                        value="not_checked" checked>
                                                    <label class="form-check-label" for="">بررسی نشده</label>
                                                </div>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="radio" name="proximitysensor"
                                                        id="inlineRadio2" value="safe">
                                                    <label class="form-check-label" for="">سالم</label>
                                                </div>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="radio" name="proximitysensor"
                                                        id="inlineRadio2" value="broken">
                                                    <label class="form-check-label" for="">خراب</label>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <label>سنسور نور محیط</label>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="radio" name="alssensor" id=""
                                                        value="not_checked" checked>
                                                    <label class="form-check-label" for="">بررسی نشده</label>
                                                </div>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="radio" name="alssensor"
                                                        id="inlineRadio2" value="safe">
                                                    <label class="form-check-label" for="">سالم</label>
                                                </div>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="radio" name="alssensor"
                                                        id="inlineRadio2" value="broken">
                                                    <label class="form-check-label" for="">خراب</label>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <label>تاچ</label>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="radio" name="touch" id=""
                                                        value="not_checked" checked>
                                                    <label class="form-check-label" for="">بررسی نشده</label>
                                                </div>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="radio" name="touch"
                                                        id="inlineRadio2" value="safe">
                                                    <label class="form-check-label" for="">سالم</label>
                                                </div>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="radio" name="touch"
                                                        id="inlineRadio2" value="broken">
                                                    <label class="form-check-label" for="">خراب</label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="container">
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-md-4">
                                                <label>ال سی دی</label>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="radio" name="lcd" id=""
                                                        value="not_checked" checked>
                                                    <label class="form-check-label" for="">بررسی نشده</label>
                                                </div>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="radio" name="lcd"
                                                        id="inlineRadio2" value="safe">
                                                    <label class="form-check-label" for="">سالم</label>
                                                </div>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="radio" name="lcd"
                                                        id="inlineRadio2" value="broken">
                                                    <label class="form-check-label" for="">خراب</label>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <label>کلید ها</label>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="radio" name="keys" id=""
                                                        value="not_checked" checked>
                                                    <label class="form-check-label" for="">بررسی نشده</label>
                                                </div>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="radio" name="keys"
                                                        id="inlineRadio2" value="safe">
                                                    <label class="form-check-label" for="">سالم</label>
                                                </div>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="radio" name="keys"
                                                        id="inlineRadio2" value="broken">
                                                    <label class="form-check-label" for="">خراب</label>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <label>ویبره</label>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="radio" name="vibrator" id=""
                                                        value="not_checked" checked>
                                                    <label class="form-check-label" for="">بررسی نشده</label>
                                                </div>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="radio" name="vibrator"
                                                        id="inlineRadio2" value="safe">
                                                    <label class="form-check-label" for="">سالم</label>
                                                </div>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="radio" name="vibrator"
                                                        id="inlineRadio2" value="broken">
                                                    <label class="form-check-label" for="">خراب</label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="container">
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-md-4">
                                                <label>شارژ</label>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="radio" name="charging" id=""
                                                        value="not_checked" checked>
                                                    <label class="form-check-label" for="">بررسی نشده</label>
                                                </div>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="radio" name="charging"
                                                        id="inlineRadio2" value="safe">
                                                    <label class="form-check-label" for="">سالم</label>
                                                </div>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="radio" name="charging"
                                                        id="inlineRadio2" value="broken">
                                                    <label class="form-check-label" for="">خراب</label>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <label>عملیات تماس</label>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="radio" name="callfunction" id=""
                                                        value="not_checked" checked>
                                                    <label class="form-check-label" for="">بررسی نشده</label>
                                                </div>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="radio" name="callfunction"
                                                        id="inlineRadio2" value="safe">
                                                    <label class="form-check-label" for="">سالم</label>
                                                </div>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="radio" name="callfunction"
                                                        id="inlineRadio2" value="broken">
                                                    <label class="form-check-label" for="">خراب</label>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <label>خاموش یا روشن بودن </label>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="radio" name="onoff" id=""
                                                        value="not_checked" checked>
                                                    <label class="form-check-label" for="">بررسی نشده</label>
                                                </div>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="radio" name="onoff"
                                                        id="inlineRadio2" value="safe">
                                                    <label class="form-check-label" for="">سالم</label>
                                                </div>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="radio" name="onoff"
                                                        id="inlineRadio2" value="broken">
                                                    <label class="form-check-label" for="">خراب</label>
                                                </div>
                                            </div>
                                        </div>
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
