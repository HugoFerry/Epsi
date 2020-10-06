<?php
session_start();
if(isset($_POST['username']) && isset($_POST['password']))
{
    // connexion à la base de données
            $servername = "localhost";
            $username = "root";
            $password = "";
            $dbname = "phpmyadmin";
            

          try{
            $bdd = new PDO('mysql:host=localhost;dbname=phpmyadmin', 'root', '');
            }
          catch (Exception $e){
          die('Erreur : ' . $e->getMessage());
            }


            // $utilisateur = $_POST['nom_utilisateur'];
            // $mdp = $_POST['mot_de_passe'];


    $db = mysqli_connect($servername, $username, $password, $dbname)
           or die('could not connect to database');

    $password = $_POST['password'];
    $utilisateur = mysqli_real_escape_string($db,htmlspecialchars($_POST['username'])); 
    // $mdp = mysqli_real_escape_string($db,htmlspecialchars($_POST['password']));
    $mdp = mysqli_real_escape_string($db,htmlspecialchars(sha1($password)));

    
    if($utilisateur !== "" && $mdp !== "")
    {
        $requete = "SELECT count(*) FROM utilisateur where 
              identifiant = '".$utilisateur."' AND mot_de_passe = '".$mdp."' ";
        $exec_requete = mysqli_query($db,$requete);
        $reponse      = mysqli_fetch_array($exec_requete);
        $count = $reponse['count(*)'];
        if($count!=0) // nom d'utilisateur et mot de passe correctes
        {
           $_SESSION['username'] = $utilisateur;
           header('Location: index.php');
        }
        else
        {
           header('Location: login.php?erreur=1'); // utilisateur ou mot de passe incorrect
        }
    }
    else
    {
       header('Location: login.php?erreur=2'); // utilisateur ou mot de passe vide
    }
}
else
{
   header('Location: login.php');
}
mysqli_close($db); // fermer la connexion
?>