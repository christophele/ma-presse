<?php
// Include
require_once 'config.php';

// Définir les variables et initialiser avec des valeurs vides
$username = $password = $confirm_password = "";
$username_err = $password_err = $confirm_password_err = "";

// Traite les données du formulaire quand le formulaire est soumis
if($_SERVER["REQUEST_METHOD"] == "POST"){

    // Validatation de l'identifiant
    if(empty(trim($_POST["username"]))){
        $username_err = "Entrez un identifiant.";
    } else{
        // Prepare un select
        $sql = "SELECT id FROM users WHERE username = ?";

        if($stmt = mysqli_prepare($link, $sql)){
            mysqli_stmt_bind_param($stmt, "s", $param_username);
            $param_username = trim($_POST["username"]);
            if(mysqli_stmt_execute($stmt)){
                mysqli_stmt_store_result($stmt);

                if(mysqli_stmt_num_rows($stmt) == 1){
                    $username_err = "Cet identifiant est déjà pris.";
                } else{
                    $username = trim($_POST["username"]);
                }
            } else{
                echo "°-°";
            }
        }
        mysqli_stmt_close($stmt);
    }

    // Validatation du mdp
    if(empty(trim($_POST['password']))){
        $password_err = "Entrez un mot de passe.";
    } elseif(strlen(trim($_POST['password'])) < 6){
        $password_err = "Le mot de passe doit contenir au moins 6 caractères.";
    } else{
        $password = trim($_POST['password']);
    }

    // confirmation de la validation du mdp
    if(empty(trim($_POST["confirm_password"]))){
        $confirm_password_err = 'Merci de confirmer le mot de passe.';
    } else{
        $confirm_password = trim($_POST['confirm_password']);
        if($password != $confirm_password){
            $confirm_password_err = 'Le mot de passe ne correspond pas.';
        }
    }

    if(empty($username_err) && empty($password_err) && empty($confirm_password_err)){

        // Prepare un insert
        $sql = "INSERT INTO users (username, password) VALUES (?, ?)";

        if($stmt = mysqli_prepare($link, $sql)){
            // Bind variables to the prepared statement as parameters
            mysqli_stmt_bind_param($stmt, "ss", $param_username, $param_password);
            $param_username = $username;
            $param_password = password_hash($password, PASSWORD_DEFAULT); // Creates a password hash
            if(mysqli_stmt_execute($stmt)){
                // Redirection au login.php
                header("location: login.php");
            } else{
                echo "°-°";
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
                <ul class="nav navbar-nav navbar-right">
                    <li><a  class="show-form" id="btn-login" href="http://filippaunovic.fr/login.php"><span class="glyphicon glyphicon-log-in"></span> Se connecter</a></li>
                </ul>
                <ul class="nav navbar-nav navbar-right">
                    <li><a class="show-form" id="btn-register" href="#"><span class="glyphicon glyphicon-user"></span> S'inscrire</a></li>
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
            </div>
        </div>
    </nav>

    <div class="panel panel-default" id="register">
        <div class="panel-heading">
            <h3 class="panel-title">Inscrivez-vous sur La Presse</h3>
        </div>
            <div class="panel-body">
                <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
                    <div class="form-group <?php echo (!empty($username_err)) ? 'has-error' : ''; ?>">
                        <label>Identifiant :<sup>*</sup></label>
                        <input type="text" name="username"class="form-control" value="<?php echo $username; ?>">
                        <span class="help-block"><?php echo $username_err; ?></span>
                    </div>
                    <div class="form-group <?php echo (!empty($password_err)) ? 'has-error' : ''; ?>">
                        <label>Mot de passe :<sup>*</sup></label>
                        <input type="password" name="password" class="form-control" value="<?php echo $password; ?>">
                        <span class="help-block"><?php echo $password_err; ?></span>
                    </div>
                    <div class="form-group <?php echo (!empty($confirm_password_err)) ? 'has-error' : ''; ?>">
                        <label>Confirmer le mot de passe :<sup>*</sup></label>
                        <input type="password" name="confirm_password" class="form-control" value="<?php echo $confirm_password; ?>">
                        <span class="help-block"><?php echo $confirm_password_err; ?></span>
                    </div>
                    <div class="form-group">
                        <input type="submit" value="S'inscrire" class="btn btn-info btn-block">
                        <input type="reset" class="btn btn-warning btn-block" value="Effacer">
                    </div>
                    <p>Vous avez déjà un compte ? <a href="login.php">Connectez-vous !</a></p>
                </form>
            <div/>
        <div/>
    </div>
</body>
</html>
