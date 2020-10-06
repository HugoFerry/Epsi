respMenu();
resizer();

window.onresize = function() {
    resizer();
}

function resizer() {

    var windowHeight = window.innerHeight,
        headerHeight = document.querySelector('header').scrollHeight,
        footerHeight = document.querySelector('footer').scrollHeight,
        mainHeight = windowHeight - (headerHeight + footerHeight);

    document.querySelector('main').style.minHeight = mainHeight + 'px';
    console.log(mainHeight);
}

function respMenu() {
    var windowWidth = window.innerWidth;

    if (windowWidth >= 850) {
        document.querySelector('nav').style.display = 'flex';
        document.querySelector('#respMenu').style.display = 'none';
        document.querySelector('footer').style.display = 'row';
        document.querySelector('#burger').style.display = 'flex';
    } else {
        document.querySelector('nav').style.display = 'none';
        document.querySelector('footer').style.display = 'column';
        document.querySelector('#burger').style.display = 'none';
    }
}

function displayMenu(mode) {
    var menu = document.querySelector('#respMenu');
    if (mode === 'show') {

        menu.classList.add('displayMenu');

    } else if (mode === 'hide') {

        menu.classList.remove('displayMenu');

    }
}





























