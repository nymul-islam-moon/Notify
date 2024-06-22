<!doctype html>
<html lang="en" data-layout="vertical" data-topbar="light" data-sidebar="dark" data-sidebar-size="lg" data-sidebar-image="none" data-preloader="disable">

<head>

    <meta charset="utf-8" />
    <title>{{ config('app.name', 'Lara-Commerce') }}</title>

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="Premium Multipurpose Admin & Dashboard Template" name="description" />
    <meta content="Themesbrand" name="author" />

    <!-- App favicon -->

    <link rel="shortcut icon" href="{{ asset('dashboard/assets/images/favicon.ico') }}">

    <!-- Layout config Js -->
    <script src="{{ asset('dashboard/assets/js/layout.js') }}"></script>
    <!-- Bootstrap Css -->
    <link href="{{ asset('dashboard/assets/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css" />
    <!-- Icons Css -->
    <link href="{{ asset('dashboard/assets/css/icons.min.css') }}" rel="stylesheet" type="text/css" />
    <!-- App Css-->
    <link href="{{ asset('dashboard/assets/css/app.min.css') }}" rel="stylesheet" type="text/css" />
    <!-- custom Css-->
    <link href="{{ asset('dashboard/assets/css/custom.min.css') }}" rel="stylesheet" type="text/css" />


    {{--
        Author : Nymul Islam Moon <towkir1997islam@gmail.com>
        Toaster CSS
    --}}
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">

    @stack('script')

</head>

<body>

    <!-- Begin page -->
    <div id="layout-wrapper">

        @if (Auth::guard('faculty')->check())

            {{-- nav bar --}}
            @include('faculty.faculty_partial.navbar')

            <!-- removeNotificationModal -->
            <div id="removeNotificationModal" class="modal fade zoomIn" tabindex="-1" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close" id="NotificationModalbtn-close"></button>
                        </div>
                        <div class="modal-body">
                            <div class="mt-2 text-center">
                                <lord-icon src="https://cdn.lordicon.com/gsqxdxog.json" trigger="loop" colors="primary:#f7b84b,secondary:#f06548" style="width:100px;height:100px"></lord-icon>
                                <div class="mt-4 pt-2 fs-15 mx-4 mx-sm-5">
                                    <h4>Are you sure ?</h4>
                                    <p class="text-muted mx-4 mb-0">Are you sure you want to remove this Notification ?</p>
                                </div>
                            </div>
                            <div class="d-flex gap-2 justify-content-center mt-4 mb-2">
                                <button type="button" class="btn w-sm btn-light" data-bs-dismiss="modal">Close</button>
                                <button type="button" class="btn w-sm btn-danger" id="delete-notification">Yes, Delete It!</button>
                            </div>
                        </div>

                    </div><!-- /.modal-content -->
                </div><!-- /.modal-dialog -->
            </div>
            <!-- /.modal -->
            <!-- ========== App Menu ========== -->


            <!-- Left Sidebar Start -->
            @include('faculty.faculty_partial.sidebar')
            <!-- Left Sidebar End -->


            <!-- Vertical Overlay-->
            <div class="vertical-overlay"></div>
            <div class="customizer-setting d-none d-md-block">
                <div class="btn-info btn-rounded shadow-lg btn btn-icon btn-lg p-2" data-bs-toggle="offcanvas" data-bs-target="#theme-settings-offcanvas" aria-controls="theme-settings-offcanvas">
                    <i class='mdi mdi-spin mdi-cog-outline fs-22'></i>
                </div>
            </div>

            <footer class="footer">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-sm-6">
                            <script>document.write(new Date().getFullYear())</script>2023 © Velzon.
                        </div>
                        <div class="col-sm-6">
                            <div class="text-sm-end d-none d-sm-block">
                                Design &amp; Develop by Themesbrand
                            </div>
                        </div>
                    </div>
                </div>
            </footer>

        @else

        @endif

        @yield('admin_content')

    </div>
    <!-- END layout-wrapper -->



    <!--start back-to-top-->
    <button onclick="topFunction()" class="btn btn-danger btn-icon" id="back-to-top">
        <i class="ri-arrow-up-line"></i>
    </button>
    <!--end back-to-top-->

    <!--preloader-->
    <div id="preloader">
        <div id="status">
            <div class="spinner-border text-primary avatar-sm" role="status">
                <span class="visually-hidden">Loading...</span>
            </div>
        </div>
    </div>

    <!-- JAVASCRIPT -->
    <script src="{{ asset('dashboard/assets/libs/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('dashboard/assets/libs/simplebar/simplebar.min.js') }}"></script>
    <script src="{{ asset('dashboard/assets/libs/node-waves/waves.min.js') }}"></script>
    <script src="{{ asset('dashboard/assets/libs/feather-icons/feather.min.js') }}"></script>
    <script src="{{ asset('dashboard/assets/js/pages/plugins/lord-icon-2.1.0.js') }}"></script>
    <script src="{{ asset('dashboard/assets/js/plugins.js') }}"></script>



    <!-- prismjs plugin -->
    <script src="{{ asset('dashboard/assets/libs/prismjs/prism.js') }}"></script>

    <!-- App js -->
    <script src="{{ asset('dashboard/assets/js/app.js') }}"></script>


    <!-- password-addon init -->
    <script src="{{ asset('dashboard/assets/js/pages/password-addon.init.js') }}"></script>

    {{--
        author : Nymul Islam Moon <towkir1997islam@gmail.com>
        Sweet Alert link
    --}}
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    {{--
        author : Nymul Islam Moon <towkir1997islam@gmail.com>
        JQuery CDN
    --}}
    <script src="https://code.jquery.com/jquery-3.7.0.min.js" integrity="sha256-2Pmvv0kuTBOenSvLm6bvfBSSHrUJ+3A7x6P5Ebd07/g=" crossorigin="anonymous"></script>

    {{--
        Author: Nymul Islam Moon <towkir1997islam@gmail.com>
        Toaster CDN
    --}}
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>

    <script>
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
    </script>

    <script>
        $(document).ready(function(){

            /**
             * Before loggout Confirmation
             * */

             $(document).on('click', '#admin_logout', function(e) {
                e.preventDefault();

                var link = $(this).attr('href');

                Swal.fire({
                    title: 'Are you sure?',
                    text: "",
                    icon: 'warning',
                    showCancelButton: true,
                    confirmButtonColor: '#3085d6',
                    cancelButtonColor: '#d33',
                    confirmButtonText: 'Yes, delete it!'
                }).then((result) => {
                    if (result.isConfirmed) {
                        window.location.href = link;
                    } else {
                        Swal.fire(
                        'Not Logout!',
                        )
                    }
                })

            });


            /**
             * Author Name : Nymul Islam Moon <towkir1997islam@gmail.com>
             * Show Messages
             *
             * */

            @if (Session::has('error'))
                var type="{{ Session::get('alert-type', 'info') }}"
                switch(type) {
                    case 'info':
                        toastr.error('{{ Session::get('error') }}');
                        break;
                    case 'success':
                        toastr.success('{{ Session::get('error') }}');
                        break;
                    case 'warning':
                        toastr.error('{{ Session::get('error') }}');
                        break;
                    case 'error':
                        toastr.error('{{ Session::get('error') }}');
                        break;
                }
            @endif

            /**
             * Author Name : Nymul Islam Moon <towkir1997islam@gmail.com>
             * Show Messages
             *
             * */

            @if (Session::has('message'))
                var type="{{ Session::get('alert-type', 'info') }}"
                switch(type) {
                    case 'info':
                        toastr.info('{{ Session::get('message') }}');
                        break;
                    case 'success':
                        toastr.success('{{ Session::get('message') }}');
                        break;
                    case 'warning':
                        toastr.warning('{{ Session::get('message') }}');
                        break;
                    case 'error':
                        toastr.error('{{ Session::get('message') }}');
                        break;
                }
            @endif

        });
    </script>

</body>

</html>
