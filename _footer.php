
    </div> <!-- End WRAPPER Div -->
    
    <footer>
        <!-- Insert Media Drink link -->
    </footer>
    
    <!-- Scripts loaded after DOM loads -->
    <script>
        // Pass comma separated list of strings with relative path to scripts
        // as parameters to head.ready()
        
            head.js("http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js", "http://use.typekit.com/fxk1tpj.js",
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