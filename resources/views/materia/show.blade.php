@extends('layouts.app')

@section('template_title')
    {{ $materia->name ?? 'Show Materia' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Show Materia</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('materias.index') }}"> Back</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Nom:</strong>
                            {{ $materia->nom }}
                        </div>
                        <div class="form-group">
                            <strong>Clavemat:</strong>
                            {{ $materia->claveMat }}
                        </div>
                        <div class="form-group">
                            <strong>Semestres Id:</strong>
                            {{ $materia->semestres_id }}
                        </div>
                        <div class="form-group">
                            <strong>Carreras Id:</strong>
                            {{ $materia->carreras_id }}
                        </div>
                        <div class="form-group">
                            <strong>Grupos Id:</strong>
                            {{ $materia->grupos_id }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
