<!-- Signup Section -->
<section id="signup" class="signup-section">
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-lg-8 mx-auto text-center">

                <i class="far fa-paper-plane fa-2x mb-2 text-white"></i>
                <?php
                    $to_newsletter = $file_name . '#signup';
                    if (!isset($_POST['mail'])) {
                        ?>
                        <h2 class="text-white mb-5">Subscribe to NewsLetter!</h2>

                        <?php echo '<form method="POST" action="' . $to_newsletter . '" class="form-inline d-flex">'; ?>
                            <input type="email" name="mail" class="form-control flex-fill mr-0 mr-sm-2 mb-3 mb-sm-0" id="inputEmail" placeholder="Enter email address..." required>
                            <button type="submit" class="btn btn-primary mx-auto">Subscribe</button>
                        </form>
                <?php
                    }
                    else {
                        ?>
                        <h2 class="text-white mb-5">Successfully Subscribed to NewsLetter!</h2>
                <?php
                        $mail = $_POST['mail'];

                        $sql = "INSERT INTO newsletter (email) VALUES ('$mail')";
                        
                        $db->exec($sql);
                    }
                ?>

            </div>
        </div>
    </div>
</section>