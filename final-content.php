<h1>AJAX call in Vanilla JavaScript</h1>
<div class='Code_Box'>
    function<span class="Blue"> AJAX </span>(<span class="Orange">load_url</span>,<span class="Orange">html_class</span>){<br>
    <div class="Tab">
        <br>var <span class="Green">xhr</span>= new XMLHttpRequest();<br><br>
        <div class="Tab">
            <span class="Green">xhr</span>.open('GET', <span class="Orange">load_url</span>, true);<span class="Gray"> // Send Request for URL content</span><br><br>

            <span class="Green">xhr</span>.onreadystatechange= <span class="Blue">function()</span> {<br><div class="Tab">
                if (this.readyState !== 4) return; <span class="Gray">// readyState 4 means the request is done.</span><br>
                if (this.status !== 200) return;   <span class="Gray">// status 200 is a successful return.</span><br>
                document.querySelector(<span class="Orange">html_class</span>).innerHTML = this.responseText;<span class="Gray"> // Load file content into selected class</span> </div>

            };
        </div><br>
        <span class="Green">xhr</span>.send();<br>
    </div>
    }
</div>

<h1>Menu Control</h1>
<div class='Code_Box'>

    function <span class="Blue">Menu_Control</span> (<span class="Orange">CSS_selector</span>,<span class="Orange">Link</span>,<span class="Orange">Content_Class</span>){<br><br><div class="Tab">

        var <span class="Green">Menu_Links</span> = document.querySelectorAll(<span class="Orange">CSS_selector</span>);<br><br>

        for(<b>Menu_Links_Item</b> = 0; <b>Menu_Links_Item</b> < <span class="Green">Menu_Links</span>.length; <b>Menu_Links_Item</b>++ ){<br><br>

        <div class="Tab"><span class="Green">Menu_Links</span>[<b>Menu_Links_Item</b>].addEventListener("click", function(event){
            <span class="Gray"> // Add click EventListener to "a" item in menu</span>
            <div class="Tab">
                <br>
                event.preventDefault(); <span class="Gray"> // When JS is running on cliend side prevent link from been clicked. </span> <br>
                var <span class="Green">Ajax_Link</span> = this.getAttribute("href");
                <span class="Gray"> // Get href data "page1.php", link to full page with head, menu... </span>
                <br>

                <span class="Green">Ajax_Link</span> = <span class="Green">Ajax_Link</span>.replace(".php",<span class="Orange">Link</span>+".php");
                <span class="Gray"> // Change link to "page1-content.php" - file that contains only content </span>
                <br>
                document.location.hash = <span class="Green">Ajax_Link</span>; <span class="Gray"> //Simple Routing </span>
                <br><span class="Blue">AJAX</span>(<span class="Orange">Ajax_Link</span>,<span class="Orange"> Content_Class</span>);

                <span class="Gray"> // Send data to ajax function </span><br>
            </div>
            });</div>
        }<br>
       </div>
    }<br><br>

    var <span class="Green">Content_Class_Selector</span> = ".Page"; <span class="Gray">// CSS Selector of content container<br></span>
    var <span class="Green">Link_Sufix</span> = "-content"; <span class="Gray">// String that will be added to AJAX call<br></span>
    var <span class="Green">Menu_Links_Selector</span> = ".Main_Menu a"; <span class="Gray">// Menu items Selector<br></span>
    <span class="Blue">Menu_Control</span> ("<span class="Green">Content_Class_Selector</span>","<span class="Green">Link_Sufix</span>","<span class="Green">Menu_Links_Selector</span>");

</div>

<h1>Routing</h1>
<div class='Code_Box'>
    var <span class="Green">Current_Url</span> = document.location.hash; <span class="Gray"></span><span class="Gray"> // Gets current # data from address bar</span><br><br> 
    if (document.location.hash !== "") {<br>
    <div class="Tab"><span class="Green">Current_Url</span> = <span class="Green">Current_Url</span>.slice(1);<span class="Gray"> // Removes # from url for correct ajax call</span><br>
    <span class="Blue">AJAX</span>(<span class="Green">Current_Url</span>,
    <span class="Green">Content_Class_Selector</span>);
    <span class="Gray">// Gets url content</span><br>
    </div>
    }
</div>