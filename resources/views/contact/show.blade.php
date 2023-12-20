@extends('layouts.app')

@section('template_title')
    {{ $contact->name ?? "{{ __('Show') Contact" }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">{{ __('Show') }} Contact</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('contacts.index') }}"> {{ __('Back') }}</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Contact Name:</strong>
                            {{ $contact->contact_name }}
                        </div>
                        <div class="form-group">
                            <strong>Contact Value:</strong>
                            {{ $contact->contact_value }}
                        </div>
                        <div class="form-group">
                            <strong>Contact Link:</strong>
                            {{ $contact->contact_link }}
                        </div>
                        <div class="form-group">
                            <strong>Contact Icon:</strong>
                            {{ $contact->contact_icon }}
                        </div>
                        <div class="form-group">
                            <strong>Contact Color:</strong>
                            {{ $contact->contact_color }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
