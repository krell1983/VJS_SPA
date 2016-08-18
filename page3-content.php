<h1>Vanilla JavaScript selectors</h1>

<h2>Single HTML element selector</h2>
<div class="Code_Box">

    document.querySelector("<span class="Orange">.html_class_name</span>").style.backgroundColor = "red";<span class="Gray"> // You can use CSS selectors here. </span>  

</div>

<h2>Selecting multiple HTML elements</h2>
<div class="Code_Box">


    var <span class="Blue">Html_Items</span> = document.querySelectorAll("<span class="Orange">.html_class a</span>"); <span class="Gray">// You can use CSS selectors here. 
    </span><br><br>
    for (<span class="Green">Item</span> = 0; <span class="Green">Item</span> < <span class="Blue">Html_Items</span>.length; <span class="Green">Item</span>++) {
    <span class="Gray">// Will run code for each "a" item in ".html_class"</span>
    <br>
    <div class="Tab">
        <span class="Blue">Html_Items</span>[<span class="Green">Item</span>].style.backgroundColor = "red";<br>
        }<br>
    </div>

</div>
