<?php
$feeds = array('http://www.lexpress.fr/rss/sport.xml', 'http://sport24.lefigaro.fr/rssfeeds/sport24-accueil.xml', 'http://www.letelegramme.fr/sports/rss.xml', 'http://www.leparisien.fr/sports/rss.xml#xtor=RSS-1481423633');
foreach( $feeds as $feed ) {
    $xml = simplexml_load_file($feed);

    foreach($xml->channel->item as $item)
    {
    $date_format = "j-n-Y"; // 7-7-2008
    echo date($date_format,strtotime($item->pubDate));
             echo '<a href="'.$item->link.'" target="_blank">'.$item->title.'</a>';
             echo '<div>' . $item->description . '</div>';

    mysql_query("INSERT INTO rss_feeds (id, title, description, link, pubdate)
    VALUES (
        '',
        '".mysql_real_escape_string($item->title)."',
        '".mysql_real_escape_string($item->description=htmlspecialchars(trim($item->description)))."',
        '".mysql_real_escape_string($item->link)."',
        '".mysql_real_escape_string($item->pubdate)."')");
    }
}
?>
