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
    <!-- Font Awesome Icons -->
    <!-- <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css"> -->
    <link href="{{ asset('Front/css/all.min.css') }}" rel="stylesheet" type="text/css">
    <!-- Theme style -->
    <link href="{{ asset('Front/css/adminlte.min.css') }}" rel="stylesheet" type="text/css">
    <style>
        @media (min-width: 768px) {

            body:not(.sidebar-mini-md):not(.sidebar-mini-xs):not(.layout-top-nav) .content-wrapper,
            body:not(.sidebar-mini-md):not(.sidebar-mini-xs):not(.layout-top-nav) .main-footer,
            body:not(.sidebar-mini-md):not(.sidebar-mini-xs):not(.layout-top-nav) .main-header {
                transition: margin-left .3s ease-in-out;
                margin-left: 6px;
            }
        }
    </style>
</head>

<body class="hold-transition sidebar-mini">

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">

            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">Customize_Template</h1>
                    </div><!-- /.col -->
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active">Customize_Template</li>
                        </ol>
                    </div><!-- /.col -->
                </div><!-- /.row -->
            </div><!-- /.row mb-2 -->
        </div> <!-- /Content Header (Page header) -->


        @include('Admin.Auth.Template_customizer.Customize_Appearance')




        @include('Admin.Auth.Template_customizer.customize_wedget')




        @include('Admin.Auth.Template_customizer.seo&securesetting')



    </div>

    </div>

    </div>

    </div>
    </div>
</body>

</html>
