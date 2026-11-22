<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
 <meta name="csrf-token"  content="{{csrf_token()}}"/>      {{--     ajax meta   --}}


    
@if(empty($Get))


<script>   alert('website under construction')    M/script>
    
@endif

    
    
 <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300&amp;display=swap" rel="stylesheet">
 {{--  <script src="{{asset('Front/css/phpjs.php')}}" type="text/javascript" defer=""></script>  --}}
 {{-- Dynamic Media Query --}}

<link href="{{asset('Front/css/Uiframework.css') }}" rel="stylesheet"  type="text/css"  >

<link href="{{asset('Front/css/Blog/mediaQuery.css') }}" rel="stylesheet"  type="text/css"  >

<link href="{{asset('Front/css/lib.css') }}" rel="stylesheet"  type="text/css"  >
<link href="{{asset('Front/css/bz.css') }}" rel="stylesheet"  type="text/css"  >
{{--  <script src="{{asset('Front/JS/jquery-3.6.0.min.js') }}"  type="text/javascript"  defer></script>  --}}
<script src="{{asset('Front/JS/jquery.min.js') }}"  type="text/javascript"  defer></script>
<script src="{{asset('Front/JS/bootstrap.min.js')}}" type="text/javascript"  defer></script>
<script src="{{asset('Front/JS/home.js')}}" type="text/javascript"  defer></script>
<script src="{{asset('Front/JS/index.js')}}" type="text/javascript"  defer></script>


@if (auth::guard('admin')->check())

<script src="{{asset('Front/JS/cdnvue.js')}}" type="text/javascript" ></script> 
<script src="{{asset('Front/JS/Axios.min.js')}}" type="text/javascript" ></script> 

@endif




@include('layouts.Front.SEO Markups.metatag')

@include('layouts.Front.SEO Markups.schema')

@include('layouts.Front.SEO Markups.Microformats')


</head>
