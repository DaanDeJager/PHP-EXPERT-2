@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">

            <div class="card mt-4">
                <div class="card-header">
                    Alle reparaties
                </div>
                <div class="card-body">
                    <table class="table table-striped outlined">
                        <tr>
                            <th>Titel</th>
                            <th>Datum</th>
                            <th>Kosten</th>
                            <th>Opmerkingen</th>
                            <th></th>
                            <th></th>
                        </tr>
                        @if(count($reparaties) > 0)
                        @foreach($reparaties as $rep)
                        <tr>
                            <td>{{$rep->titel}}</td>
                            <td>{{$rep->datum}}</td>
                            <td>{{$rep->kosten}}</td>
                            <td>{{$rep->opmerkingen}}</td>
                            <td><a href="/reparaties/{{$rep->id}}" class="success">show</a></td>
                            <td><a href="/reparaties/{{$rep->id}}/edit" class="warning">edit</a></td>
                        </tr>
                        @endforeach
                        @else
                            <td>Er zijn geen reparaties ingepland.</td>
                        @endif
                    </table>

                </div>
            </div>
            <div class="card mt-4">
                <div class="card-header">
                    Alle Fietsen
                </div>
                <div class="card-body">
                    <table class="table table-striped outlined">
                        <tr>
                            <th>Model</th>
                            <th>Type</th>
                            <th>Kleur</th>
                            <th>Rem</th>
                            <th>User</th>
                            <th></th>
                            <th></th>
                        </tr>
                        @if(count($fietsen) > 0)
                        @foreach($fietsen as $rep)
                        <tr>
                            <td>{{$rep->model}}</td>
                            <td>{{$rep->type}}</td>
                            <td>{{$rep->kleur}}</td>
                            <td>{{$rep->rem}}</td>
                            <td>{{$rep->user->name}}</td>
                            <td><a href="/fietsen/{{$rep->id}}" class="success">show</a></td>
                            <td><a href="/fietsen/{{$rep->id}}/edit" class="warning">edit</a></td>
                        </tr>
                        @endforeach
                        @else
                            <td>Er zijn geen fietsen.</td>
                        @endif
                    </table>

                </div>
            </div>
            <div class="card mt-4">
                <div class="card-header">
                    Alle Gebruikers
                </div>
                <div class="card-body">
                    <table class="table table-striped outlined">
                        <tr>
                            <th>Naam</th>
                            <th>Email</th>
                            <th>Telefoonnummer</th>
                            <th>Functie</th>
                            <th></th>
                            <th></th>
                        </tr>
                        @if(count($users) > 0)
                        @foreach($users as $rep)
                        <tr>
                            <td>{{$rep->name}}</td>
                            <td>{{$rep->email}}</td>
                            <td>{{$rep->telefoonnummer}}</td>
                            <td>
                                @if($rep->functie == 'Medewerker')
                                Medewerker
                                @else
                                Klant
                                @endif
                            </td>
                            <td><a href="/users/{{$rep->id}}" class="success">show</a></td>
                            <td><a href="/users/{{$rep->id}}/edit" class="warning">edit</a></td>
                        </tr>
                        @endforeach
                        @else
                            <td>Er zijn geen gebruikers.</td>
                        @endif
                    </table>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
