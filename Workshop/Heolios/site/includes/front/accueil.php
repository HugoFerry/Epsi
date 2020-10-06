
<?php
    if (!isset($_SESSION['username'])) { ?>
        <div class="box" style="height: 800px">
	        <h2> Bienvenue sur Pièces Auto, veuillez vous connecter. </h2>
        </div>
    <?php
    }
    else { ?>
        <div class="box">
            <h2> Bonjour, <?= $_SESSION['username']?>, amusez vous bien sur Pièces Auto !</h2>
        </div>
    <?php } ?>