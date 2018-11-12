<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Intelix') }} : @yield('htmlheader_title', 'Home')</title>

    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link href="{{ asset('css/materialize.css') }}" rel="stylesheet">
    <link href="{{ asset('intelix-bower/animate.css/animate.min.css') }}" rel="stylesheet">
    <link href="{{ asset('intelix-bower/aos/dist/aos.css') }}" rel="stylesheet">
    <link href="{{ asset('intelix-bower/owl.carousel/dist/assets/owl.carousel.min.css') }}" rel="stylesheet">
    <link href="{{ asset('intelix-bower/sweetalert2/dist/sweetalert2.min.css') }}" rel="stylesheet">
    <!-- Styles -->
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">

    @section('cssCustoms')

    @show
</head>