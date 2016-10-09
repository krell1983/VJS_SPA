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

    }<br><br>


    <span class="Blue">AJAX</span>('<span class="Orange">link url</span>','<span class="Orange">html class name</span>');

</div>
