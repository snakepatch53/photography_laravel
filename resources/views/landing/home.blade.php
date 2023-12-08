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
                <li>
                    <h4>Weddings</h4>
                    <div class="img">
                        <img src="{{ asset('/public/img.services/1.jpg') }}" alt="weddings">
                    </div>
                    <a href="#">See Gallery</a>
                    <p>
                        Our wedding photography is cinematic, meaning it focuses on movement, story, and quality lighting.
                        We take great care to capture beautiful images from all part of the day for our clients. Here is a
                        gallery of some of our portfolio images.
                    </p>
                </li>
                <li>
                    <h4>Quinces | Sweet16's</h4>
                    <div class="img">
                        <img src="{{ asset('/public/img.services/2.jpg') }}" alt="quinces">
                    </div>
                    <a href="#">See Gallery</a>
                    <p>
                        Every Princess needs photo with impact, we want to capture your personality and your talents. We
                        shoot at a variety of locations to create beautiful art.
                    </p>
                </li>
                <li>
                    <h4>Portraits</h4>
                    <div class="img">
                        <img src="{{ asset('/public/img.services/3.jpg') }}" alt="portraits">
                    </div>
                    <a href="#">See Gallery</a>
                    <p>
                        We craft fine art portraits for our clients in the same format that we do for couples. Our portrait
                        services include family, maternity, newborn, Head shots, Creative Head shots and model portfolios.
                    </p>
                </li>
            </ul>
        </div>
    </section>
@endsection
