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
    <div class="container ">
        <div style="background-color: black;"    class="jumbotron">
            <h1 class="text-light">{{ $film->titre }}</h1>
            <p class="text-light">{{ $film->resume }}</p>
            <p class="text-light">Durée: {{ $film->duree }}min | Année de Production: {{ $film->annee_de_production }} | Cote: PG-13 | Notation: 4.5/5</p>
        </div>
        
        <div class="row">
            <div class="col-md-6">
                <!-- Petite image du film avec icône Play -->
                <div class="film-image">
                    <img src= {{ $film->pochette_url }}  alt="Image du Film" class="img-fluid">
                    <a href="lien_vers_trailer.mp4" data-toggle="modal" data-target="#trailerModal">
                        <i class="fas fa-play-circle play-icon"></i>
                    </a>
                </div>
                <!-- Genres -->
                <div class="film-details text-light">
                    <h3>Genres</h3>
                    <ul>
                        <li>Genre 1</li>
                        <li>Genre 2</li>
                        <li>Genre 3</li>
                    </ul>
                </div>
                <!-- Équipe du film -->
                <div class="film-details text-light">
                    <h3>Équipe du Film</h3>
                    <div class="row">
                        <div class="col-md-4">
                            <img src="chemin_vers_realisateur.jpg" alt="Réalisateur" class="img-fluid">
                            <p>Réalisateur</p>
                        </div>
                        <div class="col-md-4">
                            <img src="chemin_vers_producteur.jpg" alt="Producteur" class="img-fluid">
                            <p>Producteur</p>
                        </div>
                        <div class="col-md-4">
                            <img src="chemin_vers_acteur.jpg" alt="Acteur" class="img-fluid">
                            <p>Acteur</p>
                        </div>
                    </div>
                </div>
            </div>
            
        </div>
    </div>

    <!-- Modal pour la vidéo du trailer -->
    <div  class="modal fade" id="trailerModal" tabindex="-1" role="dialog" aria-labelledby="trailerModalLabel" aria-hidden="true">
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
