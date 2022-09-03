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
                            <a class="btn btn-primary float-left text-white py-2 px-4"
                                href="{{ Route('add.factor') }}">افزودن فاکتور
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
                                <h3 class="card-title">لیست دستگاه ها</h3>

                                <div class="card-tools">
                                    <form action={{ Route('all.factors') }}>
                                        <div class="input-group input-group-sm" style="width: 150px;">
                                            <div class="input-group input-group-sm" style="width: 150px;">
                                                <input type="text" id="myInput" class="form-control float-right" onkeyup="myFunction()" placeholder="جستجو ...">
    

                                            <div class="input-group-append">
                                                <button type="submit" class="btn btn-default"><i
                                                        class="fa fa-search"></i></button>
                                            </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <!-- /.card-header -->
                        <div class="table table-striped table-valign-middle mb-0" id="myTable">
                            <table class="table table-hover mb-0">
                                <tbody>
                                    <tr>
                                        <th>نام و نام خانوادگی</th>
                                        <th>شماره تماس</th>
                                        <th>تاریخ ورود موبایل</th>
                                        <th>وضعیت</th>
                                        <th>IMEI</th>
                                        <th>عملیات</th>
                                    </tr>
                                    @foreach ($factors as $factor)
                                        <tr>
                                            <td>{{ $factor->customer->name }}</td>
                                            <td>{{ $factor->customer->phone }}</td>
                                            <td>{{ \Morilog\Jalali\Jalalian::forge($factor->created_at)->format('Y-m-d') }}
                                            </td>
                                            <td>
                                                @if ($factor->status_of_factor->status === 'entrance')
                                                    <a type='button' data-toggle="modal"
                                                        data-target="#exampleModal-{{ $factor->id }}"
                                                        style='background:rgb(0, 0, 255);color:#ffff; border-radius:5px; padding:5px;cursor: pointer; '>
                                                        {{ 'ورودی جدید' }}</a>
                                                @elseif ($factor->status_of_factor->status === 'under_repaired')
                                                    <a type='button' data-toggle="modal"
                                                        data-target="#exampleModal-{{ $factor->id }}"
                                                        style='background:orange; border-radius:5px; padding:5px;cursor: pointer; '>
                                                        {{ 'درحال تعمیر' }}</a>
                                                @elseif ($factor->status_of_factor->status === 'repaired')
                                                    <a type='button' data-toggle="modal"
                                                        data-target="#exampleModal-{{ $factor->id }}"
                                                        style='background:green; color:#ffff; border-radius:5px; padding:5px;cursor: pointer; '>
                                                        {{ 'تعمیر شده' }}</a>
                                                @else
                                                    <a type='button' data-toggle="modal"
                                                        data-target="#exampleModal-{{ $factor->id }}"
                                                        style='background:rgb(73, 73, 73); color:#ffff; border-radius:5px; padding:5px;cursor: pointer; '>
                                                        {{ 'تحویل داده شده' }}</a>
                                                @endif
                                            </td>
                                            <td>{{ $factor->imei }}</td>
                                            <td>
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
                            {{-- {{ $factors->links('pagination::bootstrap-4') }} --}}
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


    <!-- Modal -->
    @foreach ($factors as $factor)
        <div class="modal fade" id="exampleModal-{{ $factor->id }}" tabindex="-1" role="dialog"
            aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">بروزرسانی وضعیت</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <p>تغییر وضعیت فاکتور شماره {{ $factor->id }}</p>
                        <form action="{{ Route('update.status', $factor->id ) }}" method="POST">
                            @csrf
                            <div>
                                <div class="form-check-inline">
                                    <input class="form-check-input" type="radio" name="status" id=""
                                        value="entrance">
                                    <label class="form-check-label" for="">ورودی جدید</label>
                                </div>
                                <div class="form-check-inline">
                                    <input class="form-check-input" type="radio" name="status" id="inlineRadio2"
                                        value="under_repaired">
                                    <label class="form-check-label" for="">درحال تعمیر</label>
                                </div>
                                <div class="form-check-inline">
                                    <input class="form-check-input" type="radio" name="status" id="inlineRadio2"
                                        value="repaired">
                                    <label class="form-check-label" for="">تعمیر شده</label>
                                </div>
                                <div class="form-check-inline">
                                    <input class="form-check-input" type="radio" name="status" id="inlineRadio2"
                                        value="delivered">
                                    <label class="form-check-label" for="">تحویل داده شده</label>
                                </div>
                            </div>
                    </div>
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-primary">تغییر وضعیت</button>
                    </div>
                    </form>

                </div>
            </div>
        </div>
    @endforeach

    <script>
        function myFunction() {
          var input, filter, table, tr, td, i, txtValue;
          input = document.getElementById("myInput");
          filter = input.value.toUpperCase();
          table = document.getElementById("myTable");
          tr = table.getElementsByTagName("tr");
          for (i = 0; i < tr.length; i++) {
            td = tr[i].getElementsByTagName("td")[0];
            if (td) {
              txtValue = td.textContent || td.innerText;
              if (txtValue.toUpperCase().indexOf(filter) > -1) {
                tr[i].style.display = "";
              } else {
                tr[i].style.display = "none";
              }
            }       
          }
        }
        </script>
@endsection
