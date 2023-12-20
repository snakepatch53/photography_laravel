<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('product_name') }}
            {{ Form::text('product_name', $product->product_name, ['class' => 'form-control' . ($errors->has('product_name') ? ' is-invalid' : ''), 'placeholder' => 'Product Name']) }}
            {!! $errors->first('product_name', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('product_title') }}
            {{ Form::text('product_title', $product->product_title, ['class' => 'form-control' . ($errors->has('product_title') ? ' is-invalid' : ''), 'placeholder' => 'Product Title']) }}
            {!! $errors->first('product_title', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('product_subtitle') }}
            {{ Form::text('product_subtitle', $product->product_subtitle, ['class' => 'form-control' . ($errors->has('product_subtitle') ? ' is-invalid' : ''), 'placeholder' => 'Product Subtitle']) }}
            {!! $errors->first('product_subtitle', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('product_icon') }}
            {{ Form::text('product_icon', $product->product_icon, ['class' => 'form-control' . ($errors->has('product_icon') ? ' is-invalid' : ''), 'placeholder' => 'Product Icon']) }}
            {!! $errors->first('product_icon', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('product_description') }}
            {{ Form::text('product_description', $product->product_description, ['class' => 'form-control' . ($errors->has('product_description') ? ' is-invalid' : ''), 'placeholder' => 'Product Description']) }}
            {!! $errors->first('product_description', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('product_content') }}
            {{ Form::text('product_content', $product->product_content, ['class' => 'form-control' . ($errors->has('product_content') ? ' is-invalid' : ''), 'placeholder' => 'Product Content']) }}
            {!! $errors->first('product_content', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">{{ __('Submit') }}</button>
    </div>
</div>