<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('fullname') }}
            {{ Form::text('fullname', $cliente->fullname, ['class' => 'form-control' . ($errors->has('fullname') ? ' is-invalid' : ''), 'placeholder' => 'Fullname']) }}
            {!! $errors->first('fullname', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('address') }}
            {{ Form::text('address', $cliente->address, ['class' => 'form-control' . ($errors->has('address') ? ' is-invalid' : ''), 'placeholder' => 'Address']) }}
            {!! $errors->first('address', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('phone') }}
            {{ Form::text('phone', $cliente->phone, ['class' => 'form-control' . ($errors->has('phone') ? ' is-invalid' : ''), 'placeholder' => 'Phone']) }}
            {!! $errors->first('phone', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('phone_alternative') }}
            {{ Form::text('phone_alternative', $cliente->phone_alternative, ['class' => 'form-control' . ($errors->has('phone_alternative') ? ' is-invalid' : ''), 'placeholder' => 'Phone Alternative']) }}
            {!! $errors->first('phone_alternative', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">{{ __('Submit') }}</button>
    </div>
</div>