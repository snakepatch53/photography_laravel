<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('photo_name') }}
            {{ Form::text('photo_name', $photo->photo_name, ['class' => 'form-control' . ($errors->has('photo_name') ? ' is-invalid' : ''), 'placeholder' => 'Photo Name']) }}
            {!! $errors->first('photo_name', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('service_id') }}
            {{ Form::text('service_id', $photo->service_id, ['class' => 'form-control' . ($errors->has('service_id') ? ' is-invalid' : ''), 'placeholder' => 'Service Id']) }}
            {!! $errors->first('service_id', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">{{ __('Submit') }}</button>
    </div>
</div>