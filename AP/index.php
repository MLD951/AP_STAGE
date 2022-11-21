<?php

session_start();

?>
<html>

<head> 

<title> Connexion </title>

<meta charset="utf-8">

<link rel="stylesheet" type="text/css" href="style.css">

</head>

<body>

<?php



include "conf-ionos.php";
if ($connexion = mysqli_connect ($serveurBDD, $userBDD, $mdpBDD, $nomBDD))
{
	//echo "Vous etes connecté";
}

else 
{
	echo "Erreur";
}


?>

<center> <h1> Connexion </h1> </center> <br> <br> 

<div align="center">
<form action= "accueil.php" method ="POST">
<div>
    <label for="login">Login:</label>
        <input type="text" placeholder="Entrez votre login"  name="login"> <br>
    <label for="mdp">Mot de passe:</label> 
        <input type="text" placeholder="Entrez votre mot de passe"  name="mdp"> <br>
        <center> <input type="submit" value="Envoyer" name= "send_con"> </center> <br>
        <a href="oubli.php" > Mot de passe oublié </a>






</form>
</div>