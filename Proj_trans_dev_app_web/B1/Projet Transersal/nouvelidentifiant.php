<!DOCTYPE html>
<html lang="fr-FR">
<head>
	<meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="assets/css/style.css">
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
    <title>Nouvel identifiant</title>
</head>

<body>
	<h1>Ma Liste de livre</h1>
      <div class="progress-container">
        <div class="progress-bar" id="myBar"></div>
      </div>

      <nav>
          <ul>
            <li class="hvr-outline-in" onclick="location.href='#Formulaire'">S'inscrire</li>
          </ul>
      </nav>



      <div id="Formulaire" class="box">
        <h2>Inscription</h2>
      
   

        <div class="field">
            <form method="post" action="nouvelidentifiant.php">
              <fieldset>
                <legend>Enregistrement de l'utilisateur</legend>
                <div class="field">
                  <div class="fs_main">
                    <div class="fs_1">
                      <div>
                        <label for="POST-identifiant">Nom utilisateur <span>*</span> :</label>
                        <input id="POST-identifiant" type="text" name="identifiant" placeholder="ID" required>
                      </div>
                      <div>
                        <label for="POST-mot_de_passe">Mot de passe <span>*</span> :</label>
                        <input id="POST-mot_de_passe" type="password" name="mot_de_passe" placeholder="Mot de Passe" required>
                      </div>
                      <input type="submit" value="Enregistrer">
                    </div> 
                  </div>
                </div>
              </fieldset>
            </form>
        </div>


        <div>
            <?php
            $servername = "localhost";
            $username = "root";
            $password = "";
            $dbname = "phpmyadmin";

            try {
                $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
                // set the PDO error mode to exception
                $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                }
            catch(PDOException $e)
                {
                echo $sql . "<br>" . $e->getMessage();
                }

            if (isset($_POST['identifiant']))
            {
            $ID = $_POST['identifiant'];
            $password = sha1($_POST['mot_de_passe']);
            

            $sql = "INSERT INTO utilisateur (identifiant, mot_de_passe) VALUES ('$ID', '$password')";
            // use exec() because no results are returned
            $conn->exec($sql);
            }
            $reponse = $conn->query('SELECT * FROM utilisateur');
            ?>
         </div>
</body>

</html>