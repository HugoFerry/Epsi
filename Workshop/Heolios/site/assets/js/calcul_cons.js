const cons_moyenne = 4625;



function calcul_cons(){



    var cons_annuelle = document.getElementById("POST-kw").value;

    var nbr_frigo = parseInt(document.getElementById("POST-frigo").value);

    var nbr_lv = parseInt(document.getElementById("POST-lv").value);

    var nbr_four = parseInt(document.getElementById("POST-four").value);

    var nbr_tele = parseInt(document.getElementById("POST-tele").value);

    var nbr_ordi = parseInt(document.getElementById("POST-ordi").value);

    var nbr_seche = parseInt(document.getElementById("POST-seche").value);



    var cons_frigo = nbr_frigo * 201;

    var cons_lv = nbr_lv * 288;

    var cons_four = nbr_four * 162;

    var cons_tele = nbr_tele * 90;

    var cons_ordi = nbr_ordi * 300;

    var cons_seche = nbr_seche * 300;

    var cons_total = cons_four + cons_lv + cons_frigo + cons_ordi + cons_seche + cons_tele;


    document.getElementById("tableau_res").style.display = "block"
    document.getElementById("cons-1").innerHTML = cons_frigo;
    document.getElementById("cons-2").innerHTML = cons_lv;
    document.getElementById("cons-3").innerHTML = cons_four;
    document.getElementById("cons-4").innerHTML = cons_tele;
    document.getElementById("cons-5").innerHTML = cons_ordi;
    document.getElementById("cons-6").innerHTML = cons_seche;
    document.getElementById("total").innerHTML = cons_total;

    var pourcent = parseInt((cons_total/cons_annuelle)*100);
    
    document.getElementById("pourcentage").innerHTML = pourcent + "%";

    type_conso(cons_annuelle);

    





}



function type_conso(cons_annuelle) {



    if(cons_annuelle <= cons_moyenne*0.90){

        msg = "Votre note énergétique est A. Votre consommation est inférieur d'au moins 10% par rapport à un foyer moyen. Félicitations, vous êtes un modèle !";



        chemin_photo = "/assets/images/photo_a.png";

    }

    else if(cons_moyenne*0.90 < cons_annuelle && cons_annuelle <= cons_moyenne){

        msg = "Votre note énergétique est B. Votre consommation est comprise entre -10% et la consommation normale d'un foyer moyen. Vous faites parti des meilleurs élèves ! Continuez ainsi.";

        chemin_photo = "/assets/images/photo_b.png";

    }

    else if(cons_moyenne < cons_annuelle && cons_annuelle <= cons_moyenne*1.1){

        msg = "Votre note énergétique est C. Votre consommation est comprise entre la consommation normale d'un foyer moyen et +10% de la consommation moyenne. Avec quelques petits conseils, vous deviendrez un exemple !";

        chemin_photo = "/assets/images/photo_c.png";

    }

    else if(cons_moyenne*1.1 < cons_annuelle && cons_annuelle <= cons_moyenne*1.2){

        msg = "Votre note énergétique est D. Votre consommation est comprise entre +10% et +20% de la consommation d'un foyer moyen. Vous consommez malheureusement trop par rapport à la moyenne.";

        chemin_photo = "/assets/images/photo_d.png"

    }

    else if(cons_moyenne*1.2 < cons_annuelle){

        msg = "Votre note énergétique est E. Votre consommation est supérieur de 20% à la consommation d'un foyer moyen. Vous représentez un ménage beaucoup trop énergivore. Il est temps de changer ses habitudes !";

        chemin_photo = "/assets/images/photo_e.png"

    }

    else{

        var error = true;

    }

    document.getElementById("resultat").innerHTML = msg;

    document.getElementById("photo_conso").setAttribute("src", chemin_photo);

    // console.log(error, msg);

}