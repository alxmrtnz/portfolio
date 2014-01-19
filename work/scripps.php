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



        <a class="next-arrow left" href="votevoice">
            <i class="icon-left-open"></i>
        </a>

        <a class="next-arrow right" href="infographics">
            <i class="icon-right-open"></i>
        </a>



        <section class="workItem caseStudy">

                <div class="previewContainer mainHighlight">
                    <img class="second" src="../images/scripps/scrippsredesign.jpg" alt="E.W. Scripps School of Journalism">
                </div>
                <h1><span>Scripps Redesign</span></h1>
                <h2>Research, Visual Design, Development <a target="_blank" href="scrippssite/index.html" class="small-red-link">Launch Redesigned Site</a>  |  <a target="_blank" href="http://scrippsjschool.org/" class="small-red-link">Launch Current Site</a></h2>

                <p>After looking at the current Scripps JSchool website, I decided to redesign it for a class project. As my first step into web design and development, I went through each phase of the design and development process.</p>


                 <h1 class="left">Process</h1>

                <p>I first created a redesign brief by comparing the current site to competitor's sites, creating test case scenarios with different users, and analyzing the structure and flow of higher education journalism sites.</p>

                <div class="imageHolder">
                    <img src="../images/scripps/scrippsbrief.jpg" alt="Competitive Analysis and Personas">
                    <div class="subtitle">
                        <p><a href="scrippssite/Martinez_Redesign_Brief.pdf">View Redesign Brief (PDF 5.4mb)</a></p>
                    </div>
                </div>



                <p>Next, I created a wireframes for the individual pages and a moodboard with the colors and styles I believed would best suit a university journalism school site and went on to create mockups for four pages that were to be implemented.</p>

                <div class="imageHolder">
                    <img src="../images/scripps/scrippswiremood.jpg" alt="Scripps Wireframe and Moodboard">
                    <div class="subtitle">
                        <p><a href="scrippssite/Martinez_Redesign_Brief.pdf">View Redesign Brief (PDF 5.6mb)</a></p>
                    </div>
                </div>



                <p>Lastly, I implemented the mockups through HTML and CSS to create four usable demo pages. This was the first time I got my hands dirty with HTML and CSS. I had some prior knowledge, but learning the development cycle for a basic static website was a valuable learning experience.</p>

                <p style="text-align: center;"><span style="font-style: italic; font-weight: lighter; color: #bbb;">Spring 2012</span> </p>

        </section>



        <?php
            include_once(($path . "/includes/footer-basic.php"));
        ?>

        <script>
        $('header').delay('500').animate({backgroundColor: '#14422c'}, 1000);
        </script>
    </body>
</html>