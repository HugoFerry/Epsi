<form method="post" action="index.php">
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
          <button class="btn btn-primary" type="submit">Enregistrer</button>
        </div> 
      </div>
    </div>
  </fieldset>
  <?php
    require 'includes/back/connect.php';

    if (isset($_POST['identifiant']))
    {
    $ID = $_POST['identifiant'];
    $password = sha1($_POST['mot_de_passe']);
    

    $sql = "INSERT INTO utilisateurs (identifiant, mot_de_passe) VALUES ('$ID', '$password')";
    // use exec() because no results are returned
    $db->exec($sql);
    }
  ?>
</form>