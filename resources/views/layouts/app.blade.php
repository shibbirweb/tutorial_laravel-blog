<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('title') | {{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">

    <!-- Styles -->
    @vite([
        'resources/assets/template/plugins/fontawesome-free/css/all.min.css', // Font Awesome
        'resources/assets/template/dist/css/adminlte.min.css', // Theme style
    ])
</head>

<body class="hold-transition sidebar-mini">

    @if (session()->has('success'))
        {{--  session status message trigger on route; ['password.update', 'password.email'] --}}
        <x-common.toast :message="session('success', 'Action has been taken.')" type="success" autoHide />
    @endif

    <!-- Site wrapper -->
    <div class="wrapper">
        <!-- Navbar -->
        @include('partials.navbar')
        <!-- /.navbar -->

        <!-- Main Sidebar Container -->
        @include('partials.sidebar')

        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <section class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <h1>@yield('page_name')</h1>
                        </div>
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item"><a href="#">Home</a></li>
                                <li class="breadcrumb-item active">Blank Page</li>
                            </ol>
                        </div>
                    </div>
                </div><!-- /.container-fluid -->
            </section>

            <!-- Main content -->
            <section class="content">

                {{ $slot }}

            </section>
            <!-- /.content -->
        </div>
        <!-- /.content-wrapper -->

        @include('layouts.footer')

        <!-- Control Sidebar -->
        <aside class="control-sidebar control-sidebar-dark">
            <!-- Control sidebar content goes here -->
        </aside>
        <!-- /.control-sidebar -->
    </div>
    <!-- ./wrapper -->

    @vite([
        'resources/assets/template/plugins/jquery/jquery.min.js', // jQuery
        'resources/assets/template/plugins/bootstrap/js/bootstrap.bundle.min.js', // Bootstrap 4
        'resources/assets/template/plugins/sweetalert2/sweetalert2.all.min.js', // sweet alert
        'resources/assets/template/plugins/bootstrap-switch/js/bootstrap-switch.min.js', // Bootstrap Switch
        'resources/assets/template/dist/js/adminlte.min.js', // AdminLTE App
        'resources/assets/template/dist/js/demo.js', // AdminLTE for demo purposes
    ])

    @include('partials.plugin-init')

    @stack('script')
</body>


</html>
