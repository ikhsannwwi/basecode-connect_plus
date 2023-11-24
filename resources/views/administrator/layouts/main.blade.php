<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Connect Plus</title>
    <!-- plugins:css -->
    <link rel="stylesheet" href="{{template_admin('vendors/mdi/css/materialdesignicons.min.css')}}">
    <link rel="stylesheet" href="{{template_admin('vendors/flag-icon-css/css/flag-icon.min.css')}}">
    <link rel="stylesheet" href="{{template_admin('vendors/css/vendor.bundle.base.css')}}">
    <!-- endinject -->
    <!-- Plugin css for this page -->
    <link rel="stylesheet" href="{{template_admin('vendors/font-awesome/css/font-awesome.min.css')}}" />
    <link rel="stylesheet" href="{{template_admin('vendors/bootstrap-datepicker/bootstrap-datepicker.min.css')}}">
    <!-- End plugin css for this page -->
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.7/css/dataTables.bootstrap4.min.css">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11.7.31/dist/sweetalert2.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/parsleyjs@2.9.2/src/parsley.min.css">
    <!-- inject:css -->
    <!-- endinject -->
    <!-- Layout styles -->
    <link rel="stylesheet" href="{{template_admin('css/style.css')}}">
    <!-- End layout styles -->
    <link rel="shortcut icon" href="{{template_admin('images/favicon.png')}}" />
    <link rel="stylesheet" href="{{ asset_administrator('assets/plugins/izitoast/css/iziToast.min.css') }}">

    @stack('css')
</head>

<body>
    <div class="container-scroller">
        <!-- partial:partials/_navbar.html -->
        @include('administrator.layouts.nav')
        <!-- partial -->
        <div class="container-fluid page-body-wrapper">
            <!-- partial:partials/_sidebar.html -->
            @include('administrator.layouts.sidebar')
            <!-- partial -->
            <div class="main-panel">
                <div class="content-wrapper">
                    @yield('content')
                </div>
                <!-- content-wrapper ends -->
                <!-- partial:partials/_footer.html -->
                @include('administrator.layouts.footer')
                <!-- partial -->
            </div>
            <!-- main-panel ends -->
        </div>
        <!-- page-body-wrapper ends -->
    </div>
    <!-- container-scroller -->
    <script src="{{ asset('jquery/dist/jquery.js') }}"></script>
    <!-- plugins:js -->
    <script src="{{template_admin('vendors/js/vendor.bundle.base.js')}}"></script>
    <!-- endinject -->
    <!-- Plugin js for this page -->
    <script src="{{template_admin('vendors/chart.js/Chart.min.js')}}"></script>
    <script src="{{template_admin('vendors/jquery-circle-progress/js/circle-progress.min.js')}}"></script>
    <!-- End plugin js for this page -->
    <script src="https://cdn.datatables.net/1.13.7/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.13.7/js/dataTables.bootstrap4.min.js"></script>
    <!-- inject:js -->
    <script src="{{template_admin('js/off-canvas.js')}}"></script>
    <script src="{{template_admin('js/hoverable-collapse.js')}}"></script>
    <script src="{{template_admin('js/misc.js')}}"></script>
    <!-- endinject -->
    <!-- Custom js for this page -->
    <script src="{{template_admin('js/dashboard.js')}}"></script>
    <!-- End custom js for this page -->

    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.7.31/dist/sweetalert2.all.min.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/parsleyjs@2.9.2/dist/parsley.min.js"></script>
    <script src="{{ asset_administrator('assets/plugins/izitoast/js/iziToast.min.js') }}"></script>
    <script src="{{ asset_administrator('assets/plugins/izitoast/modules-toastr.js') }}"></script>
    <script>
        var toastMessages = {
            errors: [],
            error: @json(session('error')),
            success: @json(session('success')),
            warning: @json(session('warning')),
            info: @json(session('info'))
        };
    </script>

    @stack('js')
</body>

</html>
