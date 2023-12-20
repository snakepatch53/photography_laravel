@extends('layouts.app')

@section('template_title')
    {{ $product->name ?? "{{ __('Show') Product" }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">{{ __('Show') }} Product</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('products.index') }}"> {{ __('Back') }}</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Product Name:</strong>
                            {{ $product->product_name }}
                        </div>
                        <div class="form-group">
                            <strong>Product Title:</strong>
                            {{ $product->product_title }}
                        </div>
                        <div class="form-group">
                            <strong>Product Subtitle:</strong>
                            {{ $product->product_subtitle }}
                        </div>
                        <div class="form-group">
                            <strong>Product Icon:</strong>
                            {{ $product->product_icon }}
                        </div>
                        <div class="form-group">
                            <strong>Product Description:</strong>
                            {{ $product->product_description }}
                        </div>
                        <div class="form-group">
                            <strong>Product Content:</strong>
                            {{ $product->product_content }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
