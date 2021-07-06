@extends('Template.template')

@section('template_title')
    {{ $sesione->name ?? 'Show Sesione' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Show Sesione</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('sesiones.index') }}"> Back</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Sesiones:</strong>
                            {{ $sesione->sesiones }}
                        </div>
                        <div class="form-group">
                            <strong>Claseteo:</strong>
                            {{ $sesione->claseTeo }}
                        </div>
                        <div class="form-group">
                            <strong>Clasepr:</strong>
                            {{ $sesione->clasePr }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
