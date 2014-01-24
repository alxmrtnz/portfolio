<?php include 'includes/header.php'; ?>

    <body>
        <div id="if-ie">
            <?php include_once(($path . "/includes/ie.php")); ?>
        </div>
        <div class="regularSite">
        <header class="smallHeader" style="background: #3888de;">
            <div class="container">
                <?php
                	$activePage = "/work";
                	include_once(($path . "/includes/navbar.php"));
                ?>
        </header>
        <div class="workIntro">
            <h1>What I<span>'</span>ve been working on<span>.<span></h1>

            <p class="center">A few of my most recent projects.</p>
            <div><i class="icon-down-fat"></i></div>

        </div>


        <section class="workItem">
            <div class="container workContainer">
                <h1 >Reach Web Solutions</h1>
                <h2> Responsive Design, Front-End Development, CSS3    <a href="http://www.reachws.com/" target="_blank" class="small-red-link">Launch Site</a></h2>
                <div class="previewContainer" >
                    <a href="reach">
                        <div class="shadow">

                                <img src="/images/browserTop.svg" alt="top of browser">
                                <img class="second" src="/images/reach/reach.png" alt="Reach Web Solutions">

                        </div>
                    </a>
                </div>

                <p>A playful site for Reach, a new agency co-founded by yours truly that specializes in web applications. <a href="reach"  class="small-red-link">Learn More ></a></p>
            </div>
        </section>

        <section class="workItem">

            <div class="container workContainer">
                <h1 style="margin-top: 15px">Ohio University Multimedia Society</h1>
                <h2>Responsive Design, Visual Design, Wordpress Development    <a href="http://www.ohioums.com/" target="_blank" class="small-red-link">Launch Site</a></h2>
                <div class="previewContainer" >
                    <a href="oums" style="border-bottom: 0px;">
                                <img class="second" src="/images/oums/OUMS-homepage.jpg" alt="Ohio University Multimedia Society Redesign">
                    </a>
                </div>

                <p>A single-page, responsive, Wordpress integrated site for Ohio University's Multimedia Society <a href="oums"  class="small-red-link">Learn More ></a></p>
            </div>
        </section>

        <section class="workItem">
            <div class="container workContainer">

                <h1 style="">Battle of the Hands</h1>
                <h2> Web App, UX Design, Art Direction <a href="http://www.battle-of-the-hands.herokuapp.com/" target="_blank" class="small-red-link">Launch the App</a></h2>

                <div class="previewContainer">
                    <a href="battleofthehands">
                        <div class="shadow">

                                <img src="/images/browserTop.svg" alt="top of browser">
                                <img class="second" src="/images/rps/rps1.png" alt="Battle of the Hands">

                        </div>
                    </a>
                </div>

                <p>The product of my office's intern project completed during my time at <a href="http://www.viget.com/">Viget</a> in Boulder, CO. <a href="battleofthehands" class="small-red-link">Learn More ></a></p>
            </div>
        </section>

        <section class="workItem">
            <div class="container workContainer">

                <h1 >Vote Voice</h1>
                <h2>Responsive Design, Front-End Development <a href="voiceSite/index.php" target="_blank" class="small-red-link">Launch Site</a></h2>

                <div class="previewContainer">
                <a href="votevoice">
                    <div class="shadow">
                            <img src="/images/browserTop.svg" alt="top of browser">
                            <img class="second" src="/images/voice/voice.png" alt="Vote Voice Screenshot">
                    </div>
                </a>
                </div>

                <p>A completely responsive site promoting Voice, a ticket that ran for the Ohio University Student Senate. <a href="votevoice" class="small-red-link">Learn More ></a></p>
            </div>
        </section>

        <section class="workItem">
            <div class="container workContainer">
                <h1 >Scripps JSchool Redesign</h1>
                <h2>Research, Visual Design, Development</h2>

            <a href="scripps">
                <div class="previewContainer">
                    <img class="second" src="/images/scripps/scrippsredesign.jpg" alt="E.W. Scripps School of Journalism">
                </div>
            </a>


                <p>The E.W. Scripps School of Journalism site, redesigned as a case study exercise and class project. <a href="scripps" class="small-red-link">Learn More ></a></p>
            </div>
        </section>

        <section class="workItem">
            <div class="container workContainer">
                <h1 >Infographics</h1>
                <h2>Data Visualization, Research, Illustration</h2>
            <a href="infographics">
                <div class="previewContainer">


                        <img class="second" src="/images/infographics/infographic-cover.jpg" alt="Infographic Collection">


                </div>
            </a>


                <p>A collection of infographics I've created during my time at Ohio University.<a href="infographics" class="small-red-link">Learn More ></a></p>
            </div>
        </section>



        <?php
            include_once(($path . "/includes/footer-basic.php"));
        ?>




    </body>
</html>