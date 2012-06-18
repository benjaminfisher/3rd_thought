
    </div> <!-- End WRAPPER Div -->
    
    <footer class="global">
        <div class="wrapper">
        	<ul class="contact">
        		<li><a href="mailto:maggie@thirdthought.com">maggie@thirdthought.com</a></li>
        		<li><a href="tel:15037404574">503-740-4574</a></li>
        	</ul>
        	
        	<p class="social uppercase">Join the conversation! <a href="#">RSS</a> | <a href="twitter.com">Twitter</a></p>
        	
        	<a class="credit_link" title="Media Drink" href="http://mediadrink.com">
                <img alt="site design by media drink" src="http://media.mediadrink.com/media_drink_wave_grey.png" />
            </a>
        </div>
    </footer>
    
    <!-- Scripts loaded after DOM loads -->
    <script>
        // Pass comma separated list of strings with relative path to scripts
        // as parameters to head.ready()
        
            head.ready("http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js", "http://use.typekit.com/fxk1tpj.js",
                function(){
                    // Load jQuery locally if CDN fails
                    if(!$){ document.write( unescape("%3Cscript src='js/lib/jquery/jquery-1.7.1.min.js' %3E%3C/script%3E") ) };
                    
                    // Typekit loader
                    try{Typekit.load();}catch(e){};
                }
            );
            
            head.js(<?php if(!empty($footer_scripts)){ echo $footer_scripts; } ?>);
    </script>
</body>
</html>