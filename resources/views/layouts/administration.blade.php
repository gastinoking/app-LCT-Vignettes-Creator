<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8" />
{{--    <title>@yield('title','LCT-Vignettes-Creator')</title>--}}
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="Premium Multipurpose Admin & Dashboard Template" name="description" />
    <meta content="Themesdesign" name="author" />
    <!-- App favicon -->
    <link rel="shortcut icon" href="{{asset("administration/assets/images/favicon.ico")}}">

    <!-- Bootstrap Css -->
    <link href="{{asset("administration/assets/css/bootstrap.min.css")}}" id="bootstrap-style" rel="stylesheet" type="text/css" />
    <!-- Icons Css -->
    <link href="{{asset("administration/assets/css/icons.min.css")}}" rel="stylesheet" type="text/css" />
    <!-- App Css-->
    <link href="{{asset("administration/assets/css/app.min.css")}}" id="app-style" rel="stylesheet" type="text/css" />
    <!-- Custom Css -->
    <link href="{{asset("administration/assets/css/custom.css")}}" rel="stylesheet" type="text/css" />
    @yield('css')
</head>

<body data-topbar="light" data-layout="horizontal">

<!-- Begin page -->
<div id="layout-wrapper0">

    <div class="main-content" id="resultd">

        <header id="page-topbar">
             @include('element.header-nav')
             @include('element.top-nav')

        </header>

        @yield('content')
        <!-- End Page-content -->





    </div>

    <footer class="footer">
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-12">
                    ©
                    <script>document.write(new Date().getFullYear())</script> Lexa <span
                            class="d-none d-sm-inline-block"> - Crafted with <i class="mdi mdi-heart text-danger"></i>
                            by Themesdesign.</span>
                </div>
            </div>
        </div>
    </footer>
</div>

<!-- Right Sidebar -->
<div class="right-bar">
    <div data-simplebar class="h-100">

        <div class="rightbar-title d-flex align-items-center px-3 py-4">

            <h5 class="m-0 me-2">Settings</h5>

            <a href="javascript:void(0);" class="right-bar-toggle ms-auto">
                <i class="mdi mdi-close noti-icon"></i>
            </a>
        </div>

        <!-- Settings -->
        <hr class="mt-0" />
        <h6 class="text-center mb-0">Choose Layouts</h6>

        <div class="p-4">
            <div class="mb-2">
                <img src="{{asset("administration/assets/images/layouts/layout-1.jpg")}}" class="img-fluid img-thumbnail" alt="">
            </div>
            <div class="form-check form-switch mb-3">
                <input type="checkbox" class="form-check-input theme-choice" id="light-mode-switch" checked />
                <label class="form-check-label" for="light-mode-switch">Light Mode</label>
            </div>

            <div class="mb-2">
                <img src="{{asset("administration/assets/images/layouts/layout-2.jpg")}}" class="img-fluid img-thumbnail" alt="">
            </div>
            <div class="form-check form-switch mb-3">
                <input type="checkbox" class="form-check-input theme-choice" id="dark-mode-switch"
                       data-bsStyle="{{asset("administration/assets/css/bootstrap-dark.min.css")}}" data-appStyle="{{asset("administration/assets/css/app-dark.min.css")}}" />
                <label class="form-check-label" for="dark-mode-switch">Dark Mode</label>
            </div>

            <div class="mb-2">
                <img src="{{asset("administration/assets/images/layouts/layout-3.jpg")}}" class="img-fluid img-thumbnail" alt="">
            </div>
            <div class="form-check form-switch mb-5">
                <input type="checkbox" class="form-check-input theme-choice" id="rtl-mode-switch"
                       data-appStyle="{{asset("administration/assets/css/app-rtl.min.css")}}" />
                <label class="form-check-label" for="rtl-mode-switch">RTL Mode</label>
            </div>


        </div>

    </div> <!-- end slimscroll-menu-->
</div>
<!-- /Right-bar -->

<!-- Right bar overlay-->
<div class="rightbar-overlay"></div>

<!-- JAVASCRIPT -->
<script src="{{asset("administration/assets/libs/jquery/jquery.min.js")}}"></script>
<script src="{{asset("administration/assets/libs/bootstrap/js/bootstrap.bundle.min.js")}}"></script>
<script src="{{asset("administration/assets/libs/metismenu/metisMenu.min.js")}}"></script>
<script src="{{asset("administration/assets/libs/simplebar/simplebar.min.js")}}"></script>
<script src="{{asset("administration/assets/libs/node-waves/waves.min.js")}}"></script>
<script src="{{asset("administration/assets/libs/jquery-sparkline/jquery.sparkline.min.js")}}"></script>
<script src="https://maps.google.com/maps/api/js?key=AIzaSyCtSAR45TFgZjOs4nBFFZnII-6mMHLfSYI"></script>

<!-- App js -->
{{--<script src="{{asset("administration/assets/js/app.js")}}"></script>--}}
{{--<script src="{{asset("administration/assets/js/ajax.js")}}"></script>--}}

@yield('scripts')
</body>

</html>
