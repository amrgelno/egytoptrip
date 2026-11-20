<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Iframe UC | CONTENT ADMIN PANEL</title>
    <!-- Google Font: Source Sans Pro -->
    <link rel="apple-touch-icon" href="{{ asset('Front/IMG/IframeLogo.png') }}">
    <link rel="apple-touch-icon" sizes="57x57" href="{{ asset('Front/IMG/IframeLogo.png') }}">
    <link rel="apple-touch-icon" sizes="72x72" href="{{ asset('Front/IMG/IframeLogo.png') }}">
    <link rel="apple-touch-icon" sizes="76x76" href="{{ asset('Front/IMG/IframeLogo.png') }}">
    <link rel="apple-touch-icon" sizes="114x114" href="/{{ asset('Front/IMG/IframeLogo.png') }}">
    <link rel="apple-touch-icon" sizes="120x120" href="/{{ asset('Front/IMG/IframeLogo.png') }}">
    <link rel="apple-touch-icon" sizes="144x144" href="{{ asset('Front/IMG/IframeLogo.png') }}">
    <link rel="apple-touch-icon" sizes="152x152" href="{{ asset('Front/IMG/IframeLogo.png') }}">
    <link rel="icon" href="{{ asset('Front/IMG/IframeLogo.png') }}" type="image/x-icon" />


    <!-- Font Awesome Icons -->
    <!-- <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css"> -->

    <link href="{{ asset('Front/css/all.min.css') }}" rel="stylesheet" type="text/css">

    <!-- Theme style -->

    <link href="{{ asset('Front/css/adminlte.min.css') }}" rel="stylesheet" type="text/css">


    <link href="{{ asset('Front/css/hint.min.css') }}" rel="stylesheet" type="text/css">

    <link href="{{ asset('Front/css/dashboard.css') }}" rel="stylesheet" type="text/css">


    <link href="{{ asset('Front/css/aside.css') }}" rel="stylesheet" type="text/css">



</head>

@livewireStyles()

<body onload='loading();' class="hold-transition sidebar-mini">

    @include('Admin.Auth.colorsettingbox')

    @include('Admin.Auth.Loadingscreen')

    @extends('Admin.Auth.cmstheme')


    @section('user')


        @include('Admin.Auth.user')


    @stop


    @section('static')

        <iframe class='iframe content-wrapper'src="{{ route('Cmsstatic') }}" width="85%" height="650px">
        </iframe>

    @stop


    @section('company')

        <iframe class='iframe content-wrapper' src="{{ route('company.index') }}" width="100%" height="650px">
        </iframe>

    @stop


    @section('nav')

        <iframe class='iframe content-wrapper' style="background:white;" src="{{ route('nav.index') }}" width="85%"
            height="650px">
        </iframe> <!-- cms & indexed link -->

    @stop


    @section('Dashboard_Users')

        <iframe class='iframe content-wrapper' src="{{ route('accessLog.index') }}" width="100%" height="650px">
        </iframe>

    @stop


    @section('New_users')


        <iframe class='iframe content-wrapper' src="{{ route('Admin.register') }}" width="100%" height="650px">
        </iframe>


    @stop



    @section('Gallery')

        <iframe class='iframe content-wrapper' src="{{ route('gallery.index') }}" width="85%%" height="650px">
        </iframe>

    @stop


    @if ($BSModel == 'E-commerce' or $BSModel == 'Blog with member')
        @section('Client_Request')

            <iframe class='iframe content-wrapper' src="{{ route('Client_orders') }}" width="85%" height="650px">
            </iframe>

        @stop
    @else
        @section('Client_Request')

            <iframe class='iframe content-wrapper' src="{{ route('Client_req') }}" width="85%" height="650px">
            </iframe>

        @stop
    @endif


    @section('jobreq')

        <iframe class='iframe content-wrapper' src="{{ route('job_req') }}" width="100%" height="650px">
        </iframe>

    @stop



    @section('clientcomment')

        <iframe class='iframe content-wrapper' src="{{ route('client_comment') }}" width="100%" height="650px">
        </iframe>

    @stop




    @section('Webtemplates')



        <iframe class='iframe content-wrapper' src="{{ route('Webtemplates') }}" width="85%" height="650px">
        </iframe>

    @stop



    @section('Customize')

        <iframe class='iframe content-wrapper' src="{{ route('customize.index') }}" width="100%" height="650px">
        </iframe>


    @stop

    </div>
    </div>
    </div>


    <!-- <h1> @yield ('static') </h1> -->


</body>
@livewireScriptConfig
<script src="{{ asset('vendor/livewire/livewire.js')}}" defer></script>

</html>
