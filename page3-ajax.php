<h1>Vanilla JavaScript selectors</h1>

<h2>Single element selector</h2>
<div class="Code_Box">

document.querySelector("<span class="Orange">.html_class_name</span>").style.backgroundColor = "red"; // You can use CSS selectors here.   
    
</div>

<h2>Selecting multiple elements is little bit harder. Example of selecting all elements in Menu:</h2>
<div class="Code_Box">

var Menu_Links = document.querySelectorAll(CSS_selector);

for(Menu_Links_Item = 0; Menu_Links_Item < Menu_Links.length; Menu_Links_Item++ ){

Menu_Links[Menu_Links_Item].addEventListener("click", function(event){
event.preventDefault();
var Ajax_Link = this.getAttribute("href");
Ajax_Link = Ajax_Link.replace(".php",Link+".php");
AJAX(Ajax_Link,Content_Class);
});
    
</div>