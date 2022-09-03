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
                            مشتریان
                            <button type="button" class="btn btn-primary float-left text-white py-2 px-4" data-toggle="modal" data-target="#exampleModal">
                                افزودن مشتری
                              </button>
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
                                <h3 class="card-title">لیست مشتریان ما</h3>
                                

                                <div class="card-tools">
                                    <form action={{ Route('all.factors') }}>
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
                        
                        <div class="table table-striped table-valign-middle mb-0">
                            <table class="table table-hover mb-0" id="myTable">
                                <tbody>
                                    <tr class="header">
                                        <th>نام و نام خانوادگی</th>
                                        <th>شماره تماس</th>
                                        <th>تاریخ ثبت</th>
                                        <th>عملیات</th>
                                    </tr>
                                    @foreach ($customers as $customer)
                                        <tr>
                                            <td>{{ $customer->name }}</td>
                                            <td> <a href="tel:{{ $customer->phone }}">{{ $customer->phone }}</a></td>
                                            <td>{{ \Morilog\Jalali\Jalalian::forge($customer->created_at)->format('Y-m-d') }}
                                            <td><a href="{{Route('destroy.customer' , $customer->id)}}" class="btn btn-danger"><i class="fa fa-trash" aria-hidden="true"></i></a></td>
                                            </td>                                            
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
        <!-- Modal -->
        
        <!-- /.container-fluid -->
    </div>
    <!-- /.content -->
    </div>
<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">افزودن مشتری</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <form action="{{Route('store.customer')}}" method="post" class="form-group">
            @csrf
            نام:<input type="text" class="form-control" name="name" id="">
            شماره تماس : <input type="text" class="form-control" name="phone" id="">
            
        </div>
        <div class="modal-footer">
            <input type="submit" class="btn btn-primary" value="ذخیره">
        </div>
    </form>
      </div>
    </div>
  </div>
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
    
    
    <!-- /.content-wrapper -->
@endsection