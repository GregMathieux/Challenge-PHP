<?php
session_start();
include_once("connexionExo.php");
$title = isset($_POST['coltitle'])? $_POST['coltitle'] : "";
$navbar = isset($_POST['colnav'])? $_POST['colnav'] : "";
$url = isset($_POST['colurl'])? $_POST['colurl'] : "";
$bouton = isset($_POST['colinput'])? $_POST['colinput'] : "";


if(isset($_POST['submit'])&&$_SESSION['data']['id'])
{

 $title = isset($_POST['coltitle'])?mysqli_real_escape_string($cnx,$_POST['coltitle']) : "";
 $navbar = isset($_POST['colnav'])?mysqli_real_escape_string($cnx,$_POST['colnav']) : "";
 $url = isset($_POST['colurl'])?mysqli_real_escape_string($cnx,$_POST['colurl']) : "";
 $bouton = isset($_POST['colinput'])?mysqli_real_escape_string($cnx,$_POST['colinput']) : "";

$res2 = mysqli_query($cnx, "UPDATE Colorpicker SET titre='$title', navbar='$navbar', url='$url', bouton='$bouton'");
}

// Récupération des couleurs
$query = mysqli_query($cnx, 'SELECT * FROM Colorpicker');
$color = mysqli_fetch_assoc($query);
// var_dump($color);

$pseudo = isset($_POST['pseudo'])? $_POST['pseudo'] : "";
$prenom = isset($_POST['prenom'])? $_POST['prenom']: "";
$jeux = isset($_POST['play'])? $_POST['play']: "";
$email = isset($_POST['email'])? $_POST['email']: "";
$date = isset($_POST['born'])? $_POST['born'] :"";

$res3 = mysqli_query($cnx,"INSERT INTO Amis (pseudo_principal,Prénom,Jeux,Mail,Date_naissance) VALUES ('$pseudo','$prenom'
  $jeux','$email','$date')");
?>
<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Challenge PHP Gregory</title>
    <link href="../css/bootstrap.min.css" rel="stylesheet">
    <link href="../css/main.css" rel="stylesheet">
    <link href="../font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <?php include_once("style.php");?>
  </head>
  <body>
    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <div class="container">
            <!-- Left -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.php">Start Bootstrap</a>
            </div>
            <!-- Right -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li>
                        <a href="../index.php">Home</a>
                    </li>
                    <li>
                        <a href="repertory.php">Repertory</a>
                    </li>
                    <li>
                        <a href="about.php">About</a>
                    </li>
                    <li>
                        <a href="contact.php">Contact</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>
    <div class="container-fluid">
      <div class="row" id="admin">
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
        <button type="button" class="btn btn-warning" onclick=window.location.href="../index.php">Cancel</button>
        <button type="button" class="btn btn-danger" onclick=window.location.href="adminDestroy.php">Log Out</button>
      </div>
    </div>
    <form action="admin.php" method="POST" class="form2" id="colour">
      <p>Changer la couleur des titres :</p>
      <input class="myinputs" type="text" name="coltitle" value="<?php echo $color['titre'];?>">
      <p>Changer la couleur de la navbar :</p>
      <input class="myinputs" type="text" name="colnav" value="<?php echo $color['navbar'];?>">
      <p>Changer la couleur des urls (liens) :</p>
      <input class="myinputs" type="text" name="colurl" value="<?php echo $color['url'];?>">
      <p>Changer la couleur des inputs (buttons) :</p>
      <input class="myinputs" type="text" name="colinput" value="<?php echo $color['bouton'];?>">
      <input class="myinputs" type="submit" name="submit" value="Changer les paramètres">
    </form>
    <a href="#" id="toTop" class="fa fa-paw fa-2x"></a>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script src="../js/bootstrap.min.js"></script>
    <script src="../js/script.js" charset="utf-8"></script>
  </body>
</html>
