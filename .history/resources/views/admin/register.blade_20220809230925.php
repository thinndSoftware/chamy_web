    <!--
=========================================================
* Material Dashboard 2 - v3.0.4
=========================================================

* Product Page: https://www.creative-tim.com/product/material-dashboard
* Copyright 2022 Creative Tim (https://www.creative-tim.com)
* Licensed under MIT (https://www.creative-tim.com/license)
* Coded by Creative Tim

=========================================================

* The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software.
-->
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel="apple-touch-icon" sizes="76x76" href="{{ asset('dist/admin/img/apple-icon.png') }}">
        <link rel="icon" type="image/png" href="{{ asset('dist/admin/img/favicon.png') }}">
        <title>
            Register - DN Phone
        </title>
        <!--     Fonts and icons     -->
        <link rel="stylesheet" type="text/css"
            href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700,900|Roboto+Slab:400,700" />
        <!-- Nucleo Icons -->
        <link href="{{ asset('dist/admin/css/nucleo-icons.css') }}" rel="stylesheet" />
        <link href="{{ asset('dist/admin/css/nucleo-svg.css') }}" rel="stylesheet" />
        <!-- Font Awesome Icons -->
        <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
        <!-- Material Icons -->
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Round" rel="stylesheet">
        <!-- CSS Files -->
        <link id="pagestyle" href="{{ asset('dist/admin/css/material-dashboard.css?v=3.0.4') }}" rel="stylesheet" />
    </head>

    <body class="">
        <div class="container position-sticky z-index-sticky top-0">
            <div class="row">
                <div class="col-12">

                </div>
            </div>
        </div>
        <main class="main-content  mt-0">
            <section>
                <div class="page-header align-items-start min-vh-100"
                    style="background-image: url('https://images.unsplash.com/photo-1497294815431-9365093b7331?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1950&q=80');">
                    <div class="container">
                        <div class="row">
                            <div class="col-12 col-xl-4 col-lg-5 col-md-7 d-flex flex-column ms-auto me-auto ">
                                <div class="card card-plain">
                                    <div class="card-header">
                                        <div class="bg-gradient-primary shadow-primary border-radius-lg py-3 pe-1">
                                            <h4 class="text-white font-weight-bolder text-center mt-2 mb-0">Sign Up</h4>
                                            <p class="text-white mb-0 text-center">Enter your email and password to register</p>
                                        </div>

                                    </div>
                                    <div class="card-body">
                                        <form role="form" class="text-start" method="post">
                                            @csrf
                                            <div class="input-group input-group-outline mb-3">
                                                <label class="form-label">Name</label>
                                                <input type="text" class="form-control">
                                            </div>
                                            <div class="input-group input-group-outline mb-3">
                                                <label class="form-label">Email</label>
                                                <input type="email" class="form-control">
                                            </div>
                                            <div class="input-group input-group-outline mb-3">
                                                <label class="form-label">Password</label>
                                                <input type="password" class="form-control">
                                            </div>
                                            <div class="form-check form-check-info text-start ps-0">
                                                <input class="form-check-input" type="checkbox" value=""
                                                    id="flexCheckDefault" checked>
                                                <label class="form-check-label" for="flexCheckDefault">
                                                    I agree the <a href="javascript:;"
                                                        class="text-dark font-weight-bolder">Terms and Conditions</a>
                                                </label>
                                            </div>
                                            <div class="text-center">
                                                <button type="button"
                                                    class="btn btn-lg bg-gradient-primary btn-lg w-100 mt-4 mb-0">Sign
                                                    Up</button>
                                            </div>
                                        </form>
                                    </div>
                                    <div class="card-footer text-center pt-0 px-lg-2 px-1">
                                        <p class="mb-2 text-sm mx-auto">
                                            Already have an account?
                                            <a href="{{ route('login') }}"
                                                class="text-primary text-gradient font-weight-bold">Sign in</a>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </main>
        <!--   Core JS Files   -->
        <script src="{{ asset('./dist/admin/js/core/popper.min.js') }}"></script>
        <script src="{{ asset('./dist/admin/js/core/bootstrap.min.js') }}"></script>
        <script src="{{ asset('./dist/admin/js/plugins/perfect-scrollbar.min.js') }}"></script>
        <script src="{{ asset('./dist/admin/js/plugins/smooth-scrollbar.min.js') }}"></script>
        <script>
            var win = navigator.platform.indexOf('Win') > -1;
            if (win && document.querySelector('#sidenav-scrollbar')) {
                var options = {
                    damping: '0.5'
                }
                Scrollbar.init(document.querySelector('#sidenav-scrollbar'), options);
            }
        </script>
        <!-- Github buttons -->
        <script async defer src="https://buttons.github.io/buttons.js"></script>
        <!-- Control Center for Material Dashboard: parallax effects, scripts for the example pages etc -->
        <script src="{{ asset('dist/admin/js/material-dashboard.min.js?v=3.0.4') }}"></script>
    </body>

    </html>
