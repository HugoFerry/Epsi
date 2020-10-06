<form action="includes/back/verification.php" method="POST">
    <div class="form-group row">
        <div class="col-sm-10">
            <input type="text" class="form-control" id="User" name="username" placeholder="Identifiant" required>
        </div>
    </div>
    <div class="form-group row">
        <div class="col-sm-10">
            <input type="password" class="form-control" id="inputPassword3" name="password" placeholder="Mot de Passe" required>
        </div>
    </div>
    <!-- <div class="form-group row">
        <div class="col-sm-10">
            <a  data-dismiss="modal" aria-label="Close" data-toggle="modal" data-target="#new_login">Nouvel utilisateur ?</br>Cliquez ici pour créer votre compte.</a>
        </div>
    </div> -->
    <div class="form-group row">
        <div class="col-sm-10">
            <?php
                if(isset($_GET['erreur'])){
                    $err = $_GET['erreur'];
                    if($err==1 || $err==2)
                        echo "<p style='color:red'>Utilisateur ou mot de passe incorrect</p>";
            }
            ?>
            <button type="submit" class="btn btn-primary">Connexion</button>
        </div>
    </div>

</form>

