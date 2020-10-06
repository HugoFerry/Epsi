        <!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Heolios</title>
    <link rel="stylesheet" href="assets/css/main.css">

    <link rel="shortcut icon" type="image/png" href="assets/images/logo.svg">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Varela+Round">
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
    <script defer src="assets/js/light_mode.js"></script>
    <script defer src="assets/js/page.js"></script>
</head>


<body class="dark">

    <?php include "includes/front/navbar.php" ?>

    <header id="header" class="section">
        <div class="sub-section">
            <div class="container">
                <!-- <img id="logo-circle" src="assets/images/logo.svg" alt="" class="main-logo"> -->
                <?php include "./assets/images/logo-heolios.svg" ?>
                <h1>Bienvenue sur Heolios.
                </h1>
                <!-- <div class="but-container">
                    <a href="solar.php">
                        <span>
                            Commencer la simulation !
                        </span>
                    </a>
                </div> -->
            </div>
        </div>
    </header>


    <main>
        <div class="section">
            <div class="sub-section">
                <h1>Pourquoi Héolios ?</h1>
                <p id="text_1">Heolios est la contraction de Helios et Eole, Dieu du soleil et Dieu du vent dans la mythologie grecque.</br>
                Ils personnifient l'importance capitale de changer nos besoins énergétiques en privilégiant des énergies renouvelables grâce au développement des panneaux solaires ou encore des éoliennes.</br>
                </br>Êtes vous un bon élève ? Ou plutôt un ménage énergivore ?</br>
                </br>Heolios est là pour vous en informer, mais également pour vous aider à réduire votre consommation.</br>
                Il n'y a pas de "petit" geste en matière d'écologie, et c'est uniquement en luttant tous ensemble que nous pouvons changer le monde.</p>
            </div>
        </div>
        <?php require 'includes/back/connect.php' ?>
        <div class="section">
            <div class="sub-section" id="diapo">
                <div class="cadre">
                    <ul class="diaporama" >
                    <?php
                        $array_id_Tips = [];
                        $arrayTips = [];

                        for ($i = 1; $i <= 4; $i++){
                            $tips = random_int(1,8);
                            while(in_array($tips, $array_id_Tips)){
                                $tips = rand(1,8);
                            }
                            array_push($array_id_Tips, $tips);

                            $req = $db->prepare('SELECT tip FROM informations WHERE id = ?');
                            $req->execute(array($tips));
                            $res = $req->fetchAll();
                            array_push($arrayTips, $res[0]['tip']);
                        }
                    ?>
                        <li class='tips-1'>
                            <span>Pensez-y !</span>
                            <div>
                                <span class="icon"><i class="fas fa-faucet"></i></span>
                                <span class="text"><?php echo $arrayTips[0]?></span>
                            </div>
                        </li>
                        <li>
                            <span>Pensez-y !</span>
                            <div>
                                <span class="icon"><i class="fas fa-faucet"></i></span>
                                <span class="text"><?php echo $arrayTips[1]?></span>
                            </div>
                        </li>
                        <li>
                            <span>Pensez-y !</span>
                            <div>
                                <span class="icon"><i class="fas fa-faucet"></i></span>
                                <span class="text"><?php echo $arrayTips[2]?></span>
                            </div>
                        </li>
                        <li>
                            <span>Pensez-y !</span>
                            <div>
                                <span class="icon"><i class="fas fa-faucet"></i></span>
                                <span class="text"><?php echo $arrayTips[3]?></span>
                            </div>
                        </li>
                    
                    </ul>
                </div>
            </div>
        </div>
    </main>

    <footer class="section" id="footer">
        <div class="sub-section">
            <?php include "includes/front/footer.php" ?>
        </div>
    </footer>
</body>
</html>