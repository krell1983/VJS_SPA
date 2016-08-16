function AJAX (load_url,location){
//console.log("AJAX load_url:"+load_url+' location:'+location);
var xhr= new XMLHttpRequest();

xhr.open('GET', load_url, true);

xhr.onreadystatechange= function() {
    if (this.readyState!==4) return;
    if (this.status!==200) return;
    document.querySelector(location).innerHTML = this.responseText;
    
};
xhr.send();
        
}

function Menu_Ajax (CSS_selector,Link,Content_Class){

        var Menu_Links = document.querySelectorAll(CSS_selector);
        //console.log('CSS_selector:"'+CSS_selector+'"');


        for(Menu_Links_Item = 0; Menu_Links_Item < Menu_Links.length; Menu_Links_Item++ ){

            Menu_Links[Menu_Links_Item].addEventListener("click", function(event){
            event.preventDefault();
            var Data = this.getAttribute("href");
            //console.log('Data['+Data+']');
            Data = Data.replace(".php",Link+".php");
            //console.log('Data New['+Data+']');        
            AJAX(Data,Content_Class);
            });
                     
        }

}

// Var 1: CSS Selector.
// Var 2: Add string to link AJAX file.
// Var 3: HTML CSS Class to put AJAX call content.
Menu_Ajax (".Main_Menu a","-ajax",".Page");