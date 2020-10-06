<!-- Footer -->
<footer class="bg-black small text-center text-white-50">
    <div class="flex-column">
        
        <div class="btn-group btn-group-sm" role="group" aria-label="Basic example">
            <!-- Button trigger modal -->
            <button type="button" class="btn btn-dark" data-toggle="modal" data-target="#CGU">
            CGU
            </button>
            <!-- Button trigger modal -->
            <button type="button" class="btn btn-dark" data-toggle="modal" data-target="#ML">
            Mentions Légales
            </button>
        </div>
        
        <div>Copyright &copy; BDE SWIPE 2019</div>

    </div>

    <!-- Modal -->
    <div class="modal fade" id="CGU" tabindex="-1" role="dialog" aria-labelledby="CGUTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-scrollable" role="document">
            <div class="modal-content bg-black">
                <div class="modal-header">
                    <h5 class="modal-title" id="CGUTitle">Conditions Générales d'Utilisation</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <?php
                        include 'assets/txt/CGU.txt';
                    ?>
                </div>
            </div>
        </div>
    </div>
    
    <!-- Modal -->
    <div class="modal fade" id="ML" tabindex="-1" role="dialog" aria-labelledby="MLTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-scrollable" role="document">
            <div class="modal-content bg-black">
                <div class="modal-header">
                    <h5 class="modal-title" id="MLTitle">Mentions Légales</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <?php
                        include 'assets/txt/Mentions_légales.txt';
                    ?>
                </div>
            </div>
        </div>
    </div>
    
</footer>