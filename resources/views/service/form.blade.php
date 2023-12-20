<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('service_name') }}
            {{ Form::text('service_name', $service->service_name, ['class' => 'form-control' . ($errors->has('service_name') ? ' is-invalid' : ''), 'placeholder' => 'Service Name']) }}
            {!! $errors->first('service_name', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('service_description') }}
            {{ Form::text('service_description', $service->service_description, ['class' => 'form-control' . ($errors->has('service_description') ? ' is-invalid' : ''), 'placeholder' => 'Service Description']) }}
            {!! $errors->first('service_description', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('service_image') }}
            {{ Form::text('service_image', $service->service_image, ['class' => 'form-control' . ($errors->has('service_image') ? ' is-invalid' : ''), 'placeholder' => 'Service Image']) }}
            {!! $errors->first('service_image', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('service_price') }}
            {{ Form::text('service_price', $service->service_price, ['class' => 'form-control' . ($errors->has('service_price') ? ' is-invalid' : ''), 'placeholder' => 'Service Price']) }}
            {!! $errors->first('service_price', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">{{ __('Submit') }}</button>
    </div>
</div>