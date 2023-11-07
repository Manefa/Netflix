<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap 4.4.1 -->
    <link rel="stylesheet" type="text/css" href="{{asset('css/bootstrap.css')}}">
    <!-- Flickity 2.2.1 -->
    <link rel="stylesheet" type="text/css" href="{{asset('css/flickity.css')}}">
    <!-- JQuery UI -->
    <link rel="stylesheet" type="text/css" href="{{asset('css/jquery-ui.css')}}">
    <!-- Main CSS -->
    <link rel="stylesheet" type="text/css" href="{{asset('css/style.css')}}">

    <title>Formulaire - Ajout de film</title>
</head>

<body>
    @extends('layouts.app')
    <div class="container-fluid w-50" style="margin-top: 100px;">
        <div class="row">
            <div class="col-xl-12">
                <form method="post" action="{{route('films.store')}}">
                    @csrf
                    <div class="form-group">
                        <label for="titreFilm">Titre du film</label>
                        <input type="text" class="form-control" id="titreFilm" placeholder="Titre" name="titre">
                        <label for="resumeFilm">Résume du film</label>
                        <input type="text" class="form-control" id="resumeFilm" placeholder="Résume" name="resume">
                        <label for="dureeFilm">Durée du film</label>
                        <input type="text" class="form-control" id="dureeFilm" placeholder="Durée" name="duree">
                        <label for="anneeFilm">Année de production</label>
                        <input type="text" class="form-control" id="anneeFilm" placeholder="Année" name="annee_de_production">
                        <label for="brandFilm">Brand</label>
                        <input type="text" class="form-control" id="brandFilm" placeholder="Brand" name="brand">
                        <label for="realisateurId">Réalisateur du film</label>
                        <select name="realisateur_id" id="realisateurId">
                        @foreach($films as $film)
                            <option value="{{$film->realisateur_id}}">{{$film->realisateur->nom}}</option>
                        @endforeach
                        </select>
                        <label for="producteurId">Producteur du film</label>
                        <select name="producteur_id" id="producteurId">
                        @foreach($films as $film)
                            <option value="{{$film->producteur_id}}">{{$film->producteur->nom}}</option>
                        @endforeach
                        </select>
                        <label for="lienFilm">Lien du film</label>
                        <input type="text" class="form-control" id="lienFilm" placeholder="Lien" name="lienfilm">
                        <label for="pochetteURL">URL de la pochette</label>
                        <input type="text" class="form-control" id="pochetteURL" placeholder="Pochette" name="pochette_url">
                        <label for="couvertureURL">URL de la couverture</label>
                        <input type="text" class="form-control" id="couvertureURL" placeholder="Couverture" name="couverture_url">
                        <label for="coteFilm">Cote du film</label>
                        <input type="number" class="form-control" id="coteFilm" placeholder="Cote" name="cote">
                        <label for="notationFilm">Notation du film</label>
                        <input type="text" class="form-control" id="notationFilm" placeholder="Notation" name="notation">
                        <label for="genreId">Genre du film</label>
                        <select name="genre_id" id="genreId">
                        @foreach($genres as $genre)
                            <option value="{{$genre->id}}">{{$genre->titre}}</option>
                        @endforeach
                        </select>
                    </div>
                    <button type="submit" class="btn btn-primary">Enregistrer</button>
                </form>
            </div>
        </div>
    </div>
</body>
</html>