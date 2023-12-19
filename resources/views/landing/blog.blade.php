@extends('landing.template')

@section('title', 'Blog')

@section('head')
    <link rel="stylesheet" href="{{ asset('/public/css.landing/blog.css') }}">
@endsection

@section('content')
    <section class="blog">
        <div class="container">
            <div class="col static">
                <ul>
                    <a class="p-link" href="{{ route('services') }}">Visit our Services</a>
                    @foreach ($services as $service)
                        <li>
                            <a href="{{ $service->service_url }}">
                                <div class="img">
                                    <img src="{{ $service->service_image_url }}" alt="service1">
                                </div>
                                <div class="text">
                                    <span>{{ $service->service_name }}</span>
                                    <p>{{ $service->service_description }}</p>
                                </div>
                            </a>
                        </li>
                    @endforeach
                </ul>
                <ul>
                    <a class="p-link" href="{{ route('products') }}">Visit our Products</a>
                    @foreach ($products as $product)
                        <li class="product-list">
                            <a href="{{ $product->product_url }}">
                                <div class="icon">
                                    {!! $product->product_icon !!}
                                </div>
                                <div class="text">
                                    <span>{{ $product->product_name }}</span>
                                    <p>{{ $product->product_description }}</p>
                                </div>
                            </a>
                        </li>
                    @endforeach
                </ul>
            </div>
            <div class="col content">
                <h3>{{ $blog->blog_title }}</h3>
                <p>{{ $blog->blog_subtitle }}</p>
                <div class="content">


                    {{ $blog->blog_content }}


                </div>
            </div>
        </div>
    </section>
@endsection
