@extends('layouts.app')

@section('template_title')
    Tperiodo
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Tperiodo') }}
                            </span>

                             <div class="float-right">
                                <a href="{{ route('tperiodos.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
                                  {{ __('Create New') }}
                                </a>
                              </div>
                        </div>
                    </div>
                    @if ($message = Session::get('success'))
                        <div class="alert alert-success">
                            <p>{{ $message }}</p>
                        </div>
                    @endif

                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-striped table-hover">
                                <thead class="thead">
                                    <tr>
                                        <th>No</th>
                                        
										<th>Descripcion</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($tperiodos as $tperiodo)
                                        <tr>
                                            <td>{{ ++$i }}</td>
                                            
											<td>{{ $tperiodo->descripcion }}</td>

                                            <td>
                                                <form action="{{ route('tperiodos.destroy',$tperiodo->id) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('tperiodos.show',$tperiodo->id) }}"><i class="fa fa-fw fa-eye"></i> Show</a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('tperiodos.edit',$tperiodo->id) }}"><i class="fa fa-fw fa-edit"></i> Edit</a>
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger btn-sm"><i class="fa fa-fw fa-trash"></i> Delete</button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                {!! $tperiodos->links() !!}
            </div>
        </div>
    </div>
@endsection
