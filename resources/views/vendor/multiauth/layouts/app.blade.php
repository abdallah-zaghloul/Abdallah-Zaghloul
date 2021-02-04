<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ config('app.name', 'Abdallah-Zaghloul') }} {{ ucfirst(config('multiauth.prefix')) }}</title>
    <!-- Font CSS -->
    <link rel="stylesheet" href="{{asset('fonts/fonts.css')}}">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
    <!-- SideBar CSS -->
    <link rel="stylesheet" href="{{asset('css/simple-sidebar.css')}}">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="{{asset('css/custom-styles.css')}}">
    <!-- Font-awesome CSS -->
    <link rel="stylesheet" href="{{asset('css/font-awesome.min.css')}}">
    <!-- JQuery -->
    <script src="{{ asset('js/jquery.min.js') }}"></script>
    <!-- Bootstrap js -->
    <script src="{{ asset('js/bootstrap.bundle.min.js') }}"></script>
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    @yield('calendar')
</head>

<body>


<div class="d-flex" id="wrapper">
    @include('multiauth::layouts.includes.sidebar')

    <div id="page-content-wrapper">
        @include('multiauth::layouts.includes.header')

        <div class="container-fluid">
            <br>
            @yield('content')
        </div>
    </div>

</div>
@include('multiauth::layouts.includes.footer')


<script>
    $("#menu-toggle").click(function(e) {
        e.preventDefault();
        $("#wrapper").toggleClass("toggled");
    });
</script>
</body>

</html>
