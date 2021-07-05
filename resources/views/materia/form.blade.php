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
            <select name="semestres_id" id="semestres_id" class="form-control">
             @foreach ($semestres as $semestre)
             <option value="{{$semestre['id']}}">{{$semestre['descripcion']}}</option> 
            @endforeach
            </select>
            {!! $errors->first('grupos_id', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('carreras_id') }}
            <select name="carreras_id" id="carreras_id" class="form-control">
             @foreach ($carreras as $carrera)
             <option value="{{$carrera['id']}}">{{$carrera['carrera']}}</option> 
            @endforeach
            </select>
            {!! $errors->first('grupos_id', '<div class="invalid-feedback">:message</p>') !!}
        </div>                              
        
        <div class="form-group">
            {{ Form::label('grupos_id') }}
            <select name="grupos_id" id="grupos_id" class="form-control">
             @foreach ($grupos as $grupo)
             <option value="{{$grupo['id']}}">{{$grupo['descripcion']}}</option> 
            @endforeach
            </select>
            {!! $errors->first('grupos_id', '<div class="invalid-feedback">:message</p>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</div>