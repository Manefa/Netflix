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
    <div>


        <div class="zoomed-iframe-container">
            <iframe class="zoomed-iframe" src="{{ $film->lienfilm }}&autoplay=1&controls=0" title="YouTube video player"
                frameborder="0"
                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                allowfullscreen>
            </iframe>
            <div class="video-info">
                <h1 class="text-light" style="text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.5); font-size:8em;">
                    {{ $film->titre }}</h1>
                <p class="text-light" style="text-shadow: 1px 1px 2px rgba(0, 0, 0, 0.5); font-size:1.5em;">
                    {{ $film->resume }}</p>
                <p class="text-light" style="text-shadow: 1px 1px 2px rgba(0, 0, 0, 0.5); font-size:1.5em;">Durée :
                    {{ $film->duree }}
                </p>
                <p class="text-light" style="text-shadow: 1px 1px 2px rgba(0, 0, 0, 0.5);font-size:1.5em;">Année de
                    Production:
                    {{ $film->annee_de_production }}</p>
            </div>
        </div>
        <style>
            .zoomed-iframe-container {
                overflow: hidden;
                position: relative;
                width: 100%;
                height: 100vh;
            }

            .zoomed-iframe {
                position: absolute;
                top: -50%;
                left: -50%;
                width: 200%;
                height: 200%;
                border: none;
            }

            .video-info {
                position: absolute;
                top: 25%;
                left: 20px;
                z-index: 1;
            }
        </style>



    </div>


    <div class="container">


        <div class="row d-flex justify-content-start">
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

                    <div class="row mb-3">

                        <div class="col-md-4">
                            <p>Acteur</p>
                        </div>

                        <div class="col-md-6">
                            <div class="row">
                                @if (count($film->acteurs))
                                    @foreach ($film->acteurs as $acteur)
                                        <div class="col-md-4">
                                            <img src={{ $acteur->photo }} alt="Acteur" class="img-fluid">
                                        </div>
                                    @endforeach
                                @else
                                    <p>Il ny a aucun acteur.</p>
                                @endif

                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>

    </div>

</body>

</html>
