<h1>AJAX call in Vanilla JavaScript</h1>
<div class='Code_Box'>
<span class="Blue">function</span> AJAX (<span class="Orange">load_url</span>,<span class="Orange">html_class</span>){<br>
<p><br>var xhr= new XMLHttpRequest();<br><br>

xhr.open('GET', <span class="Orange">load_url</span>, true);<br><br>

<p>
xhr.onreadystatechange= <span class="Blue">function()</span> {<br>
    if (this.readyState! == 4) return; <span class="Gray">//readyState 4 means the request is done.</span><br>
    if (this.status !== 200) return;   <span class="Gray">// status 200 is a successful return.</span><br>
    document.querySelector(<span class="Orange">html_class</span>).innerHTML = this.responseText;<span class="Gray"> //Load file content into selected class</span> <br> 
    
};<br>
</p><br>
xhr.send();<br>
     <br>   
     </p>
}<br><br>


AJAX('<span class="Orange">link url</span>','<span class="Orange">html class name</span>');

</div>