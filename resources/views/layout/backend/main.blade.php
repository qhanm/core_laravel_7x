
<!doctype html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <title>Starter Page | Skote - Responsive Bootstrap 4 Admin Dashboard</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="Premium Multipurpose Admin & Dashboard Template" name="description">
    <meta content="Themesbrand" name="author">
    <!-- App favicon -->
    <link rel="shortcut icon" href="{{ asset('themes/skote/assets/images/favicon.ico') }}">
    <link rel="stylesheet" href="{{ asset('themes/skote/assets/libs/select2/css/select2.min.css') }}">

    <!-- Bootstrap Css -->
    <link href="{{ asset('themes/skote/assets/css/bootstrap.min.css') }}" id="bootstrap-style" rel="stylesheet" type="text/css">
    <!-- Icons Css -->
    <link href="{{ asset('themes/skote/assets/css/icons.min.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('themes/skote/assets/libs/summernote/summernote-bs4.min.css') }}" rel="stylesheet" type="text/css">
    @yield('styles')

    <!-- App Css-->
    <link href="{{ asset('themes/skote/assets/css/app.min.css') }}" id="app-style" rel="stylesheet" type="text/css">

</head>

<body data-sidebar="dark">

<!-- Begin page -->
<div id="layout-wrapper">

    @include('layout.backend.header')

    <!-- ========== Left Sidebar Start ========== -->
    <!-- Left Sidebar End -->
        @include('layout.backend.sidebar')
    <!-- ============================================================== -->
    <!-- Start right Content here -->
    <!-- ============================================================== -->
    <div class="main-content">

        <div class="page-content">
            @yield('content')

        </div>
        <!-- End Page-content -->

        @include('layout.backend.footer')

    </div>
    <!-- end main content-->

</div>
<!-- END layout-wrapper -->

<!-- Right bar overlay-->
<div class="rightbar-overlay"></div>

<!-- JAVASCRIPT -->
<script src="{{ asset('themes/skote/assets/libs/jquery/jquery.min.js') }}"></script>
<script src="{{ asset('themes/skote/assets/libs/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
<script src="{{ asset('themes/skote/assets/libs/metismenu/metisMenu.min.js') }}"></script>
<script src="{{ asset('themes/skote/assets/libs/simplebar/simplebar.min.js') }}"></script>
<script src="{{ asset('themes/skote/assets/libs/node-waves/waves.min.js') }}"></script>
@yield('scripts')

<script src="{{ asset('themes/skote/assets/libs/summernote/summernote-bs4.min.js') }}"></script>
<script src="{{ asset('themes/skote/assets/js/pages/form-editor.init.js') }}"></script>
<script src="{{ asset('themes/skote/assets/libs/select2/js/select2.min.js') }}"></script>
<script src="{{ asset('themes/skote/assets/libs/bootstrap-colorpicker/js/bootstrap-colorpicker.min.js') }}"></script>
<script src="{{ asset('themes/skote/assets/libs/bootstrap-timepicker/js/bootstrap-timepicker.min.js') }}"></script>
<script src="{{ asset('themes/skote/assets/libs/bootstrap-touchspin/jquery.bootstrap-touchspin.min.js') }}"></script>
<script src="{{ asset('themes/skote/assets/libs/bootstrap-maxlength/bootstrap-maxlength.min.js') }}"></script>
<script src="{{ asset('themes/skote/assets/libs/@chenfengyuan/datepicker/datepicker.min.js') }}"></script>

<script src="{{ asset('themes/skote/assets/js/pages/form-advanced.init.js') }}"></script>

<script src="{{ asset('themes/skote/assets/js/app.js') }}"></script>
<script src="{{ asset('assets/backend/js/app.js') }}"></script>

</body>
</html>
