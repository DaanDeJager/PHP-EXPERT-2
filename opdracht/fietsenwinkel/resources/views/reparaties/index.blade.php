@extends('layouts.app')


@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Reparaties</div>

                <div class="card-body">
                    @if(count($reps) > 0)
                    @foreach($reps as $rep)
                        <div class="card mb-4">
                            <div class="card-header">
                            <h3><a href="/reparaties/{{$rep->id}}" style='border-radius:24px;'>{{$rep->titel}}</a></h3>
                            </div>
                            <div class="card-body">
                            <small>Gemaakt Op: {{$rep->created_at}}</small>
                            </div>

                        </div>
                    @endforeach
                    <a href="/reparaties/create" class="btn btn-primary">Nieuwe Reparatie</a>
                @else
                    <a>U heeft geen openstaande reparaties</a>
                @endif
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

