<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('video_title') }}
            {{ Form::text('video_title', $video->video_title, ['class' => 'form-control' . ($errors->has('video_title') ? ' is-invalid' : ''), 'placeholder' => 'Video Title']) }}
            {!! $errors->first('video_title', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('video_iframe') }}
            {{ Form::text('video_iframe', $video->video_iframe, ['class' => 'form-control' . ($errors->has('video_iframe') ? ' is-invalid' : ''), 'placeholder' => 'Video Iframe']) }}
            {!! $errors->first('video_iframe', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">{{ __('Submit') }}</button>
    </div>
</div>