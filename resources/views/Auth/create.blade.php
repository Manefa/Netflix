@extends('layouts.app')

@section('title', 'Zoom Film')

@section('contenu')

    <div class="container-fluid w-50" style="margin-top: 100px;">
        <div class="row d-flex justify-content-center">
            <div class="col-md-6">
                <form method="post" action="{{ route('usagers.store') }}">
                    @csrf
                    <div class="form-group">
                        <label for="nom_usager">Nom d'usager</label>
                        <input type="text" class="form-control" id="nom_usager" placeholder="Nom d'usager"
                            name="nom_usager">
                        @error('nom_usager')
                            <div style="color:red; font-weight:bold">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="nom">Nom</label>
                        <input type="text" class="form-control" id="nom" placeholder="Nom" name="nom">
                    </div>

                    <div class="form-group">
                        <label for="prenom">Prénom</label>
                        <input type="text" class="form-control" id="prenom" placeholder="Prénom" name="prenom">
                    </div>

                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="email" class="form-control" id="email" placeholder="Email" name="email">
                    </div>

                    <div class="form-group">
                        <label for="role">Rôle</label>
                        <select class="form-control" id="role" name="role">
                            <option value="admin">Admin</option>
                            <option value="normal">Normal</option>
                            <option value="enfant">Enfant</option>
                        </select>
                    </div>

                    <div class="form-group">
                        <label for="password">Mot de passe</label>
                        <input type="password" class="form-control" id="password" placeholder="Mot de passe"
                            name="password">
                    </div>

                    <button type="submit" class="btn btn-primary">Enregistrer</button>
                </form>
            </div>
        </div>
    </div>


@endsection
