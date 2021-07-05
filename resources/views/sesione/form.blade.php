<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('sesiones') }}
            {{ Form::text('sesiones', $sesione->sesiones, ['class' => 'form-control' . ($errors->has('sesiones') ? ' is-invalid' : ''), 'placeholder' => 'Sesiones']) }}
            {!! $errors->first('sesiones', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('claseTeo') }}
            {{ Form::text('claseTeo', $sesione->claseTeo, ['class' => 'form-control' . ($errors->has('claseTeo') ? ' is-invalid' : ''), 'placeholder' => 'Claseteo']) }}
            {!! $errors->first('claseTeo', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('clasePr') }}
            {{ Form::text('clasePr', $sesione->clasePr, ['class' => 'form-control' . ($errors->has('clasePr') ? ' is-invalid' : ''), 'placeholder' => 'Clasepr']) }}
            {!! $errors->first('clasePr', '<div class="invalid-feedback">:message</p>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</div>