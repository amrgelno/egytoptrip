@extends('Admin.Auth.paragraph.parient')



@if (isset($_GET['Editparagraph']) or isset($_GET['page']))
    @section('paragraphtable')

        @include('Admin.Auth.paragraph.paragraphtable')


    @stop
@elseif(isset($_GET['SELECTParagraph']))
    @section('Editparagraph')

        @include('Admin.Auth.paragraph.Editparagraph')

    @stop
@else
    <h1> لايوجد محتوي حتى الأن</h1>
@endif
