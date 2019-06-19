
<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="au theme template">
    <meta name="author" content="Hau Nguyen">
    <meta name="keywords" content="au theme template">

    <!-- Title Page-->
    <title>Dashboard</title>

    <!-- Fontfaces CSS-->
    <link href="{{url('/assets/admin2/css/font-face.css')}}" rel="stylesheet" media="all">
    <link href="{{url('/assets/admin2/vendor/font-awesome-4.7/css/font-awesome.min.css')}}" rel="stylesheet" media="all">
    <link href="{{url('/assets/admin2/vendor/font-awesome-5/css/fontawesome-all.min.css')}}" rel="stylesheet" media="all">
    <link href="{{url('/assets/admin2/vendor/mdi-font/css/material-design-iconic-font.min.css')}}" rel="stylesheet" media="all">

    <!-- Bootstrap CSS-->
    <link href="{{url('/assets/admin2/vendor/bootstrap-4.1/bootstrap.min.css')}}" rel="stylesheet" media="all">

    <!-- Vendor CSS-->
    <link href="{{url('/assets/admin2/vendor/animsition/animsition.min.css')}}" rel="stylesheet" media="all">
    <link href="{{url('/assets/admin2/vendor/bootstrap-progressbar/bootstrap-progressbar-3.3.4.min.css')}}" rel="stylesheet" media="all">
    <link href="{{url('/assets/admin2/vendor/wow/animate.css')}}" rel="stylesheet" media="all">
    <link href="{{url('/assets/admin2/vendor/css-hamburgers/hamburgers.min.css')}}" rel="stylesheet" media="all">
    <link href="{{url('/assets/admin2/vendor/slick/slick.css')}}" rel="stylesheet" media="all">
    <link href="{{url('/assets/admin2/vendor/select2/select2.min.css')}}" rel="stylesheet" media="all">
    <link href="{{url('/assets/admin2/vendor/perfect-scrollbar/perfect-scrollbar.css')}}" rel="stylesheet" media="all">
    <link href="{{url('/assets/admin2/vendor/vector-map/jqvmap.min.css')}}" rel="stylesheet" media="all">

    <!-- Main CSS-->
    <link href="{{url('/assets/admin2/css/theme.css')}}" rel="stylesheet" media="all">
    <link rel="stylesheet" type="text/css" href="css/stail.css">
</head>

<body class="animsition">
    <div class="page-wrapper">
        <!-- MENU SIDEBAR-->
        @include('admin.template.side')
        <!-- END MENU SIDEBAR-->

        <!-- PAGE CONTAINER-->
        <div class="page-container2">
            <!-- HEADER DESKTOP-->
            @include('admin.template.header')
            @include('admin.template.side2')
            <!-- END HEADER DESKTOP-->

            <!-- BREADCRUMB-->
            @include('admin.template.breadcrumb')
            <!-- END BREADCRUMB-->
            @yield('content')
            <!-- FOOTER -->
            @include('admin.template.footer')
            <!-- END FOOTER -->

            <!-- END PAGE CONTAINER-->
        </div>

    </div>

    <!-- Jquery JS-->
    <script src="{{url('/assets/admin2/vendor/jquery-3.2.1.min.js')}}"></script>
    <!-- Bootstrap JS-->
    <script src="{{url('/assets/admin2/vendor/bootstrap-4.1/popper.min.js')}}"></script>
    <script src="{{url('/assets/admin2/vendor/bootstrap-4.1/bootstrap.min.js')}}"></script>
    <!-- Vendor JS       -->
    <script src="{{url('/assets/admin2/vendor/slick/slick.min.js')}}">
    </script>
    <script src="{{url('/assets/admin2/vendor/wow/wow.min.js')}}"></script>
    <script src="{{url('/assets/admin2/vendor/animsition/animsition.min.js')}}"></script>
    <script src="{{url('/assets/admin2/vendor/bootstrap-progressbar/bootstrap-progressbar.min.js')}}">
    </script>
    <script src="{{url('/assets/admin2/vendor/counter-up/jquery.waypoints.min.js')}}"></script>
    <script src="{{url('/assets/admin2/vendor/counter-up/jquery.counterup.min.js')}}">
    </script>
    <script src="{{url('/assets/admin2/vendor/circle-progress/circle-progress.min.js')}}"></script>
    <script src="{{url('/assets/admin2/vendor/perfect-scrollbar/perfect-scrollbar.js')}}"></script>
    <script src="{{url('/assets/admin2/vendor/chartjs/Chart.bundle.min.js')}}"></script>
    <script src="{{url('/assets/admin2/vendor/select2/select2.min.js')}}">
    </script>
    <script src="{{url('/assets/admin2/vendor/vector-map/jquery.vmap.js')}}"></script>
    <script src="{{url('/assets/admin2/vendor/vector-map/jquery.vmap.min.js')}}"></script>
    <script src="{{url('/assets/admin2/vendor/vector-map/jquery.vmap.sampledata.js')}}"></script>
    <script src="{{url('/assets/admin2/vendor/vector-map/jquery.vmap.world.js')}}"></script>

    <!-- Main JS-->
    <script src="{{url('/assets/admin2/js/main.js')}}"></script>

</body>

</html>
<!-- end document-->
