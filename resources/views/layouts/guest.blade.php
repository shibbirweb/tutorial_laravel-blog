<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>
    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome -->
    {{-- <link rel="stylesheet" href="{{ Vite::template('plugins/fontawesome-free/css/all.min.css') }}"> --}}
    <!-- icheck bootstrap -->
    {{-- <link rel="stylesheet" href="{{ Vite::template('plugins/icheck-bootstrap/icheck-bootstrap.min.css') }}"> --}}
    <!-- Theme style -->
    {{-- <link rel="stylesheet" href="{{ Vite::template('dist/css/adminlte.min.css') }}"> --}}
    <!-- Scripts -->
    {{-- <script src="https://code.jquery.com/jquery-3.6.0.min.js"
        integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script> --}}
    @vite(['resources/js/app.js'])

</head>

{{--

<body>
    <div class="container min-vh-100 d-flex justify-content-center">
        <div class="align-self-center" style="min-width: 60%;">

        </div>
    </div>
</body> --}}

<body class="hold-transition login-page">

    {{ $slot }}

    <!-- jQuery -->
    {{-- <script src="{{ Vite::template('plugins/jquery/jquery.min.js') }}"></script> --}}
    <!-- Bootstrap 4 -->
    {{-- <script src="{{ Vite::template('plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script> --}}
    <!-- AdminLTE App -->
    {{-- <script src="{{ Vite::template('dist/js/adminlte.min.js') }}"></script> --}}
    <script src="{{ asset('test.js') }}" defer></script>
</body>

</html>
