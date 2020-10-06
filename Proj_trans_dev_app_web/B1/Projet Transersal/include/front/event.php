<!-- Event One -->
<div class="row">
    <div class="col-md-7">
        <a href="#">
            <?php
                $img_path = 'assets/img/' . $donnees['event_image'];
            
                echo '<img class="img-fluid rounded mb-3 mb-md-0 shadow" src="' . $img_path . '" alt="">';
            ?>
        </a>
    </div>
    <div class="col-md-5 bg-gray rounded shadow">
        <h3 class="mt-3"><?php echo $donnees['event_name']; ?></h3>
        <h4 class="mt-3"><?php echo $donnees['event_date']; ?></h4>
        <p><?php echo $donnees['event_description']; ?></p>
        <a class="btn btn-primary" href="#">Join Event</a>
    </div>
</div>

<hr>