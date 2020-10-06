<div id="Formulaire" class="box">
    <div class="field ">
        <form method="post" class="" action="">

            <fieldset class="bg-gray">
                <legend>Connexion</legend>
                <div class="field">
                    <div class="fs_main">
                        <div class="fs_1">
                            <div>

                                <input id="POST-titre" type="text" name="username" placeholder="Identifiant" required>
                            </div>
                            <div>

                                <input id="POST-auteur" type="password" name="password" placeholder="Mot de Passe" required>
                            </div>


                        </div>

                    </div>
                    <div class="pad-bot">
                        <button class="hvr-outline-in btn-login" type="submit" id='submit'>Login</button>
                    </div>
                </div>

            </fieldset>
        </form>
        <div class="log">
            <div class="new-login">
                <span>Nouvel utilisateur ?<br /></span>
                <span class="flex">
                    <form method="POST" action="choixinscription.php">
                        <input type="hidden" name="where" value="new">
                        <button class="hvr-outline-in red" type="submit">Cliquez ici</button>
                    </form>
                    pour créer votre compte.
                </span>
            </div>
        </div>
    </div>
</div>

<?php
require 'includes/back/connect.php';

if (isset($_POST['identifiant'])) {
    $ID = $_POST['identifiant'];
    $password = sha1($_POST['mot_de_passe']);


    $sql = "INSERT INTO utilisateur (identifiant, mot_de_passe) VALUES ('$ID', '$password')";
    // use exec() because no results are returned
    $db->exec($sql);
}
?>

</form>