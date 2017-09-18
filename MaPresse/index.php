<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8"/>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <script src="https://www.gstatic.com/firebasejs/4.3.1/firebase.js"></script>
        <script>
          // Initialize Firebase
          var config = {
            apiKey: "AIzaSyDuJ9COgYMvoObCw4eGrT_beeBh0BUuk_A",
            authDomain: "mapresse-85e66.firebaseapp.com",
            databaseURL: "https://mapresse-85e66.firebaseio.com",
            projectId: "mapresse-85e66",
            storageBucket: "mapresse-85e66.appspot.com",
            messagingSenderId: "994140761087"
          };
          firebase.initializeApp(config);
        </script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
        <script src="js/script.js"></script>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
        <link href='http://fonts.googleapis.com/css?family=Lato' rel='stylesheet' type='text/css'>
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
                                <li><a href="#"><span>Libération</span></a></li>
                                <li><a href="#"><span>La Croix</span></a></li>
                                <li id="sport24-sport"><a href="#"><span>Sport24</span></a></li>
                                <li id="le-parisien-sport"><a href="#"><span>Le Parisien</span></a></li>
                                <li id="le-telegramme-sport"><a href="#"><span>Le Télégramme</span></a></li>
                            </ul>
                        </li>
                        <li class="dropdown">
                            <a data-toggle="dropdown" class="dropdown-toggle" href="#">E-sport <b class="caret"></b></a>
                            <ul class="dropdown-menu">
                                <li id="lemonde"><a href="#">Le Monde</a></li>
                                <li><a href="#">Le Figaro</a></li>
                                <li><a href="#">La Croix</a></li>
                                <li><a href="#">Le Parisien</a></li>
                                <li><a href="#">Le Télégramme</a></li>
                            </ul>
                        </li>
                        <li class="dropdown">
                            <a data-toggle="dropdown" class="dropdown-toggle" href="#">Politique <b class="caret"></b></a>
                            <ul class="dropdown-menu">
                                <li><a href="#">L'Express</a></li>
                                <li><a href="#">Libération</a></li>
                                <li><a href="#">Le Figaro</a></li>
                                <li><a href="#">La Croix</a></li>
                                <li><a href="#">Le Parisien</a></li>
                            </ul>
                        </li>
                        <li class="dropdown">
                            <a data-toggle="dropdown" class="dropdown-toggle" href="#">Technologie <b class="caret"></b></a>
                            <ul class="dropdown-menu">
                                <li><a href="#">Le Monde</a></li>
                                <li><a href="#">Le Figaro</a></li>
                                <li><a href="#">Le Parisen</a></li>
                            </ul>
                        </li>
                        <li class="dropdown">
                            <a data-toggle="dropdown" class="dropdown-toggle" href="#">International <b class="caret"></b></a>
                            <ul class="dropdown-menu">
                                <li><a href="#">L'Express</a></li>
                                <li><a href="#">Libération</a></li>
                                <li><a href="#">Le Figaro</a></li>
                                <li><a href="#">La Croix</a></li>
                                <li><a href="#">Le Parisien</a></li>
                            </ul>
                        </li>
                    </ul>
                    <ul class="nav navbar-nav navbar-right">
                        <li><a href="#"><span class="glyphicon glyphicon-log-in"></span> Se connecter</a></li>
                    </ul>
                    <ul class="nav navbar-nav navbar-right">
                        <li><a id="user" href="#"><span class="glyphicon glyphicon-user"></span> S'inscrire</a></li>
                    </ul>
                </div>
            </div>
        </nav>

            <div id="hide">
            	<div class="panel panel-default">
            		<div class="panel-heading">
                        <h3 class="panel-title">Inscrivez-vous sur Ma Presse</h3>
    			 	</div>
                        <div class="panel-body">
                            <form role="form">
                                <div class="row">
                                    <div class="col-xs-6 col-sm-6 col-md-6">
                                        <div class="form-group">
                                            <input type="text" name="identifiant" id="identifiant" class="form-control input-sm" placeholder="Identifiant">
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <input type="email" name="email" id="email" class="form-control input-sm" placeholder="Adresse Email">
                                </div>
                                <div class="row">
                                    <div class="col-xs-6 col-sm-6 col-md-6">
                                        <div class="form-group">
                                            <input type="password" name="password" id="password" class="form-control input-sm" placeholder="Mot de passe">
                                        </div>
                                    </div>
                                    <div class="col-xs-6 col-sm-6 col-md-6">
                                        <div class="form-group">
                                            <input type="password" name="password_confirmation" id="password_confirmation" class="form-control input-sm" placeholder="Confirmer le mot de passe">
                                        </div>
                                    </div>
                                </div>
                                <input type="submit" value="S'inscrire" class="btn btn-info btn-block">
                            </form>
    			    	</div>
    	    		</div>
                </div>
            </div>
    	</div>
    </div>

    <div id="rss-express-sport" class="hide-rss">
        <?php
        $url = "http://www.lexpress.fr/rss/sport.xml "; /* insérer ici l'adresse du flux RSS de votre choix */
        $rss = simplexml_load_file($url);
        echo '<ul>';
        foreach ($rss->channel->item as $item){
         $datetime = date_create($item->pubDate);
         $date = date_format($datetime, 'd M Y, H\hi');
         echo '<li><a href="'.$item->link.'">'.utf8_decode($item->title).'</a> ('.$date.')</li>';
        }
        echo '</ul>';
        ?>
    </div>
    <div id="rss-sport24-sport" class="hide-rss">
        <?php
        $url = "http://sport24.lefigaro.fr/rssfeeds/sport24-accueil.xml"; /* insérer ici l'adresse du flux RSS de votre choix */
        $rss = simplexml_load_file($url);
        echo '<ul>';
        foreach ($rss->channel->item as $item){
         $datetime = date_create($item->pubDate);
         $date = date_format($datetime, 'd M Y, H\hi');
         echo '<li><a href="'.$item->link.'">'.utf8_decode($item->title).'</a> ('.$date.')</li>';
        }
        echo '</ul>';
        ?>
    </div>
    <div id="rss-le-telegramme" class="hide-rss">
        <?php
        $url = "http://www.letelegramme.fr/sports/rss.xml"; /* insérer ici l'adresse du flux RSS de votre choix */
        $rss = simplexml_load_file($url);
        echo '<ul>';
        foreach ($rss->channel->item as $item){
         $datetime = date_create($item->pubDate);
         $date = date_format($datetime, 'd M Y, H\hi');
         echo '<li><a href="'.$item->link.'">'.utf8_decode($item->title).'</a> ('.$date.')</li>';
        }
        echo '</ul>';
        ?>
    </div>
    <div id="rss-le-parisien" class="hide-rss">
        <?php
        $url = "http://www.leparisien.fr/sports/rss.xml#xtor=RSS-1481423633"; /* insérer ici l'adresse du flux RSS de votre choix */
        $rss = simplexml_load_file($url);
        echo '<ul>';
        foreach ($rss->channel->item as $item){
         $datetime = date_create($item->pubDate);
         $date = date_format($datetime, 'd M Y, H\hi');
         echo '<li><a href="'.$item->link.'">'.utf8_decode($item->title).'</a> ('.$date.')</li>';
        }
        echo '</ul>';
        ?>
    </div>

    </body>
</html>
