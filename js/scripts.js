function AJAX(load_url, location) {
//console.log("AJAX load_url:"+load_url+' location:'+location);
    var xhr = new XMLHttpRequest();
    xhr.open('GET', load_url, true);
    xhr.onreadystatechange = function () {
        if (this.readyState !== 4)
            return;
        if (this.status !== 200)
            return;
        document.querySelector(location).innerHTML = this.responseText;

    };
    xhr.send();
}

function Menu_Controll(CSS_selector, Link, Content_Class) {
    var Menu_Links = document.querySelectorAll(CSS_selector);
    for (Menu_Links_Item = 0; Menu_Links_Item < Menu_Links.length; Menu_Links_Item++) {

        Menu_Links[Menu_Links_Item].addEventListener("click", function (event) {
            event.preventDefault();
            var Ajax_Link = this.getAttribute("href");;
            Ajax_Link = Ajax_Link.replace(".php", Link + ".php");       
            AJAX(Ajax_Link, Content_Class);
        });
    }
}

// Var 1: CSS Selector.
// Var 2: Add string to link AJAX file.
// Var 3: HTML CSS Class to put AJAX call content.
Menu_Controll(".Main_Menu a", "-content", ".Page");
