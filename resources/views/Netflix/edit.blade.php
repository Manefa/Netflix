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


    <link href="{{asset('mobiscroll/css/mobiscroll.javascript.min.css')}}" rel="stylesheet" />
    <script src="{{asset('mobiscroll/js/mobiscroll.javascript.min.js')}}"></script>
    <title>Formulaire - Ajout de film</title>
</head>

<body>
    @extends('layouts.app')
    <div class="container-fluid w-50" style="margin-top: 100px;">
        <div class="row">
            <div class="col-xl-12">
                <form method="post" action="{{route('films.store')}}">
                    @csrf
                    @method('PATCH')
                    <div class="form-group">
                        <label for="titreFilm">Titre du film</label>
                        <input type="text" class="form-control" id="titreFilm" placeholder="Titre" name="titre" value="{{ old('titre', $film->titre) }}">
                        <label for="resumeFilm">Résume du film</label>
                        <input type="text" class="form-control" id="resumeFilm" placeholder="Résume" name="resume">
                        <label for="dureeFilm">Durée du film</label>
                        <input type="text" class="form-control" id="dureeFilm" placeholder="Durée" name="duree">
                        <label for="anneeFilm">Année de production</label>
                        <input type="text" class="form-control" id="anneeFilm" placeholder="Année" name="annee_de_production">
                        <label for="brandFilm">Brand</label>
                        <input type="text" class="form-control" id="brandFilm" placeholder="Brand" name="brand">
                        <label for="realisateurInput">
                            Réalisateur du film
                            <input mbsc-input id="realisateurInput" data-dropdown="true" />
                        </label>
                        <select name="realisateur_id" id="single-select1">
                            @foreach ($personnes as $personne)
                                <option value="{{ $personne->id }}">{{ $personne->nom }}</option>
                            @endforeach
                        </select>
                       
                        <label for="producteurInput">
                            Producteur du film
                            <input mbsc-input id="producteurInput" data-dropdown="true" />
                        </label>
                        <select name="producteur_id" id="single-select2">
                            @foreach ($personnes as $personne)
                                <option value="{{ $personne->id }}">{{ $personne->nom }}</option>
                            @endforeach
                        </select>
                        <label for="lienFilm">Lien du film</label>
                        <input type="url" class="form-control" id="lienFilm" placeholder="Lien" name="lienfilm">
                        <label for="pochetteURL">URL de la pochette</label>
                        <input type="url" class="form-control" id="pochetteURL" placeholder="Pochette" name="pochette_url">
                        <label for="couvertureURL">URL de la couverture</label>
                        <input type="url" class="form-control" id="couvertureURL" placeholder="Couverture" name="couverture_url">
                        <label for="coteFilm">Cote du film</label>
                        <input type="number" class="form-control" id="coteFilm" placeholder="Cote" name="cote">
                        <label for="notationFilm">Notation du film</label>
                        <input type="text" class="form-control" id="notationFilm" placeholder="Notation" name="notation">
                        <label>
                            Genre du film
                            <input mbsc-input id="genreInput" data-dropdown="true" data-tags="true"/>
                        </label>
                        <select name="genre_id[]" id="multiple-select" multiple>
                        @foreach($genres as $genre)
                            <option value="{{$genre->id}}">{{$genre->titre}}</option>
                        @endforeach
                        </select>
                        <label>
                            Acteurs du film
                            <input mbsc-input id="personneInput" data-dropdown="true" data-tags="true" />
                        </label>
                        <select name="personne_id[]" id="multiple-select2" multiple>
                        @foreach($personnes as $personne)
                            <option value="{{$personne->id}}">{{$personne->nom}}</option>
                        @endforeach
                        </select>
                        <label>
                            Langues du film
                            <input mbsc-input id="langueInput" data-dropdown="true" data-tags="true" />
                        </label>
                        <select name="langue_id[]" id="multiple-select3" multiple>
                        @foreach($langues as $langue)
                            <option value="{{$langue->id}}">{{$langue->code}}</option>
                        @endforeach
                        </select>
                        <label>
                            Sous titres du film
                            <input mbsc-input id="soustitreInput" data-dropdown="true" data-tags="true" />
                        </label>
                        <select name="sous_titre_id[]" id="multiple-select4" multiple>
                        @foreach($sous_titres as $sous_titre)
                            <option value="{{$sous_titre->id}}">{{$sous_titre->code}}</option>
                        @endforeach
                        </select>
                    </div>
                    <button type="submit" class="btn btn-primary">Enregistrer</button>
                </form>
            </div>
        </div>
    </div>
</body>
<script>
    mobiscroll.select('#multiple-select', {
    inputElement: document.getElementById('genreInput'),
    touchUi: false,
    defaultValue: '1'
});

mobiscroll.select('#multiple-select2', {
    inputElement: document.getElementById('personneInput'),
    touchUi: false,
    defaultValue: '1'
});

mobiscroll.select('#multiple-select3', {
    inputElement: document.getElementById('langueInput'),
    touchUi: false,
    defaultValue: '1'
});

mobiscroll.select('#multiple-select4', {
    inputElement: document.getElementById('soustitreInput'),
    touchUi: false,
    defaultValue: '1'
});

mobiscroll.select('#single-select1', {
    inputElement: document.getElementById('realisateurInput'),
    touchUi: false,
});

mobiscroll.select('#single-select2', {
    inputElement: document.getElementById('producteurInput'),
    touchUi: false,
});

</script>
</html>