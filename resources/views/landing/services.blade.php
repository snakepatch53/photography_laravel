@extends('landing.template')

@section('title', 'Services')

@section('head')
    <link rel="stylesheet" href="{{ asset('/public/css.landing/service.css') }}">
    <link rel="stylesheet" href="{{ asset('/public/css.landing/services.component.css') }}">
@endsection

@section('content')
    @include('landing_partials.services')
@endsection
