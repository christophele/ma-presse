<?php
// Include
require_once 'config.php';
// Définir les variables et initialiser avec des valeurs vides
$username = $password = "";
$username_err = $password_err = "";
// Traite les données du formulaire quand le formulaire est soumis
if($_SERVER["REQUEST_METHOD"] == "POST"){
    // Check si le champ identifiant est vide
    if(empty(trim($_POST["username"]))){
        $username_err = 'Entrez un identifiant.';
    } else{
        $username = trim($_POST["username"]);
    }
    // Check si le champ du mot de passe est vide
    if(empty(trim($_POST['password']))){
        $password_err = 'Entrez un mot de passe.';
    } else{
        $password = trim($_POST['password']);
    }
    // Valide les informations
    if(empty($username_err) && empty($password_err)){
        // prepare un select
        $sql = "SELECT username, password FROM users WHERE username = ?";
        if($stmt = mysqli_prepare($link, $sql)){
            // Reliez les variables à l'instruction préparée en tant que paramètres
            mysqli_stmt_bind_param($stmt, "s", $param_username);
            // défini les paramètres
            $param_username = $username;
            // tentative de déclaration
            if(mysqli_stmt_execute($stmt)){
                mysqli_stmt_store_result($stmt);
                // Check if username exists, if yes then verify password
                // vérifie si l'identifiant existe, si oui alors vérifier le mdp
                if(mysqli_stmt_num_rows($stmt) == 1){
                    // lier les résultats des variables
                    mysqli_stmt_bind_result($stmt, $username, $hashed_password);
                    if(mysqli_stmt_fetch($stmt)){
                        if(password_verify($password, $hashed_password)){
                            // Le mdp est correcte, alors démarrer la session et sauvegarde l'identifiant à la session
                            session_start();
                            $_SESSION['username'] = $username;
                            header("location: index.php");
                        } else{
                            // erreur si le mdp n'est pas valide
                            $password_err = 'Le mot de passe que vous avez entré n\'est pas valide.';
                        }
                    }
                } else{
                    // erreur l'dentifiant n'est pas valide
                    $username_err = 'L\'identifiant n\'existe pas.';
                }
            } else{
                echo "°-°.";
            }
        }
        mysqli_stmt_close($stmt);
    }
    mysqli_close($link);
}
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <link rel="stylesheet" href="css/style.css">
        <title>La Presse</title>
    </head>
<body>
    <div class="container">
    <div class="row centered-form">
    <div class="col-xs-12 col-sm-8 col-md-4 col-sm-offset-2 col-md-offset-4">
    <nav class="navbar navbar-inverse navbar-fixed-top">
        <div class="container-fluid">
            <div class="navbar-header">
                <a class="navbar-brand" href="http://filippaunovic.fr/">La Presse</a>
            </div>
            <div class="navbar-collapse collapse">
                <ul class="nav navbar-nav">
                    <li class="dropdown">
                        <a data-toggle="dropdown" class="dropdown-toggle" href="#">Sport <b class="caret"></b></a>
                        <ul data-toggle="modal" data-target="#myModal" class="dropdown-menu">
                            <li id="express-sport"><a href="#"><span>L'Express</span></a></li>
                            <li id="sport24-sport"><a href="#"><span>Sport24</span></a></li>
                            <li id="le-parisien-sport"><a href="#"><span>Le Parisien</span></a></li>
                            <li id="le-telegramme-sport"><a href="#"><span>Le Télégramme</span></a></li>
                        </ul>
                    </li>
                    <li class="dropdown">
                        <a data-toggle="dropdown" class="dropdown-toggle" href="#">Politique <b class="caret"></b></a>
                        <ul data-toggle="modal" data-target="#myModal" class="dropdown-menu">
                            <li id="express-politique"><a href="#"><span>L'Express</span></a></li>
                            <li id="liberation-politique"><a href="#"><span>Libération</span></a></li>
                            <li id="le-figaro-politique"><a href="#"><span>Le Figaro</span></a></li>
                            <li id="la-croix-politique"><a href="#"><span>La Croix</span></a></li>
                            <li id="le-parisien-politique"><a href="#"><span>Le Parisien</span></a></li>
                        </ul>
                    </li>
                    <li class="dropdown">
                        <a data-toggle="dropdown" class="dropdown-toggle" href="#">Technologie <b class="caret"></b></a>
                        <ul data-toggle="modal" data-target="#myModal" class="dropdown-menu">
                            <li id="le-monde-technologie"><a href="#"><span>Le Monde</span></a></li>
                            <li id="le-figaro-technologie"><a href="#"><span>Le Figaro</span></a></li>
                            <li id="le-parisien-technologie"><a href="#"><span>Le Parisien</span></a></li>
                        </ul>
                    </li>
                    <li class="dropdown">
                        <a data-toggle="dropdown" class="dropdown-toggle" href="#">Economie <b class="caret"></b></a>
                        <ul data-toggle="modal" data-target="#myModal" class="dropdown-menu">
                            <li id="le-monde-economie"><a href="#"><span>Le Monde</span></a></li>
                            <li id="le-figaro-economie"><a href="#"><span>Le Figaro</span></a></li>
                            <li id="le-parisien-economie"><a href="#"><span>Le Parisien</span></a></li>
                            <li id="la-croix-economie"><a href="#"><span>La Croix</span></a></li>
                            <li id="le-telegramme-economie"><a href="#"><span>Le Télégramme</span></a></li>
                        </ul>
                    </li>
                </ul>
                <div class="modal fade" id="myModal" role="dialog">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal"></button>
                                <h4 class="modal-title">Ma Presse</h4>
                            </div>
                            <div class="modal-body">
                                <p>Tu n'es pas membre de mon site, inscris-toi gratuitement !</p>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-default" data-dismiss="modal">Fermer</button>
                            </div>
                        </div>
                    </div>
                </div>
                <ul class="nav navbar-nav navbar-right">
                    <li><a class="show-form" id="btn-login" href="#"><span class="glyphicon glyphicon-log-in"></span> Se connecter</a></li>
                </ul>
                <ul class="nav navbar-nav navbar-right">
                    <li><a class="show-form" id="btn-register" href="http://filippaunovic.fr/register.php"><span class="glyphicon glyphicon-user"></span> S'inscrire</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="panel panel-default" id="login">
        <div class="panel-heading">
            <h3 class="panel-title">Connectez-vous sur La Presse</h3>
        </div>
            <div class="panel-body">
                <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
                    <!-- <div class="col-xs-6 col-sm-6 col-md-6"> -->
                        <div class="form-group <?php echo (!empty($username_err)) ? 'has-error' : ''; ?>">
                            <label>Identifiant :<sup>*</sup></label>
                            <input type="text" name="username"class="form-control" value="<?php echo $username; ?>">
                            <span class="help-block"><?php echo $username_err; ?></span>
                        </div>
                    <!-- </div> -->
                    <!-- <div class="col-xs-6 col-sm-6 col-md-6"> -->
                        <div class="form-group <?php echo (!empty($password_err)) ? 'has-error' : ''; ?>">
                            <label>Mot de passe :<sup>*</sup></label>
                            <input type="password" name="password" class="form-control">
                            <span class="help-block"><?php echo $password_err; ?></span>
                        </div>
                    <!-- </div> -->
                    <div class="form-group">
                        <input type="submit" value="Se connecter" class="btn btn-info btn-block">
                    </div>
                    <p>Vous n'avez pas de compte ? <a href="register.php">Inscrivez-vous !</a></p>
                </form>
            </div>
        </div>
    </div>
</body>
</html>
