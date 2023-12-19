@extends('landing.template')

@section('title', 'Blogs')

@section('head')
    <link rel="stylesheet" href="{{ asset('/public/css.landing/blogs.css') }}">
@endsection

@section('content')
    <section class="blogs">
        <div class="container">
            <h3>Our Publications</h3>
            <p>see our most recent posts</p>
            <div class="items">
                @foreach ($blogs as $blog)
                    <div class="item">
                        <div class="img">
                            <img src="{{ $blog->blog_image_url }}" alt="blog1">
                        </div>
                        <div class="text">
                            <h4>{{ $blog->blog_title }}</h4>
                            <p>{{ $blog->blog_description }}</p>
                            <a href="{{ $blog->blog_url }}">Read More</a>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
@endsection
