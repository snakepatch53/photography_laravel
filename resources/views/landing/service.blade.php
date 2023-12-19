@extends('landing.template')

@section('title', $service->service_name)

@section('head')
    <link rel="stylesheet" href="{{ asset('/public/css.landing/service.css') }}">
@endsection

@section('content')
    <section class="gallery">
        <div class="container">
            <h2>{{ $service->service_name }}</h2>
            <p>
                Us gallery of {{ $service->service_name }} service
            </p>
            <ul>
                @foreach ($photos as $photo)
                    <li>
                        <a href="{{ $photo->photo_url }}" data-lightbox="gallery" target="_blank">
                            <img src="{{ $photo->photo_url }}" alt="{{ $photo->photo_name }}">
                        </a>
                    </li>
                @endforeach
            </ul>
        </div>
    </section>
@endsection
