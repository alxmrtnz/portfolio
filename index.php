<?php include 'includes/header.php'; ?>


    <body class="homeBody">

    <div id="if-ie">
        <?php include_once(($path . "/includes/ie.php")); ?>
    </div>
    <div class="regularSite">
        <header class="homeHeader">
            <div class="container">

			<?php include_once(($path . "/includes/navbar.php")); ?>

        <div class="homeInfo">
        	<div class="homeWrapper">
            <div class="container" id="homeInfoCopy">
                <div class="homeMainInfo">
                    <h1>Alex Martinez </h1>

                    <!--<h2>location: Athens, OH     origin: Toledo, OH</h2>-->
                    <h3>web designer &amp; front-end developer</h3>

                </div>

            </div>

                <div class="homePush"></div>

	        </div><!--end .wrapper -->



            <?php
                include_once(($path . "/includes/footer-home.php"));
            ?>

            <div class="instagramz">
                <div class="overlay"></div>
                <div id="instafeed"></div>

            </div>
            <div class="backupBG"></div>


        </div>
    </div><!--end .regularSite -->


        <script src="js/jquery-1.10.1.js"></script>
        <script src="js/jquery.color-2.1.0.min.js"></script>
        <script src="js/main.js"></script>


        <script type="text/javascript" src="js/instafeed.min.js"></script>

        <script type="text/javascript">
            var userFeed = new Instafeed({
                get: 'user',
                userId: 11273458,
                limit: 50,
                accessToken: '11273458.467ede5.141317baad57438b94d19e30856aa0b7',
                template: '<div class="instagramImage"><img src="{{image}}" /></div>'
            });
            userFeed.run();
        </script>

        <script>

            var detectViewPort = function(){
                var viewportWidth = $(window).width();
                var viewportHeight = $(window).height()-90;
                var homeContentHeight = $("#homeInfoCopy").height() + $("#homeFooter").height() + 90;

                if(homeContentHeight < viewportHeight){
                    $('.homeInfo').css('height', viewportHeight);
                } else{
                    $('.homeInfo').css('height', homeContentHeight);
                }

            };

            $( document ).ready(function() {
                detectViewPort();
              $(window).resize(function() {
                  detectViewPort();

              });
            });

        </script>

    </body>
</html>