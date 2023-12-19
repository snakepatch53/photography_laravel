@extends('landing.template')

@section('title', $product->product_title)

@section('head')
    <link rel="stylesheet" href="{{ asset('/public/css.landing/product.css') }}">
@endsection

@section('content')
    <section class="product">
        <div class="container">
            <h3>{{ $product->product_title }}</h3>
            <p class="subtitle">{{ $product->product_subtitle }}</p>
            <div class="content">
                {!! $product->product_content !!}
            </div>
        </div>
    </section>
@endsection
