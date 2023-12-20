@extends('layouts.app')

@section('template_title')
    {{ $service->name ?? "{{ __('Show') Service" }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">{{ __('Show') }} Service</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('services.index') }}"> {{ __('Back') }}</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Service Name:</strong>
                            {{ $service->service_name }}
                        </div>
                        <div class="form-group">
                            <strong>Service Description:</strong>
                            {{ $service->service_description }}
                        </div>
                        <div class="form-group">
                            <strong>Service Image:</strong>
                            {{ $service->service_image }}
                        </div>
                        <div class="form-group">
                            <strong>Service Price:</strong>
                            {{ $service->service_price }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
