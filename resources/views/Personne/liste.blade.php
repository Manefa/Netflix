@extends('layouts.app')

@section('title', 'Zoom Film')

@section('contenu')

    <div class="container-fluid" style="margin-top: 100px;">
        <div class="row">
            <div class="col-md-1">
                <form action="{{ route('personnes.liste') }}" method="get">
                    <button type="submit" name="champ" value="sexe">Homme</button>
                    <input type="hidden" name="valeur" value="homme"> <!-- Ajoutez ceci pour transmettre la valeur -->
                </form>
            </div>
            
            <div class="col-md-1">
                <form action="{{ route('personnes.liste') }}" method="get">
                    <button type="submit" name="champ" value="sexe">Femme</button>
                    <input type="hidden" name="valeur" value="femme">
                </form>
            </div>
            
            <div class="col-md-1">
                <form action="{{ route('personnes.liste') }}" method="get">
                    <button type="submit" name="champ" value="age">Par âge</button>
                </form>
            </div>
            
            <div class="col-md-1">
                <form action="{{ route('personnes.liste') }}" method="get">
                    <button type="submit" name="champ" value="rafraichir">Rafraichir</button>
                </form>
            </div>
            
        </div>

        <div class="row">
            @if (count($personnes))
                @foreach ($personnes as $personne)
                <a href="{{ route('personnes.show', [$personne]) }}">
                    <div class="col-md-2 mt-2 img-container">
                        <img src="{{ $personne->photo }}" alt="" class="img-fluid w-100 h-100">
                        <div class="actor-name">{{ $personne->nom }}</div>
                        <div class="edit-button">
                            <a href="{{ route('personnes.edit', [$personne]) }}">
                                <button class="btn btn-primary">
                                    <i class="bi bi-pencil"></i> Modifier
                                </button>
                            </a>

                            <form method="POST" action="{{route('personnes.destroy', [$personne->id]) }}" class="mt-2">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger"><i class="bi bi-trash"></i> Supprimer</button>
                            </form>
                        </div>
                    </div>
                </a>
                @endforeach
            @else
                <p>Il n'y a aucun acteur.</p>
            @endif
        </div>
    </div>


@endsection
