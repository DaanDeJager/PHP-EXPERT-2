@extends('layouts.app')


@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <a class="btn btn-primary mt-2 mb-2" href="/dashboard">Ga Terug</a>
            <div class="card">
            <div class="card-header">{{$users->titel}}</div>

                <div class="card-body">
                    <a>Naam: {{$users->naam}}</a><br>
                    <a>Email: {{$users->email}}</a><br>
                    <a>Telefoonnummer: {{$users->telefoonnummer}}</a><br>
                    <a>Functie: @if($users->functie == 'Medewerker')
                        Medewerker
                        @else
                        Klant
                        @endif
                    </a><br>
                <a class="btn btn-primary mt-2 mb-2" href="/users/{{$users->id}}/edit">Edit</a>
                {{Form::open(['action' => ['App\Http\Controllers\UserController@destroy', $users->id], 'method' => 'POST'])}}
                {{Form::hidden('_method', 'DELETE')}}
                {{Form::submit('Cancel',['class' => 'btn btn-danger'])}}
                {{ Form::close()}}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

