<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Connect Plus</title>
    <!-- plugins:css -->
    <link rel="stylesheet" href="{{ template_admin('vendors/mdi/css/materialdesignicons.min.css') }}">
    <link rel="stylesheet" href="{{ template_admin('vendors/flag-icon-css/css/flag-icon.min.css') }}">
    <link rel="stylesheet" href="{{ template_admin('vendors/css/vendor.bundle.base.css') }}">
    <!-- endinject -->
    <!-- Plugin css for this page -->
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <!-- endinject -->
    <!-- Layout styles -->
    <link rel="stylesheet" href="{{ template_admin('css/style.css') }}">
    <!-- End layout styles -->
    <link rel="shortcut icon" href="{{ template_admin('images/favicon.png') }}" />

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/parsleyjs@2.9.2/src/parsley.min.css">
    <link rel="stylesheet" href="{{ asset_administrator('assets/plugins/izitoast/css/iziToast.min.css') }}">


    @stack('css')
</head>

<body>
    <div class="container-scroller">
        <div class="container-fluid page-body-wrapper full-page-wrapper">
            <div class="content-wrapper d-flex align-items-center auth">
                <div class="row flex-grow">
                    <div class="col-lg-4 mx-auto">
                        <div class="auth-form-light text-left p-5">
                            @yield('content')
                        </div>
                    </div>
                </div>
            </div>
            <!-- content-wrapper ends -->
        </div>
        <!-- page-body-wrapper ends -->
    </div>
    <!-- container-scroller -->
    <!-- plugins:js -->
    <script src="{{ template_admin('vendors/js/vendor.bundle.base.js') }}"></script>
    <!-- endinject -->
    <!-- Plugin js for this page -->
    <!-- End plugin js for this page -->
    <!-- inject:js -->
    <script src="{{ template_admin('js/off-canvas.js') }}"></script>
    <script src="{{ template_admin('js/hoverable-collapse.js') }}"></script>
    <script src="{{ template_admin('js/misc.js') }}"></script>
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
    <!-- endinject -->

    @stack('js')
</body>

</html>
