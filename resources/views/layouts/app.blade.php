<!DOCTYPE html>
<html lang='en'>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="shortcut icon" href="{{ asset('assets/img/shop-2.png') }}" type="image/x-icon">
    <title>{{ $title ?? config('app.name') }} - Admin Online Shop</title>
    <link rel="stylesheet" href="{{ asset('assets/vendor/fontawesome-free/css/all.min.css') }}" type="text/css">
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i">
    <link rel="stylesheet" href="{{ asset('assets/css/sb-admin-2.min.css') }}">

    <style>
        .form-control:focus {
            color: #6e707e;
            background-color: #fff;
            border-color: #375dce;
            outline: 0;
            box-shadow: none;
        }

        .form-group label {
            font-weight: bold;
        }

        #wrapper #content-wrapper {
            background-color: #e2e8f0;
            width: 100%;
            overflow-x: hidden;
        }

        .card-header {
            padding: 1.2rem;
            background-color: #4e73de;
            border-bottom: 1px solid #e3e6f0;
            color: white;
        }
    </style>

    <script src="{{ asset('assets/vendor/jquery/jquery.min.js') }}"></script>
    <script src="{{ asset('assets/js/sweatalert.min.js') }}"></script>
</head>

<body class="page-top">
    <!-- Sidebar -->
    <div id="wrapper">
        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">
            <!-- Sidebarbrand -->
            <a href="index.html" class="sidebar-brand d-flex align-items-center justify-content-center">
                <div class="sidebar-brand-icon">
                    <i class="fab fa-apple"></i>
                </div>
                <div class="sidebar-brand-text mx-3">APPLE STORE</div>
            </a>

            <!-- Devider -->
            <hr class="sidebar-divider my-0">

            <!-- Nav item - Dashboard -->
            <li class="nav-item {{ Request::is('admin/dashboard*') ? 'active' : '' }}">
                <a href="{{ route('admin/dashboard/index') }}" class="nav-link">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>DASHBOARD</span>
                </a>
            </li>

            <!-- Devider -->
            <hr class="sidebar-divider my-0">

            <!-- Heading -->

            <div class="sidebar-heading">
                PRODUCT
            </div>

            <li
                class="nav-item {{ Request::is('admin/category*') ? 'active' : '' }} {{ Request::is('admin/product*') ? 'active' : '' }}">
                <a href="#" class="nav-link collapsed" data-toggle="collapse" data-target="#collapseTwo"
                    aria-expanded="true" aria-controls="collapseTwo">
                    <i class="fa fa-shopping-bag"></i>
                    <span>PRODUK</span>
                </a>
                <div id="collapseTwo"
                    class="collapse {{ Request::is('admin/category*') ? 'show' : '' }} {{ Request::is('admin/product*') ? 'show' : '' }}"
                    aria-labelledby="headingTwo" data-parent="accourdionSidebar">
                    <div class="bg-white collapse-inner rounded">
                        <h6 class="collapse-header">KATEGORI DAN PRODUK</h6>
                        <a href="#"
                            class="collapse-item {{ Request::is('admin/category*') ? 'active' : '' }}">KATEGORI</a>
                        <a href="#"
                            class="collapse-item {{ Request::is('admin/product*') ? 'active' : '' }}">PRODUK</a>
                    </div>
                </div>
            </li>

            <div class="sidebar-heading">
                ORDER
            </div>
            <li class="nav-item {{ Request('admin/order*') ? 'active' : '' }}">
                <a href="#" class="nav-link">
                    <i class="fas fa-shopping-cart"></i>
                    <span>ORDER</span>
                </a>
            </li>

            <li class="nav-item {{ Request('admin/customer*') ? 'active' : '' }}">
                <a href="#" class="nav-link">
                    <i class="fas fa-users"></i>
                    <span>CUSTOMER</span>
                </a>
            </li>

            <li class="nav-item {{ Request('admin/slider*') ? 'active' : '' }}">
                <a href="#" class="nav-link">
                    <i class="fas fa-laptop"></i>
                    <span>SLIDERS</span>
                </a>
            </li>

            <li class="nav-item {{ Request('admin/profile*') ? 'active' : '' }}">
                <a href="#" class="nav-link">
                    <i class="fas fa-user-circle"></i>
                    <span>PROFILE</span>
                </a>
            </li>

            <li class="nav-item {{ Request('admin/user*') ? 'active' : '' }}">
                <a href="#" class="nav-link">
                    <i class="fas fa-users"></i>
                    <span>USERS</span>
                </a>
            </li>


            <!-- Devider -->
            <hr class="sidebar-divider d-none d-md-block">


            <!-- Sidebar Toogler -->
            <div class="text-center d-none d-md-inline">
                <button class="rounded-circle border-0" id="sidebarToggle"></button>
            </div>
        </ul>
        <!-- End Sidebar -->


        <!-- Content #wrapper -->
        <div class="d-flex column" id="content-wrapper">
            <!-- Main Content -->
            <div id="content">
                <!-- Tap Bar -->
                <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">
                    <!-- Sidebar Toogler -->
                    <button id="sidebarToogleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                        <i class="fa fa-bars"></i>
                    </button>

                    <!-- Topbar Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <div class="topbar-divider d-none d-sm-block"></div>

                        <!-- Nav item - User information -->
                        <li class="nav-item dropdown no-arrow">
                            <a href="#" class="nav-link dropdown-toggle" id="userDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span
                                    class="mr-2 d-none d-lg-inline text-gray-600 small">{{ auth()->user()->name }}</span>
                                <img src="{{ auth()->user()->avatar_url }}" class="img-profile rounded-circle"
                                    alt="">
                            </a>
                            <!-- Dropdown User Information -->
                            <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in"
                                aria-labelledby="userDropdown">
                                <a href="#" class="dropdown-item" data-toggle="modal"
                                    data-target="#logoutModal">
                                    <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                                    LOGOUT
                                </a>
                            </div>
                        </li>
                    </ul>

                </nav>
                <!-- End Of Topbar -->

                <!-- Begin Page Content -->
                @yield('content')

            </div>
            <!-- End Of Main Content -->

            <!-- Footer -->
            <footer class="sticky-footer bg-white">
                <div class="container my-auto">
                    <div class="copyright text-center my-auto">
                        <span>Hak Cipta Dilindungi &copy; 2024 Onine Shop - Jogja Fullstack</span>
                    </div>
                </div>
            </footer>
            <!-- End Footer -->
        </div>
        <!-- End Content Wrapper-->
    </div>
    <!-- End Of Page Wrapper -->

    <a href="#page-top" class="scroll-to-top rounded">
        <i class="fas fa-angle-up"></i>
    </a>

    <!-- Logout Model -->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Apakah Yakin Ingin Keluar ?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">Silahkan pilih logout di bawah untuk mengakhiri sesi saat ini</div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                    <a href="{{ route('logout') }}" class="btn btn-primary" style="cursor: pointer"
                        onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Logout</a>
                    <form action="{{ route('logout') }}" id="logout-form" method="POST" style="display: none">
                        @csrf
                    </form>
                </div>
            </div>
        </div>
    </div>
    <script src="{{ asset('assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/jquery-easing/jquery.easing.min.js') }}"></script>
    <script src="{{ asset('assets/js/sb-admin-2.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/chart.js/Chart.min.js') }}"></script>
    <script src="{{ asset('assets/js/demo/chart-area-demo.js') }}"></script>
    <script src="{{ asset('assets/js/demo/chart-pie-demo.js') }}"></script>

    <script>
        @if (session()->has('success'))
            swal({
                type: 'success',
                icon: 'success',
                title: 'BERHASIL',
                teks: '{{ session('success') }}',
                timer: 1500,
                showConfirmButton: false,
                buttons: false,
            });
        @elseif (session()->has('error'))
            swal({
                type: 'error',
                icon: 'error',
                title: 'GAGAL',
                teks: '{{ session('error') }}',
                timer: 1500,
                showConfirmButton: false,
                buttons: false,
            });
        @endif
    </script>
</body>

</html>
