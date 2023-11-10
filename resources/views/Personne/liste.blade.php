@extends('layouts.app')

@section('title', 'Zoom Film')

@section('contenu')

    <div class="container-fluid" style="margin-top: 100px;">
        <div class="row">
            @if (count($personnes))
                @foreach ($personnes as $personne)
                    <div class="col-md-2">
                        <img src={{ $personne->photo }} alt="" class="img-fluid" srcset="">
                    </div>
                @endforeach
            @else
                <p>Il ny a aucun acteur.</p>
            @endif

        </div>
    </div>

@endsection
