var days = [
    'Dimanche',
    'Lundi',
    'Mardi',
    'Mercredi',
    'Jeudi',
    'Vendredi',
    'Samedi'
];

var months = [
    'Janvier',
    'Février',
    'Mars',
    'Avril',
    'Mai',
    'Juin',
    'Juillet',
    'Août',
    'Septembre',
    'Octobre',
    'Novembre',
    'Décembre'
];

var svg = document.querySelectorAll('#timers svg');
    for (var i = 0; i < svg.length; i++) {
        svg[i].addEventListener('click', function(ev){
            
            for (var j = 0; j < svg.length; j++) {
                svg[j].classList.remove('selectedMode');
            }

            var target = ev.currentTarget;
            target.classList.add('selectedMode');
            switch (target.id){
                case 'chrono': chrono(); break;
                case 'time': timer(); break;
            }
    });
}


function setDate() {

    var d = new Date(),
        hours = formatRange(d.getHours()),
        minutes = formatRange(d.getMinutes()),
        seconds = formatRange(d.getSeconds()),
        time = hours + ' : ' + minutes + ' : ' + seconds;

    var day = days[parseInt(d.getDay())],
        month = months[parseInt(d.getMonth())],
        date = d.getDate(),
        dateString = day + ' ' + date + ' ' + month;

    document.querySelector('#date').innerHTML = dateString;
    document.querySelector('#screen').innerHTML = time;
}

function formatRange(value) {

    var addChar = '0' + value,
        slice = addChar.slice(-2);
    return slice;
}

setDate();

setInterval(
    function(){ setDate(); },
    1000
);