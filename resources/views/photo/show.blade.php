@extends('layouts.app')

@section('template_title')
    {{ $photo->name ?? "{{ __('Show') Photo" }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">{{ __('Show') }} Photo</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('photos.index') }}"> {{ __('Back') }}</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Photo Name:</strong>
                            {{ $photo->photo_name }}
                        </div>
                        <div class="form-group">
                            <strong>Service Id:</strong>
                            {{ $photo->service_id }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
