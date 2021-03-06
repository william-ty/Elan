<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercice PHP</title>
    <!-- Compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">

    <!-- Material Icons -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

    <!-- Code Rendering -->
    <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/highlight.js/10.3.2/styles/default.min.css">

    <link rel="stylesheet" href="style.css">

</head>

<body>
  
    <!-- NAVBAR -->
    <?php
    header("refresh: ;");
?>
    <div class="navbar-fixed">

        <nav class="grey darken-4">
            <div class="nav-wrapper ">
                <a href="#" class="brand-logo center"> <i class="material-icons">code</i>
                    <a href="#" data-target="mobile-demo" class="sidenav-trigger"><i class="material-icons">menu</i></a>
                    <ul class="right hide-on-med-and-down">
                        <li><a href="php.html">Php</a></li>
                        <li><a href="badges.html">Css</a></li>
                        <li><a href="collapsible.html">Javascript</a></li>
                        <li><a href="mobile.html">Mobile</a></li>
                    </ul>
            </div>
        </nav>
    </div>
    <!-- NAVBAR MOBILE -->
    <ul class="sidenav grey darken-4 " id="mobile-demo">
        <li><a href="php.html" class="white-text">Php</a></li>
        <li><a href="badges.html" class="white-text">Css</a></li>
        <li><a href="collapsible.html" class="white-text">Javascript</a></li>
        <li><a href="mobile.html" class="white-text">Mobile</a></li>
    </ul>
    <div class="container">
        
        <div class="row">
            <h1 class="white-text">Exercice POO Livre</h1>
            <div class="col s12 m12">
                <div class="card blue-grey darken-1">
                    <div class="card-content white-text">
                        <span class="card-title">Enoncé</span>
                        <p>Vous êtes chargé(e) de créer un projet PHP orienté objet permettant de gérer des livres et
                            leurs auteurs
                            respectifs
                            Les livres sont caractérisés par un titre, un nombre de pages, une année de parution, un
                            prix et un
                            auteur. Un auteur est identifié par un nom et un prénom.
                            Une méthode toString sera appréciée dans chacune de vos classes.
                            Vous implémenterez une méthode afficherBibliographie qui permettra d’afficher la
                            bibliographie d’un auteur :
                        </p>
                        <p>
                            La <span>vitesse initiale</span> de chaque véhicule instancié est de <span>0</span>. Une
                            méthode personnalisée pourra afficher toutes les informations d’un véhicule. </p>
                        <ul class="collapsible blue-grey-text">
                            <li class=>
                                <div class="collapsible-header"><i class="material-icons">announcement</i>Properties
                                </div>
                                <div class="collapsible-body white">
                                    <ul class="collection with-header blue-grey-text">
                                        <li class="collection-item">
                                            Title
                                        </li>
                                        <li class="collection-item">
                                            totalPAges
                                        </li>
                                        <li class="collection-item">
                                            publicationDate
                                        </li>
                                        <li class="collection-item">
                                            firstName
                                        </li>
                                        <li class="collection-item">
                                            lastName
                                        </li>
                                    </ul>
                                </div>
                            </li>
                            <li>
                                <div class="collapsible-header"><i class="material-icons">functions</i>Function</div>
                                <div class="collapsible-body white">
                                    <ul class="collection with-header blue-grey-text">
                                        <li class="collection-item">showBibliography</li>

                                    </ul>
                                </div>
                            </li>
                            <li>
                                <div class="collapsible-header"><i class="material-icons">remove_red_eye</i>Bonus</div>
                                <div class="collapsible-body white"><span>
                                        Add a slow Down function
                                    </span></div>
                            </li>
                        </ul>
                        <div class="card-action"></div>
                        <div class="card-action">

                            <!-- Modal Trigger -->
                            <a class="waves-effect waves-light btn modal-trigger blue-grey darken-4"
                                href="#modal1">Solution</a>

                            <!-- Modal Structure -->
                            <div id="modal1" class="modal modal-fixed-footer grey darken-4">
                                <div class="modal-content">
                                    <h4>Modal Header</h4>
                                    <p>A bunch of text</p>
                                </div>
                                <div class="modal-footer grey darken-4">
                                    <a href="#!"
                                        class="modal-close waves-effect waves-green btn-flat blue-grey-text">Agree</a>
                                </div>
                                
                            </div>
                        </div>


                    </div>

                </div>
            </div>

        </div>
    </div>


    <!-- Materialize -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>

    <script src="apps.js"></script>

</body>

</html>