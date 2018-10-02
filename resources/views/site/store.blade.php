@extends('site.index')
@section('header')
    @include('site.contents.header')
@endsection
@section('content')
    @include('site.includes.slider')
    @include('site.includes.produtos')
    @include('site.includes.videos')
    @include('site.includes.empresa')
    @include('site.includes.banner-vermelho')
    @include('site.includes.blog')
    @include('site.includes.contato')

    @include('site.contents.footer')

@endsection