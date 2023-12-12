@extends('layouts.app')

@section('title', 'Zoom Film')

@section('contenu')

    <div class="container-fluid w-50" style="margin-top: 100px;">
        <div class="row d-flex justify-content-center">
            @if (isset($usager))
            <div class="col-md-6">
                <form method="post" action="{{ route('usagers.update', [$usager]) }}">
                    @csrf
                    @method('PATCH')
                    <div class="form-group">
                        <label for="nom_usager">Nom d'usager</label>
                        <input type="text" class="form-control" id="nom_usager" value= "{{ old('nom_usager', $usager->nom_usager) }}" placeholder="Nom d'usager"
                            name="nom_usager">
                    </div>

                    <div class="form-group">
                        <label for="nom">Nom</label>
                        <input type="text" class="form-control" id="nom" placeholder="Nom" name="nom" value= "{{ old('nom', $usager->nom) }}">
                    </div>

                    <div class="form-group">
                        <label for="prenom">Prénom</label>
                        <input type="text" class="form-control" id="prenom" placeholder="Prénom" name="prenom" value= "{{ old('prenom', $usager->prenom) }}">
                    </div>

                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="email" class="form-control" id="email" placeholder="Email" name="email" value= "{{ old('email', $usager->email) }}">
                    </div>

                    <div class="form-group">
                        <label for="role">Rôle</label>
                        <select class="form-control" id="role" name="role">
                            <option value="admin" @if(old('role', $usager->role) == 'admin') selected @endif>Admin</option>
                            <option value="normal" @if(old('role', $usager->role) == 'normal') selected @endif>Normal</option>
                            <option value="enfant" @if(old('role', $usager->role) == 'enfant') selected @endif>Enfant</option>
                        </select>
                    </div>

                    <div class="form-group" hidden>
                        <label hidden for="password">Mot de passe</label>
                        <input hidden type="password" class="form-control" id="password" placeholder="Mot de passe"
                            name="password" value= "{{ old('password', $usager->password) }}">
                    </div>

                    <button type="submit" class="btn btn-primary">Enregistrer</button>
                </form>
            </div>
            @else
                <p>Il n'y a aucun usager.</p>
            @endif

        </div>
    </div>

@endsection
