<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Dashboard | Simple - Responsive Bootstrap 4 Admin Dashboard</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="Responsive bootstrap 4 admin template" name="description">
    <meta content="Coderthemes" name="author">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- App favicon -->
    <link rel="shortcut icon" href="assets\images\favicon.ico">
    <!-- App css -->
    <link href="assets\css\bootstrap.min.css" rel="stylesheet" type="text/css" id="bootstrap-stylesheet">
    <link href="assets\css\icons.min.css" rel="stylesheet" type="text/css">
    <link href="assets\css\app.min.css" rel="stylesheet" type="text/css" id="app-stylesheet">

</head>

<body>

    <!-- Begin page -->
    <div id="wrapper">


        <!-- Topbar Start -->
        @include('layouts.header')
        <!-- end Topbar -->
        <!-- ========== Left Sidebar Start ========== -->
        @include('layouts.sidebar')
        <!-- Left Sidebar End -->

        <!-- ============================================================== -->
        <!-- Start Page Content here -->
        <!-- ============================================================== -->

        <div class="content-page">
            @yield('content')
            <!-- end content -->

        </div>
        <!-- END content-page -->
        @include('layouts.footer')

    </div>
    <!-- END wrapper -->


    <!-- Right Sidebar -->
    @include('layouts.rightbar')
    <!-- /Right-bar -->

    <!-- Right bar overlay-->
    <div class="rightbar-overlay"></div>

    <a href="javascript:void(0);" class="right-bar-toggle demos-show-btn">
        <i class="mdi mdi-settings-outline mdi-spin"></i> &nbsp;Choose Demos
    </a>

    <!-- Vendor js -->
    <script src="assets\js\vendor.min.js"></script>

    <script src="assets\libs\morris-js\morris.min.js"></script>
    <script src="assets\libs\raphael\raphael.min.js"></script>

    <script src="assets\js\pages\dashboard.init.js"></script>

    <!-- App js -->
    <script src="assets\js\app.min.js"></script>

</body>

</html>
