@extends('layouts.app')


@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <a class="btn btn-primary mt-2 mb-2" href="/home">Ga Terug</a>
            <div class="card">
            <div class="card-header">{{$reps->titel}}</div>

                <div class="card-body">
                    <a>Opmerkingen: {{$reps->opmerkingen}}</a><br>
                    <a>Datum: {{$reps->datum}}</a><br>
                    <a>Tijdstip: {{$reps->tijdstip}}</a><br>
                    <a>Kosten: {{$reps->kosten}}</a><br>
                    <a class="text">Gemaakt Op: {{$reps->created_at}}</a><br>
                    <a>Fiets ID:{{$reps->fietsen_id}}</a><br>
                <a class="btn btn-primary mt-2 mb-2" href="/reparaties/{{$reps->id}}/edit">Edit</a>
                {{Form::open(['action' => ['App\Http\Controllers\RepController@destroy', $reps->id], 'method' => 'POST'])}}
                {{Form::hidden('_method', 'DELETE')}}
                {{Form::submit('Cancel',['class' => 'btn btn-danger'])}}
                {{ Form::close()}}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

