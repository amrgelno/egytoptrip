<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Tiktuk | CmsDashboard</title>

    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">

    <!-- Font Awesome Icons -->
    <!-- <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css"> -->

    <link href="{{ asset('Front/css/all.min.css') }}" rel="stylesheet" type="text/css">

    <!-- Theme style -->

    <link href="{{ asset('Front/css/adminlte.min.css') }}" rel="stylesheet" type="text/css">


    <link href="{{ asset('Front/css/Uiframework.css') }}" rel="stylesheet" type="text/css">


    <link href="{{ asset('Front/plugins/summernote/summernote-bs5.min.css') }}" rel="stylesheet" type="text/css">

</head>

@livewireStyles()

<body onload='getmember();'>
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper" style="margin-left:10px;">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">DashBoard-Starter Page</h1>
                    </div><!-- /.col -->
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active">Starter Page</li>
                        </ol>
                    </div><!-- /.col -->
                </div><!-- /.row -->
            </div><!-- /.container-fluid -->
        </div>
        <!-- /.content-header -->

        <!-- Main content -->
        <div class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <!-- /.col-md-6 -->
                        <div class="col-lg-12">


                            @livewire('client-mssginput')

                        </div>

                        <div class="card card-primary card-outline">


                            @livewire('marketemail')


                        </div>
                        <!-- /.col-md-6 -->
                    </div>
                    <!-- /.row -->
                </div><!-- /.container-fluid -->
            </div>
            <!-- /.content -->
        </div>
        <!-- /.content-wrapper -->
    </div>




    <!-- jQuery -->



</body>
@livewireScripts()
<script src="{{ asset('Front/JS/jquery.min.js') }}"></script>

<!-- Bootstrap 4 -->
<script src="{{ asset('Front/JS/bootstrap.bundle.min.js.download') }}"></script>
<!-- AdminLTE App -->
<script src="{{ asset('Front/JS/adminlte.min.js') }}" defer></script>

<script src="{{ asset('Front/plugins/summernote/summernote-bs5.min.js') }}" defer></script>

<script>
    $(function() {
        //Add text editor
        $('#compose-textarea').summernote({
            height: 100,

            toolbar: [
                ['style', ['style']],
                ['font', ['bold', 'underline', 'clear']],
                ['color', ['color']],
                ['para', ['ul', 'ol', 'paragraph']],
                ['table', ['table']],
                ['insert', ['link', 'picture', 'video']],
                ['view', ['fullscreen', 'codeview', 'help']]
            ],

        })
    })
</script>

</html>
