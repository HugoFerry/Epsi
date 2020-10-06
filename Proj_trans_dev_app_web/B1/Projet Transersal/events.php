<!DOCTYPE html>
<html lang="fr">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>BDE SWIPE &Eacute;vènements</title>

    <!-- Bootstrap core CSS -->
    <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom fonts for this template -->
    <link href="assets/vendor/fontawesome-free/css/all.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Varela+Round" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="assets/css/grayscale.css" rel="stylesheet">
    <!-- Scripts -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="assets/js/filter.js"></script>

</head>

<body id="page-top" class="bg-img">
    <?php
        function debug_to_console($data) {
            $output = $data;
            if (is_array($output))
                $output = implode(',', $output);

            echo "<script>console.log('Debug Objects: ".$output. "' );</script>";
        }
    ?>

    <?php
        $file_name = basename(__FILE__);
        include 'includes/front/nav.php';
    ?>

    <?php
        include 'includes/front/disp_events.php';
    ?>

    <?php
    
        require 'includes/back/connect.php';

        if (isset($_POST['nom']))
        {
        $id_event = htmlentities($_POST['id_event']);
        $nom = htmlentities($_POST['nom']);
        $prenom = htmlentities($_POST['prenom']);
        $mail = htmlentities($_POST['mail']);
        
        $id;

        $reponse = $db->query("SELECT id FROM inscrits WHERE email = \"$mail\"");
        if ($reponse->rowCount() == 0) {
            $sql = "INSERT INTO inscrits (nom, prenom, email)
                    VALUES (\"$nom\", \"$prenom\", \"$mail\")";
            $db->exec($sql);
        }
        $id = $reponse->fetch()['id'];
        $reponse = $db->query("SELECT * FROM relationnelle WHERE inscrits_ID = \"$id\" AND \"$id_event\"");
        if ($reponse->rowCount() == 0) {
            $sql = "INSERT INTO relationnelle (events_ID, inscrits_ID)
                    VALUES ($id_event, $id)";
            $db->exec($sql);
        }


        }
        
    ?>

    <?php
        include 'includes/front/contact.php';
    ?>

    <?php
        include 'includes/front/footer.php';
    ?>

    <!-- Bootstrap core JavaScript -->
    <script src="assets/vendor/jquery/jquery.min.js"></script>
    <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="assets/vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for this template -->
    <script src="assets/js/grayscale.min.js"></script>
</body>
