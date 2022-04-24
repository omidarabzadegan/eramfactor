<aside class="main-sidebar sidebar-dark-primary">
    
    <!-- Sidebar -->
    <div class="sidebar">
        <div>
            
            <!-- Sidebar Menu -->
            <nav class="mt-2">
                <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
                data-accordion="false">
                <li class="nav-item">
                    <a hrerf="/index.php" class="nav-link text-center mb-4">
                        {{-- <img src="/images/icons/logo-01.png" style="filter: brightness(0) invert(1);"> --}}
                        @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{  __(' خوش آمدید ' .  $name = Auth::user()->name) }}
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="" class="nav-link active">
                            <i class="nav-icon fa fa-dashboard"></i>
                            <p class="text">داشبورد</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ Route('add.factor') }}" class="nav-link">
                            <i class="nav-icon fa fa-id-card"></i>
                            <p class="text">ورودی موبایل</p>
                        </a>
                    </li>
                    <li class="nav-item has-treeview">
                        <a href="/admin/#" class="nav-link">
                            <i class="nav-icon fa fa-users"></i>
                            <p>
                                مشتریان
                                <i class="right fa fa-angle-left"></i>
                            </p>
                        </a>
                        <ul class="nav nav-treeview">
                            <li class="nav-item">
                                <a href="{{ Route('all.factors') }}" class="nav-link">
                                    <i class="fa fa-plus nav-icon"></i>
                                    <p>لیست کلی فاکتور ها</p>
                                </a>
                            </li>
                        </ul>
                        <li class="nav-item">
                            <a href="{{ Route('create.laws') }}" class="nav-link">
                                <i class="nav-icon fa fa-gavel"></i>
                                <p class="text">قرار دادن قانون</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ Route('logout.perform') }}" class="nav-link">
                                <i class="nav-icon fa fa-sign-out"></i>
                                <p class="text">خروج از حساب</p>
                            </a>
                        </li>
                    </nav>
            <!-- /.sidebar-menu -->
        </div>
    </div>
    <!-- /.sidebar -->
</aside>
