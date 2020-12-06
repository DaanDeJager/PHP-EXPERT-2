
@extends('layouts.app')


@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <a class="btn btn-primary mt-2 mb-2" href="/reparaties">Ga Terug</a>
            <div class="card">
                <div class="card-header">Reparaties Inplannen</div>

                <div class="card-body">
                    {{ Form::open(['action' => ['App\Http\Controllers\RepController@update', $reps->id], 'method' => 'POST']) }}
                    <div class="form-group">
                    {{Form::label('label','Reparatie')}}
                    {{Form::text('titel', $reps->titel, array('class' => 'form-control', 'placeholder' => 'Titel',))}}
                    {{Form::label('label','Datum en Tijd')}}
                    {{Form::date('datum', $reps->datum, array('class' => 'form-control', 'placeholder' => 'Datum',))}}
                    {{Form::time('tijdstip', $reps->tijdstip, array('class' => 'form-control', 'placeholder' => 'tijdstip',))}}
                    {{Form::label('label','Opmerkingen')}}
                    {{Form::textarea('opmerkingen', $reps->opmerkingen, array('class' => 'form-control', 'placeholder' => 'Opmerkingen',))}}
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
