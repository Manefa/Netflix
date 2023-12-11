@extends('layouts.app')

@section('title', 'Detail Personne')

@section('contenu')

    <div class="container mt-4">
        <div class="row">
            <div class="col-md-6 offset-md-3">
                <h1 class="text-center">{{ $personne->nom }}</h1>
                <hr>

                <div class="text-center">
                    <img src="{{ asset($personne->photo) }}" alt="{{ $personne->nom }}" class="img-fluid rounded">
                </div>

                <div class="mt-4">
                    <h2>Date de naissance</h2>
                    <p>{{ $personne->date_naissance }}</p>

                    <h2>Sexe</h2>
                    <p>{{ $personne->sexe }}</p>

                    <h2>Biographie</h2>
                    <p>{{ $personne->biographie }}</p>

                    <h2>Rôle principal</h2>
                    <p>{{ $personne->role_principal }}</p>
                </div>
            </div>
        </div>
        <h2>Films joué</h2>
        <div class="d-flex flex-wrap">
            @foreach ($films as $film)
                <div class="carousel-cell">
                    <img class="carousel-cell-image" src="<?php echo $film->pochette_url; ?>" />
                    <h5 class="text-center"><?php echo $film->titre; ?></h5>
                    <div class="row">
                        <div class="col-3 text-left no-padding">
                            <?php echo $film->annee_de_production; ?>
                        </div>
                        <div class="col-3 text-center no-padding">
                            <a href="#">
                                <img src="media/icons/eye.png" width="10" alt="">
                            </a>
                        </div>
                        <div class="col-3 text-left no-padding">
                            <a href="#">
                                <img src="media/icons/heart.png" width="10" alt="">
                            </a>
                        </div>
                        <div class="col-3 text-right no-padding rating">
                            <img src="media/icons/star.png" width="10" alt="" style="padding-bottom: 3px">
                            <?php echo $film->cote; ?>
                        </div>
                    </div>
                    <div class="overlay">
                        <div class="text">
                            <a href="{{ route('films.show', [$film]) }}"
                                class="btn btn-secondary btn-sm margin-top-under-sm" role="button" aria-pressed="true">
                                <img src="media/icons/info.png" width="10" alt="">
                                Info
                            </a>
                            <a href="#" class="btn btn-primary btn-sm margin-top-under-sm" role="button"
                                aria-pressed="true">
                                <img src="media/icons/play.png" width="10" alt="">
                                Watch
                            </a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>

@endsection
