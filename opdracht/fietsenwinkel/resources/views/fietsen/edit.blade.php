
@extends('layouts.app')


@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <a class="btn btn-primary mt-2 mb-2" href="/home">Ga Terug</a>
            <div class="card">
                <div class="card-header">Reparaties Inplannen</div>

                <div class="card-body">
                    {{Form::open(['action' => ['App\Http\Controllers\FietsenController@update', $fietsen->id], 'method' => 'POST']) }}
                    <div class="form-group">
                        {{Form::label('label','Informatie over uw fiets')}}
                        {{Form::text('model', $fietsen->model, array('class' => 'form-control mt-2', 'placeholder' => 'Model',))}}
                        {{Form::text('type', $fietsen->type, array('class' => 'form-control mt-2', 'placeholder' => 'Type',))}}
                        {{Form::text('kleur', $fietsen->kleur, array('class' => 'form-control mt-2', 'placeholder' => 'Kleur',))}}
                        {{Form::text('rem', $fietsen->rem, array('class' => 'form-control mt-2', 'placeholder' => 'Rem',))}}
                    </div>
                    {{Form::hidden('_method','PUT')}}
                    {{Form::submit('Verzenden',['class' => 'btn btn-primary'])}}
                    {{ Form::close() }}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
