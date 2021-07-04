<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('nom') }}
            {{ Form::text('nom', $materia->nom, ['class' => 'form-control' . ($errors->has('nom') ? ' is-invalid' : ''), 'placeholder' => 'Nom']) }}
            {!! $errors->first('nom', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('claveMat') }}
            {{ Form::text('claveMat', $materia->claveMat, ['class' => 'form-control' . ($errors->has('claveMat') ? ' is-invalid' : ''), 'placeholder' => 'Clavemat']) }}
            {!! $errors->first('claveMat', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('semestres_id') }}
            {{ Form::text('semestres_id', $materia->semestres_id, ['class' => 'form-control' . ($errors->has('semestres_id') ? ' is-invalid' : ''), 'placeholder' => 'Semestres Id']) }}
            {!! $errors->first('semestres_id', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('carreras_id') }}
            {{ Form::text('carreras_id', $materia->carreras_id, ['class' => 'form-control' . ($errors->has('carreras_id') ? ' is-invalid' : ''), 'placeholder' => 'Carreras Id']) }}
            {!! $errors->first('carreras_id', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('grupos_id') }}
            {{ Form::text('grupos_id', $materia->grupos_id, ['class' => 'form-control' . ($errors->has('grupos_id') ? ' is-invalid' : ''), 'placeholder' => 'Grupos Id']) }}
            {!! $errors->first('grupos_id', '<div class="invalid-feedback">:message</p>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</div>