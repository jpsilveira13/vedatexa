@extends('site.index')
@section('header')
    @include('site.contents.header')
@endsection
@section('content')
    <!-- include da parte do site sobre -->
    @include('site.includes.slider')
    <!-- include da parte do site sobre -->
    @include('site.includes.sobre')
    <!-- include da parte do site portfolio -->
    @include('site.includes.banner-vermelho')
    <!-- include da parte do site cliente -->
    @include('site.includes.produtos')
    <!-- include da parte do site contato -->
    @include('site.includes.contato')
    @include('site.includes.empresa')
    <!-- include footer -->
    @include('site.contents.footer')

@endsection