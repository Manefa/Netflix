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

    @extends('layouts.slider')

    <!-- Content - OPEN -->
    <div class="container-lg margin-top margin-bottom">

        <!-- Tabs nav - OPEN -->
        <nav class="nav nav-fill nav-pills" id="pills-tab" role="tablist">
            <a class="nav-item nav-link active" id="trend-tab" data-toggle="pill" href="#trend" role="tab" aria-controls="trend-tab" aria-selected="true">
                <div class="icon-nav">
                    <img src="media/icons/trend.png" width="20" alt="" class="margin-right-sm">
                    Trends Now
                </div>
            </a>
            <a class="nav-item nav-link" id="popular-tab" data-toggle="pill" href="#popular" role="tab" aria-controls="popular-tab" aria-selected="false">
                <div class="icon-nav">
                    <img src="media/icons/fire.png" width="15" alt="" class="margin-right-sm">
                    Popular
                </div>
            </a>
            <a class="nav-item nav-link" id="new-tab" data-toggle="pill" href="#new" role="tab" aria-controls="new-tab" aria-selected="false">
                <div class="icon-nav">
                    <img src="media/icons/clock.png" width="15" alt="" class="margin-right-sm">
                    New
                </div>
            </a>
            <a class="nav-item nav-link" id="oscars-tab" data-toggle="pill" href="#oscars" role="tab" aria-controls="oscars-tab" aria-selected="false">
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
            <div class="margin-top-under-sm tab-pane fade show active" id="trend" role="tabpanel" aria-labelledby="trend-tab">

                <!-- Carousel - OPEN -->
                <div class="carousel" data-flickity='{ "groupCells": true, "cellAlign": "center", "pageDots": false, "wrapAround": true, "draggable": false }' style="height: 400px">

                    <!-- The Irishman - OPEN -->
                    <div class="carousel-cell">
                        <img class="carousel-cell-image" src="media/images/posters/the_irishman.jpg" />
                        <h5 class="text-center"> The Irishman </h5>
                        <div class="row">
                            <div class="col-3 text-left no-padding">
                                2019
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
                                <img src="media/icons/star.png" width="10" alt="" style="padding-bottom: 3px">
                                8.0
                            </div>
                        </div>
                        <div class="overlay">
                            <div class="text">
                                <a href="#" class="btn btn-secondary btn-sm margin-top-under-sm" role="button" aria-pressed="true">
                                    <img src="media/icons/info.png" width="10" alt="">
                                    Info
                                </a>
                                <a href="#" class="btn btn-primary btn-sm margin-top-under-sm" role="button" aria-pressed="true">
                                    <img src="media/icons/play.png" width="10" alt="">
                                    Watch
                                </a>
                            </div>
                        </div>
                    </div>
                    <!-- The Irishman - CLOSE -->

                    <!-- Parasite - OPEN -->
                    <div class="carousel-cell">
                        <img class="carousel-cell-image" src="media/images/posters/parasite.jpg" />
                        <h5 class="text-center"> Parasite </h5>
                        <div class="row">
                            <div class="col-3 text-left no-padding">
                                2019
                            </div>
                            <div class="col-3 text-center no-padding selected">
                                <a href="">
                                    <img src="media/icons/eye-selected.png" width="10" alt="">
                                </a>
                            </div>
                            <div class="col-3 text-left no-padding selected">
                                <a href="">
                                    <img src="media/icons/heart-selected.png" width="10" alt="">
                                </a>
                            </div>
                            <div class="col-3 text-right no-padding rating">
                                <img src="media/icons/star.png" width="10" alt="" style="padding-bottom: 3px">
                                8.6
                            </div>
                        </div>
                        <div class="overlay">
                            <div class="text">
                                <a href="#" class="btn btn-secondary btn-sm margin-top-under-sm" role="button" aria-pressed="true">
                                    <img src="media/icons/info.png" width="10" alt="">
                                    Info
                                </a>
                                <a href="#" class="btn btn-primary btn-sm margin-top-under-sm" role="button" aria-pressed="true">
                                    <img src="media/icons/play.png" width="10" alt="">
                                    Watch
                                </a>
                            </div>
                        </div>
                    </div>
                    <!-- Parasite - CLOSE -->

                    <!-- 1917 - OPEN -->
                    <div class="carousel-cell">
                        <img class="carousel-cell-image" src="media/images/posters/1917.jpg" />
                        <h5 class="text-center"> 1917 </h5>
                        <div class="row">
                            <div class="col-3 text-left no-padding">
                                2019
                            </div>
                            <div class="col-3 text-center no-padding selected">
                                <a href="">
                                    <img src="media/icons/eye-selected.png" width="10" alt="">
                                </a>
                            </div>
                            <div class="col-3 text-left no-padding">
                                <a href="">
                                    <img src="media/icons/heart.png" width="10" alt="">
                                </a>
                            </div>
                            <div class="col-3 text-right no-padding rating">
                                <img src="media/icons/star.png" width="10" alt="" style="padding-bottom: 3px">
                                8.5
                            </div>
                        </div>
                        <div class="overlay">
                            <div class="text">
                                <a href="#" class="btn btn-secondary btn-sm margin-top-under-sm" role="button" aria-pressed="true">
                                    <img src="media/icons/info.png" width="10" alt="">
                                    Info
                                </a>
                                <a href="#" class="btn btn-primary btn-sm margin-top-under-sm" role="button" aria-pressed="true">
                                    <img src="media/icons/play.png" width="10" alt="">
                                    Watch
                                </a>
                            </div>
                        </div>
                    </div>
                    <!-- 1917 - CLOSE -->

                    <!-- Roma - OPEN -->
                    <div class="carousel-cell">
                        <img class="carousel-cell-image" src="media/images/posters/roma.jpeg" />
                        <h5 class="text-center"> Roma </h5>
                        <div class="row">
                            <div class="col-3 text-left no-padding">
                                2018
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
                                <img src="media/icons/star.png" width="10" alt="" style="padding-bottom: 3px">
                                7.7
                            </div>
                        </div>
                        <div class="overlay">
                            <div class="text">
                                <a href="#" class="btn btn-secondary btn-sm margin-top-under-sm" role="button" aria-pressed="true">
                                    <img src="media/icons/info.png" width="10" alt="">
                                    Info
                                </a>
                                <a href="#" class="btn btn-primary btn-sm margin-top-under-sm" role="button" aria-pressed="true">
                                    <img src="media/icons/play.png" width="10" alt="">
                                    Watch
                                </a>
                            </div>
                        </div>
                    </div>
                    <!-- Roma - CLOSE -->

                    <!-- Uncut Gems - OPEN -->
                    <div class="carousel-cell">
                        <img class="carousel-cell-image" src="media/images/posters/uncut_gems.jpg" />
                        <h5 class="text-center"> Uncut Gems </h5>
                        <div class="row">
                            <div class="col-3 text-left no-padding">
                                2019
                            </div>
                            <div class="col-3 text-center no-padding">
                                <a href="">
                                    <img src="media/icons/eye.png" width="10" alt="">
                                </a>
                            </div>
                            <div class="col-3 text-left no-padding selected">
                                <a href="">
                                    <img src="media/icons/heart-selected.png" width="10" alt="">
                                </a>
                            </div>
                            <div class="col-3 text-right no-padding rating">
                                <img src="media/icons/star.png" width="10" alt="" style="padding-bottom: 3px">
                                7.8
                            </div>
                        </div>
                        <div class="overlay">
                            <div class="text">
                                <a href="#" class="btn btn-secondary btn-sm margin-top-under-sm" role="button" aria-pressed="true">
                                    <img src="media/icons/info.png" width="10" alt="">
                                    Info
                                </a>
                                <a href="#" class="btn btn-primary btn-sm margin-top-under-sm" role="button" aria-pressed="true">
                                    <img src="media/icons/play.png" width="10" alt="">
                                    Watch
                                </a>
                            </div>
                        </div>
                    </div>
                    <!-- Uncut Gems - CLOSE -->

                    <!-- Zodiac - OPEN -->
                    <div class="carousel-cell">
                        <img class="carousel-cell-image" src="media/images/posters/zodiac.jpg" />
                        <h5 class="text-center"> Zodiac </h5>
                        <div class="row">
                            <div class="col-3 text-left no-padding">
                                2007
                            </div>
                            <div class="col-3 text-center no-padding">
                                <a href="">
                                    <img src="media/icons/eye.png" width="10" alt="">
                                </a>
                            </div>
                            <div class="col-3 text-left no-padding selected">
                                <a href="">
                                    <img src="media/icons/heart-selected.png" width="10" alt="">
                                </a>
                            </div>
                            <div class="col-3 text-right no-padding rating">
                                <img src="media/icons/star.png" width="10" alt="" style="padding-bottom: 3px">
                                7.7
                            </div>
                        </div>
                        <div class="overlay">
                            <div class="text">
                                <a href="#" class="btn btn-secondary btn-sm margin-top-under-sm" role="button" aria-pressed="true">
                                    <img src="media/icons/info.png" width="10" alt="">
                                    Info
                                </a>
                                <a href="#" class="btn btn-primary btn-sm margin-top-under-sm" role="button" aria-pressed="true">
                                    <img src="media/icons/play.png" width="10" alt="">
                                    Watch
                                </a>
                            </div>
                        </div>
                    </div>
                    <!-- Zodiac - CLOSE -->

                    <!-- 1922 - OPEN -->
                    <div class="carousel-cell">
                        <img class="carousel-cell-image" src="media/images/posters/1922.jpg" />
                        <h5 class="text-center"> 1922 </h5>
                        <div class="row">
                            <div class="col-3 text-left no-padding">
                                2017
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
                                <img src="media/icons/star.png" width="10" alt="" class="padding-bottom-sm">
                                6.3
                            </div>
                        </div>
                        <div class="overlay">
                            <div class="text">
                                <a href="#" class="btn btn-secondary btn-sm margin-top-under-sm" role="button" aria-pressed="true">
                                    <img src="media/icons/info.png" width="10" alt="">
                                    Info
                                </a>
                                <a href="#" class="btn btn-primary btn-sm margin-top-under-sm" role="button" aria-pressed="true">
                                    <img src="media/icons/play.png" width="10" alt="">
                                    Watch
                                </a>
                            </div>
                        </div>
                    </div>
                    <!-- 1922 - OPEN -->

                    <!-- Marriage Story - OPEN -->
                    <div class="carousel-cell">
                        <img class="carousel-cell-image" src="media/images/posters/marriage_story.jpeg" />
                        <h5 class="text-center"> Marriage Story </h5>
                        <div class="row">
                            <div class="col-3 text-left no-padding">
                                2019
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
                                <img src="media/icons/star.png" width="10" alt="" class="padding-bottom-sm">
                                8.0
                            </div>
                        </div>
                        <div class="overlay">
                            <div class="text">
                                <a href="#" class="btn btn-secondary btn-sm margin-top-under-sm" role="button" aria-pressed="true">
                                    <img src="media/icons/info.png" width="10" alt="">
                                    Info
                                </a>
                                <a href="#" class="btn btn-primary btn-sm margin-top-under-sm" role="button" aria-pressed="true">
                                    <img src="media/icons/play.png" width="10" alt="">
                                    Watch
                                </a>
                            </div>
                        </div>
                    </div>
                    <!-- Marriage Story - OPEN -->

                    <!-- Mowgli - OPEN -->
                    <div class="carousel-cell">
                        <img class="carousel-cell-image" src="media/images/posters/mowgli.jpg" />
                        <h5 class="text-center"> Mowgli </h5>
                        <div class="row">
                            <div class="col-3 text-left no-padding">
                                2018
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
                                <img src="media/icons/star.png" width="10" alt="" class="padding-bottom-sm">
                                6.5
                            </div>
                        </div>
                        <div class="overlay">
                            <div class="text">
                                <a href="#" class="btn btn-secondary btn-sm margin-top-under-sm" role="button" aria-pressed="true">
                                    <img src="media/icons/info.png" width="10" alt="">
                                    Info
                                </a>
                                <a href="#" class="btn btn-primary btn-sm margin-top-under-sm" role="button" aria-pressed="true">
                                    <img src="media/icons/play.png" width="10" alt="">
                                    Watch
                                </a>
                            </div>
                        </div>
                    </div>
                    <!-- Mowgli - OPEN -->

                    <!-- Darkest Hour - OPEN -->
                    <div class="carousel-cell">
                        <img class="carousel-cell-image" src="media/images/posters/darkest_hour.jpg" />
                        <h5 class="text-center"> Darkest Hour </h5>
                        <div class="row">
                            <div class="col-3 text-left no-padding">
                                2017
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
                                <img src="media/icons/star.png" width="10" alt="" class="padding-bottom-sm">
                                7.4
                            </div>
                        </div>
                        <div class="overlay">
                            <div class="text">
                                <a href="#" class="btn btn-secondary btn-sm margin-top-under-sm" role="button" aria-pressed="true">
                                    <img src="media/icons/info.png" width="10" alt="">
                                    Info
                                </a>
                                <a href="#" class="btn btn-primary btn-sm margin-top-under-sm" role="button" aria-pressed="true">
                                    <img src="media/icons/play.png" width="10" alt="">
                                    Watch
                                </a>
                            </div>
                        </div>
                    </div>
                    <!-- Darkest Hour - OPEN -->

                </div>
                <!-- Carousel - CLOSE -->

            </div>
            <!-- Trend tab - CLOSE -->

            <!-- Popular tab - OPEN -->
            <div class="margin-top-under-sm tab-pane fade" id="popular" role="tabpanel" aria-labelledby="popular-tab">
                Popular
            </div>
            <!-- Popular tab - CLOSE -->

            <!-- New tab - OPEN -->
            <div class="margin-top-under-sm tab-pane fade" id="new" role="tabpanel" aria-labelledby="new-tab">
                New
            </div>
            <!-- New tab - CLOSE -->

            <!-- Oscars tab - OPEN -->
            <div class="margin-top-under-sm tab-pane fade" id="oscars" role="tabpanel" aria-labelledby="oscars-tab">
                Oscars 2020
            </div>
            <!-- Oscars tab - CLOSE -->

        </div>
        <!-- Tabs content - OPEN -->

        <!-- Tabs nav - OPEN -->
        <nav class="nav nav-fill nav-pills" id="explore-tabs" role="tablist">
            <a class="nav-item nav-link active" id="movies-tab" data-toggle="pill" href="#movies" role="tab" aria-controls="movies-tab" aria-selected="true">
                <div class="icon-nav">
                    <img src="media/icons/cinema.png" width="15" alt="" class="margin-right-sm padding-bottom-sm">
                    Movies
                </div>
            </a>
            <a class="nav-item nav-link" id="tvshows-tab" data-toggle="pill" href="#tvshows" role="tab" aria-controls="tvshows-tab" aria-selected="false">
                <div class="icon-nav">
                    <img src="media/icons/tv.png" width="15" alt="" class="margin-right-sm padding-bottom-sm">
                    TV Shows
                </div>
            </a>
        </nav>
        <!-- Tabs nav - CLOSE -->

        <!-- Tabs content - OPEN -->
        <div class="tab-content" id="exploreContent">

            <!-- Movies tab - OPEN -->
            <div class="margin-top-under-sm tab-pane fade show active" id="movies" role="tabpanel" aria-labelledby="movies-tab">

                <!-- Genre Filters - OPEN -->
                <div class="carousel" data-flickity='{ "groupCells": true, "cellAlign": "left", "pageDots": false, "wrapAround": false, "draggable": false, "contain": true }' id="genreFilters">

                    <!-- Genre Action - OPEN -->
                    <div class="carousel-filter-cell text-center">
                        <button class="btn btn-outline-primary btn-md margin-top-under-sm" data-filter=".Action">
                            Action
                        </button>
                    </div>
                    <!-- Genre Action - CLOSE -->

                    <!-- Genre Adventure - OPEN -->
                    <div class="carousel-filter-cell text-center">
                        <button class="btn btn-outline-primary btn-md margin-top-under-sm" data-filter=".Adventure">
                            Adventure
                        </button>
                    </div>
                    <!-- Genre Adventure - CLOSE -->

                    <!-- Genre Animation - OPEN -->
                    <div class="carousel-filter-cell text-center">
                        <button class="btn btn-outline-primary btn-md margin-top-under-sm" data-filter=".Animation">
                            Animation
                        </button>
                    </div>
                    <!-- Genre Animation - CLOSE -->

                    <!-- Genre Comedy - OPEN -->
                    <div class="carousel-filter-cell text-center">
                        <button class="btn btn-outline-primary btn-md margin-top-under-sm" data-filter=".Comedy">
                            Comedy
                        </button>
                    </div>
                    <!-- Genre Comedy - CLOSE -->

                    <!-- Genre Crime - OPEN -->
                    <div class="carousel-filter-cell text-center">
                        <button class="btn btn-outline-primary btn-md margin-top-under-sm" data-filter=".Crime">
                            Crime
                        </button>
                    </div>
                    <!-- Genre Crime - CLOSE -->

                    <!-- Genre Drama - OPEN -->
                    <div class="carousel-filter-cell text-center">
                        <button class="btn btn-outline-primary btn-md margin-top-under-sm" data-filter=".Drama">
                            Drama
                        </button>
                    </div>
                    <!-- Genre Drama - CLOSE -->

                    <!-- Genre Fantasy - OPEN -->
                    <div class="carousel-filter-cell text-center">
                        <button class="btn btn-outline-primary btn-md margin-top-under-sm" data-filter=".Fantasy">
                            Fantasy
                        </button>
                    </div>
                    <!-- Genre Fantasy - CLOSE -->

                    <!-- Genre Historical - OPEN -->
                    <div class="carousel-filter-cell text-center">
                        <button class="btn btn-outline-primary btn-md margin-top-under-sm" data-filter=".Historical">
                            Historical
                        </button>
                    </div>
                    <!-- Genre Historical - CLOSE -->

                    <!-- Genre Historical Fiction - OPEN -->
                    <div class="carousel-filter-cell text-center">
                        <button class="btn btn-outline-primary btn-md margin-top-under-sm" data-filter=".Historical-Fiction">
                            Historical Fiction
                        </button>
                    </div>
                    <!-- Genre Historical Fiction - CLOSE -->

                    <!-- Genre Horror - OPEN -->
                    <div class="carousel-filter-cell text-center">
                        <button class="btn btn-outline-primary btn-md margin-top-under-sm" data-filter=".Horror">
                            Horror
                        </button>
                    </div>
                    <!-- Genre Horror - CLOSE -->

                    <!-- Genre Magical Realism - OPEN -->
                    <div class="carousel-filter-cell text-center">
                        <button class="btn btn-outline-primary btn-md margin-top-under-sm" data-filter=".Magical_Realism">
                            Magical Realism
                        </button>
                    </div>
                    <!-- Genre Magical Realism - CLOSE -->

                    <!-- Genre Mystery - OPEN -->
                    <div class="carousel-filter-cell text-center">
                        <button class="btn btn-outline-primary btn-md margin-top-under-sm" data-filter=".Mystery">
                            Mystery
                        </button>
                    </div>
                    <!-- Genre Mystery - CLOSE -->

                    <!-- Genre Paranoid Fiction - OPEN -->
                    <div class="carousel-filter-cell text-center">
                        <button class="btn btn-outline-primary btn-md margin-top-under-sm" data-filter=".Paranoid_Fiction">
                            Paranoid Fiction
                        </button>
                    </div>
                    <!-- Genre Paranoid Fiction - CLOSE -->

                    <!-- Genre Philosophical - OPEN -->
                    <div class="carousel-filter-cell text-center">
                        <button class="btn btn-outline-primary btn-md margin-top-under-sm" data-filter=".Philosophical">
                            Philosophical
                        </button>
                    </div>
                    <!-- Genre Philosophical - CLOSE -->

                    <!-- Genre Political - OPEN -->
                    <div class="carousel-filter-cell text-center">
                        <button class="btn btn-outline-primary btn-md margin-top-under-sm" data-filter=".Political">
                            Political
                        </button>
                    </div>
                    <!-- Genre Political - CLOSE -->

                    <!-- Genre Romance - OPEN -->
                    <div class="carousel-filter-cell text-center">
                        <button class="btn btn-outline-primary btn-md margin-top-under-sm" data-filter=".Romance">
                            Romance
                        </button>
                    </div>
                    <!-- Genre Romance - CLOSE -->

                    <!-- Genre Saga - OPEN -->
                    <div class="carousel-filter-cell text-center">
                        <button class="btn btn-outline-primary btn-md margin-top-under-sm" data-filter=".Saga">
                            Saga
                        </button>
                    </div>
                    <!-- Genre Saga - CLOSE -->

                    <!-- Genre Satire - OPEN -->
                    <div class="carousel-filter-cell text-center">
                        <button class="btn btn-outline-primary btn-md margin-top-under-sm" data-filter=".Satire">
                            Satire
                        </button>
                    </div>
                    <!-- Genre Satire - CLOSE -->

                    <!-- Genre Science Fiction - OPEN -->
                    <div class="carousel-filter-cell text-center">
                        <button class="btn btn-outline-primary btn-md margin-top-under-sm" data-filter=".Science_Fiction">
                            Science Fiction
                        </button>
                    </div>
                    <!-- Genre Science Fiction - CLOSE -->

                    <!-- Genre Social - OPEN -->
                    <div class="carousel-filter-cell text-center">
                        <button class="btn btn-outline-primary btn-md margin-top-under-sm" data-filter=".Social">
                            Social
                        </button>
                    </div>
                    <!-- Genre Social - CLOSE -->

                    <!-- Genre Speculative - OPEN -->
                    <div class="carousel-filter-cell text-center">
                        <button class="btn btn-outline-primary btn-md margin-top-under-sm" data-filter=".Speculative">
                            Speculative
                        </button>
                    </div>
                    <!-- Genre Speculative - CLOSE -->

                    <!-- Genre Surrealism - OPEN -->
                    <div class="carousel-filter-cell text-center">
                        <button class="btn btn-outline-primary btn-md margin-top-under-sm" data-filter=".Surrealism">
                            Surrealism
                        </button>
                    </div>
                    <!-- Genre Surrealism - CLOSE -->

                    <!-- Genre Thriller - OPEN -->
                    <div class="carousel-filter-cell text-center">
                        <button class="btn btn-outline-primary btn-md margin-top-under-sm" data-filter=".Thriller">
                            Thriller
                        </button>
                    </div>
                    <!-- Genre Thriller - CLOSE -->

                    <!-- Genre Urban - OPEN -->
                    <div class="carousel-filter-cell text-center">
                        <button class="btn btn-outline-primary btn-md margin-top-under-sm" data-filter=".Urban">
                            Urban
                        </button>
                    </div>
                    <!-- Genre Urban - CLOSE -->

                    <!-- Genre Western - OPEN -->
                    <div class="carousel-filter-cell text-center">
                        <button class="btn btn-outline-primary btn-md margin-top-under-sm" data-filter=".Western">
                            Western
                        </button>
                    </div>
                    <!-- Genre Western - CLOSE -->

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

                @extends('layouts.gridmovies')

                </div>
                <!-- Grid cards films - OPEN -->

                <!-- Load more button - OPEN -->
                <div class="margin-top-under-sm text-center">
                    <a href="#" class="btn btn-outline-secondary btn-lg margin-top-under-sm" role="button" id="loadMore">
                        <img src="media/icons/plus.png" width="15" alt="" class="margin-right-sm padding-bottom-sm">
                        Load More
                    </a>
                </div>
                <!-- Load more button - CLOSE -->

            </div>
            <!-- Movies tab - CLOSE -->

            <!-- TV Shows tab - OPEN -->
            <div class="margin-bottom tab-pane fade show" id="tvshows" role="tabpanel" aria-labelledby="tvshows-tab">
                TV Shows
            </div>
            <!-- TV Shows tab - CLOSE -->

        </div>
        <!-- Tabs content - CLOSE -->

    </div>
    <!-- Content - CLOSE -->

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
