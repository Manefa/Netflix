<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Bootstrap 4.4.1 -->
    <link rel="stylesheet" type="text/css" href="{{ asset('css/bootstrap.css') }}">
    <!-- Flickity 2.2.1 -->
    <link rel="stylesheet" type="text/css" href="{{ asset('css/flickity.css') }}">
    <!-- JQuery UI -->
    <link rel="stylesheet" type="text/css" href="{{ asset('css/jquery-ui.css') }}">
    <!-- Main CSS -->
    <link rel="stylesheet" type="text/css" href="{{ asset('css/style.css') }}">
    <!-- Footer CSS -->
    <link rel="stylesheet" type="text/css" href="{{ asset('css/footer.css') }}">
    <!-- Actor CSS -->
    <link rel="stylesheet" type="text/css" href="{{ asset('css/actor.css') }}">

    <!-- Icon -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">

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
    <title>Navbar</title>
</head>

<body>
    <!-- Navbar - OPEN -->
    <nav class="navbar navbar-expand-lg fixed-top navbar-dark" id="navbar">

        <!-- Github link top corner http://tholman.com/github-corners/ - OPEN -->
        <a href="https://github.com/eduayme/netflix" class="github-corner" aria-label="View source on GitHub"><svg
                width="55" height="55" viewBox="0 0 250 250"
                style="fill: #fff; color: #141414; position: absolute; top: 0; border: 0; right: 0;" aria-hidden="true">
                <path d="M0,0 L115,115 L130,115 L142,142 L250,250 L250,0 Z"></path>
                <path
                    d="M128.3,109.0 C113.8,99.7 119.0,89.6 119.0,89.6 C122.0,82.7 120.5,78.6 120.5,78.6 C119.2,72.0 123.4,76.3 123.4,76.3 C127.3,80.9 125.5,87.3 125.5,87.3 C122.9,97.6 130.6,101.9 134.4,103.2"
                    fill="currentColor" style="transform-origin: 130px 106px;" class="octo-arm"></path>
                <path
                    d="M115.0,115.0 C114.9,115.1 118.7,116.5 119.8,115.4 L133.7,101.6 C136.9,99.2 139.9,98.4 142.2,98.6 C133.8,88.0 127.5,74.4 143.8,58.0 C148.5,53.4 154.0,51.2 159.7,51.0 C160.3,49.4 163.2,43.6 171.4,40.1 C171.4,40.1 176.1,42.5 178.8,56.2 C183.1,58.6 187.2,61.8 190.9,65.4 C194.5,69.0 197.7,73.2 200.1,77.6 C213.8,80.2 216.3,84.9 216.3,84.9 C212.7,93.1 206.9,96.0 205.4,96.6 C205.1,102.4 203.0,107.8 198.3,112.5 C181.9,128.9 168.3,122.5 157.7,114.1 C157.9,116.9 156.7,120.9 152.7,124.9 L141.0,136.5 C139.8,137.7 141.6,141.9 141.8,141.8 Z"
                    fill="currentColor" class="octo-body"></path>
            </svg></a>
        <style>
            .github-corner:hover .octo-arm {
                animation: octocat-wave 560ms ease-in-out
            }

            @keyframes octocat-wave {

                0%,
                100% {
                    transform: rotate(0)
                }

                20%,
                60% {
                    transform: rotate(-25deg)
                }

                40%,
                80% {
                    transform: rotate(10deg)
                }
            }

            @media (max-width:500px) {
                .github-corner:hover .octo-arm {
                    animation: none
                }

                .github-corner .octo-arm {
                    animation: octocat-wave 560ms ease-in-out
                }
            }
        </style>
        <!-- Github link top corner http://tholman.com/github-corners/ - CLOSE -->

        <!-- Navbar content - OPEN -->
        <div class="container-lg">

            <!-- Logo - OPEN -->
            <a class="navbar-brand logo" href="/netflixs">
                <img src="{{ asset('media/images/logo.png') }}" width="80" alt="">
            </a>
            <!-- Logo - CLOSE -->

            <!-- Toogle responsive - OPEN -->
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarToggler"
                aria-controls="navbarToggler" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <!-- Toogle responsive - CLOSE -->

            <!-- Content collapse - OPEN -->
            <div class="collapse navbar-collapse" id="navbarToggler">

                <!-- Left - OPEN -->
                <ul class="navbar-nav mr-auto my-2 my-lg-0">
                    <li class="nav-item">
                        <a class="nav-link navbar-nav-item" href="{{ route('netflix') }}">
                            Home <span class="sr-only">(current)</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link navbar-nav-item" href="{{ route('films.create') }}">
                            Ajouter film
                        </a>
                    </li>
                </ul>
                <!-- Left - CLOSE -->

                <!-- Right - OPEN -->
                <ul class="navbar-nav my-2 my-lg-0 navbar-right">
                    <li class="nav-item mr-2">
                        <a class="nav-link float-center" href="#">
                            <i style="font-size: 1.5rem; color:white;" class="bi bi-search"></i>
                        </a>
                    </li>
                    <li class="nav-item mr-2">
                        <a class="nav-link float-center" href="#">
                            <i style="font-size: 1.5rem; color:white;" class="bi bi-bell"></i>
                        </a>
                    </li>
                    <li class="nav-item mr-2">
                        <div class="btn-group nav-link float-center">
                            <i class="bi bi-person dropdown-toggle" data-toggle="dropdown" aria-haspopup="true"
                                aria-expanded="false" style="font-size: 1.5rem; color:white;"></i>

                            <div class="dropdown-menu">
                                <a class="dropdown-item" href="{{ route('personnes.liste') }}">Lister</a>
                                <a class="dropdown-item" href="{{ route('personnes.create') }}">Ajouter</a>
                            </div>
                        </div>
                    </li>
                    <li class="nav-item avatar">
                        <a class="float-right" href="/netflix" target="_blank">
                            <img class="avatar" src="{{ asset('media/icons/avatar.png') }}" alt="">
                        </a>
                    </li>
                </ul>
                <!-- Right - OPEN -->

            </div>
            <!-- Content collapse - CLOSE -->

        </div>
        <!-- Navbar content - CLOSE -->

    </nav>
    <!-- Navbar - CLOSE -->
    @yield('contenu')

    <!-- FOOTER -->
    <!-- LINKS -->
    <section class="link">
        <div class="logos">
            <a href="#"><i class="bi bi-facebook" style="font-size: 1.5rem; color:gray"></i></a>
            <a href="#"><i class="bi bi-instagram" style="font-size: 1.5rem; color:gray"></i></a>
            <a href="#"><i class="bi bi-twitter" style="font-size: 1.5rem; color:gray"></i></a>
            <a href="#"><i class="bi bi-youtube" style="font-size: 1.5rem; color:gray"></i></a>
        </div>
        <div class="sub-links">
            <ul>
                <li><a href="#">Audio and Subtitles</a></li>
                <li><a href="#">Audio Description</a></li>
                <li><a href="#">Help Center</a></li>
                <li><a href="#">Gift Cards</a></li>
                <li><a href="#">Media Center</a></li>
                <li><a href="#">Investor Relations</a></li>
                <li><a href="#">Jobs</a></li>
                <li><a href="#">Terms of Use</a></li>
                <li><a href="#">Privacy</a></li>
                <li><a href="#">Legal Notices</a></li>
                <li><a href="#">Corporate Information</a></li>
                <li><a href="#">Contact Us</a></li>
            </ul>
        </div>
    </section>
    <!-- END OF LINKS -->

    <footer>
        <p>&copy 1997-2018 Netflix, Inc.</p>
        <p>Carlos Avila &copy 2018</p>
    </footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
    </script>
</body>

</html>
