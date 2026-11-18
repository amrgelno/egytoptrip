<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>CMS_DASHBOARD</title>

    <!-- Bootstrap 4 -->

    <link href="{{ asset('Front/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('Front/CMSCSS/CMSMD.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('Front/CMSCSS/CMSSm.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('Front/CMSCSS/CMSXS.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('Front/css/hint.min.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('Front/css/all.min.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('Front/plugins/summernote/summernote-bs5.min.css') }}" rel="stylesheet" type="text/css">

    {{-- <script src="https://cdn.tiny.cloud/1/2sv0zaptgw42b4r7hpylrp1qbzmflcka5uirblhujulbwpka/tinymce/1/tinymce.min.js"
        referrerpolicy="origin"></script> --}}


    {{-- <script>
        tinymce.init({
            selector: 'textarea',
            plugins: 'ai tinycomments mentions anchor autolink charmap codesample emoticons image link lists media searchreplace table visualblocks wordcount checklist mediaembed casechange export formatpainter pageembed permanentpen footnotes advtemplate advtable advcode editimage tableofcontents mergetags powerpaste tinymcespellchecker autocorrect a11ychecker typography inlinecss',
            toolbar: 'undo redo | blocks fontfamily fontsize | bold italic underline strikethrough | link image media table mergetags | align lineheight | tinycomments | checklist numlist bullist indent outdent | emoticons charmap | removeformat',
            tinycomments_mode: 'embedded',
            tinycomments_author: 'Author name',
            mergetags_list: [{
                    value: 'First.Name',
                    title: 'First Name'
                },
                {
                    value: 'Email',
                    title: 'Email'
                },
            ],
            ai_request: (request, respondWith) => respondWith.string(() => Promise.reject(
                "See docs to implement AI Assistant")),
        });
    </script> --}}



</head>


<style type="text/css">
    body {
        background-color: darkkhaki;
        !important margin-left: 5px;
    }

    .job {
        width: 500px;
        height: 50px;
        background: #0FF;
    }


    hr {
        color: white;
        width: 100%;
        margin: 7px;
    }

    .arrow {
        color: white;
        background: unset;
        border: unset;
        border-radius: 100%;
        font-weight: bolder;



    }

    .arrow.active .right {
        transform: rotate(-90deg);
    }

    .product {

        display: none;
    }


    .tox.tox-silver-sink.tox-tinymce-aux {
        display: none;
    }


    #loader {
        margin-top: 0px;
        background: rgb(240 242 246);
        z-index: 50;
        width: 100%;
        height: 1950px;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
        opacity: 0.98;
        visibility: visible;
        z-index: 9999;
    }




    div#loader {
        position: fixed;
        padding: 5% 0% 0% 3%;
    }


    #load {
        -webkit-box-align: center;
        align-items: center;
        -webkit-box-pack: center;
        justify-content: center;
        display: flex;
    }

    div#loader {
        padding: 20% 5% 0% 0%;
    }

    .loading {
        font-size: 25px;
        width: 50%;
        height: 50px;
        margin: 20% 0% 0% 43%;
    }

    div#loader>div {
        margin: 0% 20% 0% 43%;
    }
</style>

@livewireStyles()

<body onload="loader()">


    {{-- @livewire('counter') --}}
    <div class="container-fluid">



        @yield('Loadingscreen')

        @yield('paragraph')

        @yield('topic')

        @yield('box')

        @yield('product')

        @yield('slider')

        @yield('static')

        @yield('video')

        @yield('cover')

        @yield('social')

        @yield('Keyword')

        @yield('FAQ')




    </div>

</body>


@livewireScripts()


<script src="{{ asset('Front/JS/jquery.min.js') }}" type="text/javascript"></script>

{{-- <script src="{{ asset('Front/JS/bootstrap.bundle.min.js') }}" type="text/javascript"></script> --}}

<script src="{{ asset('Front/JS/bootstrap.bundle.min.js.download') }}"></script>


<script src="{{ asset('Front/plugins/summernote/summernote-bs5.min.js') }}"></script>




<script>
    $(function() {
        //Add text editor
        $('textarea').summernote()
    })
</script>



</html>
