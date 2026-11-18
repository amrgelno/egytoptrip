@extends('Admin.Auth.statics.parient')


@if (isset($_GET['EDIT_static']) or isset($_GET['upcat']) or isset($_GET['updatecat']) or isset($_GET['DELCATITEM']))
    @section('staticstable')



        @include('Admin.Auth.statics.staticstable')


    @stop
@elseif(isset($_POST['selectcate']) or isset($_GET['page']))
    @section('staticstable')



        @include('Admin.Auth.statics.Editsatics')


    @stop
@elseif(isset($_POST['update']))
    @section('selecttoupdate')



        @include('Admin.Auth.statics.selecttoupdate')


    @stop
@else
    <h1> لايوجد محتوي حتى الأن </h1>
@endif
