<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title> Netflix </title>

    <!-- SEO -->
    <title> Netflix redesign by Eduard Aymerich. </title>
    <meta name="description" content="Netflix redesign by Eduard Aymerich. ">

    <!-- Bootstrap 4.4.1 -->
    <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
    <!-- Flickity 2.2.1 -->
    <link rel="stylesheet" type="text/css" href="css/flickity.css">
    <!-- JQuery UI -->
    <link rel="stylesheet" type="text/css" href="css/jquery-ui.css">
    <!-- Main CSS -->
    <link rel="stylesheet" type="text/css" href="css/style.css">

    <!-- SOCIAL CARDS (ADD YOUR INFO) -->

    <!-- TWITTER -->
    <meta name="twitter:card carousel-cell" content="summary_large_image">
    <meta name="twitter:site" content="@eduayme">
    <!-- EDIT -->
    <meta name="twitter:creator" content="@eduayme">
    <!-- EDIT -->
    <meta name="twitter:title" content="Netflix">
    <!-- EDIT -->
    <meta name="twitter:description" content="Netflix redesign by Eduard Aymerich.">

    <!-- FAVICONS -->
    <link rel="shortcut icon" type="image/x-icon" href="media/images/netflix_icon.png">
    <link rel="shortcut icon" sizes="16x16" href="media/favicon/favicon-16x16.png">
    <link rel="shortcut icon" sizes="32x32" href="media/favicon/favicon-32x32.png">
    <link rel="apple-touch-icon icon" sizes="76x76" href="media/favicon/apple-icon-76x76.png">
    <link rel="apple-touch-icon icon" sizes="120x120" href="media/favicon/apple-icon-120x120.png">
    <link rel="apple-touch-icon icon" sizes="152x152" href="media/favicon/apple-icon-152x152.png">
    <link rel="apple-touch-icon icon" sizes="180x180" href="media/favicon/apple-icon-180x180.png">

    <!-- Android -->
    <meta name="mobile-web-app-capable" content="yes">
    <meta name="theme-color" content="#141414">
</head>

<body>
    @extends('layouts.app')


    <!-- Slider - OPEN -->
    <div id="mainCarousel" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#mainCarousel" data-slide-to="0" class="active"></li>
            <li data-target="#mainCarousel" data-slide-to="1"></li>
            <li data-target="#mainCarousel" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">

            <!-- Stranger Things - OPEN -->
            <div class="carousel-item active">
                <img class="d-block w-100 " src={{ $films[0]->couverture_url }} style="object-fit: cover; "
                    alt="Second slide">
                <div class="carousel-caption d-none d-md-block container-lg align-middle">
                    <h1> {{ $films[0]->titre }} </h1>
                    <p> <a href="#">{{ $films[0]->annee_de_production }}</a> | {{ $films[0]->notation }} | <a
                            href="#">{{ $films[0]->genres[0]->titre }}</a> </p>
                    <p class="margin-top-under-sm">
                        {{ $films[0]->resume }}
                    </p>
                    <p>
                        Starring:


                        @if (count($films[0]->acteurs))
                            @foreach ($films[0]->acteurs as $acteur)
                                <a href="#">{{ $acteur->nom }}, </a>
                            @endforeach
                        @else
                            <p>Il ny a aucun acteur.</p>
                        @endif



                    </p>
                    <p> Creators: <a href="#">{{ $films[0]->producteur->nom }}</a> </p>
                    <div class="margin-top-under-sm">
                        <a href="#" class="btn btn-primary btn-lg margin-right" role="button"
                            aria-pressed="true">
                            <img src="media/icons/play.png" width="20" alt="">
                            Watch
                        </a>
                        <a href="#" class="btn btn-secondary btn-lg margin-right" role="button"
                            aria-pressed="true">
                            <img src="media/icons/plus.png" width="15" alt="">
                            Add List
                        </a>
                    </div>
                </div>
            </div>
            <!-- Stranger Things - CLOSE -->

            <!-- Money Heist - OPEN -->
            <div class="carousel-item">
                <img class="d-block w-100" src={{ $films[1]->couverture_url }} style="object-fit: cover; "
                    alt="First slide">
                <div class="carousel-caption d-none d-md-block container-lg align-middle">
                    <h1> {{ $films[1]->titre }} </h1>
                    <p> <a href="#">{{ $films[1]->annee_de_production }}</a> | {{ $films[1]->notation }} | <a
                            href="#">{{ $films[1]->genres[0]->titre }}</a> </p>
                    <p class="margin-top-under-sm">
                        {{ $films[1]->resume }}
                    </p>
                    <p>
                        Starring:


                        @if (count($films[1]->acteurs))
                            @foreach ($films[1]->acteurs as $acteur)
                                <a href="#">{{ $acteur->nom }}, </a>
                            @endforeach
                        @else
                            <p>Il ny a aucun acteur.</p>
                        @endif



                    </p>
                    <p> Creators: <a href="#">{{ $films[1]->producteur->nom }}</a> </p>
                    <div class="margin-top-under-sm">
                        <a href="#" class="btn btn-primary btn-lg margin-right" role="button"
                            aria-pressed="true">
                            <img src="media/icons/play.png" width="20" alt="">
                            Watch
                        </a>
                        <a href="#" class="btn btn-secondary btn-lg margin-right" role="button"
                            aria-pressed="true">
                            <img src="media/icons/plus.png" width="15" alt="">
                            Add List
                        </a>
                    </div>
                </div>
            </div>
            <!-- Money Heist - OPEN -->

            <!-- The Witcher - OPEN -->
            <div class="carousel-item">
                <img class="d-block w-100" src={{ $films[2]->couverture_url }} cover alt="Third slide">
                <div class="carousel-caption d-none d-md-block container-lg align-middle">
                    <h1> {{ $films[2]->titre }} </h1>
                    <p> <a href="#">{{ $films[2]->annee_de_production }}</a> | {{ $films[2]->notation }} | <a
                            href="#">{{ $films[2]->genres[0]->titre }}</a> </p>
                    <p class="margin-top-under-sm">
                        {{ $films[2]->resume }}
                    </p>
                    <p>
                        Starring:


                        @if (count($films[2]->acteurs))
                            @foreach ($films[2]->acteurs as $acteur)
                                <a href="#">{{ $acteur->nom }}, </a>
                            @endforeach
                        @else
                            <p>Il ny a aucun acteur.</p>
                        @endif



                    </p>
                    <p> Creators: <a href="#">{{ $films[1]->producteur->nom }}</a> </p>
                    <div class="margin-top-under-sm">
                        <a href="#" class="btn btn-primary btn-lg margin-right" role="button"
                            aria-pressed="true">
                            <img src="media/icons/play.png" width="20" alt="">
                            Watch
                        </a>
                        <a href="#" class="btn btn-secondary btn-lg margin-right" role="button"
                            aria-pressed="true">
                            <img src="media/icons/plus.png" width="15" alt="">
                            Add List
                        </a>
                    </div>
                </div>
            </div>
            <!-- The Witcher - OPEN -->

        </div>
    </div>
    <!-- Slider - CLOSE -->

    <!-- Content - OPEN -->
    <div class="container-lg margin-top margin-bottom">

        <!-- Tabs nav - OPEN -->
        <nav class="nav nav-fill nav-pills" id="pills-tab" role="tablist">
            <a class="nav-item nav-link active" id="trend-tab" data-toggle="pill" href="#trend" role="tab"
                aria-controls="trend-tab" aria-selected="true">
                <div class="icon-nav">
                    <img src="media/icons/trend.png" width="20" alt="" class="margin-right-sm">
                    Trends Now
                </div>
            </a>
            <a class="nav-item nav-link" id="popular-tab" data-toggle="pill" href="#popular" role="tab"
                aria-controls="popular-tab" aria-selected="false">
                <div class="icon-nav">
                    <img src="media/icons/fire.png" width="15" alt="" class="margin-right-sm">
                    Popular
                </div>
            </a>
            <a class="nav-item nav-link" id="new-tab" data-toggle="pill" href="#new" role="tab"
                aria-controls="new-tab" aria-selected="false">
                <div class="icon-nav">
                    <img src="media/icons/clock.png" width="15" alt="" class="margin-right-sm">
                    New
                </div>
            </a>
            <a class="nav-item nav-link" id="oscars-tab" data-toggle="pill" href="#oscars" role="tab"
                aria-controls="oscars-tab" aria-selected="false">
                <div class="icon-nav">
                    <img src="media/icons/oscars.png" width="15" alt="" class="margin-right-sm">
                    Oscars 2020
                </div>
            </a>
        </nav>
        <!-- Tabs nav - CLOSE -->

        <!-- Tabs content - OPEN -->
        <div class="tab-content" id="myTabContent">

            <!-- Trend tab - OPEN -->
            <div class="margin-top-under-sm tab-pane fade show active" id="trend" role="tabpanel"
                aria-labelledby="trend-tab">

                <!-- Carousel - OPEN -->
                <div class="carousel"
                    data-flickity='{ "groupCells": true, "cellAlign": "center", "pageDots": false, "wrapAround": true, "draggable": false }'
                    style="height: 400px">

                    <?php foreach ($films as $film): ?>
                    <!-- Film - OPEN -->
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
                                <img src="media/icons/star.png" width="10" alt=""
                                    style="padding-bottom: 3px">
                                <?php echo $film->cote; ?>
                            </div>
                        </div>
                        <div class="overlay">
                            <div class="text">
                                <a href="#" class="btn btn-secondary btn-sm margin-top-under-sm" role="button"
                                    aria-pressed="true">
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
                    <!-- Film - CLOSE -->
                    <?php endforeach; ?>

                </div>
                <!-- Carousel - CLOSE -->

            </div>
            <!-- Trend tab - CLOSE -->


            <!-- Popular tab - OPEN -->
            <div class="margin-top-under-sm tab-pane fade" id="popular" role="tabpanel"
                aria-labelledby="popular-tab">
                Popular
            </div>
            <!-- Popular tab - CLOSE -->

            <!-- New tab - OPEN -->
            <div class="margin-top-under-sm tab-pane fade" id="new" role="tabpanel" aria-labelledby="new-tab">
                New
            </div>
            <!-- New tab - CLOSE -->

            <!-- Oscars tab - OPEN -->
            <div class="margin-top-under-sm tab-pane fade" id="oscars" role="tabpanel"
                aria-labelledby="oscars-tab">
                Oscars 2020
            </div>
            <!-- Oscars tab - CLOSE -->

        </div>
        <!-- Tabs content - OPEN -->

        <!-- Tabs nav - OPEN -->
        <nav class="nav nav-fill nav-pills" id="explore-tabs" role="tablist">
            <a class="nav-item nav-link active" id="movies-tab" data-toggle="pill" href="#movies" role="tab"
                aria-controls="movies-tab" aria-selected="true">
                <div class="icon-nav">
                    <img src="media/icons/cinema.png" width="15" alt=""
                        class="margin-right-sm padding-bottom-sm">
                    Movies
                </div>
            </a>
            <a class="nav-item nav-link" id="tvshows-tab" data-toggle="pill" href="#tvshows" role="tab"
                aria-controls="tvshows-tab" aria-selected="false">
                <div class="icon-nav">
                    <img src="media/icons/tv.png" width="15" alt=""
                        class="margin-right-sm padding-bottom-sm">
                    TV Shows
                </div>
            </a>
        </nav>
        <!-- Tabs nav - CLOSE -->

        <!-- Tabs content - OPEN -->
        <div class="tab-content" id="exploreContent">

            <!-- Movies tab - OPEN -->
            <div class="margin-top-under-sm tab-pane fade show active" id="movies" role="tabpanel"
                aria-labelledby="movies-tab">

                <!-- Genre Filters - OPEN -->
                <div class="carousel"
                    data-flickity='{ "groupCells": true, "cellAlign": "left", "pageDots": false, "wrapAround": false, "draggable": false, "contain": true }'
                    id="genreFilters">

                    @if (count($genres))
                        @foreach ($genres as $genre)
                            <div class="carousel-filter-cell text-center">
                                <button class="btn btn-outline-primary btn-md margin-top-under-sm"
                                    data-filter=".Action">
                                    {{ $genre->titre }}
                                </button>
                            </div>
                        @endforeach
                    @else
                        <p>Il ny a aucun genres.</p>
                    @endif

                </div>
                <!-- Genre Filters - CLOSE -->

                <!-- Rating filter and sorting - OPEN -->
                <div class="margin-top-under-sm">
                    <div class="row">

                        <div class="col-auto no-padding text-right margin-right-md">
                            Filter by Rating
                        </div>

                        <div class="col-4 no-padding text-left">
                            <!-- Rating Filter - OPEN -->
                            <div id="slider"></div>
                            <!-- Rating Filter - CLOSE -->
                        </div>

                        <div class="col-4 no-padding text-right ml-auto">
                            <!-- Sorting - OPEN -->
                            <h5 class="inline"> Sort by </h5>
                            <select id="sorting" class="custom-select my-select inline">
                                <option value="popular"> Popular </option>
                                <option value="year_recent"> Year newest </option>
                                <option value="year_oldest"> Year oldest </option>
                                <option value="rating_best"> Rating best </option>
                                <option value="rating_worst"> Rating worst </option>
                            </select>
                            <!-- Sorting - CLOSE -->
                        </div>

                    </div>
                </div>
                <!-- Rating filter and sorting - CLOSE -->

                <!-- Grid cards films - OPEN -->
                <div id="grid-movies">

                    <div class="row">

                        @if (count($films))
                            @foreach ($films as $film)
                                
                                <div class="card carousel-cell">
                                    <img class="card-img-top" src= {{$film->pochette_url}} />
                                    <h5 class="card-title text-center"> {{$film->titre}} </h5>
                                    <div class="row">
                                        <div class="col-3 text-left no-padding">
                                            {{$film->annee_de_production}}
                                        </div>
                                        <div class="col-3 text-center no-padding">
                                            <a href="">
                                                <img src="media/icons/eye.png" width="10" alt="">
                                            </a>
                                        </div>
                                        <div class="col-3 text-left no-padding">
                                            <a href="">
                                                <img src="media/icons/heart.png" width="10" alt="">
                                            </a>
                                        </div>
                                        <div class="col-3 text-right no-padding rating">
                                            <img src= "media/icons/star.png" width="10" alt=""
                                                class="padding-bottom-sm">
                                                {{$film->cote}}
                                        </div>
                                    </div>
                                    <div class="overlay">
                                        <div class="text">
                                            <a href="#" class="btn btn-secondary btn-sm margin-top-under-sm"
                                                role="button" aria-pressed="true">
                                                <img src="media/icons/info.png" width="10" alt="">
                                                Info
                                            </a>
                                            <a href="#" class="btn btn-primary btn-sm margin-top-under-sm"
                                                role="button" aria-pressed="true">
                                                <img src="media/icons/play.png" width="10" alt="">
                                                Watch
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <!-- Beasts of No Nation - OPEN -->
                            @endforeach
                        @else
                            <p>Il ny a aucun genres.</p>
                        @endif

                    </div>

                </div>
                <!-- Grid cards films - OPEN -->

            </div>
            <!-- Movies tab - CLOSE -->

            <!-- TV Shows tab - OPEN -->
            <div class="margin-bottom tab-pane fade show" id="tvshows" role="tabpanel"
                aria-labelledby="tvshows-tab">
                TV Shows
            </div>
            <!-- TV Shows tab - CLOSE -->

        </div>
        <!-- Tabs content - CLOSE -->

    </div>
    <!-- Content - CLOSE -->

    <div class="content">
        @yield('content')
    </div>

    <!-- JQuery -->
    <script src="js/jquery.min.js"></script>
    <!-- JQuery UI -->
    <script src="js/jquery-ui.min.js" defer></script>
    <!-- Pooper JS -->
    <script src="js/popper.min.js" defer></script>
    <!-- Bootstrap 4.4.1 -->
    <script src="js/bootstrap.min.js" defer></script>
    <!-- Flickity 2.2.1 -->
    <script src="js/flickity.min.js" defer></script>
    <!-- Main JS -->
    <script src="js/main.js" defer></script>

</body>

</html>
