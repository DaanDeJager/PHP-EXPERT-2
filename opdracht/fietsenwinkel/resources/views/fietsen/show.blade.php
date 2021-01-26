@extends('layouts.app')


@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <a class="btn btn-primary mt-2 mb-2" href="/home">Ga Terug</a>
            <div class="card">
            <div class="card-header">Fiets: {{$fiets->id}}</div>

                <div class="card-body">
                    <a>Model: {{$fiets->Model}}</a><br>
                    <a>Type: {{$fiets->type}}</a><br>
                    <a>Kleur: {{$fiets->kleur}}</a><br>
                    <a>Rem: {{$fiets->rem}}</a><br>
                <a class="btn btn-primary mt-2 mb-2" href="/fietsen/{{$fiets->id}}/edit">Edit</a>
                {{Form::open(['action' => ['App\Http\Controllers\FietsenController@destroy', $fiets->id], 'method' => 'POST'])}}
                {{Form::hidden('_method', 'DELETE')}}
                {{Form::submit('Cancel',['class' => 'btn btn-danger'])}}
                {{ Form::close()}}
                </div>
            </div>
            <div class="card mt-2">
                <div class="card-header">Alle reparaties voor de fiets met het id {{$fiets->id}}</div>
                <div class="card-content">
                    <table class="table table-striped outlined">
                        <tr>
                            <th>Titel</th>
                            <th>Datum</th>
                            <th>Kosten</th>
                            <th>Opmerkingen</th>
                            <th>Data</th>
                        </tr>
                        @if(count($reps) > 0)
                        @foreach($reps as $rep)
                        <tr>
                            <td>{{$rep->titel}}</td>
                            <td>{{$rep->datum}}</td>
                            <td>{{$rep->kosten}}</td>
                            <td>{{$rep->opmerkingen}}</td>
                            <td><a href="/reparaties/{{$rep->id}}"><i class="fa fa-eye"></i></a></td>
                        </tr>
                        @endforeach
                        @else
                            <td>U heeft geen reparaties ingepland.</td>
                        @endif
                    </table>
                </div>
                </div>
        </div>
    </div>
</div>
@endsection

