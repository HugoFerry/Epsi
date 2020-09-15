var result = 774

document.getElementById("result").placeholder = result;

function getNumber(int) {

}

function addition() {
    result += "+"
}

function soustraction() {
    result += "-"
}

function cancel() {
    result == 0
}

function divise() {
    result += "/"
}

function multiplier() {
    result += "*"
}

function retour(){
    result = result.substring(0, result.length-1);
}

function egal() {
    var result = eval(result)
    console.log(result)
}