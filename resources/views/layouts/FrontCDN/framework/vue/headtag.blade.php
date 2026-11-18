<!DOCTYPE html>


<html lang="en"  >

<head>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="google-adsense-account" content="ca-pub-7202948418825805">


    @if (!auth::guard('admin')->check())
    @if(empty(@$_GET))
        <meta http-equiv='refresh' rel='preload' content='0,url={{ config('app.url') }}?MainM_ID=1' /> <!--  hotreload -->
    @endif
@endif


    @if (auth::guard('admin')->check())

        @if (@$_GET['MainM_ID'])
            <meta http-equiv='refresh'
                content='70,url={{ route('index') }}?MainM_ID=<?php echo @$_GET['MainM_ID']; ?>&lang=<?php echo @$_GET['lang']; ?>' />

                <link rel = "canonical" href = "{{ route('index') }}?MainM_ID=<?php echo @$_GET['MainM_ID']; ?>&lang=<?php echo @$_GET['lang']; ?>">


            <!--  hotreload -->
        @ELSEIF (@$_GET['box_ID'])
            <meta http-equiv='refresh'
                content='70,url={{ route('index') }}?box_ID=<?php echo @$_GET['box_ID']; ?>&lang=<?php echo @$_GET['lang']; ?> ' />
             <link rel = "canonical" href = "{{ route('index') }}?box_ID=<?php echo @$_GET['box_ID']; ?>&lang=<?php echo @$_GET['lang']; ?>">

            <!--  hotreload -->
        @ELSEIF (@$_GET['Topic_ID '])
            <meta http-equiv='refresh'
                content='70,url={{ route('index') }}?Topic_ID=<?php echo @$_GET['Topic_ID']; ?>&lang=<?php echo @$_GET['lang']; ?> ' />

        <link rel = "canonical" href = "{{ route('index') }}?Topic_ID=<?php echo @$_GET['Topic_ID']; ?>&lang=<?php echo @$_GET['lang']; ?>">

            <!--  hotreload -->
        @else
            <meta http-equiv='refresh' content='70,url={{ route('index') }} ' /> <!--  hotreload -->

        <link rel = "canonical" href = "{{ route('index') }}>">

        @endif

    @endif

    <meta name="csrf-token" content="{{ csrf_token() }}" /> {{--     ajax meta   --}}

    @include('layouts.FrontCDN.framework.vue.resources')


</head>
