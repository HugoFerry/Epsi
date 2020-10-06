<!-- Events -->
<section id="myDIV" class="projects-section">
    <div class="container d-flex align-items-center">
        <div class="mx-auto text-center">

            <?php
                require 'includes/back/connect.php';

                $reponse = $db->query('SELECT * FROM evenements ORDER BY event_date ASC');

                while($donnees = $reponse->fetch()) {
                    include 'includes/front/event.php';
                    
                }
            ?>

        </div>
    </div>
</section>

<?php
    $reponse = $db->query('SELECT * FROM evenements ORDER BY event_date ASC');

                while($donnees = $reponse->fetch()) {
                    include 'includes/front/modal.php';
                    
                }
?>