@extends('landing.template')

@section('title', 'Home')

@section('head')
    <link rel="stylesheet" href="{{ asset('/public/css.landing/home.css') }}">
    <link rel="stylesheet" href="{{ asset('/public/css.landing/services.component.css') }}">
    <link rel="stylesheet" href="{{ asset('/public/css.landing/products.component.css') }}">
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

    @include('landing_partials.services')

    <section class="videos">
        <div class="container">
            <h2>Videos</h2>
            <p class="subtitle">Get to know a little more about our work</p>
            <ul>
                @foreach ($videos as $video)
                    <li>
                        <h4>{{ $video->video_title }}</h4>
                        <div class="video">
                            {!! $video->video_iframe !!}
                        </div>
                    </li>
                @endforeach
            </ul>
            <p class="description">With over 10 years offering Professional Photography & Video for events. Our studio
                specializes in creating
                beautiful pieces of ART. We want our photographs to be full of emotions, happiness, fun, love and create
                memories that you will love for a lifetime and allow you to relive the story of your day over and over
                again. We create our beautiful images through a variety of off-camera flashes, using modifiers, colored
                gels, LED lights, and natural light techniques using the latest technology. We believe that good customer
                service and good quality of Photography & Video.</p>
            <a href="#">View More..</a>
        </div>
    </section>

    <br>
    @include('landing_partials.products')
@endsection
