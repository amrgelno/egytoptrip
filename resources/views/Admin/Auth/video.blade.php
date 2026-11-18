@extends('Admin.Auth.vido.parient')



@if (isset($_GET['EDIT_Video']) or isset($_GET['upcat']) or isset($_GET['updatecat']) or isset($_GET['DELCATITEM']))
    @section('videotable')

        @include('Admin.Auth.vido.videotable')

    @stop
@elseif(isset($_POST['Editvideo']))
    @section('selectcattoupdate')

        @include('Admin.Auth.vido.selectcattoupdate')


    @stop
@elseif(isset($_POST['selectcate']) or isset($_GET['page']))
    @section('Editvideo')

        @include('Admin.Auth.vido.Editvideo')


    @stop
@else
    <h1> لايوجد محتوي حتى الأن </h1>
@endif
