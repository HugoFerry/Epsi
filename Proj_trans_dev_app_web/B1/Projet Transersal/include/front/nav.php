<!-- Navigation -->
<nav class="navbar navbar-expand-lg navbar-light fixed-top" id="mainNav">
    <div class="container">
        <a class="navbar-brand js-scroll-trigger" href="#page-top"><img src="assets/img/logo.png"
                style="height: 100px;width: 100px;" alt="..."></a>
        <button class="h-10 navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse"
            data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false"
            aria-label="Toggle navigation">
            Menu
            <i class="fas fa-bars"></i>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav ml-auto">
                <?php
                    if ($file_name == 'index.php') {
                        ?>
                    <li class="nav-item">
                        <a class="nav-link js-scroll-trigger" href="events.php">&Eacute;vènements</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link js-scroll-trigger" data-toggle="modal" data-target="#login">Login</a>
                    </li>

                    

                <?php
                    }
                    elseif ($file_name == 'events.php') {
                        ?>
                    <li class="nav-item">
                        <a class="nav-link js-scroll-trigger" href="index.php">Accueil</a>
                    </li>
                <?php
                    }
                ?>
                
                <?php
                    if ($file_name == 'index.php') {
                        ?>
                        <li class="nav-item">
                            <a class="nav-link js-scroll-trigger" href="#signup">NewsLetter</a>
                        </li>
                <?php
                    }
                ?>
                <li class="nav-item">
                    <a class="nav-link js-scroll-trigger" href="#contact">Contact</a>
                </li>
            </ul>
        </div>
    </div>
</nav>

<!-- Modal -->
<div class="modal fade" id="login" tabindex="-1" role="dialog" aria-labelledby="loginTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable" role="document">
        <div class="modal-content bg-black">
            <div class="modal-header">
                <h5 class="modal-title" id="loginTitle">Login</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <?php
                    include 'login.php';
                ?>
            </div>
        </div>
    </div>
</div>