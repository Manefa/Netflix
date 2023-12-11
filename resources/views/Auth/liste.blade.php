@extends('layouts.app')

@section('title', 'Zoom Film')

@section('contenu')
    <div class="container mt-5">
        <h1 class="text-white">Liste des Usagers</h1>
        <div class="row">
            @foreach ($usagers as $usager)
                <div class="col-md-4 mb-4">
                    <div class="border rounded p-3 bg-dark text-white">
                        <div class="card-body">
                            <h5 class="card-title">{{ $usager->nom }} {{ $usager->prenom }}</h5>
                            <p class="card-text"><strong>Email:</strong> {{ $usager->email }}</p>
                            <p class="card-text"><strong>Rôle:</strong> {{ $usager->role }}</p>

                            {{-- Bouton Modifier --}}
                            <a href="" class="btn btn-warning btn-sm"><i class="bi bi-pencil"></i> Modifier</a>

                            {{-- Bouton Supprimer --}}
                            <form action="" method="POST" style="width: 100px;" class="mt-2">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger"
                                    onclick="return confirm('Êtes-vous sûr de vouloir supprimer cet usager ?')"><i
                                        class="bi bi-trash"></i> Supprimer</button>
                            </form>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
        <div class="row">
            <div class="col-md-2">
                <button type="button" class="btn btn-success"><a href="{{ route('usagers.ajouter') }}">Ajouter un utilisateur</a></button>
            </div>

        </div>
    </div>


@endsection
