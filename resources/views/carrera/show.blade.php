@extends('Template.template')
@section('template_title')
    {{ $carrera->name ?? 'Show Carrera' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Show Carrera</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('carreras.index') }}"> Back</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Carrera:</strong>
                            {{ $carrera->carrera }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
