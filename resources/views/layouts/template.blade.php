<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <title> Three In One | @yield('header_title') </title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="A fully responsive admin theme which can be used to build CRM, CMS,ERP etc." name="description" />
    <meta content="Techzaa" name="author" />
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <!-- App favicon -->
    <link rel="shortcut icon" href="{{ asset('assets/images/logo-ico.ico') }}">
    <link rel="text/css" href="{{ asset('vendor/sweetalert2/sweetalert2.min.css') }}">
    <!-- Daterangepicker css -->
    <link rel="stylesheet" href="{{ asset('assets/vendor/daterangepicker/daterangepicker.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/vendor/datetimepicker/jquery.datetimepicker.css') }}">
    <!-- Vector Map css -->
    {{-- <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" /> --}}
    <link rel="stylesheet"
        href="{{ asset('assets/vendor/admin-resources/jquery.vectormap/jquery-jvectormap-1.2.2.css') }}">
    <link href="{{ asset('assets/vendor/select2/css/select2.min.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('assets/vendor/bootstrap-datepicker/css/bootstrap-datepicker.min.css') }}" rel="stylesheet"
        type="text/css" />

    <!-- Datatables css -->
    <link href="{{ asset('assets/vendor/datatables.net-bs5/css/dataTables.bootstrap5.min.css') }}" rel="stylesheet"
        type="text/css" />
    <link href="{{ asset('assets/vendor/datatables.net-responsive-bs5/css/responsive.bootstrap5.min.css') }}"
        rel="stylesheet" type="text/css" />
    <link href="{{ asset('assets/vendor/datatables.net-fixedcolumns-bs5/css/fixedColumns.bootstrap5.min.css') }}"
        rel="stylesheet" type="text/css" />
    <link href="{{ asset('assets/vendor/datatables.net-fixedheader-bs5/css/fixedHeader.bootstrap5.min.css') }}"
        rel="stylesheet" type="text/css" />
    <link href="{{ asset('assets/vendor/datatables.net-buttons-bs5/css/buttons.bootstrap5.min.css') }}"
        rel="stylesheet" type="text/css" />
    <link href="{{ asset('assets/vendor/datatables.net-select-bs5/css/select.bootstrap5.min.css') }}" rel="stylesheet"
        type="text/css" />
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />

    {{-- <link href="{{ asset('assets/vendor/select2/css/select2.min.css') }}" rel="stylesheet" type="text/css" /> --}}

    <!-- Theme Config Js -->
    <script src="{{ asset('assets/js/config.js') }}"></script>

    <!-- App css -->
    <link href="{{ asset('assets/css/app.min.css') }}" rel="stylesheet" type="text/css" id="app-style" />

    <!-- Icons css -->
    <link href="{{ asset('assets/css/icons.min.css') }}" rel="stylesheet" type="text/css" />
    @vite(['resources/js/app.js'])
</head>

<body>
    <!-- Begin page -->
    <div class="wrapper">



        <!-- ========== Topbar Start ========== -->
        <div class="navbar-custom">
            <div class="topbar container-fluid">
                <div class="d-flex align-items-center gap-1">

                    <!-- Topbar Brand Logo -->
                    <div class="logo-topbar">
                        <!-- Logo light -->
                        <a href="" class="logo-light">
                            <span class="logo-lg">
                                <img style="height:20px" src="{{ asset('assets/images/logo.png') }}" alt="logo">
                            </span>
                            <span class="logo-sm">
                                <img style="height:20px" src="{{ asset('assets/images/logo.png') }}" alt="small logo">
                            </span>
                        </a>

                        <!-- Logo Dark -->
                        <a href="" class="logo-dark">
                            <span class="logo-lg">
                                <img style="height:20px" src="{{ asset('assets/images/logo.png') }}" alt="dark logo">
                            </span>
                            <span class="logo-sm">
                                <img style="height:20px" src="{{ asset('assets/images/logo.png') }}" alt="small logo">
                            </span>
                        </a>
                    </div>

                    <button class="button-toggle-menu">
                        <i class="ri-menu-line"></i>
                    </button>

                    <!-- Horizontal Menu Toggle Button -->
                    <button class="navbar-toggle" data-bs-toggle="collapse" data-bs-target="#topnav-menu-content">
                        <div class="lines">
                            <span></span>
                            <span></span>
                            <span></span>
                        </div>
                    </button>

                    <!-- Topbar Search Form -->

                </div>

                <ul class="topbar-menu d-flex align-items-center gap-3">
                    <li class="dropdown d-lg-none">
                        <a class="nav-link dropdown-toggle arrow-none" data-bs-toggle="dropdown" href="#"
                            role="button" aria-haspopup="false" aria-expanded="false">
                            <i class="ri-search-line fs-22"></i>
                        </a>
                        <div class="dropdown-menu dropdown-menu-animated dropdown-lg p-0">
                            <form class="p-3">
                                <input type="search" class="form-control" placeholder="Search ..."
                                    aria-label="Recipient's username">
                            </form>
                        </div>
                    </li>


                    <li class="d-none d-sm-inline-block">
                        <div class="nav-link" id="light-dark-mode">
                            <i class="ri-moon-line fs-22"></i>
                        </div>
                    </li>

                    <li class="dropdown">
                        <a class="nav-link dropdown-toggle arrow-none nav-user" data-bs-toggle="dropdown"
                            href="#" role="button" aria-haspopup="false" aria-expanded="false">
                            <span class="account-user-avatar">
                                <img src="{{ asset('assets/images/avatar.png') }}" alt="user-image" width="32"
                                    class="rounded-circle">
                            </span>

                            <span class="d-lg-block d-none">
                                <h5 class="my-0 fw-normal">Chris Martin<i
                                        class="ri-arrow-down-s-line d-none d-sm-inline-block align-middle"></i></h5>
                            </span>
                        </a>
                        <div class="dropdown-menu dropdown-menu-end dropdown-menu-animated profile-dropdown">
                            <!-- item-->

                            <!-- item-->
                            <a href="" class="dropdown-item">
                                <i class="ri-account-circle-line text text-info fs-18 align-middle me-1"></i>
                                <span>Mon Compte</span>
                            </a>
                            <form method="POST" action="{{ route('logout') }}">
                                @csrf
                                <a href="{{ route('logout') }}" class="dropdown-item"
                                    onclick="event.preventDefault();
            this.closest('form').submit();">
                                    <i class="ri-logout-box-line fs-18 align-middle me-1"></i>
                                    <span>Deconnexion</span>
                                </a>
                            </form>

                        </div>
                    </li>
                </ul>
            </div>
        </div>
        <!-- ========== Topbar End ========== -->


        <!-- ========== Left Sidebar Start ========== -->
        <div class="leftside-menu">

            <!-- Brand Logo Light -->
            <a href="index.html" class="logo logo-light">
                <span class="logo-lg">
                    <img src="{{ asset('assets/images/logo.png') }}" alt="logo" style="width:100%; height:20%">
                    <span class="h4 text-light">Three In One Church</span>
                </span>
                <span class="logo-sm">
                    <img src="{{ asset('assets/images/logo.png') }}" alt="small logo"
                        style="width:100%; height:20%">
                    <span class="h4 text-light">Three In One Church</span>
                </span>
            </a>

            <!-- Brand Logo Dark -->
            <a href="index.html" class="logo logo-dark">
                <span class="logo-lg">
                    <img src="{{ asset('assets/images/logo.png') }}" alt="dark logo" style="width:100%; height:20%">
                    <span class="h4 text-light">Three In One Church</span>
                </span>
                <span class="logo-sm">
                    <img src="{{ asset('assets/images/logo.png') }}" alt="small logo"
                        style="width:100%; height:20%">
                    <span class="h4 text-light">Three In One Church</span>
                </span>
            </a>

            <div class="h-100" id="leftside-menu-container" data-simplebar>
                <!--- Sidemenu -->
                <ul class="side-nav">

                    <li class="h3 side-nav-title text-warning">Menu Three In One</li>

                    <li class="side-nav-item">
                        <a href="index.html" class="side-nav-link">
                            <i class="ri-dashboard-3-line"></i>
                            <span> Dashboard </span>
                        </a>
                    </li>
                    <li class="side-nav-item">
                        <a href="{{ route('posts.index') }}" class="side-nav-link">
                            <i class="ri-newspaper-line"></i>
                            <span> Posts </span>
                        </a>
                    </li>

                    <li class="side-nav-item">
                        <a href="{{ route('categories.index') }}" class="side-nav-link">
                            <i class="ri-group-2-fill"></i>
                            <span> Categories </span>
                        </a>
                    </li>
                    <li class="side-nav-item">
                        <a href="{{ route('tags.index') }}" class="side-nav-link">
                            <i class="ri-hashtag"></i>
                            <span> Tags </span>
                        </a>
                    </li>
                    <li class="side-nav-item">
                        <a href="{{ route('teams.index') }}" class="side-nav-link">
                            <i class="ri-team-line"></i>
                            <span> Teams </span>
                        </a>
                    </li>
                    <li class="side-nav-item">
                        <a href="{{ route('events.index') }}" class="side-nav-link">
                            <i class="ri-calendar-event-line"></i>
                            <span> Evenements </span>
                        </a>
                    </li>
                    <li class="side-nav-item">
                        <a href="{{ route('events.index') }}" class="side-nav-link">
                            <i class="ri-live-fill"></i>
                            <span> Live </span>
                        </a>
                    </li>
                    <li class="side-nav-item">
                        <a href="" class="side-nav-link">
                            <i class="ri-git-repository-line"></i>
                            <span> Librairies </span>
                        </a>
                    </li>
                    <li class="side-nav-item">
                        <a href="{{ route('adress_location.index') }}" class="side-nav-link">
                            <i class="ri-map-pin-line"></i>
                            <span> Adress et Localisation </span>
                        </a>
                    </li>

                    <li class="side-nav-item">
                        <a data-bs-toggle="collapse" href="#sidebarPages" aria-expanded="false"
                            aria-controls="sidebarPages" class="side-nav-link">
                            <i class="ri-user-add-line"></i>
                            <span> Users </span>
                            <span class="menu-arrow"></span>
                        </a>
                        <div class="collapse" id="sidebarPages">
                            <ul class="side-nav-second-level">
                                <li>
                                    <a href="{{ route('users_.index') }}">Users List</a>
                                </li>
                                <li>
                                    <a href="pages-profile.html">Profile</a>
                                </li>
                            </ul>
                        </div>
                    </li>


                </ul>
                <!--- End Sidemenu -->

                <div class="clearfix"></div>
            </div>

        </div>
        <!-- ========== Left Sidebar End ========== -->

        <!-- ============================================================== -->
        <!-- Start Page Content here -->
        <!-- ============================================================== -->

        <div class="content-page">
            <div class="content">

                <!-- Start Content-->
                <div class="container-fluid">
                    {{-- <h2>Laracoding.com - TinyMCE Example</h2>
                    <form action="" method="get">
                        <div class="mb-3">
                            <label for="pwd">TinyMCE input:</label>
                            <textarea class="tinyMce border border-primary" name="user-bio"></textarea>
                        </div>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form> --}}
                    @yield('content')
                </div>
                <!-- container -->

            </div>
            <!-- content -->

            <!-- Footer Start -->
            <footer class="footer">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-12 text-center">
                            <script>
                                let xi = new Date().getFullYear() == "2024" ? "" : "2024-";
                                document.write(xi + new Date().getFullYear())
                            </script> © <b>Three IN One-</b>Burundi
                        </div>
                    </div>
                </div>
            </footer>
            <!-- end Footer -->

        </div>

        <!-- ============================================================== -->
        <!-- End Page content -->
        <!-- ============================================================== -->

    </div>
    <!-- END wrapper -->

    <!-- Theme Settings -->
    <div class="offcanvas offcanvas-end" tabindex="-1" id="theme-settings-offcanvas">
        <div class="d-flex align-items-center bg-primary p-3 offcanvas-header">
            <h5 class="text-white m-0">Theme Settings</h5>
            <button type="button" class="btn-close btn-close-white ms-auto" data-bs-dismiss="offcanvas"
                aria-label="Close"></button>
        </div>

        <div class="offcanvas-body p-0">
            <div data-simplebar class="h-100">
                <div class="p-3">
                    <h5 class="mb-3 fs-16 fw-bold">Color Scheme</h5>

                    <div class="row">
                        <div class="col-4">
                            <div class="form-check form-switch card-switch mb-1">
                                <input class="form-check-input" type="checkbox" name="data-bs-theme"
                                    id="layout-color-light" value="light">
                                <label class="form-check-label" for="layout-color-light">
                                    <img src="{{ asset('assets/images/layouts/light.png') }}" alt=""
                                        class="img-fluid">
                                </label>
                            </div>
                            <h5 class="font-14 text-center text-muted mt-2">Light</h5>
                        </div>

                        <div class="col-4">
                            <div class="form-check form-switch card-switch mb-1">
                                <input class="form-check-input" type="checkbox" name="data-bs-theme"
                                    id="layout-color-dark" value="dark">
                                <label class="form-check-label" for="layout-color-dark">
                                    <img src="{{ asset('assets/images/layouts/dark.png') }}" alt=""
                                        class="img-fluid">
                                </label>
                            </div>
                            <h5 class="font-14 text-center text-muted mt-2">Dark</h5>
                        </div>
                    </div>

                    <div id="layout-width">
                        <h5 class="my-3 fs-16 fw-bold">Layout Mode</h5>

                        <div class="row">
                            <div class="col-4">
                                <div class="form-check form-switch card-switch mb-1">
                                    <input class="form-check-input" type="checkbox" name="data-layout-mode"
                                        id="layout-mode-fluid" value="fluid">
                                    <label class="form-check-label" for="layout-mode-fluid">
                                        <img src="{{ asset('assets/images/layouts/light.png') }}" alt=""
                                            class="img-fluid">
                                    </label>
                                </div>
                                <h5 class="font-14 text-center text-muted mt-2">Fluid</h5>
                            </div>

                            <div class="col-4">
                                <div id="layout-boxed">
                                    <div class="form-check form-switch card-switch mb-1">
                                        <input class="form-check-input" type="checkbox" name="data-layout-mode"
                                            id="layout-mode-boxed" value="boxed">
                                        <label class="form-check-label" for="layout-mode-boxed">
                                            <img src="{{ asset('assets/images/layouts/boxed.png') }}" alt=""
                                                class="img-fluid">
                                        </label>
                                    </div>
                                    <h5 class="font-14 text-center text-muted mt-2">Boxed</h5>
                                </div>
                            </div>
                        </div>
                    </div>

                    <h5 class="my-3 fs-16 fw-bold">Topbar Color</h5>

                    <div class="row">
                        <div class="col-4">
                            <div class="form-check form-switch card-switch mb-1">
                                <input class="form-check-input" type="checkbox" name="data-topbar-color"
                                    id="topbar-color-light" value="light">
                                <label class="form-check-label" for="topbar-color-light">
                                    <img src="{{ asset('assets/images/layouts/light.png') }}" alt=""
                                        class="img-fluid">
                                </label>
                            </div>
                            <h5 class="font-14 text-center text-muted mt-2">Light</h5>
                        </div>

                        <div class="col-4">
                            <div class="form-check form-switch card-switch mb-1">
                                <input class="form-check-input" type="checkbox" name="data-topbar-color"
                                    id="topbar-color-dark" value="dark">
                                <label class="form-check-label" for="topbar-color-dark">
                                    <img src="{{ asset('assets/images/layouts/topbar-dark.png') }}" alt=""
                                        class="img-fluid">
                                </label>
                            </div>
                            <h5 class="font-14 text-center text-muted mt-2">Dark</h5>
                        </div>
                    </div>

                    <div>
                        <h5 class="my-3 fs-16 fw-bold">Menu Color</h5>

                        <div class="row">
                            <div class="col-4">
                                <div class="form-check form-switch card-switch mb-1">
                                    <input class="form-check-input" type="checkbox" name="data-menu-color"
                                        id="leftbar-color-light" value="light">
                                    <label class="form-check-label" for="leftbar-color-light">
                                        <img src="{{ asset('assets/images/layouts/sidebar-light.png') }}"
                                            alt="" class="img-fluid">
                                    </label>
                                </div>
                                <h5 class="font-14 text-center text-muted mt-2">Light</h5>
                            </div>

                            <div class="col-4">
                                <div class="form-check form-switch card-switch mb-1">
                                    <input class="form-check-input" type="checkbox" name="data-menu-color"
                                        id="leftbar-color-dark" value="dark">
                                    <label class="form-check-label" for="leftbar-color-dark">
                                        <img src="{{ asset('assets/images/layouts/light.png') }}" alt=""
                                            class="img-fluid">
                                    </label>
                                </div>
                                <h5 class="font-14 text-center text-muted mt-2">Dark</h5>
                            </div>
                        </div>
                    </div>

                    <div id="sidebar-size">
                        <h5 class="my-3 fs-16 fw-bold">Sidebar Size</h5>

                        <div class="row">
                            <div class="col-4">
                                <div class="form-check form-switch card-switch mb-1">
                                    <input class="form-check-input" type="checkbox" name="data-sidenav-size"
                                        id="leftbar-size-default" value="default">
                                    <label class="form-check-label" for="leftbar-size-default">
                                        <img src="{{ asset('assets/images/layouts/light.png') }}" alt=""
                                            class="img-fluid">
                                    </label>
                                </div>
                                <h5 class="font-14 text-center text-muted mt-2">Default</h5>
                            </div>

                            <div class="col-4">
                                <div class="form-check form-switch card-switch mb-1">
                                    <input class="form-check-input" type="checkbox" name="data-sidenav-size"
                                        id="leftbar-size-compact" value="compact">
                                    <label class="form-check-label" for="leftbar-size-compact">
                                        <img src="{{ asset('assets/images/layouts/compact.png') }}" alt=""
                                            class="img-fluid">
                                    </label>
                                </div>
                                <h5 class="font-14 text-center text-muted mt-2">Compact</h5>
                            </div>

                            <div class="col-4">
                                <div class="form-check form-switch card-switch mb-1">
                                    <input class="form-check-input" type="checkbox" name="data-sidenav-size"
                                        id="leftbar-size-small" value="condensed">
                                    <label class="form-check-label" for="leftbar-size-small">
                                        <img src="{{ asset('assets/images/layouts/sm.png') }}" alt=""
                                            class="img-fluid">
                                    </label>
                                </div>
                                <h5 class="font-14 text-center text-muted mt-2">Condensed</h5>
                            </div>


                            <div class="col-4">
                                <div class="form-check form-switch card-switch mb-1">
                                    <input class="form-check-input" type="checkbox" name="data-sidenav-size"
                                        id="leftbar-size-full" value="full">
                                    <label class="form-check-label" for="leftbar-size-full">
                                        <img src="{{ asset('assets/images/layouts/full.png') }}" alt=""
                                            class="img-fluid">
                                    </label>
                                </div>
                                <h5 class="font-14 text-center text-muted mt-2">Full Layout</h5>
                            </div>
                        </div>
                    </div>

                    <div id="layout-position">
                        <h5 class="my-3 fs-16 fw-bold">Layout Position</h5>

                        <div class="btn-group checkbox" role="group">
                            <input type="radio" class="btn-check" name="data-layout-position"
                                id="layout-position-fixed" value="fixed">
                            <label class="btn btn-soft-primary w-sm" for="layout-position-fixed">Fixed</label>

                            <input type="radio" class="btn-check" name="data-layout-position"
                                id="layout-position-scrollable" value="scrollable">
                            <label class="btn btn-soft-primary w-sm ms-0"
                                for="layout-position-scrollable">Scrollable</label>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="offcanvas-footer border-top p-3 text-center">
            <div class="row">
                <div class="col-6">
                    <button type="button" class="btn btn-light w-100" id="reset-layout">Reset</button>
                </div>
                <div class="col-6">
                    <a href="https://1.envato.market/velonic" target="_blank" role="button"
                        class="btn btn-primary w-100">Buy Now</a>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal -->
    <div class="modal fade" id="approvalModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-sm" role="document" id="hoo">
            <div class="modal-content">
                <div class="modal-header text text-center">
                    <h5 class="modal-title h4 fw-bold" id="exampleModalLabel">Changer l'année Budgetaire</h5>
                </div>
                <div class="modal-body text-center h4 text-success">
                    <h1 class="p-3 h1 text-warning"><i class="ri-error-warning-fill"></i></h1>
                    <p>Voulez vous definir l'Annee budgetaire Courant</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-dismiss="modal"
                        id="closeModal">Fermer</button>
                    <button type="button" class="btn btn-primary" id="approveChanges">Oui,Changer</button>
                </div>
            </div>
        </div>
    </div>

    <!-- Vendor js -->
    <script src="{{ asset('assets/js/vendor.min.js') }}"></script>

    <!-- Daterangepicker js -->
    <script src="{{ asset('assets/vendor/daterangepicker/moment.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/daterangepicker/daterangepicker.js') }}"></script>

    <!-- Bootstrap Datepicker Plugin js -->
    <script src="{{ asset('assets/vendor/bootstrap-datepicker/js/bootstrap-datepicker.min.js') }}"></script>

    <!-- Apex Charts js -->
    <script src="{{ asset('assets/vendor/apexcharts/apexcharts.min.js') }}"></script>

    <!-- sweetalert2 js  -->
    <script src="{{ asset('assets/vendor/sweetalert2/sweetalert2.all.min.js') }}"></script>
    <!-- Daterangepicker js -->
    <script src="{{ asset('assets/vendor/select2/js/select2.min.js') }}"></script>
    {{-- <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script> --}}
    <!-- Apex Charts js -->
    <script src="{{ asset('assets/vendor/apexcharts/apexcharts.min.js') }}"></script>
    <!-- Vector Map js -->
    <script src="{{ asset('assets/vendor/admin-resources/jquery.vectormap/jquery-jvectormap-1.2.2.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/admin-resources/jquery.vectormap/maps/jquery-jvectormap-world-mill-en.js') }}">
    </script>
    <script src="{{ asset('assets/vendor/datatables.net/js/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/datatables.net-bs5/js/dataTables.bootstrap5.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/datatables.net-responsive/js/dataTables.responsive.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/datatables.net-responsive-bs5/js/responsive.bootstrap5.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/datatables.net-fixedcolumns-bs5/js/fixedColumns.bootstrap5.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/datatables.net-fixedheader/js/dataTables.fixedHeader.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/datatables.net-buttons/js/dataTables.buttons.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/datatables.net-buttons-bs5/js/buttons.bootstrap5.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/datatables.net-buttons/js/buttons.html5.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/datatables.net-buttons/js/buttons.flash.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/datatables.net-buttons/js/buttons.print.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/datatables.net-keytable/js/dataTables.keyTable.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/datatables.net-select/js/dataTables.select.min.js') }}"></script>

    <!-- Dashboard App js -->
    <script src="{{ asset('assets/js/pages/dashboard.js') }}"></script>

    <!-- DataTable Js  -->
    <script src="{{ asset('assets/js/pages/datatable.init.js') }}"></script>

    <!--  Select2 Plugin Js -->
    <script src="{{ asset('assets/vendor/select2/js/select2.min.js') }}"></script>

    <!-- App js -->
    <script src="{{ asset('assets/js/app.min.js') }}"></script>


    <script src="{{ asset('assets/vendor/sheetjs/xlsx.full.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/datetimepicker/build/jquery.datetimepicker.full.js') }}"></script>

    <!-- Custom content script for each module -->
    <!-- Dashboard App js -->

    @if (Session::has('success'))
        <div class="alert alert-success">
            <script>
                Swal.fire({
                    position: 'top-center',
                    icon: 'success',
                    title: "{{ Session::get('success') }}",
                    showConfirmButton: false,
                    timer: 1500
                })
            </script>
        </div>
    @endif
    @if (Session::has('update'))
        <div class="alert alert-warning">
            <script>
                Swal.fire({
                    position: 'top-center',
                    icon: 'info',
                    title: "{{ Session::get('update') }}",
                    showConfirmButton: false,
                    timer: 1500
                })
            </script>
        </div>
    @endif
    @if (Session::has('delete'))
        <div class="alert alert-danger">
            <script>
                Swal.fire({
                    position: 'top-center',
                    icon: 'warning',
                    title: "{{ Session::get('delete') }}",
                    showConfirmButton: false,
                    timer: 1500
                })
            </script>
        </div>
    @endif

    @yield('js_content')

</body>

<!-- Mirrored from techzaa.getappui.com/velonic/layouts/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 07 Sep 2023 09:39:49 GMT -->

</html>
