<HTML>
	<head>
		<title>Vote Voice</title>
		<?php require "core/includes/head.php" ?>
		<link rel="stylesheet" href="core/css/index.css">
</head>
	<body>
	
	
	
	<div id="if-ie">
    
    	<div>
        
        
            
            <h1>
            	Vote VOICE April 18th
            </h1>
            
            <p> 
            	click to download one of these browsers to best view our site
            </p>
            
            
            	<div id="browser-icons">
                
                    <a class="browser-photo" target="_new" href="https://www.google.com/chrome">
                         <img src="core/images/browser_images/chrome1.png" alt="Google Chrome" width="100" height="100">
                    </a>
                    
                    <a class="browser-photo" target="_new" href="http://www.mozilla.org/en-US/firefox/new/">
                        <img src="core/images/browser_images/firefox1.png" alt="Mozilla Firefox" width="100" height="100">
                    </a>
                    
                    <a class="browser-photo" target="_new" href="http://www.opera.com/download/">
                        <img src="core/images/browser_images/opera1.png" alt="Opera" width="100" height="100">
                    </a>
                    
                    <a class="browser-photo" target="_new" href="http://www.apple.com/safari/">
                        <img src="core/images/browser_images/safari1.png" alt="Safari" width="100" height="113">
                    </a>
                    
                </div>
        
        </div>
    
    </div>

	
	
	
	
	<div id="entire_site">
	
	
        
        <div id="header">
        
            <?php require "core/includes/header.php" ?>
            
        </div>
        
        
        
        
        <div id="movingBG">
       
        	
        
	        <div id="contentWrapper"> <!-- Begin Content Wrapper -->
	        
	            <p>Voice is a party running for the Ohio University Student Senate</p>
	            <p id="sub">(Check out who we are and what we stand for above)</p>
	      
	        
	        </div> <!-- End ContentWrapper -->
	        
	        <div id="clouds">
				<div class="cloud x1"></div>
				<!-- Time for multiple clouds to dance around -->
				<div class="cloud x2"></div>
				<div class="cloud x3"></div>
				<div class="cloud x4"></div>
				<div class="cloud x5"></div>
			</div>
        </div> <!-- end movingBG -->
     
        
        <div id="illustration">
        
        	<div id="buildings">
            
            	<img src="core/images/convo.svg" height="205px" width="279px" id="convo">
            	
            	<img src="core/images/cutler.svg" height="155px" width="138px" id="cutler">
            	
            	<img src="core/images/baker.svg" height="110px" width="230px" id="baker">
            	
            	<img src="core/images/newbaker.svg" height="228px" width="400px" id="newbaker">
            	
            	
            
            </div>
        
        	<!-- <img src="core/images/hills.png" height="326" width="2685" alt="Hills of Athens">
        
        	<object data="core/images/landscape.svg" type="image/svg+xml" class="chart" id="hills">
                    <a href="core/images/landscape.svg">
                        <!--[if lte IE 8 ]--
                            <img src="core/images/voiceLogo.png" alt="Vote Voice">
                        <!--[endif]--
                    </a>
            </object>
            
            -->
            
                    
        </div> <!-- End 'illustation' -->
        
        
        
        <div id="footer">
        
            <?php require "core/includes/footer.php" ?>
            
        </div> <!-- Close footer -->
        
        <script src="core/javascript/ios-orientationchange-fix.js"></script>
        
        
	</div><!-- close "entiresite" -->
	</body>
    <?php require "core/includes/scripts.php" ?>
    <script type="text/javascript">
            function getInternetExplorerVersion()
    // Returns the version of Internet Explorer or a -1
    // (indicating the use of another browser).
    {
      var rv = -1; // Return value assumes failure.
      if (navigator.appName == 'Microsoft Internet Explorer')
      {
        var ua = navigator.userAgent;
        var re  = new RegExp("MSIE ([0-9]{1,}[\.0-9]{0,})");
        if (re.exec(ua) != null)
          rv = parseFloat( RegExp.$1 );
      }
      return rv;
    }
        $(document).ready(function(){ 
            $('#if-ie').hide();
            if(getInternetExplorerVersion() != -1){
            $('#entire_site').hide();
                $('#if-ie').show();
             
            }
        });
        
    </script>
</HTML>