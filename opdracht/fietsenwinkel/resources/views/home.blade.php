@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">

            <div class="card">
                <div class="card-header">
                    Mijn reparaties
                </div>
                <div class="card-body">
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
                    <a href="/reparaties/create" class="btn btn-primary">Plan een reparatie</a>
                    <a href="/fietsen/create" class="btn btn-success">Voeg een fiets toe</a>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
