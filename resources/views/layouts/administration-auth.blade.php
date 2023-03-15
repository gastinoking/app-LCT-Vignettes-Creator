<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8" />
    <title>@yield('title','LCT-Vignettes-Creator')</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="Premium Multipurpose Admin & Dashboard Template" name="description" />
    <meta content="Themesdesign" name="author" />
    <!-- App favicon -->
    <link rel="shortcut icon" href="{{asset('administration/assets/images/favicon.ico')}}">

    <!-- Bootstrap Css -->
    <link href="{{asset('administration/assets/css/bootstrap.min.css')}}" id="bootstrap-style" rel="stylesheet" type="text/css" />
    <!-- Icons Css -->
    <link href="{{asset('administration/assets/css/icons.min.css')}}" rel="stylesheet" type="text/css" />
    <!-- App Css-->
    <link href="{{asset('administration/assets/css/app.min.css')}}" id="app-style" rel="stylesheet" type="text/css" />

</head>

<body>
<div class="account-pages my-5 pt-sm-5">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8 col-lg-6 col-xl-5">
                <div class="card overflow-hidden">
                    <div class="card-body pt-0">

                        <h3 class="text-center mt-5 mb-4">
                            <a href="index.html" class="d-block auth-logo">
                                <img src="{{asset('administration/assets/images/logo-dark.png')}}" alt="" height="30" class="auth-logo-dark">
                                <img src="{{asset('administration/assets/images/logo-light.png')}}" alt="" height="30" class="auth-logo-light">
                            </a>
                        </h3>

                        @yield('content')




                    </div>
                </div>
{{--                <div class="mt-5 text-center">--}}
{{--                    <p>Don't have an account ? <a href="pages-register.html" class="text-primary"> Signup Now </a>--}}
{{--                    </p>--}}
{{--                    ©--}}
{{--                    <script>document.write(new Date().getFullYear())</script> Lexa <span--}}
{{--                            class="d-none d-sm-inline-block"> - Crafted with <i class="mdi mdi-heart text-danger"></i>--}}
{{--                            by Themesdesign.</span>--}}
{{--                </div>--}}
            </div>
        </div>
    </div>
</div>

<!-- JAVASCRIPT -->
<script src="{{asset('administration/assets/libs/jquery/jquery.min.js')}}"></script>
<script src="{{asset('administration/assets/libs/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
<script src="{{asset('administration/assets/libs/metismenu/metisMenu.min.js')}}"></script>
<script src="{{asset('administration/assets/libs/simplebar/simplebar.min.js')}}"></script>
<script src="{{asset('administration/assets/libs/node-waves/waves.min.js')}}"></script>
<script src="{{asset('administration/assets/libs/jquery-sparkline/jquery.sparkline.min.js')}}"></script>
<!-- App js -->
<script src="{{asset('administration/assets/js/app.js')}}"></script>
</body>

</html>
