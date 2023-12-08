@extends('landing.template')

@section('title', 'Home')

@section('head')
    <link rel="stylesheet" href="{{ asset('/public/css.landing/home.css') }}">
@endsection

@section('content')
    <section class="banner">
        <div class="container">
            <div class="background">
                <img src="{{ asset('/public/img/banner.png') }}" alt="banner">
            </div>
            <div class="content">
                <p><b>It's not just a picture, it's a story</b></p>
                <p>Capturing the best moments of your life</p>
            </div>
        </div>
    </section>

    <section class="services">
        <div class="container">
            <h2>New York City Wedding Photography and Video</h2>
            <p>See our pricing information and get a quote for your Event or Portrait Shoot</p>
            <ul>
                @foreach ($services as $service)
                    <li>
                        <h4>{{ $service->service_name }}</h4>
                        <div class="img">
                            <img src="{{ asset($service->service_image_url) }}" alt="{{ $service->service_name }}">
                        </div>
                        <a href="{{ $service->service_url }}">See Gallery</a>
                        <p>
                            {{ $service->service_description }}
                        </p>
                    </li>
                @endforeach
            </ul>
            <div class="banner">
                <img src="{{ asset('/public/img/banner2.jpg') }}" alt="banner">
            </div>
        </div>
    </section>
@endsection
