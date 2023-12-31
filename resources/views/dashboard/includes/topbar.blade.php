<!-- Navbar -->
<nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
        <li class="nav-item">
            <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
        </li>
    </ul>

    <ul class="navbar-nav ml-auto">
        <li class="nav-item">
            <a class="nav-link" data-widget="fullscreen" href="#" role="button">
                <i class="fas fa-expand-arrows-alt"></i>
            </a>
        </li>
        <li class="nav-item dropdown">
            <a class="nav-link" data-toggle="dropdown" href="#">
                <i class="far fa-user"></i>
            </a>
            <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
                <div class="dropdown-divider"></div>
                <a href="{{route('admins.edit',auth()->id())}}" class="dropdown-item">
                    <i class="fas fa-envelope mr-2"></i> {{auth()->user()->name}}
                </a>
                <div class="dropdown-divider"></div>
                <a href="{{route('admins.edit',auth()->id())}}" class="dropdown-item">
                    <i class="fas fa-users mr-2"></i> الصفحة الشخصية
                </a>
                <div class="dropdown-divider"></div>
                <a href="{{route('admin.logout')}}" class="dropdown-item">
                    <i class="fas fa-file mr-2"></i> تسجيل الخروج
                </a>
            </div>
        </li>
    </ul>
</nav>
<!-- /.navbar -->
