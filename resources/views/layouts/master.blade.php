<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">
    <meta name='viewport' content='width=device-width, initial-scale=1.0, user-scalable=0'>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta http-equiv="X-UA-Compatible" content="IE=9" />
    <meta name="Description" content="Bootstrap Responsive Admin Web Dashboard HTML5 Template">
    <meta name="Author" content="Spruko Technologies Private Limited">
    <meta name="Keywords"
        content="admin,admin dashboard,admin dashboard template,admin panel template,admin template,admin theme,bootstrap 4 admin template,bootstrap 4 dashboard,bootstrap admin,bootstrap admin dashboard,bootstrap admin panel,bootstrap admin template,bootstrap admin theme,bootstrap dashboard,bootstrap form template,bootstrap panel,bootstrap ui kit,dashboard bootstrap 4,dashboard design,dashboard html,dashboard template,dashboard ui kit,envato templates,flat ui,html,html and css templates,html dashboard template,html5,jquery html,premium,premium quality,sidebar bootstrap 4,template admin bootstrap 4" />

    <!-- Title -->
    <title> Thekaydaar - online selling and purchasing </title>

    <!-- Favicon -->
    <link rel="icon" href="../../admin/assets/img/brand/favicon.png" type="image/x-icon" />

    <!-- Icons css -->
    <link href="../../admin/assets/css/icons.css" rel="stylesheet">

    <!-- Bootstrap css -->
    <link href="../../admin/assets/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!--  Owl-carousel css-->
    <link href="../../admin/assets/plugins/owl-carousel/owl.carousel.css" rel="stylesheet" />

    <!-- P-scroll bar css-->
    <link href="../../admin/assets/plugins/perfect-scrollbar/p-scrollbar.css" rel="stylesheet" />

    <!--  Right-sidemenu css -->
    <link href="../../admin/assets/plugins/sidebar/sidebar.css" rel="stylesheet">

    <!-- Sidemenu css -->
    <link rel="stylesheet" href="../../admin/assets/css/sidemenu.css">

    <!-- Maps css -->
    <link href="../../admin/assets/plugins/jqvmap/jqvmap.min.css" rel="stylesheet">

    <!-- style css -->
    <link href="../../admin/assets/css/style.css" rel="stylesheet">
    <link href="../../admin/assets/css/style-dark.css" rel="stylesheet">
    <link href="../../admin/assets/css/boxed.css" rel="stylesheet">
    <link href="../../admin/assets/css/dark-boxed.css" rel="stylesheet">

    <!---Skinmodes css-->
    <link href="../../admin/assets/css/skin-modes.css" rel="stylesheet" />

</head>

<body class="main-body app sidebar-mini">

    <!-- Loader -->
    <div id="global-loader">
        <img src="../../admin/assets/img/loader.svg" class="loader-img" alt="Loader">
    </div>
    <!-- /Loader -->

    <!-- Page -->
    <div class="page">

        <!-- main-sidebar -->
        <div class="app-sidebar__overlay" data-bs-toggle="sidebar"></div>
        <aside class="app-sidebar sidebar-scroll">
            <div class="main-sidebar-header active">
                <a class="desktop-logo logo-light active" href="index.html"><img
                        src="../../admin/assets/img/brand/logo.png" class="main-logo" alt="logo"></a>
                <a class="desktop-logo logo-dark active" href="index.html"><img
                        src="../../admin/assets/img/brand/logo-white.png" class="main-logo dark-theme"
                        alt="logo"></a>
                <a class="logo-icon mobile-logo icon-light active" href="index.html"><img
                        src="../../admin/assets/img/brand/favicon.png" class="logo-icon" alt="logo"></a>
                <a class="logo-icon mobile-logo icon-dark active" href="index.html"><img
                        src="../../admin/assets/img/brand/favicon-white.png" class="logo-icon dark-theme"
                        alt="logo"></a>
            </div>
            <div class="main-sidemenu">
                <div class="app-sidebar__user clearfix">
                    <div class="dropdown user-pro-body">
                        <div class="">
                            <img alt="user-img" class="avatar avatar-xl brround"
                                src="../../admin/assets/img/faces/6.jpg"><span
                                class="avatar-status profile-status bg-green"></span>
                        </div>
                        <div class="user-info">
                            <h4 class="fw-semibold mt-3 mb-0">{{ Auth::user()->name }}</h4>
                        </div>
                    </div>
                </div>
                <ul class="side-menu">
                    <li class="slide">
                        <a class="side-menu__item" href="/category">
                            <svg xmlns="http://www.w3.org/2000/svg" class="side-menu__icon" viewBox="0 0 24 24">
                                <path d="M0 0h24v24H0V0z" fill="none" />
                                <path d="M5 5h4v6H5zm10 8h4v6h-4zM5 17h4v2H5zM15 5h4v2h-4z" opacity=".3" />
                                <path
                                    d="M3 13h8V3H3v10zm2-8h4v6H5V5zm8 16h8V11h-8v10zm2-8h4v6h-4v-6zM13 3v6h8V3h-8zm6 4h-4V5h4v2zM3 21h8v-6H3v6zm2-4h4v2H5v-2z" />
                            </svg>
                            <span class="side-menu__label">Categorys</span>
                        </a>
                    </li>
                    <li class="slide">
                        <a class="side-menu__item" href="/specification">
                            <svg xmlns="http://www.w3.org/2000/svg" class="side-menu__icon" viewBox="0 0 24 24">
                                <path d="M0 0h24v24H0V0z" fill="none" />
                                <path d="M5 5h4v6H5zm10 8h4v6h-4zM5 17h4v2H5zM15 5h4v2h-4z" opacity=".3" />
                                <path
                                    d="M3 13h8V3H3v10zm2-8h4v6H5V5zm8 16h8V11h-8v10zm2-8h4v6h-4v-6zM13 3v6h8V3h-8zm6 4h-4V5h4v2zM3 21h8v-6H3v6zm2-4h4v2H5v-2z" />
                            </svg>
                            <span class="side-menu__label">Product Specifications</span>
                        </a>
                    </li>

                    <li class="slide">
                        <a class="side-menu__item" href="icons.html">
                            <svg xmlns="http://www.w3.org/2000/svg" class="side-menu__icon" viewBox="0 0 24 24">
                                <path d="M0 0h24v24H0V0z" fill="none" />
                                <path
                                    d="M12 4c-4.42 0-8 3.58-8 8s3.58 8 8 8 8-3.58 8-8-3.58-8-8-8zm3.5 4c.83 0 1.5.67 1.5 1.5s-.67 1.5-1.5 1.5-1.5-.67-1.5-1.5.67-1.5 1.5-1.5zm-7 0c.83 0 1.5.67 1.5 1.5S9.33 11 8.5 11 7 10.33 7 9.5 7.67 8 8.5 8zm3.5 9.5c-2.33 0-4.32-1.45-5.12-3.5h1.67c.7 1.19 1.97 2 3.45 2s2.76-.81 3.45-2h1.67c-.8 2.05-2.79 3.5-5.12 3.5z"
                                    opacity=".3" />
                                <circle cx="15.5" cy="9.5" r="1.5" />
                                <circle cx="8.5" cy="9.5" r="1.5" />
                                <path
                                    d="M12 16c-1.48 0-2.75-.81-3.45-2H6.88c.8 2.05 2.79 3.5 5.12 3.5s4.32-1.45 5.12-3.5h-1.67c-.69 1.19-1.97 2-3.45 2zm-.01-14C6.47 2 2 6.48 2 12s4.47 10 9.99 10C17.52 22 22 17.52 22 12S17.52 2 11.99 2zM12 20c-4.42 0-8-3.58-8-8s3.58-8 8-8 8 3.58 8 8-3.58 8-8 8z" />
                            </svg>
                            <span class="side-menu__label">Products</span>
                        </a>
                    </li>
                    <li class="slide">
                        <a class="side-menu__item" href="icons.html">
                            <svg xmlns="http://www.w3.org/2000/svg" class="side-menu__icon" viewBox="0 0 24 24">
                                <path d="M0 0h24v24H0V0z" fill="none" />
                                <path
                                    d="M12 4c-4.42 0-8 3.58-8 8s3.58 8 8 8 8-3.58 8-8-3.58-8-8-8zm3.5 4c.83 0 1.5.67 1.5 1.5s-.67 1.5-1.5 1.5-1.5-.67-1.5-1.5.67-1.5 1.5-1.5zm-7 0c.83 0 1.5.67 1.5 1.5S9.33 11 8.5 11 7 10.33 7 9.5 7.67 8 8.5 8zm3.5 9.5c-2.33 0-4.32-1.45-5.12-3.5h1.67c.7 1.19 1.97 2 3.45 2s2.76-.81 3.45-2h1.67c-.8 2.05-2.79 3.5-5.12 3.5z"
                                    opacity=".3" />
                                <circle cx="15.5" cy="9.5" r="1.5" />
                                <circle cx="8.5" cy="9.5" r="1.5" />
                                <path
                                    d="M12 16c-1.48 0-2.75-.81-3.45-2H6.88c.8 2.05 2.79 3.5 5.12 3.5s4.32-1.45 5.12-3.5h-1.67c-.69 1.19-1.97 2-3.45 2zm-.01-14C6.47 2 2 6.48 2 12s4.47 10 9.99 10C17.52 22 22 17.52 22 12S17.52 2 11.99 2zM12 20c-4.42 0-8-3.58-8-8s3.58-8 8-8 8 3.58 8 8-3.58 8-8 8z" />
                            </svg>
                            <span class="side-menu__label">Vendors</span>
                        </a>
                    </li>
                    <li class="slide">
                        <a class="side-menu__item" href="icons.html">
                            <svg xmlns="http://www.w3.org/2000/svg" class="side-menu__icon" viewBox="0 0 24 24">
                                <path d="M0 0h24v24H0V0z" fill="none" />
                                <path
                                    d="M12 4c-4.42 0-8 3.58-8 8s3.58 8 8 8 8-3.58 8-8-3.58-8-8-8zm3.5 4c.83 0 1.5.67 1.5 1.5s-.67 1.5-1.5 1.5-1.5-.67-1.5-1.5.67-1.5 1.5-1.5zm-7 0c.83 0 1.5.67 1.5 1.5S9.33 11 8.5 11 7 10.33 7 9.5 7.67 8 8.5 8zm3.5 9.5c-2.33 0-4.32-1.45-5.12-3.5h1.67c.7 1.19 1.97 2 3.45 2s2.76-.81 3.45-2h1.67c-.8 2.05-2.79 3.5-5.12 3.5z"
                                    opacity=".3" />
                                <circle cx="15.5" cy="9.5" r="1.5" />
                                <circle cx="8.5" cy="9.5" r="1.5" />
                                <path
                                    d="M12 16c-1.48 0-2.75-.81-3.45-2H6.88c.8 2.05 2.79 3.5 5.12 3.5s4.32-1.45 5.12-3.5h-1.67c-.69 1.19-1.97 2-3.45 2zm-.01-14C6.47 2 2 6.48 2 12s4.47 10 9.99 10C17.52 22 22 17.52 22 12S17.52 2 11.99 2zM12 20c-4.42 0-8-3.58-8-8s3.58-8 8-8 8 3.58 8 8-3.58 8-8 8z" />
                            </svg>
                            <span class="side-menu__label">Customers</span>
                        </a>
                    </li>



                    <li class="slide">
                        <a class="side-menu__item" href="index.html">
                            <svg xmlns="http://www.w3.org/2000/svg" class="side-menu__icon" viewBox="0 0 24 24">
                                <path d="M0 0h24v24H0V0z" fill="none" />
                                <path d="M5 5h4v6H5zm10 8h4v6h-4zM5 17h4v2H5zM15 5h4v2h-4z" opacity=".3" />
                                <path
                                    d="M3 13h8V3H3v10zm2-8h4v6H5V5zm8 16h8V11h-8v10zm2-8h4v6h-4v-6zM13 3v6h8V3h-8zm6 4h-4V5h4v2zM3 21h8v-6H3v6zm2-4h4v2H5v-2z" />
                            </svg>
                            <span class="side-menu__label">Orders</span>
                        </a>
                    </li>


                    <li class="slide">
                        <a class="side-menu__item" href="index.html">
                            <svg xmlns="http://www.w3.org/2000/svg" class="side-menu__icon" viewBox="0 0 24 24">
                                <path d="M0 0h24v24H0V0z" fill="none" />
                                <path d="M5 5h4v6H5zm10 8h4v6h-4zM5 17h4v2H5zM15 5h4v2h-4z" opacity=".3" />
                                <path
                                    d="M3 13h8V3H3v10zm2-8h4v6H5V5zm8 16h8V11h-8v10zm2-8h4v6h-4v-6zM13 3v6h8V3h-8zm6 4h-4V5h4v2zM3 21h8v-6H3v6zm2-4h4v2H5v-2z" />
                            </svg>
                            <span class="side-menu__label">Contacts</span>
                        </a>
                    </li>


                    <li class="slide">
                        <a class="side-menu__item" href="/setting">
                            <svg xmlns="http://www.w3.org/2000/svg" class="side-menu__icon" viewBox="0 0 24 24">
                                <path d="M0 0h24v24H0V0z" fill="none" />
                                <path d="M5 5h4v6H5zm10 8h4v6h-4zM5 17h4v2H5zM15 5h4v2h-4z" opacity=".3" />
                                <path
                                    d="M3 13h8V3H3v10zm2-8h4v6H5V5zm8 16h8V11h-8v10zm2-8h4v6h-4v-6zM13 3v6h8V3h-8zm6 4h-4V5h4v2zM3 21h8v-6H3v6zm2-4h4v2H5v-2z" />
                            </svg>
                            <span class="side-menu__label">Setting</span>
                        </a>
                    </li>

                    <li class="slide">
                        <a href="{{ route('logout') }}"
                            onclick="event.preventDefault();
                                            document.getElementById('logout-form').submit();"
                            class="side-menu__item" href="index.html">
                            <svg xmlns="http://www.w3.org/2000/svg" class="side-menu__icon" viewBox="0 0 24 24">
                                <path d="M0 0h24v24H0V0z" fill="none" />
                                <path d="M5 5h4v6H5zm10 8h4v6h-4zM5 17h4v2H5zM15 5h4v2h-4z" opacity=".3" />
                                <path
                                    d="M3 13h8V3H3v10zm2-8h4v6H5V5zm8 16h8V11h-8v10zm2-8h4v6h-4v-6zM13 3v6h8V3h-8zm6 4h-4V5h4v2zM3 21h8v-6H3v6zm2-4h4v2H5v-2z" />
                            </svg>
                            <span class="side-menu__label">
                                Logut
                            </span>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                @csrf
                            </form>
                        </a>
                    </li>
                </ul>
            </div>
        </aside>
        <!-- main-sidebar -->

        <!-- main-content -->
        <div class="main-content app-content">

            <!-- main-header -->
            <div class="main-header sticky side-header nav nav-item">
                <div class="container-fluid">
                    <div class="main-header-left ">
                        <div class="responsive-logo">
                            <a href="index.html"><img src="../../admin/assets/img/brand/logo.png" class="logo-1"
                                    alt="logo"></a>
                            <a href="index.html"><img src="../../admin/assets/img/brand/logo-white.png"
                                    class="dark-logo-1" alt="logo"></a>
                            <a href="index.html"><img src="../../admin/assets/img/brand/favicon.png" class="logo-2"
                                    alt="logo"></a>
                            <a href="index.html"><img src="../../admin/assets/img/brand/favicon-white.png"
                                    class="dark-logo-2" alt="logo"></a>
                        </div>
                        <div class="app-sidebar__toggle" data-bs-toggle="sidebar">
                            <a class="open-toggle" href="#"><i class="header-icon fe fe-align-left"></i></a>
                            <a class="close-toggle" href="#"><i class="header-icons fe fe-x"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /main-header -->

            <!-- container -->
            <div class="container-fluid">

                <!-- breadcrumb -->
                <div class="breadcrumb-header justify-content-between">
                    <div class="left-content">
                        <div>
                            <h2 class="main-content-title tx-24 mg-b-1 mg-b-lg-1">{{ $title1 ?? '' }}</h2>
                        </div>
                    </div>
                    <div class="main-dashboard-header-right">
                        <div>
                            <label class="tx-13">{{ $title }} / <span>{{ $title1 ?? '' }}</span></label>
                        </div>
                    </div>
                </div>
                <!-- breadcrumb -->

                <!-- row opened -->
                <div class="row row-sm row-deck">

                    <div class="col-md-12 col-lg-12 col-xl-12">
                        @yield('content')
                    </div>
                </div>
                <!-- /row -->
            </div>
            <!-- /Container -->
        </div>
        <!-- /main-content -->


        <!-- Footer opened -->
        <div class="main-footer ht-40">
            <div class="container-fluid pd-t-0-f ht-100p">
                <span>Copyright © 2023 <a href="#">Thekaydaar</a>. All rights reserved.</span>
            </div>
        </div>
        <!-- Footer closed -->

    </div>
    <!-- End Page -->

    <!-- Back-to-top -->
    <a href="#top" id="back-to-top"><i class="las la-angle-double-up"></i></a>

    <!-- JQuery min js -->
    <script src="../../admin/assets/plugins/jquery/jquery.min.js"></script>

    <!-- Bootstrap Bundle js -->
    <script src="../../admin/assets/plugins/bootstrap/js/popper.min.js"></script>
    <script src="../../admin/assets/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!--Internal  Chart.bundle js -->
    <script src="../../admin/assets/plugins/chart.js/Chart.bundle.min.js"></script>

    <!-- Ionicons js -->
    <script src="../../admin/assets/plugins/ionicons/ionicons.js"></script>

    <!-- Moment js -->
    <script src="../../admin/assets/plugins/moment/moment.js"></script>

    <!--Internal Sparkline js -->
    <script src="../../admin/assets/plugins/jquery-sparkline/jquery.sparkline.min.js"></script>

    <!-- Moment js -->
    <script src="../../admin/assets/plugins/raphael/raphael.min.js"></script>

    <!--Internal Apexchart js-->
    <script src="../../admin/assets/js/apexcharts.js"></script>

    <!-- Rating js-->
    <script src="../../admin/assets/plugins/rating/jquery.rating-stars.js"></script>
    <script src="../../admin/assets/plugins/rating/jquery.barrating.js"></script>

    <!--Internal  Perfect-scrollbar js -->
    <script src="../../admin/assets/plugins/perfect-scrollbar/perfect-scrollbar.min.js"></script>
    <script src="../../admin/assets/plugins/perfect-scrollbar/p-scroll.js"></script>

    <!-- Eva-icons js -->
    <script src="../../admin/assets/js/eva-icons.min.js"></script>

    <!-- right-sidebar js -->
    <script src="../../admin/assets/plugins/sidebar/sidebar.js"></script>
    <script src="../../admin/assets/plugins/sidebar/sidebar-custom.js"></script>

    <!-- Sticky js -->
    <script src="../../admin/assets/js/sticky.js"></script>
    <script src="../../admin/assets/js/modal-popup.js"></script>

    <!-- Left-menu js-->
    <script src="../../admin/assets/plugins/side-menu/sidemenu.js"></script>

    <!-- Internal Map -->
    <script src="../../admin/assets/plugins/jqvmap/jquery.vmap.min.js"></script>
    <script src="../../admin/assets/plugins/jqvmap/maps/jquery.vmap.usa.js"></script>

    <!--Internal  index js -->
    <script src="../../admin/assets/js/index.js"></script>

    <!-- Apexchart js-->
    <script src="../../admin/assets/js/apexcharts.js"></script>
    <script src="../../admin/assets/js/jquery.vmap.sampledata.js"></script>

    <!-- custom js -->
    <script src="../../admin/assets/js/custom.js"></script>

</body>

</html>
