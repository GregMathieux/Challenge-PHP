  <head>
    <?php include_once("style.php");?>
  </head>
<?php
session_start();
include_once("connexionExo.php");
if( isset($_SESSION['login']) )
{
  if($_SESSION['login']=="yes"){
    // echo "Bonjour ".$_SESSION['data']['pseudo']."<br>";
    header('location:../index.php');
    // echo "<input type='button' name='button' value='Log Out' onclick=window.location.href='adminDestroy.php'>";
  }else{
    echo '<form action="admincheck.php" method="POST" id="adminform">
          <input type="text" name="pseudo" placeholder="Pseudo" autocomplete="off"><br>
          <input type="password" name="password" placeholder="Password" autocomplete="off"><br>
          <input type="submit" name="submit" value="Connexion">
          <input type="button" name"cancel" value="Retour" onclick=window.location.href="../index.php">
          </form>';
  }
}
?>
<body id="Fondform">
</body>
