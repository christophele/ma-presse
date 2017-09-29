<!DOCTYPE html>
<html>
    <head>
        <meta charset="iso-8859-1">
        <title></title>
        <style type="text/css">
            .hide-rss {
                padding-top: 100px;
            }
        </style>
    </head>
    <body>
        <div id="rss-express-sport" class="hide-rss">
            <?php
            $url = "http://www.lexpress.fr/rss/sport.xml";
            $rss = simplexml_load_file($url);
            echo '<ul>';
            foreach ($rss->channel->item as $item){
             $datetime = date_create($item->pubDate);
             echo '</br></br>';
             $date = date_format($datetime, 'd M Y, H\hi');
             echo '<li><a href="'.$item->link.'">'.mb_convert_encoding($item->title,"utf-8").'</a> ('.$date.')</li>';
            }
            echo '</ul>';
            ?>
        </div>
        <div id="rss-sport24-sport" class="hide-rss">
            <?php
            $url = "http://sport24.lefigaro.fr/rssfeeds/sport24-accueil.xml";
            $rss = simplexml_load_file($url);
            echo '<ul>';
            foreach ($rss->channel->item as $item){
             $datetime = date_create($item->pubDate);
             echo '</br></br>';
             $date = date_format($datetime, 'd M Y, H\hi');
             echo '<li><a href="'.$item->link.'">'.mb_convert_encoding($item->title,"utf-8").'</a> ('.$date.')</li>';
            }
            echo '</ul>';
            ?>
        </div>
        <div id="rss-le-telegramme-sport" class="hide-rss">
            <?php
            $url = "http://www.letelegramme.fr/sports/rss.xml";
            $rss = simplexml_load_file($url);
            echo '<ul>';
            foreach ($rss->channel->item as $item){
             $datetime = date_create($item->pubDate);
             echo '</br></br>';
             $date = date_format($datetime, 'd M Y, H\hi');
             echo '<li><a href="'.$item->link.'">'.mb_convert_encoding($item->title,"utf-8").'</a> ('.$date.')</li>';
            }
            echo '</ul>';
            ?>
        </div>
        <div id="rss-le-parisien-sport" class="hide-rss">
            <?php
            $url = "http://www.leparisien.fr/sports/rss.xml#xtor=RSS-1481423633";
            $rss = simplexml_load_file($url);
            echo '<ul>';
            foreach ($rss->channel->item as $item){
             $datetime = date_create($item->pubDate);
             echo '</br></br>';
             $date = date_format($datetime, 'd M Y, H\hi');
             echo '<li><a href="'.$item->link.'">'.mb_convert_encoding($item->title,"utf-8").'</a> ('.$date.')</li>';
            }
            echo '</ul>';
            ?>
        </div>

        <!-- RSS POLITIQUE -->
        <div id="rss-express-politique" class="hide-rss">
            <?php
            $url = "http://www.leparisien.fr/politique/rss.xml#xtor=RSS-1481423633";
            $rss = simplexml_load_file($url);
            echo '<ul>';
            foreach ($rss->channel->item as $item){
             $datetime = date_create($item->pubDate);
             echo '</br></br>';
             $date = date_format($datetime, 'd M Y, H\hi');
             echo '<li><a href="'.$item->link.'">'.mb_convert_encoding($item->title,"utf-8").'</a> ('.$date.')</li>';
            }
            echo '</ul>';
            ?>
        </div>

        <div id="rss-le-parisien-politique" class="hide-rss">
            <?php
            $url = "http://www.leparisien.fr/politique/rss.xml#xtor=RSS-1481423633";
            $rss = simplexml_load_file($url);
            echo '<ul>';
            foreach ($rss->channel->item as $item){
             $datetime = date_create($item->pubDate);
             echo '</br></br>';
             $date = date_format($datetime, 'd M Y, H\hi');
             echo '<li><a href="'.$item->link.'">'.mb_convert_encoding($item->title,"utf-8").'</a> ('.$date.')</li>';
            }
            echo '</ul>';
            ?>
        </div>

        <div id="rss-la-croix-politique" class="hide-rss">
            <?php
            $url = "http://www.la-croix.com/RSS/WFRA-POL";
            $rss = simplexml_load_file($url);
            echo '<ul>';
            foreach ($rss->channel->item as $item){
             $datetime = date_create($item->pubDate);
             echo '</br></br>';
             $date = date_format($datetime, 'd M Y, H\hi');
             echo '<li><a href="'.$item->link.'">'.mb_convert_encoding($item->title,"utf-8").'</a> ('.$date.')</li>';
            }
            echo '</ul>';
            ?>
        </div>

        <div id="rss-liberation-politique" class="hide-rss">
            <?php
            $url = "http://www.la-croix.com/RSS/WFRA-POL";
            $rss = simplexml_load_file($url);
            echo '<ul>';
            foreach ($rss->channel->item as $item){
             $datetime = date_create($item->pubDate);
             echo '</br></br>';
             $date = date_format($datetime, 'd M Y, H\hi');
             echo '<li><a href="'.$item->link.'">'.mb_convert_encoding($item->title,"utf-8").'</a> ('.$date.')</li>';
            }
            echo '</ul>';
            ?>
        </div>

        <div id="rss-le-figaro-politique" class="hide-rss">
            <?php
            $url = "http://www.lefigaro.fr/rss/figaro_politique.xml";
            $rss = simplexml_load_file($url);
            echo '<ul>';
            foreach ($rss->channel->item as $item){
             $datetime = date_create($item->pubDate);
             echo '</br></br>';
             $date = date_format($datetime, 'd M Y, H\hi');
             echo '<li><a href="'.$item->link.'">'.mb_convert_encoding($item->title,"utf-8").'</a> ('.$date.')</li>';
            }
            echo '</ul>';
            ?>
        </div>

        <!-- RSS TECHNOLOGIE -->

        <div id="rss-le-monde-technologie" class="hide-rss">
            <?php
            $url = "http://www.lemonde.fr/technologies/rss_full.xml";
            $rss = simplexml_load_file($url);
            echo '<ul>';
            foreach ($rss->channel->item as $item){
             $datetime = date_create($item->pubDate);
             echo '</br></br>';
             $date = date_format($datetime, 'd M Y, H\hi');
             echo '<li><a href="'.$item->link.'">'.mb_convert_encoding($item->title,"utf-8").'</a> ('.$date.')</li>';
            }
            echo '</ul>';
            ?>
        </div>

        <div id="rss-le-figaro-technologie" class="hide-rss">
            <?php
            $url = "http://www.lefigaro.fr/rss/figaro_secteur_high-tech.xml";
            $rss = simplexml_load_file($url);
            echo '<ul>';
            foreach ($rss->channel->item as $item){
             $datetime = date_create($item->pubDate);
             echo '</br></br>';
             $date = date_format($datetime, 'd M Y, H\hi');
             echo '<li><a href="'.$item->link.'">'.mb_convert_encoding($item->title,"utf-8").'</a> ('.$date.')</li>';
            }
            echo '</ul>';
            ?>
        </div>

        <div id="rss-le-parisien-technologie" class="hide-rss">
            <?php
            $url = "http://www.leparisien.fr/high-tech/rss.xml#xtor=RSS-1481423633";
            $rss = simplexml_load_file($url);
            echo '<ul>';
            foreach ($rss->channel->item as $item){
             $datetime = date_create($item->pubDate);
             echo '</br></br>';
             $date = date_format($datetime, 'd M Y, H\hi');
             echo '<li><a href="'.$item->link.'">'.mb_convert_encoding($item->title,"utf-8").'</a> ('.$date.')</li>';
            }
            echo '</ul>';
            ?>
        </div>

        <!-- RSS ECONOMIE -->

        <div id="rss-le-monde-economie" class="hide-rss">
            <?php
            $url = "http://www.lemonde.fr/economie/rss_full.xml";
            $rss = simplexml_load_file($url);
            echo '<ul>';
            foreach ($rss->channel->item as $item){
             $datetime = date_create($item->pubDate);
             echo '</br></br>';
             $date = date_format($datetime, 'd M Y, H\hi');
             echo '<li><a href="'.$item->link.'">'.mb_convert_encoding($item->title,"utf-8").'</a> ('.$date.')</li>';
            }
            echo '</ul>';
            ?>
        </div>

        <div id="rss-le-parisien-economie" class="hide-rss">
            <?php
            $url = "http://www.leparisien.fr/economie/rss.xml#xtor=RSS-1481423633";
            $rss = simplexml_load_file($url);
            echo '<ul>';
            foreach ($rss->channel->item as $item){
             $datetime = date_create($item->pubDate);
             echo '</br></br>';
             $date = date_format($datetime, 'd M Y, H\hi');
             echo '<li><a href="'.$item->link.'">'.mb_convert_encoding($item->title,"utf-8").'</a> ('.$date.')</li>';
            }
            echo '</ul>';
            ?>
        </div>

        <div id="rss-la-croix-economie" class="hide-rss">
            <?php
            $url = "http://www.la-croix.com/RSS/UNIVERS_WECO";
            $rss = simplexml_load_file($url);
            echo '<ul>';
            foreach ($rss->channel->item as $item){
             $datetime = date_create($item->pubDate);
             echo '</br></br>';
             $date = date_format($datetime, 'd M Y, H\hi');
             echo '<li><a href="'.$item->link.'">'.mb_convert_encoding($item->title,"utf-8").'</a> ('.$date.')</li>';
            }
            echo '</ul>';
            ?>
        </div>

        <div id="rss-le-telegramme-economie" class="hide-rss">
            <?php
            $url = "http://www.letelegramme.fr/economie/rss.xml";
            $rss = simplexml_load_file($url);
            echo '<ul>';
            foreach ($rss->channel->item as $item){
             $datetime = date_create($item->pubDate);
             echo '</br></br>';
             $date = date_format($datetime, 'd M Y, H\hi');
             echo '<li><a href="'.$item->link.'">'.mb_convert_encoding($item->title,"utf-8").'</a> ('.$date.')</li>';
            }
            echo '</ul>';
            ?>
        </div>

        <div id="rss-le-figaro-economie" class="hide-rss">
            <?php
            $url = "http://www.lefigaro.fr/rss/figaro_economie.xml";
            $rss = simplexml_load_file($url);
            echo '<ul>';
            foreach ($rss->channel->item as $item){
             $datetime = date_create($item->pubDate);
             echo '</br></br>';
             $date = date_format($datetime, 'd M Y, H\hi');
             echo '<li><a href="'.$item->link.'">'.mb_convert_encoding($item->title,"utf-8").'</a> ('.$date.')</li>';
            }
            echo '</ul>';
            ?>
        </div>

    </body>
</html>
