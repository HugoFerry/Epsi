<!-- </section> -->
<!-- Enregistrement Event -->
<section class="signup-section">
    <div class="container contact-form rounded bg-gray">
        <form class="p-3" method="post" action="" enctype="multipart/form-data">
            <h3 class="text-center ">Création d'&Eacute;vènement</h3>
            <div class="">
                <div class="row align-items-center justify-content-center">
                    <div class="col-md-6">
                        <div class="form-group">
                            <input type="text" name="name_event" class="form-control red-star" placeholder="Nom de l'&Eacute;vènement *" required/>
                        </div>
                        <div class="form-group">
                            <input type="text" onfocus="(this.type='date')" onblur="(this.type='text')" name="date_event" class="form-control" placeholder="Date de l'&Eacute;vènement *" required/>
                        </div>
                        <div class="form-group">
                            <input type="text" name="lieu_event" class="form-control" placeholder="Lieu de l'&Eacute;vènement *" required/>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <textarea type="text" name="description_event" class="form-control" placeholder="Description de l'&Eacute;vènement *" style="width: 100%; height: 150px;"></textarea>
                        </div>
                    </div>
                </div>
                <div class="form-group form-control form-control ">
                    <label>Image de l'&Eacute;vènement <span>*</span> :</label>
                    <input class="" type="file" name="nom_fichier" accept="image/*" required>
                </div>
                <div class="form-group d-flex justify-content-center align-items-center">
                    <button type="submit" class="btn btn-primary">Créer L'&Eacute;vènement</button>
                </div>
            </div>
        </form>
    </div>
    <?php
    
        require 'includes/back/connect.php';

        if (isset($_POST['name_event']))
        {
        $nom = htmlentities($_POST['name_event']);
        $describe = htmlentities($_POST['description_event']);
        $date = htmlentities($_POST['date_event']);
        $place_event = htmlentities($_POST['lieu_event']);
        $file_name = htmlentities($_FILES['nom_fichier']['name']);


        $sql = "INSERT INTO evenements (event_name, event_description, event_date, event_lieu, event_image)
            VALUES (\"$nom\", \"$describe\", \"$date\", \"$place_event\", \"$file_name\")";
        // use exec() because no results are returned
        $db->exec($sql);
        // var_dump($_FILES);
        // $ext = explode('.', $_FILES['nom_fichier']['name'])[count(explode('.', $_FILES['nom_fichier']['name']))-1];
        // echo $ext;

        if (move_uploaded_file($_FILES['nom_fichier']['tmp_name'], '/assets/img/' . $_FILES['nom_fichier']['name'])) {
            //echo 'cool';
        }

        }
        
    ?>

</section>