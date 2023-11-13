@extends('layouts.app')

@section('title', 'Zoom Film')

@section('contenu')

<div class="container-fluid" style="margin-top: 100px;">
    <div class="row">
        @if (count($personnes))
            @foreach ($personnes as $personne)
                <div class="col-md-2 mt-2 img-container">
                    <img src="{{ $personne->photo }}" alt="" class="img-fluid w-100 h-100">
                    <div class="actor-name">{{ $personne->nom }}</div>
                    <div class="edit-button">
                        <a href="{{route('personnes.edit',[$personne])}}">
                            <button class="btn btn-primary">
                                <i class="bi bi-pencil"></i> Modifier
                            </button>
                        </a>
                        
                    </div>
                </div>
            @endforeach
        @else
            <p>Il n'y a aucun acteur.</p>
        @endif
    </div>
</div>


@endsection
