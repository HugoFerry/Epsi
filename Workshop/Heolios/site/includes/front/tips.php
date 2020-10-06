<?php require 'connect.php' ?>

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
</html>