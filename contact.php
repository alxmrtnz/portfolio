<?php include 'includes/header.php'; ?>

	<body>
        <div id="if-ie">
            <?php include_once(($path . "/includes/ie.php")); ?>
        </div>
        <div class="regularSite">
        <div class="wrapper">
        <header class="smallHeader">
            <div class="container">
                <?php
                	$activePage = "/contact";
                	include_once(($path . "/includes/navbar.php"));
                ?>

        <div class="contactInfo">
            <div class="container" style="overflow: hidden;">
             <div class="leftSidebar contact">

                <div id="instafeed"></div>

             </div>

                <div class="mainCopy connect">
                    <h1>Let<span>'</span>s Connect<span>.</span></h1>
                    <p id="getAhold" >You can get a hold of me at</p>
                    <a class="email" href="mailto:hello@alxmrtnz.com?Subject=Hey%20Alex!"  target="_top">hello@alxmrtnz.com</a>
                    <p style="margin: 50px 0px 5px 0px;">Or connect with me on</p>
                    <ul class="socialList">
                        <li>
                            <a href="http://twitter.com/alx_mrtnz/" target="_blank" class="twitter"><i class="icon-twitter"></i></a>
                        </li>
                        <li>
                            <a href="http://dribbble.com/alxmrtnz" target="_blank" class="dribbble"><i class="icon-dribbble"></i></a>
                        </li>
                        <li>
                            <a href="http://instagram.com/aleycatmartinez/" target="_blank" class="instagram"><i class="icon-instagramm"></i></a>
                        </li>
                        <li>
                            <a href="http://open.spotify.com/user/amart1892" target="_blank" class="spotify"><i class="icon-spotify-circled"></i></a>
                        </li>
                        <li>
                            <a href="http://www.linkedin.com/in/alxmrtnz" target="_blank" class="linkedin"><i class="icon-linkedin"></i></a>
                        </li>

                    </ul>

                </div>

            </div>
        </div>

         <div class="push"></div>

		</div><!--end .wrapper-->

        <?php
            include_once(($path . "/includes/footer-basic.php"));
        ?>

        <script type="text/javascript" src="js/instafeed.min.js"></script>
        <script type="text/javascript">
            var userFeed = new Instafeed({
                get: 'user',
                userId: 11273458,
                limit: 3,
                accessToken: '11273458.467ede5.141317baad57438b94d19e30856aa0b7',
                template: '<div class="instagramImage"><a href="{{link}}" target="_blank"><img src="{{image}}" /></a></div>'
            });
            userFeed.run();
        </script>

    </body>
</html>


