// var html = document.querySelector("renderContainer");
// var text = document.querySelectorAll("renderContainer");
// // console.log(html);
// // console.log(text);
// var mesListes = document.getElementsByClassName("z");
// // console.log(mesListes)
// var resulter = 0
// for (var i = 0; i < mesListes.length; i++) {
//     resulter += parseInt (mesListes[i].innerHTML);
//     mesListes[1].style.color = "gold";
//     mesListes[1].style.backgroundColor = "purple";
    
//     mesListes[1].classList.add('NewClass' + i);
//     mesListes[1].id = 'li'

// }
// console.log(resulter);

// function displayModale(id) {

//     var modale = document.querySelector(id);
//     if (modale.classList.contains('displayModale')) {
//         modale.classList.remove('displayModale');
//     } else {
//         modale.classList.add('displayModale')
//     }
// }

// var stock = 0;
// var operand = '+';

// function getNumber(int) {
//     getresulter();
//     stock = int;
// }

// function addition() {
//     operand = "+";
//     getresulter();
// }

// function soustraction() {
//     operand = "-";
//     getresulter();
// }

// function getresulter() {
//     if (operand == "+"){
//         console.log
//     } else if {
//         operand == "-"
//     }
// }

var resulter = "";
var gngngn = "";

function addNumber(elmt) {

if (elmt.value.charAt(elmt.value.length-1).match(/[0-9+\-*/]/)){
      stock = elmt.value;
      console.log(stock);
  }

}


function sync() {
    document.getElementById("number").value = resulter;
}

function getNumber(int) {
    resulter += int;
    sync();
}

function addition() {
    resulter += "+";
    sync();
}

function soustraction() {
    resulter += "-";
    sync();
}

function cancel() {
    resulter == 0;
    sync();
}

function divise() {
    resulter += "/";
    sync();
}

function multiplier() {
    resulter += "*";
    sync();
}

function point() {
    resulter += ".";
    sync();
}

function retour(){
    resulter = resulter.substring(0, resulter.length-1);
    sync();
}

function egal() {
    gngngn = eval(resulter);
    resulter = 0;
    sync();
    document.getElementById("number").value = gngngn;
}