<?php
session_start();

include "conf-ionos.php";

$usertype = $_SESSION['usertype'];

if($bdd=mysqli_connect($serveurBDD,$userBDD,$mdpBDD,$nomBDD))
    {
       //echo "vous etes connecté";
    }

?>

<html>
<head>

    <title> Information personnelles </title>
    <meta charset="utf-8">

</head>


<body>


<style>
table, th, td {
  border:1px solid black;
}
</style>
<body>

<h2> Vos informations personnelles</h2>

<table style="width:40%">
  <tr>
    <th>Nom</th>
    <th>Prenom</th>
    <th>Login</th>
    <th>Email</th>
  </tr>
  <tr>
    <td> <center> <?php echo $_SESSION['nom']; ?> </center> </td>
    <td> <center> <?php echo $_SESSION['prenom']; ?> </center> </td>
    <td> <center> <?php echo $_SESSION['login']; ?> </center> </td>
    <td> <center> <?php echo $_SESSION['email']; ?> </center> </td>
  </tr>
</table>

<br> <br> <br>

<?php  if ($usertype==0)
          { ?>
            <a href= "eleve.php"> Cliquez pour retourner a l'accueil </a>
<?php     } 
       else
            { ?>
                <a href= "prof.php"> Cliquez pour retourner a l'accueil </a>
<?php            } ?>


</body>
</html>



