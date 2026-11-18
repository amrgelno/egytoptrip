<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href={{ asset('Front/css/adminlte.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('Front/css/adminlte.min.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('Front/css/all.min.css') }}" rel="stylesheet" type="text/css" />
    <script src="https://cdn.tiny.cloud/1/no-api-key/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>
    <script>
        tinymce.init({
            selector: 'textarea'
        });
    </script>
    <link href="{{ asset('Front/css/Uiframework.css') }}" rel="stylesheet" type="text/css">

    <title>video</title>
</head>

<style>
    table {
        border-bottom: 2px solid #5e5e5e;
        box-shadow: -2px 1px 12px 0px;
        background: lavenderblush;
        font-size: 12px;

    }


    .tox.tox-silver-sink.tox-tinymce-aux {
        display: none;
    }





    td:hover {
        background: #a3d0d7 !important;
    }


    .trc>td {

        background: #03055a8a !important;

    }


    .trc {
        /* background: #ba510030; */
        /* background: #03055a; */
        background: #03055a8a;
        font-weight: bolder;
        color: #ddd0c2;
        font-style: italic;

    }

    .odd {
        background-color: #930;
    }

    body {
        background: rgb(240 242 246);
        overflow: unset;
    }

    tr:nth-child(even) {
        background: #09C;
        color: white;
    }


    .inputNum {

        width: 42px;
    }

    tr:nth-child(even) {
        background: #21465254;
        color: red;
        /* static-shadow: inset -1px 1px 20px 0px #000;*/
    }

    td:nth-child(odd) {
        background: #1eff0014;
        border-bottom: 2px solid #eceffa;
    }

    td {
        border: 1px solid #ffffff;

    }


    tr {
        border: 2px solid rgb(255, 255, 255);

    }


    th {
        text-align: center;
        font-size: 18px;
        font-weight: bolder;
        height: 50px;
        color: #ffc107;
        static-shadow: inset -20px 0px 20px 20px #00000078;

    }

    div {
        position: relative;
    }

    input[type="text"] {
        width: fit-content;
        box-shadow: inset 0px -1px 0px 0px hsl(236, 32%, 26%);
        color: Black;
        font-size: inherit;
        font-family: inherit;
        /* background-color: hsl(236, 32%, 26%); */
        padding: 0.35em 0.45em;
        border: 1px solid transparent;
        transition: background-color 0.3s ease-in-out;
    }

    input[type="text"]:focus {
        outline: none;

    }

    input[type="text"]::placeholder {
        color: Black;
    }

    span {
        position: absolute;
        background-color: hsl(236, 32%, 26%);
        transition: transform 0.5s ease;
    }

    .bottom,
    .top {
        height: 1px;
        left: 0;
        right: 0;
        transform: scaleX(0);
    }

    .left,
    .right {
        width: 1px;
        top: 0;
        bottom: 0;
        transform: scaleY(0);
    }

    .bottom {
        bottom: 0;
        transform-origin: bottom right;
    }

    input[type="text"]:focus~.bottom {
        transform-origin: bottom left;
        transform: scaleX(1);
    }

    .right {
        right: 0;
        transform-origin: top right;
    }

    input[type="text"]:focus~.right {
        transform-origin: bottom right;
        transform: scaleY(1);
    }

    .top {
        top: 0;
        transform-origin: top left;
    }

    input[type="text"]:focus~.top {
        transform-origin: top right;
        transform: scaleX(1);
    }

    .left {
        left: 0;
        transform-origin: bottom left;
    }

    input[type="text"]:focus~.left {
        transform-origin: top left;
        transform: scaleY(1);
    }


    input[type="text"]:focus {
        box-shadow: unset;
    }



    .input-sm {

        border: 2px solid #0CF;
    }
</style>

<body>

    @yield('videotable')


    @yield('Editvideo')


    @yield('slectcattoupdate')

    </div>
    </div>
    </div>
    </div>
</body>
<script src="{{ asset('Front/JS/jquery.min.js') }}" type="text/javascript" defer></script>

<!-- Bootstrap 4 -->
<script src="{{ asset('Front/JS/bootstrap.bundle.min.js') }}" type="text/javascript" defer></script>

</html>
