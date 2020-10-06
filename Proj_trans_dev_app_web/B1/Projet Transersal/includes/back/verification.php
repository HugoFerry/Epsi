<?php
if(isset($_POST['username']) && isset($_POST['password']))
{
    // connexion à la base de données
         include 'info_bdd.php';
           

    $db = mysqli_connect($host, $dbuser, $dbpw, $dbname)
           or die('could not connect to database');

    $password = $_POST['password'];
    $utilisateur = mysqli_real_escape_string($db,htmlspecialchars($_POST['username'])); 
    // $mdp = mysqli_real_escape_string($db,htmlspecialchars($_POST['password']));
    $mdp = mysqli_real_escape_string($db,htmlspecialchars(sha1($password)));

    
    if($utilisateur !== "" && $mdp !== "")
    {
        $requete = "SELECT count(*) FROM utilisateurs where 
              identifiant = '".$utilisateur."' AND mot_de_passe = '".$mdp."' ";
        $exec_requete = mysqli_query($db,$requete);
        $reponse      = mysqli_fetch_array($exec_requete);
        $count = $reponse['count(*)'];
        if($count!=0) // nom d'utilisateur et mot de passe correctes
        {
           $_SESSION['username'] = $utilisateur;
           if ($_SESSION['username'] ==  'admin') {
              header('Location: ../../admin.php');
           }
         //   else {
         //      header('Location: ../../events.php');
         //   }
           
        }
        else
        {
           header('Location: ../../index.php?erreur=1'); // utilisateur ou mot de passe incorrect
        }
    }
    else
    {
       header('Location: ../../index.php?erreur=2'); // utilisateur ou mot de passe vide
    }
}
else
{
   header('Location: ../../index.php');
}
mysqli_close($db); // fermer la connexion
?>