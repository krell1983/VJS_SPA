function AJAX(load_url, location) {
    document.querySelector(location).innerHTML = ''
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
            var Ajax_Link = this.getAttribute("href");
            Ajax_Link = Ajax_Link.replace(".php", Link + ".php");
            document.location.hash = Ajax_Link;
            AJAX(Ajax_Link, Content_Class);
        });
    }
}

var Content_Class_Selector = ".Page";
var Link_Sufix = "-content";
var Menu_Links_Selector = ".Main_Menu a";
var Current_Url = document.location.hash;

Menu_Controll(Menu_Links_Selector, Link_Sufix, Content_Class_Selector);

if (Current_Url !== '') {
    Current_Url = Current_Url.slice(1);
    AJAX(Current_Url, Content_Class_Selector);
}
