<!-- Modal -->
<div class="modal fade" id="login_<?= $donnees['id'] ?>" tabindex="-1" role="dialog" aria-labelledby="loginTitle_<?= $donnees['id'] ?>" aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable" role="document">
        <div class="modal-content bg-black text-white-50">
            <div class="modal-header">
                <h5 class="modal-title" id="loginTitle<?= $donnees['id'] ?>">Join Event</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <?php
                    //include 'includes/front/login.php';
                ?>

    <div class="container contact-form rounded bg-gray">
        <form class="p-3" method="post" action="" enctype="multipart/form-data">
            
            <div class="">
                <div class="row align-items-center justify-content-center">
                    <div class="col-md-6">
                        <div class="form-group">
                            <input type="hidden" name="id_event" value="<?= $donnees['id']?>">
                            <input type="text" name="nom" class="form-control" placeholder="Nom *" required/>
                        </div>
                        <div class="form-group">
                            <input type="text" name="prenom" class="form-control" placeholder="Prenom *" required/>
                        </div>
                        <div class="form-group">
                            <input type="email" name="mail" class="form-control" placeholder="Email *" required/>
                        </div>
                    </div>
                </div>
                <div class="form-group d-flex justify-content-center align-items-center">
                    <button type="submit" class="btn btn-primary">Rejoindre L'&Eacute;vènement</button>
                </div>
            </div>
        </form>
    </div>


            </div>
        </div>
    </div>
</div>