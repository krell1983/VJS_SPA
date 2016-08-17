<h1>AJAX call in Vanilla JavaScript</h1>
<div class='Code_Box'>
function<span class="Blue"> AJAX </span>(<span class="Orange">load_url</span>,<span class="Orange">html_class</span>){<br>
<div class="Tab">
<br>var <span class="Green">xhr</span>= new XMLHttpRequest();<br><br>
<div class="Tab">
<span class="Green">xhr</span>.open('GET', <span class="Orange">load_url</span>, true);<span class="Gray"> // Send Request for URL content</span><br><br>

<span class="Green">xhr</span>>.onreadystatechange= <span class="Blue">function()</span> {
    if (this.readyState! == 4) return; <span class="Gray">// readyState 4 means the request is done.</span><br>
    if (this.status !== 200) return;   <span class="Gray">// status 200 is a successful return.</span><br>
    document.querySelector(<span class="Orange">html_class</span>).innerHTML = this.responseText;<span class="Gray"> // Load file content into selected class</span> <br> 
    
};
</div><br>
<span class="Green">xhr</span>.send();<br>
</div>  
    
}<br><br>


<span class="Blue">AJAX</span>('<span class="Orange">link url</span>','<span class="Orange">html class name</span>');

</div>

<h1>Menu Control</h1>
<div class='Code_Box'>
    
    function <span class="Blue">Menu_Control</span> (<span class="Orange">CSS_selector</span>,<span class="Orange">Link</span>,<span class="Orange">Content_Class</span>){<br><br><div class="Tab">

    var <span class="Green">Menu_Links</span> = document.querySelectorAll(<span class="Orange">CSS_selector</span>);<br><br>
       


    for(<b>Menu_Links_Item</b> = 0; <b>Menu_Links_Item</b> < <span class="Green">Menu_Links</span>.length; <b>Menu_Links_Item</b>++ ){<br><br>

    <div class="Tab"><span class="Green">Menu_Links</span>[<b>Menu_Links_Item</b>].addEventListener("click", function(event){
        <span class="Gray"> // Run code on button click</span>
        <div class="Tab">
        <br>
            event.preventDefault(); <span class="Gray"> // When JS is running on cliend side prevent link from been clicked. </span> <br>
            var <span class="Green">Ajax_Link</span> = this.getAttribute("href");
            <span class="Gray"> // Get href data "page1.php", link to full page with head, menu... </span>
            <br>
           
            <span class="Green">Ajax_Link</span> = <span class="Green">Ajax_Link</span>.replace(".php",<span class="Orange">Link</span>+".php");
            <span class="Gray"> // Change link to "page1-ajax.php" - file that contains only content </span>
            <br>
                
            <br><span class="Green">AJAX</span>(<span class="Orange">Ajax_Link</span>,<span class="Orange">Content_Class</span>);
            <span class="Gray"> // Send data to ajax function </span><br>
           </div>
     });</div> 
           <br>
                     
        }<br>
<br></div>
}<br>
<span class="Gray">
// <b>1</b>: CSS Selector<br>
// <b>2</b>: Add string to link AJAX file<br>
// <b>3</b>: HTML CSS Class to put AJAX call content<br>
    </span>

<span class="Blue">Menu_Control</span> ("<span class="Orange">.Main_Menu a</span>","<span class="Orange">-ajax</span>","<span class="Orange">.Page</span>");

</div>