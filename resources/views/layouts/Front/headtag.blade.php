<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="csrf-token" content="{{ csrf_token() }}" /> {{--     ajax meta   --}}
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300&amp;display=swap" rel="stylesheet">




    <script src="{{ asset('Front/JS/jquery.min.js') }}" type="text/javascript" defer></script>
    <script src="{{ asset('Front/JS/bootstrap.min.js') }}" type="text/javascript" defer></script>
    <script src="{{ asset('Front/JS/click-scroll.js') }}" type="text/javascript" defer></script>
    <script src="{{ asset('Front/JS/jquery.sticky.js') }}" type="text/javascript" defer></script>
    <script src="{{ asset('Front/JS/counter.js') }}" type="text/javascript" defer></script>
    <script src="{{ asset('Front/JS/owl-carousel.js') }}" type="text/javascript" defer></script>
    <script src="{{ asset('Front/JS/custom.js') }}" type="text/javascript" defer></script>
    <script src="{{ asset('Front/JS/custom_multislider.js') }}" type="text/javascript" defer></script>
    <script src="{{ asset('Front/JS/owl.carousel.min.js') }}" type="text/javascript" defer></script>
    <script src="{{ asset('Front/JS/animation.js') }}" type="text/javascript" defer></script>
    <script src="{{ asset('Front/JS/popper.min.js') }}" type="text/javascript" defer></script>
    <script src="{{ asset('Front/JS/main.js') }}" type="text/javascript" defer></script>
    <script src="{{ asset('Front/JS/main1.js') }}" type="text/javascript" defer></script>


    @if (auth::guard('admin')->check())
        <script src="{{ asset('Front/JS/cdnvue.js') }}" type="text/javascript"></script>
        <script src="{{ asset('Front/JS/Axios.min.js') }}" type="text/javascript"></script>
    @endif




    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;600;700;800&display=swap"
        rel="stylesheet">


    <!-- Bootstrap core CSS -->
    <link href="{{ asset('Front/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('Front/css/bootstrap-icons.css') }}" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Almarai:wght@700&display=swap" rel="stylesheet">

    <!-- Additional CSS Files -->
    <link rel="stylesheet" href="{{ asset('Front/css/fontawesome.css') }}">
    <link rel="stylesheet" href="{{ asset('Front/css/templatemo-kind-heart-charity.php') }}">
    <link rel="stylesheet" href="{{ asset('Front/css/animated.css') }}">
    <link rel="stylesheet" href="{{ asset('Front/css/owl.css') }}">
    <link rel="stylesheet" href="{{ asset('Front/css/sliderstyle.css') }}">
    <link rel="stylesheet" href="{{ asset('Front/css/owl.carousel.min.css') }}">


    {{-- <script src="{{mix('js/app.js')}}" type="text/javascript" ></script>  --}}

    @include('layouts.Front.SEO Markups.metatag')

    @include('layouts.Front.SEO Markups.schema')

    @include('layouts.Front.SEO Markups.Microformats')


</head>
