@extends('layouts.app')


@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Mijn Fietsen</div>
                <div class="card-body">
                    <table class="table table-striped outlined">
                    <th>Model</th>
                    <th>Type</th>
                    <th>Kleur</th>
                    <th>Rem</th>
                    <th></th>
                    @if(count($fiets) > 0)
                    @foreach($fiets as $rep)
                    <tr>
                        <td>{{$rep->model}}</td>
                        <td>{{$rep->type}}</td>
                        <td>{{$rep->kleur}}</td>
                        <td>{{$rep->rem}}</td>
                        <td><a href="/fietsen/{{$rep->id}}"><i class="fa fa-eye"></i></a></td>
                    </tr>
                    @endforeach
                    @else
                        <td>U heeft geen fietsen.</td>
                    @endif
                </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

