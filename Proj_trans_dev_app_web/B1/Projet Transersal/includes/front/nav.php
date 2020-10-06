<!-- Navigation -->
<nav class="navbar navbar-expand-lg navbar-light fixed-top" id="mainNav">
    <div class="container">
        <a class="navbar-brand js-scroll-trigger" href="#page-top"><img src="assets/img/logo.png"
                style="height: 90px;width: 90px;" alt="..."></a>
        <button class="h-10 navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse"
            data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false"
            aria-label="Toggle navigation">
            Menu
            <i class="fas fa-bars"></i>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav ml-auto">
                <?php
                    if (isset($_SESSION['username'])) {
                        ?>
                        <li class="nav-item">
                            <p class="nav-link js-scroll-trigger">Bonjour, <?php echo $_SESSION['username']?></p>
                        </li>
                <?php
                    }
                
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
                            <input class=" nav-link bg-gray rounded-pill form-control form-control-sm text-dark" id="filter" type="search" onkeyup="myFunction()" placeholder="Search..">
                        </li>
                        <li class="nav-item">
                            <a class="nav-link js-scroll-trigger" href="index.php">Accueil</a>
                        </li>
                <?php
                    }
                    elseif ($file_name == 'admin.php') {
                        ?>
                        <li class="nav-item d-inline-flex">
                            <div class="container ">
                                <div class="row ">
                                    <div class=" "> 
                                        <!-- col-md-3 -->
                                        <ul class="nav nav-tabs admin-menu">
                                            <li class="nav-link js-scroll-trigger bg-dark active"><a href="#" data-target-id="home"><i class="fa fa-home fa-fw"></i> Home</a></li>
                                            <li class="nav-link js-scroll-trigger bg-dark"><a href="" data-target-id="widgets"><i class="fa fa-list-alt fa-fw"></i> Création Event</a></li>
                                            <li class="nav-link js-scroll-trigger bg-dark"><a href="" data-target-id="pages"><i class="fa fa-file-o fa-fw"></i> Pages</a></li>
                                            <li class="nav-link js-scroll-trigger bg-dark"><a href="" data-target-id="charts"><i class="fa fa-bar-chart-o fa-fw"></i> Liste Event</a></li>
                                            <li class="nav-link js-scroll-trigger bg-dark"><a href="" data-target-id="table"><i class="fa fa-table fa-fw"></i> Table</a></li>
                                        </ul>
                                    </div>

                                </div>
                            </div>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link js-scroll-trigger" href="index.php">Accueil</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link js-scroll-trigger" href="events.php">&Eacute;vènements</a>
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
                    if ($file_name != 'admin.php') {
                        ?>
                        <li class="nav-item">
                            <a class="nav-link js-scroll-trigger" href="#contact">Contact</a>
                        </li>
                <?php
                    }
                ?>

            </ul>
        </div>
    </div>
</nav>

<!-- Modal -->
<div class="modal fade" id="login" tabindex="-1" role="dialog" aria-labelledby="loginTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable" role="document">
        <div class="modal-content bg-black text-white-50">
            <div class="modal-header">
                <h5 class="modal-title" id="loginTitle">Login</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <?php
                    include 'includes/front/login.php';
                ?>
            </div>
        </div>
    </div>
</div>

<!-- Modal -->
<!-- <div class="modal fade" id="new_login" tabindex="-1" role="dialog" aria-labelledby="new_loginTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable" role="document">
        <div class="modal-content bg-black text-white-50">
            <div class="modal-header">
                <h5 class="modal-title" id="new_loginTitle">Login</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <?php
                    // include 'includes/front/nouvelidentifiant.php';
                ?>
            </div>
        </div>
    </div>
</div> -->