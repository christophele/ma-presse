<?php
define('DB_SERVER', 'localhost');
define('DB_USERNAME', 'root');
define('DB_PASSWORD', 'root');
define('DB_NAME', 'ma_presse');

// define('DB_SERVER', 'filippauppsql.mysql.db');
// define('DB_USERNAME', 'filippauppsql');
// define('DB_PASSWORD', 'vivelesSLAM12345');
// define('DB_NAME', 'filippauppsql');

/* tentative de connexion à la bdd */
$link = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);

// Check connection
if($link === false){
    die("ERREUR" . mysqli_connect_error());
}
?>
