@extends('layouts.app')

@section('template_title')
    {{ $blog->name ?? "{{ __('Show') Blog" }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">{{ __('Show') }} Blog</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('blogs.index') }}"> {{ __('Back') }}</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Blog Title:</strong>
                            {{ $blog->blog_title }}
                        </div>
                        <div class="form-group">
                            <strong>Blog Subtitle:</strong>
                            {{ $blog->blog_subtitle }}
                        </div>
                        <div class="form-group">
                            <strong>Blog Image:</strong>
                            {{ $blog->blog_image }}
                        </div>
                        <div class="form-group">
                            <strong>Blog Description:</strong>
                            {{ $blog->blog_description }}
                        </div>
                        <div class="form-group">
                            <strong>Blog Content:</strong>
                            {{ $blog->blog_content }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
