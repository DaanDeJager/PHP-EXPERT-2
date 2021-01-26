
@extends('layouts.app')


@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <a class="btn btn-primary mt-2 mb-2" href="/home">Ga Terug</a>
            <div class="card">
                <div class="card-header">Reparaties Inplannen</div>

                <div class="card-body">
                    {{ Form::open(['action' => 'App\Http\Controllers\FietsenController@store', 'method' => 'POST']) }}
                    <div class="form-group">
                    {{Form::label('label','Informatie over uw fiets')}}
                    {{Form::text('model', null, array('class' => 'form-control mt-2', 'placeholder' => 'Model',))}}
                    {{Form::text('type', null, array('class' => 'form-control mt-2', 'placeholder' => 'Type',))}}
                    {{Form::text('kleur', null, array('class' => 'form-control mt-2', 'placeholder' => 'Kleur',))}}
                    {{Form::text('rem', null, array('class' => 'form-control mt-2', 'placeholder' => 'Rem',))}}
                    </div>
                    {{Form::submit('Verzenden',['class' => 'btn btn-primary'])}}
                    {{ Form::close() }}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
