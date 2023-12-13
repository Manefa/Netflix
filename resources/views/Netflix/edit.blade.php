@extends('layouts.app')

@section('title', 'Modifier Film')

@section('contenu')

    {!! JsValidator::formRequest('App\Http\Requests\FilmRequest') !!}

    <div class="container-fluid w-50" style="margin-top: 100px;">
        <div class="row">
            <div class="col-xl-12">
                <form method="post" action="{{ route('films.update', [$film]) }}">
                    @csrf
                    @method('PATCH')

                    <div class="form-group">
                        <label for="titreFilm">Titre du film</label>
                        <input type="text" class="form-control" id="titreFilm" placeholder="Titre" name="titre"
                            value="{{ old('titre', $film->titre) }}">
                        @error('titre')
                            <div style="color:red; font-weight:bold">{{ $message }}</div>
                        @enderror
                        <label for="resumeFilm">Résume du film</label>
                        <input type="text" class="form-control" id="resumeFilm" placeholder="Résume" name="resume"
                            value="{{ old('resume', $film->resume) }}">
                        @error('resume')
                            <div style="color:red; font-weight:bold">{{ $message }}</div>
                        @enderror
                        <label for="dureeFilm">Durée du film</label>
                        <input type="text" class="form-control" id="dureeFilm" placeholder="Durée" name="duree"
                            value="{{ old('duree', $film->duree) }}">
                        @error('duree')
                            <div style="color:red; font-weight:bold">{{ $message }}</div>
                        @enderror
                        <label for="anneeFilm">Année de production</label>
                        <input type="text" class="form-control" id="anneeFilm" placeholder="Année"
                            name="annee_de_production" value="{{ old('annee_de_production', $film->annee_de_production) }}">
                        @error('annee_de_production')
                            <div style="color:red; font-weight:bold">{{ $message }}</div>
                        @enderror
                        <label for="brandFilm">Brand</label>
                        <input type="text" class="form-control" id="brandFilm" placeholder="Brand" name="brand"
                            value="{{ old('brand', $film->brand) }}">
                        @error('brand')
                            <div style="color:red; font-weight:bold">{{ $message }}</div>
                        @enderror
                        <label for="realisateurInput">
                            Réalisateur du film
                            <input mbsc-input id="realisateurInput" data-dropdown="true" />
                        </label>
                        <select name="realisateur_id" id="single-select1">
                            @foreach ($personnes as $personne)
                                <option value="{{ $personne->id }}"
                                    {{ $personne->id == $film->realisateur->id ? 'selected' : null }}>
                                    {{ $personne->nom }}</option>
                            @endforeach
                        </select>
                        @error('realisateur_id')
                            <div style="color:red; font-weight:bold">{{ $message }}</div>
                        @enderror
                        <label for="producteurInput">
                            Producteur du film
                            <input mbsc-input id="producteurInput" data-dropdown="true" />
                        </label>
                        <select name="producteur_id" id="single-select2">
                            @foreach ($personnes as $personne)
                                <option value="{{ $personne->id }}"
                                    {{ $personne->id == $film->producteur->id ? 'selected' : null }}>
                                    {{ $personne->nom }}</option>
                            @endforeach
                        </select>
                        @error('producteur_id')
                            <div style="color:red; font-weight:bold">{{ $message }}</div>
                        @enderror
                        <label for="lienFilm">Lien du film</label>
                        <input type="url" class="form-control" id="lienFilm" placeholder="Lien" name="lienfilm"
                            value="{{ old('lienfilm', $film->lienfilm) }}">
                        @error('lienfilm')
                            <div style="color:red; font-weight:bold">{{ $message }}</div>
                        @enderror
                        <label for="pochetteURL">URL de la pochette</label>
                        <input type="url" class="form-control" id="pochetteURL" placeholder="Pochette"
                            name="pochette_url" value="{{ old('pochette_url', $film->pochette_url) }}">
                        @error('pochette_url')
                            <div style="color:red; font-weight:bold">{{ $message }}</div>
                        @enderror
                        <label for="couvertureURL">URL de la couverture</label>
                        <input type="url" class="form-control" id="couvertureURL" placeholder="Couverture"
                            name="couverture_url" value="{{ old('couverture_url', $film->couverture_url) }}">
                        @error('couverture_url')
                            <div style="color:red; font-weight:bold">{{ $message }}</div>
                        @enderror
                        <label for="coteFilm">Cote du film</label>
                        <input type="number" class="form-control" id="coteFilm" placeholder="Cote" name="cote"
                            value="{{ old('cote', $film->cote) }}">
                        @error('cote')
                            <div style="color:red; font-weight:bold">{{ $message }}</div>
                        @enderror
                        <label for="notationFilm">Notation du film</label>
                        <input type="text" class="form-control" id="notationFilm" placeholder="Notation" name="notation"
                            value="{{ old('notation', $film->notation) }}">
                        @error('notation')
                            <div style="color:red; font-weight:bold">{{ $message }}</div>
                        @enderror
                        <label>
                            Genre du film
                            <input mbsc-input id="genreInput" data-dropdown="true" data-tags="true" />
                        </label>
                        <select name="genre_id[]" id="multiple-select" multiple>
                            @foreach ($genres as $genre)
                                <option
                                    value="{{ $genre->id }}"{{ $film->genres->contains('id', $genre->id) ? 'selected' : null }}>
                                    {{ $genre->titre }}</option>
                            @endforeach
                        </select>
                        @error('genre_id[]')
                            <div style="color:red; font-weight:bold">{{ $message }}</div>
                        @enderror
                        <label>
                            Acteurs du film
                            <input mbsc-input id="personneInput" data-dropdown="true" data-tags="true" />
                        </label>
                        <select name="personne_id[]" id="multiple-select2" multiple>
                            @foreach ($personnes as $personne)
                                <option value="{{ $personne->id }}"
                                    {{ $film->acteurs->contains('id', $personne->id) ? 'selected' : null }}>
                                    {{ $personne->nom }}</option>
                            @endforeach
                        </select>
                        @error('personne_id[]')
                            <div style="color:red; font-weight:bold">{{ $message }}</div>
                        @enderror
                        <label>
                            Langues du film
                            <input mbsc-input id="langueInput" data-dropdown="true" data-tags="true" />
                        </label>
                        <select name="langue_id[]" id="multiple-select3" multiple>
                            @foreach ($langues as $langue)
                                <option value="{{ $langue->id }}"
                                    {{ $film->langues->contains('id', $langue->id) ? 'selected' : null }}>
                                    {{ $langue->code }}</option>
                            @endforeach
                        </select>
                        @error('langue_id[]')
                            <div style="color:red; font-weight:bold">{{ $message }}</div>
                        @enderror
                        <label>
                            Sous titres du film
                            <input mbsc-input id="soustitreInput" data-dropdown="true" data-tags="true" />
                        </label>
                        <select name="sous_titre_id[]" id="multiple-select4" multiple>
                            @foreach ($sous_titres as $sous_titre)
                                <option value="{{ $sous_titre->id }}"
                                    {{ $film->sous_titres->contains('id', $sous_titre->id) ? 'selected' : null }}>
                                    {{ $sous_titre->code }}</option>
                            @endforeach
                        </select>
                        @error('sous_titre_id[]')
                            <div style="color:red; font-weight:bold">{{ $message }}</div>
                        @enderror
                    </div>
                    <button type="submit" class="btn btn-primary">Enregistrer</button>
                </form>
                <form method="POST" action="{{ route('films.destroy', [$film->id]) }}">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-primary mt-3 d-block mx-auto w-50">Supprimer</button>
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
@endsection
