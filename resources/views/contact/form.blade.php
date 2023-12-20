<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('contact_name') }}
            {{ Form::text('contact_name', $contact->contact_name, ['class' => 'form-control' . ($errors->has('contact_name') ? ' is-invalid' : ''), 'placeholder' => 'Contact Name']) }}
            {!! $errors->first('contact_name', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('contact_value') }}
            {{ Form::text('contact_value', $contact->contact_value, ['class' => 'form-control' . ($errors->has('contact_value') ? ' is-invalid' : ''), 'placeholder' => 'Contact Value']) }}
            {!! $errors->first('contact_value', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('contact_link') }}
            {{ Form::text('contact_link', $contact->contact_link, ['class' => 'form-control' . ($errors->has('contact_link') ? ' is-invalid' : ''), 'placeholder' => 'Contact Link']) }}
            {!! $errors->first('contact_link', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('contact_icon') }}
            {{ Form::text('contact_icon', $contact->contact_icon, ['class' => 'form-control' . ($errors->has('contact_icon') ? ' is-invalid' : ''), 'placeholder' => 'Contact Icon']) }}
            {!! $errors->first('contact_icon', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('contact_color') }}
            {{ Form::text('contact_color', $contact->contact_color, ['class' => 'form-control' . ($errors->has('contact_color') ? ' is-invalid' : ''), 'placeholder' => 'Contact Color']) }}
            {!! $errors->first('contact_color', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">{{ __('Submit') }}</button>
    </div>
</div>