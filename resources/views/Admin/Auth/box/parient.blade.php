<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    {{-- <link href="{{ asset('Front/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css"> --}}
    <link rel="stylesheet" href="{{ asset('Front/css/lightbox.css') }}">
    <script src="{{ asset('Front/JS/lightbox.min.js') }}" type="text/javascript" defer></script>
    <link href="{{ asset('Front/css/adminlte.min.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('Front/css/all.min.css') }}" rel="stylesheet" type="text/css" />
    {{-- <link href="{{ asset('Front/plugins/summernote/summernote-bs5.min.css') }}" rel="stylesheet" type="text/css"> --}}

    <script src="https://cdn.tiny.cloud/1/2sv0zaptgw42b4r7hpylrp1qbzmflcka5uirblhujulbwpka/tinymce/5/tinymce.min.js"
        referrerpolicy="origin"></script>

    <script>
        tinymce.init({
            selector: 'textarea'
            //  plugins: 'ai tinycomments mentions anchor autolink charmap codesample emoticons image link lists media searchreplace table visualblocks wordcount checklist mediaembed casechange export formatpainter pageembed permanentpen footnotes advtemplate advtable advcode editimage tableofcontents mergetags powerpaste tinymcespellchecker autocorrect a11ychecker typography inlinecss',
            //  toolbar: 'undo redo | blocks fontfamily fontsize | bold italic underline strikethrough | link image media table mergetags | align lineheight | tinycomments | checklist numlist bullist indent outdent | emoticons charmap | removeformat',

        });
    </script>



    <link href="{{ asset('Front/css/Uiframework.css') }}" rel="stylesheet" type="text/css">

    <title>box</title>
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

    li {
        list-style: none;
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
        /* box-shadow: inset -1px 1px 20px 0px #000;*/
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
        box-shadow: inset -20px 0px 20px 20px #00000078;

    }

    input[type="text"] {
        width: 100px;

    }


    .input-sm {

        border: 2px solid #0CF;
    }

    /* resize table css */

    td span {
        resize: both;
        overflow: auto;
        width: auto;
        height: auto;
        min-height: 20px;
        min-width: 20px;
    }


    td {
        padding: 0;
        margin: 0px;
        overflow: auto;
    }


    table {
        border-collapse: collapse;
        border-spacing: 0px;
        resize: both;
        overflow: auto;
    }

    td {
        padding: 0;
        margin: 0px;
        overflow: auto;
    }

    span {
        resize: both;
        overflow: auto;
        width: 120px;
        height: 120px;
        margin: 0px;
        padding: 0px;
        display: block;

    }

    td span {
        border: 0;
        width: auto;
        height: auto;
        min-height: 20px;
        min-width: 20px;
    }
</style>

<body>
    <!--  box compoment  -->
    @yield('boxtable')

    @yield('Editbox')

    @yield('selecttoupdate')


    </div>
    </div>
    </div>
    </div>
</body>
<script src="{{ asset('Front/JS/jquery.min.js') }}" type="text/javascript" defer></script>

<!-- Bootstrap 4 -->
<script src="{{ asset('Front/JS/bootstrap.bundle.min.js') }}" type="text/javascript"></script>
<script src="{{ asset('Front/JS/auto-tables.js') }}"></script>


{{-- <script src="{{ asset('Front/JS/bootstrap.bundle.min.js.download') }}"></script>


<script src="{{ asset('Front/plugins/summernote/summernote-bs5.min.js') }}"></script> --}}


{{-- <script>
    $(function() {
        //Add text editor
        $('textarea').summernote()
    })
</script> --}}


</html>
