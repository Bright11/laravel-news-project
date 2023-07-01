<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Laravel news</title>
    <link rel="stylesheet" href="{{ asset("css/frontend/main.css") }}">
    <link rel="stylesheet" href="{{ asset("css/frontend/sectiondivider.css") }}">
    <link rel="stylesheet" href="{{ asset('css/frontend/sidebar.css') }}">
    <script src="https://kit.fontawesome.com/0560d0caf7.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="{{ asset('css/owl/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/owl/owl.theme.default.css') }}">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>


<link rel="stylesheet" href="{{ asset("css/frontend/slider.css") }}">

<link rel="stylesheet" href="{{ asset("css/frontend/nav.css") }}">
</head>
<body>
@include('frontend.utilities.navbarfrontend')
@yield('frontendcontent')



    <script src="https://code.jquery.com/jquery-3.7.0.min.js" integrity="sha256-2Pmvv0kuTBOenSvLm6bvfBSSHrUJ+3A7x6P5Ebd07/g=" crossorigin="anonymous"></script>
    <script src="{{ asset("css/owl/owl.carousel.min.js") }}" async defer></script>
    <script src="{{ asset("js/slider.js") }}"></script>
</body>
</html>
