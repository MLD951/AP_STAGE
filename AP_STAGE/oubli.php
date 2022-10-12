


<?php 

   
if (isset($_POST['email']))
{
     $lemail=$_POST['email'];
    // echo "le formulaire a été envoyé avec comme email la valeur :".$lemail;
 include 'conf-ionos.php';

    //étape 6
        


    if($bdd=mysqli_connect($serveurBDD,$userBDD,$mdpBDD,$nomBDD))
    {
         

            $requete="Select * from UTILISATEUR WHERE email='$lemail'";
            $resultat = mysqli_query($bdd, $requete);
            $etat=0;
	            while($donnees = mysqli_fetch_assoc($resultat))
	            {
		            $login =$donnees['login']; 
		            $mdp =$donnees['motdepasse'];	
                    $etat=1;
	            }
            
            if ($etat==0)
            {
                echo "ERREUR l'email n'existe pas dans la BDD";

            }

            else
            {

                echo "L'email existe bien nous allons vous envoyer un email avec votre mot de passe";
                $to = $lemail;
                $subject = 'Mot de passe';
                $message = 'Bonjour !';

                mail($to, $subject, $message);

            }
}


                $comb = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789";
                $shfl = str_shuffle($comb);-
                $pwd = substr($shfl,0,8);
                //echo $pwd;

                $texte="Bonjour, voici votre mot de passe = $pwd"; 
                echo $texte; mail($lemail, 'sioreport : mot de passe oublié', $texte); 

}
else 
{
    echo "erreur Connexion";    
}

?>
    <form method="POST" action="oubli.php">
    email : <input name="email">
    <br><input type="submit" value="Confirmer">
    </form>






