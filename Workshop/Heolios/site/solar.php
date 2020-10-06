<!DOCTYPE html>

<html lang="fr">



<head>

    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Heolios</title>

    <link rel="stylesheet" href="assets/css/main.css">

    <link rel="shortcut icon" type="image/png" href="assets/images/logo.svg">

    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Varela+Round">

    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <script defer src="assets/js/light_mode.js"></script>

    <script defer src="assets/js/page.js"></script>

    <script defer src="assets/js/calcul_prod_panneau.js"></script>

    <script defer src="assets/js/calcul_cons.js"></script>

</head>





<body class="dark">



    <?php include "includes/front/navbar.php" ?>





    <main>

        <div class="section">

            <div class="sub-section">

                <div class="form-container">

                    <div>

                        <h3>Consommation annuelle en kwh</h3>

                        <input id="POST-kw" type="text" name="kw" placeholder="" required>

                    </div>

                    <div>

                        <h3>Nombre de réfrigérateur :</h3>

                        <input id="POST-frigo" type="text" name="frigo" placeholder="" required>

                    </div>

                    <div>

                        <h3>Nombre de lave-vaisselle :</h3>

                        <input id="POST-lv" type="text" name="lv" placeholder="" required>

                    </div>

                    <div>

                        <h3>Nombre de four :</h3>

                        <input id="POST-four" type="text" name="four" placeholder="" required>

                    </div>

                    <div>

                        <h3>Nombre de téléviseur :</h3>

                        <input id="POST-tele" type="text" name="tele" placeholder="" required>

                    </div>

                    <div>

                        <h3>Nombre d'ordinateur :</h3>

                        <input id="POST-ordi" type="text" name="ordi" placeholder="" required>

                    </div>

                    <div>

                        <h3>Nombre de sèche linge:</h3>

                        <input id="POST-seche" type="text" name="seche" placeholder="" required>

                    </div>

                    <div>

                        <button class="" type="submit" id='submit' onclick=calcul_cons()>Je valide</button>

                    </div>

                    <div>

                        <img src='' id='photo_conso'></img>

                        <span id="resultat"> </span>

                    </div>

                    <div id="tableau">
                    <table id="tableau_res">
                        <tr>
                            <th>Matériel</th>
                            <th>Consommation (kWh)</th>
                        </tr>
                        <tr>
                            <td id="objet-1">Réfrigirateur(s)</td>
                            <td  id="cons-1"></td>
                        </tr>
                        <tr>
                            <td  id="objet-2">Lave-vaisselle(s)</td>
                            <td id="cons-2"></td>
                        </tr>
                        <tr>
                            <td  id="objet-3">Four(s)</td>
                            <td id="cons-3"></td>
                        </tr>
                        <tr>
                            <td  id="objet-4">Téléviseur(s)</td>
                            <td id="cons-4"></td>
                        </tr>
                        <tr>
                            <td  id="objet-5">Ordinateur(s)</td>
                            <td id="cons-5"></td>
                        </tr>
                        <tr>
                            <td  id="objet-6">Sèche-linge(s)</td>
                            <td id="cons-6"></td>
                        </tr>
                        <tr>
                            <th>TOTAL</th>
                            <th id="total"></th>
                        </tr>
                        <tr>
                            <td  id="espace"></td>
                        </tr>
                        <tr>
                            <th  id="">%/conso annuelle</th>
                            <th id="pourcentage"></th>
                        </tr>


                    </table>
                    </div>

                </div>



            </div>

            

        </div>



        <div class="section">

            <div class="sub-section">

                <div class="form-container">

                    <div id="conso">

                        <h3>Entrez votre adresse afin d'estimer votre production d'éléctricité solaire :</h3>
                        <div>
                            <input id="address" type="text" name="kw" placeholder="N°, Rue, Code Postal" required>

                            <button onclick=calcul()>Estimer ma production</button>
                        </div>

                        <span id="resultat_panneau"> </span>

                    </div>

                </div>

            </div>

        </div>



    </main>





</body>

</html>