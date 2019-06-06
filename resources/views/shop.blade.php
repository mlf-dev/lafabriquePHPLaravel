<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    {{--BOOSTRAP--}}
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    {{--POLICES GOOGLE FONTS--}}
    <link href="https://fonts.googleapis.com/css?family=Fondamento|Satisfy&display=swap" rel="stylesheet">
    {{--CSS--}}
    <link href="{{asset('css/app.css')}}" rel="stylesheet">
    <link href="{{asset('css/caroussel.css')}}" rel="stylesheet">
    <link href="{{asset('css/header.css')}}" rel="stylesheet">
    <link href="{{asset('css/sousMenuProduit.css')}}" rel="stylesheet">

    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>La fabrique de Madame Ouhouh</title>
</head>
<body>

    <header>
        <div id="fatMenu">
            <div class='container' id='headerDiv' ref='divHeader'>
                <div class='row'>
                    {{--DIV GAUCHE : RESEAUX SOCIAUX--}}
                    <div class='col-3'>
                        <a href='http://www.facebook.fr'>
                            <img class='reseau_social_icon' alt='facebook icon' src="{{asset('img/facebookicon.png')}}"/></a>
                        <a href='http://www.instagram.fr'>
                            <img class='reseau_social_icon' alt='facebook icon' src="{{asset('img/instagramicon.png')}}"/></a>
                    </div>
                    {{--DIV CENTRALE --}}
                    <div class='col-6 mt-4'>
                        <img class='logounicorn' src="{{asset('img/logounicorn.png')}}" alt='logo de la Fabrique de Madame Ouhouh (licorne)'/>
                        <h1>La Fabrique de Madame Ouhouh</h1>
                    </div>
                    {{--DIV DROITE : MON COMPTE--}}
                    <div class='col-3'>Search + Mon Compte</div>
                </div>
            </div>

            {{--MENU--}}
            <div class='container-fluid menu text-center'>
                <nav class="navbar navbar-expand-lg bg-light">
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarNavDropdown">
                        <ul class="navbar-nav" id='ulNavBar'>
                            <li class="nav-item active col-3">
                                <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
                            </li>
                            <li class="nav-item dropdown col-3">
                                <a class="nav-link dropdown-toggle dropdown-toggle-split" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    Produits
                                </a>
                                <div class="dropdown-menu text-center" aria-labelledby="navbarDropdownMenuLink">
                                    <a class="dropdown-item" href="{{route('voir_produits')}}">Tous les produits</a>
                                    <hr>
                                    <a class="dropdown-item" href="#">Cheveux</a>
                                    <a class="dropdown-item" href="#">Visage</a>
                                    <a class="dropdown-item" href="#">Corps</a>
                                    <a class="dropdown-item" href="#">Autre</a>
                                    <a class="dropdown-item" href="#">Grossesse</a>
                                    <a class="dropdown-item" href="#">Bébé</a>

                                </div>
                            </li>
                            <li class="nav-item col-3 ">
                                <a class="nav-link" href="#">Concept</a>
                            </li>
                            <li class="nav-item col-3 ">
                                <a class="nav-link" href="#">Contact</a>
                            </li>
                        </ul>
                    </div>
                </nav>
            </div>

        </div>

        <div id="littleMenu">

        </div>

    </header>

    <main>
    @yield('content')
    </main>

<div class="container">
    <footer class="row">
        <div class="col-3">
            <div class="row"><p><a href="">Mentions légales</a></p></div>
        </div>
        <div class="col-3">
            <div class="row"><p><a href="">Mentions légales</a></p></div>
        </div>
        <div class="col-3">
            <div class="row"><p><a href="">FAQ</a></p></div>
        </div>
        <div class="col-3">
            <div class="row"><p><a href="">Contact</a></p></div>
            <div class="row"><p><a href="">Newsletter</a></p></div>
        </div>
    </footer>
</div>


    {{--BOOSTRAP--}}
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>