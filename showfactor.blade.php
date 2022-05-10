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
                            <a class="btn btn-primary float-left margin-left-2 text-white py-2 px-4" href="users-add.php" data-toggle="modal" data-target="#exampleModalCenter">مشاهده جزئیات فاکتور
                                </a>
                                @if (isset($factor->device->password))
                                <button type="button" class="btn btn-dark float-left text-white py-2 px-4" disabled style="margin-left:20px">رمز دستگاه : {{ $factor->device->password }}</button>
                                @endif
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
                            @if (isset($law->description))
                                <div class="d-inline-flex p-2 text-danger">{!! $law->description !!}</div>
                            @endif
                            <div class="d-flex justify-content-center"><button class="btn btn-primary btn-lg btn-block"
                                    onclick="window.print()">چاپ فاکتور</button></div>
                        </div>
                    </div>
                </div>
            </div>
        

            <!-- Modal -->
            <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog"
                aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLongTitle">چک لیست موبایل</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <table class="table table-striped">
                                <thead>
                                  <tr>
                                    
                                    <th scope="col">قطعه</th>
                                    <th scope="col">وضعیت</th>
                                    
                                  </tr>
                                </thead>
                                <tbody>
                                    <tr>   
                                        <td>خاموشی دستگاه</td>
                                        <td>{{ $factor->device->onoff === 'not_checked' ? 'بررسی نشده' : ($factor->device->onoff === 'safe' ? 'روشن' : 'خاموش') }}</td>      
                                      </tr>
                                  <tr>   
                                    <td>تاچ آیدی و فیس آیدی</td>
                                    <td>{{ $factor->device->faceandtouch === 'not_checked' ? 'بررسی نشده' : ($factor->device->faceandtouch === 'safe' ? 'سالم' : 'خراب') }}</td>      
                                  </tr>

                                  <tr>   
                                    <td>وایرلس</td>
                                    <td>{{ $factor->device->wirless === 'not_checked' ? 'بررسی نشده' : ($factor->device->wirless === 'safe' ? 'سالم' : 'خراب') }}</td>      
                                  </tr>

                                  <tr>   
                                    <td>بلوتوث</td>
                                    <td>{{ $factor->device->bluetooth === 'not_checked' ? 'بررسی نشده' : ($factor->device->bluettooth === 'safe' ? 'سالم' : 'خراب') }}</td>      
                                  </tr>

                                  <tr>   
                                    <td>وویس رکورد</td>
                                    <td>{{ $factor->device->vocerecord === 'not_checked' ? 'بررسی نشده' : ($factor->device->vocerecord === 'safe' ? 'سالم' : 'خراب') }}</td>      
                                  </tr>

                                  <tr>   
                                    <td>دوربین جلو</td>
                                    <td>{{ $factor->device->camerafront === 'not_checked' ? 'بررسی نشده' : ($factor->device->camerafront === 'safe' ? 'سالم' : 'خراب') }}</td>      
                                  </tr>

                                  <tr>   
                                    <td>دوربین پشت</td>
                                    <td>{{ $factor->device->rearcamera === 'not_checked' ? 'بررسی نشده' : ($factor->device->rearcamera === 'safe' ? 'سالم' : 'خراب') }}</td>      
                                  </tr>

                                  <tr>   
                                    <td>میکروفون</td>
                                    <td>{{ $factor->device->speacker === 'not_checked' ? 'بررسی نشده' : ($factor->device->speacker === 'safe' ? 'سالم' : 'خراب') }}</td>      
                                  </tr>

                                  <tr>   
                                    <td>اسپیکر</td>
                                    <td>{{ $factor->device->speacker === 'not_checked' ? 'بررسی نشده' : ($factor->device->speacker === 'safe' ? 'سالم' : 'خراب') }}</td>      
                                  </tr>

                                  <tr>   
                                    <td>اسپیکر گوش</td>
                                    <td>{{ $factor->device->earspicker === 'not_checked' ? 'بررسی نشده' : ($factor->device->earspicker === 'safe' ? 'سالم' : 'خراب') }}</td>      
                                  </tr>

                                  <tr>   
                                    <td>سنسور مجاورت</td>
                                    <td>{{ $factor->device->proximitysensor === 'not_checked' ? 'بررسی نشده' : ($factor->device->proximitysensor === 'safe' ? 'سالم' : 'خراب') }}</td>      
                                  </tr>

                                  <tr>   
                                    <td>سنسور محیط</td>
                                    <td>{{ $factor->device->alssensor === 'not_checked' ? 'بررسی نشده' : ($factor->device->alssensor === 'safe' ? 'سالم' : 'خراب') }}</td>      
                                  </tr>

                                  <tr>   
                                    <td>تاچ</td>
                                    <td>{{ $factor->device->speacker === 'not_checked' ? 'بررسی نشده' : ($factor->device->speacker === 'safe' ? 'سالم' : 'خراب') }}</td>      
                                  </tr>

                                  <tr>   
                                    <td>ال سی دی</td>
                                    <td>{{ $factor->device->lcd === 'not_checked' ? 'بررسی نشده' : ($factor->device->lcd === 'safe' ? 'سالم' : 'خراب') }}</td>      
                                  </tr>
                                  
                                  <tr>   
                                    <td>کلید ها</td>
                                    <td>{{ $factor->device->keys === 'not_checked' ? 'بررسی نشده' : ($factor->device->keys === 'safe' ? 'سالم' : 'خراب') }}</td>      
                                  </tr>

                                  <tr>   
                                    <td>ویبره</td>
                                    <td>{{ $factor->device->vibrator === 'not_checked' ? 'بررسی نشده' : ($factor->device->vibrator === 'safe' ? 'سالم' : 'خراب') }}</td>      
                                  </tr>

                                  <tr>   
                                    <td>شارژر</td>
                                    <td>{{ $factor->device->speacker === 'not_checked' ? 'بررسی نشده' : ($factor->device->speacker === 'safe' ? 'سالم' : 'خراب') }}</td>      
                                  </tr>
                                  
                                  <tr>   
                                    <td>عملیات تماس</td>
                                    <td>{{ $factor->device->callfunction === 'not_checked' ? 'بررسی نشده' : ($factor->device->cullfunction === 'safe' ? 'سالم' : 'خراب') }}</td>      
                                  </tr>

                                  
                                </tbody>
                              </table>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">بستن</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
