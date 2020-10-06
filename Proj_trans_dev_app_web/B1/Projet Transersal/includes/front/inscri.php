<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="assets/css/style.css">
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
	<title>Inscription</title>
</head>
<body>

	<div>
        <h2>Page d'inscription | Inscrivez vous</h2>
        <div>
            <form method="post" action="admin.php">
              <fieldset>
                <legend>Page d'inscription | Inscrivez vous</legend>
                <div class="field">
                  <div class="fs_main">
                    <div class="fs_1">
                      <div>
                        <label for="POST-name_inscription">Nom <span>*</span> :</label>
                        <input id="POST-name_inscription" type="text" name="name_inscription" placeholder="Nom" required>
                      </div>

                      <div>
                        <label for="POST-surname_inscription">Prénom <span>*</span> :</label>
                        <input id="POST-surname_inscription" type="text" name="surname_inscription" placeholder="Prénom" required>
                      </div>

                      <div>
                        <label for="POST-pseudo_inscription">Pseudo <span>*</span> :</label>
                        <input id="POST-pseudo_inscription" type="text" name="pseudo_inscription" placeholder="¨Pseudo" required>
                      </div>

                      <div>
                        <label for="POST-mail_inscription">E-Mail <span>*</span> :</label>
                        <input id="POST-mail_inscription" type="email" name="mail_inscription" placeholder="Votre E-Mail" required>
                      </div>


                    </div>
                    
                  </div>
                  <input type="submit" value="Enregistrer">


                 <?php

		            include "connect.php";

		            if (isset($_POST['name_inscription']))
		            {
		            $nom = htmlentities($_POST['name_inscription']);
		            $prenom = htmlentities($_POST['surname_inscription']);
		            $pseudo = htmlentities($_POST['pseudo_inscription']);
		            $mail = htmlentities($_POST['mail_inscription']);


		            $sql = "INSERT INTO inscrits (nom, prenom, pseudo, email)
		                VALUES (\"$nom\", \"$prenom\", \"$pseudo\", \"$mail\")";
		            // use exec() because no results are returned
		            $db->exec($sql);
                }

		         ?>
                </div>
              </fieldset>
            </form>
        </div>
        
    </div>

</body>
</html>