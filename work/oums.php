<?php include '../includes/header.php'; ?>


    <body>
        <div id="if-ie">
            <?php include '../includes/ie.php'; ?>
        </div>
        <div class="regularSite">
        <header class="smallHeader" >
            <div class="container">
                <?php
                        $activePage = "/work";
                        $workPiece = true;
                        include '../includes/navbar.php';
                ?>



        <a class="next-arrow left" href="reach">
            <i class="icon-left-open"></i>
        </a>
        <a class="next-arrow right" href="battleofthehands">
            <i class="icon-right-open"></i>
        </a>

        <section class="workItem caseStudy">

                <div class="previewContainer mainHighlight">


                            <img class="second" src="../images/oums/OUMS-homepage.jpg" alt="Battle of the Hands">

                </div>
                <h1><span>Ohio University<br>Multimedia Society</span></h1>
                <h2> Responsive Design, Visual Design, Wordpress Development <a href="http://ohioums.com/" target="_blank" class="small-red-link">Launch Site</a></h2>

                <p>Having not been updated since 2010, the Ohio University Multimedia Society’s website was in dire need of a redesign. As president of OUMS, a group of dedicated students interested in design, development, production, animation and technology, I decided to update the group’s web presence and create a sleeker, more easily maintainable site.</p>

                <h1 class="left">Process</h1>

                <div class="imageHolder">
                    <img src="../images/oums/oldOUMSsite.jpg" alt="Old Ohio University Multimedia Society Website">
                    <div class="subtitle">
                        <p>The old ohioums.com featured great content, but was difficult to maintain</p>
                    </div>
                </div>

                <p>While the old OUMS website was rich in content, its main problem was ease of maintenance. The site, written in static HTML and CSS, lacked a way to easily update content without hard-coding any changes. Not only that, but the visual design of the site had stayed the same for 3+ years (including a logo that featured an outdated Apple mouse).</p>
                <p>Talking with the exec board members last year, we all agreed that the OUMS website needed a refresh, and this fall I had the chance to make it a reality. </p>


                <h1 class="left">Reimagining the OUMS Web Presence</h1>
                <p>The old OUMS site had a lot of great content - individual student work, group trip info and recaps, group member pictures, resources - however, the new site had to be a bit more streamlined to provide users with the the most pertinent information about our organization and to make it simple to update and maintain in the future.</p>

                <p>Implementing a one-page design allowed for individual information sections with basic information and also lent itself well for adapting to a responsive mobile environment. By lessening the content load, the site will be easier for future executive members to update and also provides users with a quick and useful read to learn more about the organization.</p>

                <h1 class="left">Wordpress Integration</h1>

                <div class="imageHolder">
                    <img src="../images/oums/OUMS-wordpress.jpg" alt="Integrating ohioums.com with Wordpress">
                    <div class="subtitle">
                        <p>Advanced Custom Fields allows for future OUMS officers to easily update the Officer, Member, and Alumni sections</p>
                    </div>
                </div>

                <p>In developing the site, I determined that the information that will be most rapidly changing is the ‘Who We Are’ section. Each year, new members will come, old members will go, and the list of alumni will grow. </p>

                <p>By using the <a href="http://www.advancedcustomfields.com/" target="_blank">Advanced Custom Fields</a> plugin through Wordpress, I was able to create three main categories - Officers, Members, and Alumni - that can be updated through Wordpress’s backend and include the option to link to members’ portfolio sites.</p>


                <h1 class="left">The End Result</h1>
                <p>I am very proud of the new design of the site. While there were some tradeoffs, namely eliminating some of the previous site’s content in favor of a more maintainable model, the site is fully responsive, is integrated with a CMS for future maintenance, and has a new refreshed look.</p>


                <p style="text-align: center;"><span style="font-style: italic; font-weight: lighter; color: #bbb;">Fall 2013</span> </p>

        </section>




        <?php
            include_once(($path . "/includes/footer-basic.php"));
        ?>



        <script>
        $( document ).ready(function() {
            $('header').delay('500').animate({backgroundColor: '#65C4E5'}, 1000);
        });
        </script>
    </body>
</html>