@extends('landing.template')

@section('title', 'Products')

@section('head')
    <link rel="stylesheet" href="{{ asset('/public/css.landing/products.css') }}">
    <link rel="stylesheet" href="{{ asset('/public/css.landing/products.component.css') }}">
@endsection

@section('content')
    @include('landing_partials.products')
@endsection
