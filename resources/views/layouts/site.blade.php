<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Flower Shop</title>

    <!-- Styles -->

    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/site.css') }}" rel="stylesheet">
    <link href="http://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css" rel="stylesheet">
    <script src="https://use.fontawesome.com/185e0bd75a.js"></script>
</head>
<body>
    <div id="app">
        @include('layouts.site._menu')
        @yield('content')
    </div>
    @include('layouts.common._scripts')
    <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>
