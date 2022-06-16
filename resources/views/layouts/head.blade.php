<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title')</title>

    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome Icons -->
    <link rel="stylesheet" href=" {{ asset('plugins/fontawesome-free/css/all.min.css') }} ">
    <!-- Theme style -->
    <link rel="stylesheet" href="{{ asset('dist/css/adminlte.min.css') }}">
</head>

<body class="hold-transition sidebar-mini">
    <div class="wrapper">

        <!-- Navbar -->
        <nav class="main-header navbar navbar-expand navbar-white navbar-light">
            <!-- Left navbar links -->

            
                

            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i
                            class="fas fa-bars"></i></a>
                </li>
                <li class="nav-item d-none d-sm-inline-block">
                    <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
        document.getElementById('logout-form').submit();">
                        {{ __('Logout') }}
                    </a>

                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                        @csrf
                    </form>
                </li>

                <ul class="nav nav-treeview">
                    <li><a href="{{ url('/rol') }}" class="link-light  text-decoration-none rounded fs-5 text-dark px-3">Create Account</a></li>
                    <li><a href="{{ url('userv') }}" class="link-light  text-decoration-none rounded fs-5 text-dark px-3">All Users</a></li>
                </ul>
            
                {{-- <li class="nav-item d-none d-sm-inline-block">
        <a href="#" class="nav-link">Contact</a>
      </li> --}}
            </ul>

            <!-- Right navbar links -->

        </nav>
        <!-- /.navbar -->

        <!-- Main Sidebar Container -->
        <aside class="main-sidebar sidebar-dark-primary elevation-4">
            <!-- Brand Logo -->
            <a href="index3.html" class="brand-link">
                <img src="{{ asset('dist/img/hicon.jpg') }}" alt="AdminLTE Logo"
                    class="brand-image img-circle elevation-3" style="opacity: .8">
                <span class="brand-text font-weight-light">Hostel Management System</span>
            </a>

            <!-- Sidebar -->
            <div class="sidebar">
                {{-- <!-- Sidebar user panel (optional) --> --}}
                <div class="user-panel mt-3 pb-3 mb-3 d-flex">
                    {{-- @foreach ($studen as $studens)
                    
                    <div class="image">
                        <img src="{{ asset('uploads/student/' . $studens->profile_image) }}" class="img-circle elevation-2" alt="User Image">
                    </div>
                     @endforeach --}}
                    <div class="info">
                        <a href="#" class="d-block">Welcome {{ Auth::user()->name }}</a>
                    </div>
                </div>

                <!-- SidebarSearch Form -->
                {{-- <div class="form-inline">
                    <div class="input-group" data-widget="sidebar-search">
                        <input class="form-control form-control-sidebar" type="search" placeholder="Search"
                            aria-label="Search">
                        <div class="input-group-append">
                            <button class="btn btn-sidebar">
                                <i class="fas fa-search fa-fw"></i>
                            </button>
                        </div>
                    </div>
                </div> --}}

                <!-- Sidebar Menu -->
                <nav class="mt-2">
                    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
                        data-accordion="false">
                        <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
                        <li class="nav-item">
                            <a href="{{ url('dash') }}" class="nav-link active">
                                <i class="nav-icon fas fa-home"></i>
                                <p>
                                    Dashboard
                                    <i class="right fas fa-angle-left"></i>
                                </p>
                            </a>
                        </li>

                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>
                                    Attendance
                                    <i class="right fas fa-angle-left"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li><a href="{{ url('attend') }}"
                                        class="link-light  text-decoration-none rounded fs-5">Take Attendance</a></li>
                                <li><a href="{{ url('attenv') }}"
                                        class="link-light text-decoration-none  rounded fs-5">View Attendance</a></li>
                            </ul>
                        </li>

                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>
                                    Bill Management
                                    <i class="right fas fa-angle-left"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li><a href="{{ url('bill') }}"
                                        class="link-light  text-decoration-none rounded fs-5">Add Bill</a></li>
                                <li><a href="{{ url('billv') }}"
                                        class="link-light  text-decoration-none rounded fs-5">View Bill</a></li>
                            </ul>
                        </li>

                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>
                                    Blocks
                                    <i class="right fas fa-angle-left"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li><a href="{{ url('block') }}"
                                        class="link-light  text-decoration-none rounded fs-5">Add Blocks</a></li>
                                <li><a href="{{ url('blockv') }}"
                                        class="link-light  text-decoration-none rounded fs-5">View Blocks</a></li>
                            </ul>
                        </li>

                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>
                                    Cost Management
                                    <i class="right fas fa-angle-left"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li><a href="{{ url('cost') }}"
                                        class="link-light  text-decoration-none rounded fs-5">Add Cost</a></li>
                                <li><a href="{{ url('costv') }}"
                                        class="link-light  text-decoration-none rounded fs-5">View Cost</a></li>
                            </ul>
                        </li>

                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>
                                    Employees
                                    <i class="right fas fa-angle-left"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li><a href="{{ url('employ') }}"
                                        class="link-light  text-decoration-none rounded fs-5">Add Employee</a></li>
                                <li><a href="{{ url('employv') }}"
                                        class="link-light  text-decoration-none rounded fs-5">View Employees</a></li>
                                <li><a href="{{ url('salary') }}"
                                        class="link-light  text-decoration-none rounded fs-5">Add Salary</a>
                                <li><a href="{{ url('salaryv') }}"
                                        class="link-light  text-decoration-none rounded fs-5">View Salary</a></li>
                            </ul>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>
                                    Meals
                                    <i class="right fas fa-angle-left"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li><a href="{{ url('meal') }}"
                                        class="link-light  text-decoration-none rounded fs-5">Add Meal</a></li>
                                <li><a href="{{ url('mealv') }}"
                                        class="link-light  text-decoration-none rounded fs-5">View Meal</a></li>
                            </ul>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>
                                    Meal Rate
                                    <i class="right fas fa-angle-left"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li><a href="{{ url('mealrate') }}"
                                        class="link-light  text-decoration-none rounded fs-5">Rate Meal</a></li>
                                <li><a href="{{ url('ratev') }}"
                                        class="link-light  text-decoration-none rounded fs-5">View Meal Rate</a> </li>
                            </ul>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>
                                    Noticeboard
                                    <i class="right fas fa-angle-left"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li><a href="{{ url('notice') }}"
                                        class="link-light  text-decoration-none rounded fs-5">Add Information</a></li>
                                <li><a href="{{ url('noticev') }}"
                                        class="link-light  text-decoration-none rounded fs-5">View Information</a></li>
                            </ul>
                        </li>

                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>
                                    Rooms
                                    <i class="right fas fa-angle-left"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li><a href="{{ url('rooms') }}"
                                        class="link-light  text-decoration-none rounded fs-5">Add Room</a></li>
                                <li><a href="{{ url('roomv') }}"
                                        class="link-light  text-decoration-none rounded fs-5">View Rooms</a>
                            </ul>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>
                                    Students
                                    <i class="right fas fa-angle-left"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li><a href="{{ url('country') }}"
                                        class="link-light  text-decoration-none rounded fs-5">Admit Student</a></li>
                                <li><a href="{{ url('money') }}"
                                        class="link-light  text-decoration-none rounded fs-5">Deposit Money</a></li>
                                <li><a href="{{ url('seat') }}"
                                        class="link-light  text-decoration-none rounded fs-5">Allocate Seats</a></li>
                                <li><a href="{{ url('studentv') }}"
                                        class="link-light  text-decoration-none rounded fs-5">View Students</a>
                                <li><a href="{{ url('seatv') }}"
                                        class="link-light  text-decoration-none rounded fs-5">View Seat Allocated</a>
                                </li>
                                <li><a href="{{ url('depositv') }}"
                                        class="link-light  text-decoration-none rounded fs-5">View Money Deposit</a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>
                                    Student Payment
                                    <i class="right fas fa-angle-left"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li><a href="{{ url('studpay') }}"
                                        class="link-light  text-decoration-none rounded fs-5">Add
                                        Payment</a></li>
                                <li><a href="{{ url('studv') }}"
                                        class="link-light  text-decoration-none rounded fs-5">View
                                        Payment</a></li>
                            </ul>
                        </li>
                        <li class="mb-1">
                            {{-- <a href="{{ url('/dashboard') }}"
                                class="text-sm text-gray-700 dark:text-gray-500 text-decoration-none text-light fs-3 fw-semibold">Dashboard</a> --}}

                        </li>

                        {{-- <ul class="list-unstyled ps-0"> --}}

                    </ul>
                </nav>
                <!-- /.sidebar-menu -->
            </div>
            <!-- /.sidebar -->
        </aside>

        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            @yield('content')
        </div>
        <!-- /.content-wrapper -->

        <!-- Control Sidebar -->
        <aside class="control-sidebar control-sidebar-dark">
            <!-- Control sidebar content goes here -->
            <div class="p-3">
                <h5>Title</h5>
                <p>Sidebar content</p>
            </div>
        </aside>
        <!-- /.control-sidebar -->

        <!-- Main Footer -->
        <footer class="main-footer">
            <!-- To the right -->
            <div class="float-right d-none d-sm-inline">
                Anything you want
            </div>
            <!-- Default to the left -->
            <strong>Copyright &copy; 2014-2021 <a href="https://adminlte.io">Hostel Mgt</a>.</strong> All rights
            reserved.
        </footer>
    </div>
    <!-- ./wrapper -->

    <!-- REQUIRED SCRIPTS -->

    <!-- jQuery -->
    <script src="{{ asset('plugins/jquery/jquery.min.js') }}"></script>
    <!-- Bootstrap 4 -->
    <script src="{{ asset('plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <!-- AdminLTE App -->
    <script src="{{ asset('dist/js/adminlte.min.js') }}"></script>
</body>

</html>
