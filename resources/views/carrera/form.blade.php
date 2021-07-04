<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('carrera') }}
            {{ Form::text('carrera', $carrera->carrera, ['class' => 'form-control' . ($errors->has('carrera') ? ' is-invalid' : ''), 'placeholder' => 'Carrera']) }}
            {!! $errors->first('carrera', '<div class="invalid-feedback">:message</p>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</div>