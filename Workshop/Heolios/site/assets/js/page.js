function show(id) {

    element = document.getElementById(id);
    if (element.style.display === "flex") {
        element.style.display = "";
    } else if (element.style.display === "") {
        element.style.display = "flex";
    }
    current_page = String(element.getElementsByClassName("current_page")[0].innerHTML);
    current_page = " 1 / " + String(element.children.length - 1) + " ";
    element.getElementsByClassName("current_page")[0].innerHTML = current_page;
    element.getElementsByClassName(id + "_" + current_page[1])[0].style.display = "block";
    disp_button(id);
}

function change_page(id, direction) {
    element = document.getElementById(id);
    current_page = element.getElementsByClassName("current_page")[0].innerHTML;
    page_element = element.getElementsByClassName(id + "_" + String(current_page[1]))[0];


    if (direction == "add") {
        page_element.style.display = "none";
        next_page.style.display = "block";
        current_page = " " + String(parseInt(current_page[1]) + 1) + " / " + String(element.children.length - 1);
        element.getElementsByClassName("current_page")[0].innerHTML = current_page;
    }

    else if (direction == "sub") {
        page_element.style.display = "none";
        previous_page.style.display = "block";
        current_page = " " + String(parseInt(current_page[1]) - 1) + " / " + String(element.children.length - 1);
        element.getElementsByClassName("current_page")[0].innerHTML = current_page;
    }

    disp_button(id);
}

function disp_button(id) {
    element = document.getElementById(id);
    if (current_page[1] != 1) {
        element.getElementsByClassName("prev")[0].style.visibility = "visible";
        previous_page = element.getElementsByClassName(id + "_" + String(parseInt(current_page[1]) - 1))[0];
    }

    if (current_page[1] != (element.children.length - 1)) {
        element.getElementsByClassName("next")[0].style.visibility = "visible";
        next_page = element.getElementsByClassName(id + "_" + String(parseInt(current_page[1]) + 1))[0];
    }

    if (current_page[1] == 1) {
        element.getElementsByClassName("prev")[0].style.visibility = "hidden";
        previous_page = element.getElementsByClassName(id + "_" + String(current_page[1]))[0];
    }

    if (current_page[1] == (element.children.length - 1)) {
        element.getElementsByClassName("next")[0].style.visibility = "hidden";
        next_page = element.getElementsByClassName(id + "_" + String(current_page[1]))[0];
    }

    return (previous_page, next_page);
}


// select = document.querySelectorAll("#logo-circle path");

// select.forEach(element => {
//     path = element.getTotalLength();
//     element.style.strokeDasharray = path;
//     element.style.strokeDashoffset = path;
// });
