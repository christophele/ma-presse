<?php
require_once 'rss.php';
require_once 'login.php';
require_once 'register.php';
 ?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8"/>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
        <script src="js/script.js"></script>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
        <link rel="stylesheet" href="css/style.css">
        <title>Ma Presse</title>
    </head>
    <body>
        <div class="container">
        <div class="row centered-form">
        <div class="col-xs-12 col-sm-8 col-md-4 col-sm-offset-2 col-md-offset-4">

        <nav class="navbar navbar-inverse navbar-fixed-top">
            <div class="container-fluid">
                <div class="navbar-header">
                    <a class="navbar-brand" href="#">MaPresse</a>
                </div>
                <div class="navbar-collapse collapse">
                    <ul class="nav navbar-nav">
                        <li class="dropdown">
                            <a data-toggle="dropdown" class="dropdown-toggle" href="#">Sport <b class="caret"></b></a>
                            <ul class="dropdown-menu">
                                <li id="express-sport"><a href="#"><span>L'Express</span></a></li>
                                <li id="sport24-sport"><a href="#"><span>Sport24</span></a></li>
                                <li id="le-parisien-sport"><a href="#"><span>Le Parisien</span></a></li>
                                <li id="le-telegramme-sport"><a href="#"><span>Le Télégramme</span></a></li>
                            </ul>
                        </li>
                        <li class="dropdown">
                            <a data-toggle="dropdown" class="dropdown-toggle" href="#">Politique <b class="caret"></b></a>
                            <ul class="dropdown-menu">
                                <li id="express-politique"><a href="#"><span>L'Express</span></a></li>
                                <li id="liberation-politique"><a href="#"><span>Libération</span></a></li>
                                <li id="le-figaro-politique"><a href="#"><span>Le Figaro</span></a></li>
                                <li id="la-croix-politique"><a href="#"><span>La Croix</span></a></li>
                                <li id="le-parisien-politique"><a href="#"><span>Le Parisien</span></a></li>
                            </ul>
                        </li>
                        <li class="dropdown">
                            <a data-toggle="dropdown" class="dropdown-toggle" href="#">Technologie <b class="caret"></b></a>
                            <ul class="dropdown-menu">
                                <li id="le-monde-technologie"><a href="#"><span>Le Monde</span></a></li>
                                <li id="le-figaro-technologie"><a href="#"><span>Le Figaro</span></a></li>
                                <li id="le-parisien-technologie"><a href="#"><span>Le Parisien</span></a></li>
                            </ul>
                        </li>
                        <li class="dropdown">
                            <a data-toggle="dropdown" class="dropdown-toggle" href="#">Economie <b class="caret"></b></a>
                            <ul class="dropdown-menu">
                                <li id="le-monde-economie"><a href="#"><span>Le Monde</span></a></li>
                                <li id="le-figaro-economie"><a href="#"><span>Le Figaro</span></a></li>
                                <li id="le-parisien-economie"><a href="#"><span>Le Parisien</span></a></li>
                                <li id="la-croix-economie"><a href="#"><span>La Croix</span></a></li>
                                <li id="le-telegramme-economie"><a href="#"><span>Le Télégramme</span></a></li>
                            </ul>
                        </li>
                    </ul>
                    <ul class="nav navbar-nav navbar-right">
                        <li><a class="show-form" id="btn-login" href="#"><span class="glyphicon glyphicon-log-in"></span> Se connecter</a></li>
                    </ul>
                    <ul class="nav navbar-nav navbar-right">
                        <li><a class="show-form" id="btn-register" href="#"><span class="glyphicon glyphicon-user"></span> S'inscrire</a></li>
                    </ul>
                </div>
            </div>
        </nav>
    </body>
</html>
