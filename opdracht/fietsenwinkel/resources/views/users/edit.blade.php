@extends('layouts.app')


@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <a class="btn btn-primary mt-2 mb-2" href="/dashboard">Ga Terug</a>
            <div class="card">
            <div class="card-header">{{$users->titel}}</div>

                <div class="card-body">
                    {{Form::open(['action' => ['App\Http\Controllers\UserController@update', $users->id], 'method' => 'POST']) }}
                    <div class="form-group">
                        {{Form::label('label','Profiel')}}
                        {{Form::text('name', $users->name, array('class' => 'form-control mt-2',))}}
                        {{Form::text('email', $users->email, array('class' => 'form-control mt-2',))}}
                        {{Form::text('telefoonnummer', $users->telefoonnummer, array('class' => 'form-control mt-2',))}}
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
