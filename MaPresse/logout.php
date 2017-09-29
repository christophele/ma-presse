<?php
// initialise la session
session_start();

// Désélectionne toutes les variables de session
$_SESSION = array();

// Détruit la session
session_destroy();

// redirection au login.php
header("location: login.php");
exit;
?>
