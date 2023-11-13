<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="styles.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

    <title>Zoom sur {{ $film->titre }}</title>
</head>

<body style="background-color: black;">
    @extends('layouts.app')
    <div style="background-image: url({{ $film->couverture_url }}); background-size: cover; height: 100vh; "
        class="jumbotron">
        <div>
            <h1 class="text-light" style="text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.5);">{{ $film->titre }}</h1>
            <p class="text-light" style="text-shadow: 1px 1px 2px rgba(0, 0, 0, 0.5);">{{ $film->resume }}</p>
            <p class="text-light" style="text-shadow: 1px 1px 2px rgba(0, 0, 0, 0.5);">Durée : {{ $film->duree }}</p>
            <p class="text-light" style="text-shadow: 1px 1px 2px rgba(0, 0, 0, 0.5);"> Année de Production:
                {{ $film->annee_de_production }}</p>
        </div>
    </div>


    <div class="container ">


        <div class="row">
            <div class="col-md-6">
                <!-- Petite image du film avec icône Play -->
                <div class="film-image">
                    <img src={{ $film->pochette_url }} alt="Image du Film" class="img-fluid">
                    <a href="lien_vers_trailer.mp4" data-toggle="modal" data-target="#trailerModal">
                        <i class="fas fa-play-circle play-icon"></i>
                    </a>
                </div>
                
            </div>

            <div class="col-md-6">
                <iframe width="560" height="315" src={{ $film->lienfilm }} title="YouTube video player"
                    frameborder="0"
                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                    allowfullscreen></iframe>

                    <!-- Genres -->
                <div class="film-details text-light">
                    <h3>Genres</h3>
                        @if (count($film->genres))
                            @foreach ($film->genres as $genre)
                                <h6>{{ $genre->titre }}</h6>
                            @endforeach
                        @else
                            <p>Il ny a aucun acteur.</p>
                        @endif
                </div>

                <!-- Équipe du film -->
                <div class="film-details text-light">
                    <h3>Équipe du Film</h3>

                    <div class="row mb-2">
                        @if (count($film->acteurs))
                            @foreach ($film->acteurs as $acteur)
                                <div class="col-md-4 mt-2 img-container">
                                    <img src="{{ $acteur->photo }}" alt="" class="img-fluid w-100 h-100">
                                    <div class="actor-name">{{ $acteur->nom }}</div>
                                </div>
                            @endforeach
                        @else
                            <p>Il n'y a aucun acteur.</p>
                        @endif
                    </div>

                    <div class="row mb-3">
                        <div class="col-md-4">
                            <p>Réalisateur</p>
                        </div>
                        <div class="col-md-4">
                            <img src={{ $film->realisateur->photo }} alt="Réalisateur" class="img-fluid">

                        </div>

                    </div>

                    <div class="row mb-3">
                        <div class="col-md-4">
                            <p>Producteur</p>
                        </div>

                        <div class="col-md-4">
                            <img src={{ $film->producteur->photo }} alt="Producteur" class="img-fluid">

                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>

    <!-- Modal pour la vidéo du trailer -->
    <div class="modal fade" id="trailerModal" tabindex="-1" role="dialog" aria-labelledby="trailerModalLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-body">
                    <video controls>
                        <source src="lien_vers_trailer.mp4" type="video/mp4">
                        Votre navigateur ne supporte pas la vidéo.
                    </video>
                </div>
            </div>
        </div>
    </div>
</body>

</html>

</html>