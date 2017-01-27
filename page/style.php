<?php
include_once("connexionExo.php");
$query = mysqli_query($cnx, 'SELECT * FROM Colorpicker');
$color = mysqli_fetch_assoc($query);
?>
<style media="screen">
  #btnlog{
    <?php if($_SESSION['login']=="yes"){echo "display: none";} ?>
  }
  #admin{
    margin: auto;
    text-align: center;
  }
  #adminform{
    margin-top: 18%;
    margin-left: 2%;
    text-align: center;
    transform: rotate(-3.2deg);
  }
  #Fondform{
    background-image: url(../img/bad-cat.jpg);
    background-repeat: no-repeat;
    background-position: center;
    background-position: top;
  }
  .navbar{
    background-color: <?php echo $color['navbar'];?>!important;
  }
  .myinputs{
    margin: 10px auto;
    display: block;
    color: <?php echo $color['bouton'];?>;
  }
  button{
    color: <?php echo $color['bouton'];?>!important;
  }
  h1, h2, h3, h4, h5, h6{
    color: <?php echo $color['titre'];?>;
  }
  a{
    color: <?php echo $color['url'];?>!important;
  }
  #colour{
    margin: 10px auto;
    background-color: lightgreen;
    width: 500px;
    height: 285px;
  }
  .form2 p{
    margin-top: 10px;
    text-align: center;
    font-weight: bold;
  }
  #toTop{
      position: fixed;
      bottom: 10px;
      right: 10px;
      text-decoration: none;
      display: none;
      color: purple;
  }
</style>
