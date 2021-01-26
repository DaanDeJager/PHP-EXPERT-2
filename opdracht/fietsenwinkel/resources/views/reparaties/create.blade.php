
@extends('layouts.app')


@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <a class="btn btn-primary mt-2 mb-2" href="/home">Ga Terug</a>
            <div class="card">
                <div class="card-header">Reparaties Inplannen</div>

                <div class="card-body">
                    {{Form::open(['action' => 'App\Http\Controllers\RepController@store', 'method' => 'POST']) }}
                    <div class="form-group">
                    {{Form::label('label','Reparatie')}}
                    {{Form::text('titel', null, array('class' => 'form-control', 'placeholder' => 'Titel',))}}
                    {{Form::label('label','Datum en Tijd')}}
                    {{Form::date('datum', null, array('class' => 'form-control', 'placeholder' => 'Datum',))}}
                    {{Form::time('tijdstip', null, array('class' => 'form-control', 'placeholder' => 'tijdstip',))}}
                    {{Form::label('label','Opmerkingen')}}
                    {{Form::textarea('opmerkingen', null, array('class' => 'form-control', 'placeholder' => 'Opmerkingen',))}}
                    @foreach($fiets as $f)
                    <input type="radio" id="fiets_id" name="fiets_id" value="{{$f->id}}">
                    <label for="female">{{$f->id}}. {{$f->type}}</label><br>
                    @endforeach
                    </div>
                    {{Form::submit('Verzenden',['class' => 'btn btn-primary'])}}
                    {{ Form::close() }}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
