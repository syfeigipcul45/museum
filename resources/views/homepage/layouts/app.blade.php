<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title') | Museum Mulawarman</title>
    <link href="{{ asset('_homepage/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('_homepage/css/style.css') }}" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="{{ asset('_homepage/css/font-awesome.min.css') }}" />
    <link href="{{ asset('_homepage/css/aos.css') }}" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Fjalla+One" rel="stylesheet">
    <link href="{{ asset('_homepage/css/element.css') }}" rel="stylesheet">
    <script src="{{ asset('_homepage/js/jquery-2.1.1.min.js') }}"></script>
    <script src="{{ asset('_homepage/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('_homepage/js/aos.js') }}"></script>

    @yield('extra-css')

</head>

<body>
    @include('homepage.layouts.header')

    @yield('content')

    @include('homepage.layouts.footer')


    <script src="{{ asset('_homepage/js/classie.js') }}"></script>
    <script src="{{ asset('_homepage/js/cbpAnimatedHeader.js') }}"></script>
    <script>
        AOS.init({
            duration: 1200,
        })
    </script>
    @yield('extra-js')
</body>

</html>