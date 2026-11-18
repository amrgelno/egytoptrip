@extends('Admin.Auth.topic.parient')

@if (isset($_GET['EDIT_TOPIC']) or isset($_GET['page']))
    @section('topictable')

        @include('Admin.Auth.topic.topictable')


    @stop
@elseif(isset($_GET['SELECTTopic']))
    @section('Edittopic')

        @include('Admin.Auth.topic.Edittopic')


    @stop
@else
    <h1> لايوجد محتوي حتى الأن </h1>
@endif
