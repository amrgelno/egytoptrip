<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href="{{ asset('Front/css/adminlte.min.css') }}" rel="stylesheet" type="text/css">

    {{-- <meta http-equiv='refresh' content='15,url={{ route('Client_orders') }}' /> --}}
    {{-- <link href="Front/CMSCSS/CMSXS.css" rel="stylesheet" type="text/css" />
    <link href="Front/CMSCSS/CMSSm.css" rel="stylesheet" type="text/css" />
    <link href="Front/CMSCSS/CMSLg.css" rel="stylesheet" type="text/css" />
    <link href="Front/CMSCSS/CMSMD.css" rel="stylesheet" type="text/css" /> --}}
    <title>Client_orders</title>
</head>
<style>
    #Box-Anyltics {
        display: flex;
        flex: 2;
        flex-flow: row;
    }

    .Box-Anyltics {
        width: 30%;
        margin-left: 18px;
        padding: 20px;
        /* padding-top: 10px; */
        border: 3px double #006;
        border-radius: 5px;
        color: #F90;
        font-weight: bolder;

    }
</style>



@livewireStyles()

<body>
    <h1> * all client request Report from contact form </h1>



    @livewire('dashboard.clientorders')




</body>

@livewireScripts()



</html>
