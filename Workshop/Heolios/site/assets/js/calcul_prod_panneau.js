
function calcul() {
    var address = document.getElementById('address').value;

    var url_adress ="https://developer.nrel.gov/api/solar/data_query/v1.json?api_key=DEMO_KEY&address=" + address;


    $.get(url_adress, function(data){
        var url_api = "https://developer.nrel.gov/api/pvwatts/v6.json?api_key=DEMO_KEY&system_capacity=1&azimuth=180&tilt=20&array_type=0&module_type=0&losses=14&file_id=";
        // console.log("donnée api : ", data );
        var id_address = data.outputs.intl.id;
        var url_api = url_api + id_address;
        
        $.get(url_api, function(data){
            // console.log("donnée api : ", data );
            var prod_esti = Math.floor(data.outputs.ac_annual);
            document.getElementById("resultat_panneau").innerHTML="Votre production annuelle en installant des panneaux solaire sur votre toit est de : " + String(prod_esti) + " kWh";
        })
        .fail(function(){
            alert('error');
        })
    
    })
    .fail(function(){
        alert('error');
    })

}
