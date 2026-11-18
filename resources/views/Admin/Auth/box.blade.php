@extends('Admin.Auth.box.parient')


@if (isset($_GET['updateBox']) or isset($_GET['upcat']) or isset($_GET['updatecat']) or isset($_GET['DELCATITEM']))
    @section('boxtable')

        @include('Admin.Auth.box.boxtable')

    @stop
@elseif(isset($_POST['selecttoupdate']))
    @section('Editbox')

        @include('Admin.Auth.box.selecttoupdate')
    @stop
@elseif(isset($_POST['selectcate']) or isset($_GET['page']))
    @section('selecttoupdate')

        @include('Admin.Auth.box.Editbox')
    @stop
@else
    <h1> لايوجد محتوي حتى الأن </h1>
@endif
