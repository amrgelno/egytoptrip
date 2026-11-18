@extends('Admin.Auth.CMS-Builder.parient')


@section('Loadingscreen')
    @include('Admin.Auth.dashboardLoader')
    @include('Admin.Auth.CMS-Builder.CmsLoading')
@stop

@section('paragraph')

    @include('Admin.Auth.CMS-Builder.paragraph-feature')

@stop


@section('topic')

    @include('Admin.Auth.CMS-Builder.topic-feature')


@stop


@section('box')
    @include('Admin.Auth.CMS-Builder.categories-feature')
@stop


@section('product')

    @include('Admin.Auth.CMS-Builder.product-feature')

@stop

@section('slider')
    @include('Admin.Auth.CMS-Builder.slider-feature')

@stop


@section('static')
    @include('Admin.Auth.CMS-Builder.static-feature')

@stop

@section('video')
    @include('Admin.Auth.CMS-Builder.video-feature')

@stop



@section('cover')
    @include('Admin.Auth.CMS-Builder.cover-feature')

@stop



@section('social')

    @include('Admin.Auth.CMS-Builder.socialmedia-feature')

@stop

@section('Marque')

    @include('Admin.Auth.CMS-Builder.Marque-feature')


@stop


@section('Keyword')

    @include('Admin.Auth.CMS-Builder.keyword-feature')

@stop


@section('FAQ')
    @include('Admin.Auth.CMS-Builder.Accordinepanel-feature')

@stop
