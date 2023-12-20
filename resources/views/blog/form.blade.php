<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('blog_title') }}
            {{ Form::text('blog_title', $blog->blog_title, ['class' => 'form-control' . ($errors->has('blog_title') ? ' is-invalid' : ''), 'placeholder' => 'Blog Title']) }}
            {!! $errors->first('blog_title', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('blog_subtitle') }}
            {{ Form::text('blog_subtitle', $blog->blog_subtitle, ['class' => 'form-control' . ($errors->has('blog_subtitle') ? ' is-invalid' : ''), 'placeholder' => 'Blog Subtitle']) }}
            {!! $errors->first('blog_subtitle', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('blog_image') }}
            {{ Form::text('blog_image', $blog->blog_image, ['class' => 'form-control' . ($errors->has('blog_image') ? ' is-invalid' : ''), 'placeholder' => 'Blog Image']) }}
            {!! $errors->first('blog_image', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('blog_description') }}
            {{ Form::text('blog_description', $blog->blog_description, ['class' => 'form-control' . ($errors->has('blog_description') ? ' is-invalid' : ''), 'placeholder' => 'Blog Description']) }}
            {!! $errors->first('blog_description', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('blog_content') }}
            {{ Form::text('blog_content', $blog->blog_content, ['class' => 'form-control' . ($errors->has('blog_content') ? ' is-invalid' : ''), 'placeholder' => 'Blog Content']) }}
            {!! $errors->first('blog_content', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">{{ __('Submit') }}</button>
    </div>
</div>