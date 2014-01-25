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


        <a class="next-arrow left" href="battleofthehands">
            <i class="icon-left-open"></i>
            <span style="top: -9px;">Battle of<br>the Hands</span>
        </a>
        <a class="next-arrow right" href="scripps">
            <i class="icon-right-open"></i>
            <span style="top: -9px;">Scripps Redesign</span>
        </a>


        <section class="workItem caseStudy">
                <h1>Vote Voice</h1>
                <h2> UX Design, Front-end Dev <a href="voicesite/index.php" target="_blank"class="small-red-link">Launch Site</a></h2>
                <div class="previewContainer mainHighlight">
                    <div class="shadow">
                            <img src="../images/browserTop.svg" alt="top of browser">
                            <img class="second" src="../images/voice/voice.png" alt="Vote Voice Screenshot">
                    </div>
                </div>


                <p>Being my first responsive site, I learned about designing for many different devices and using media queries to change each page's layout via CSS. I also implemented some CSS3 animations for the clouds on the homepage and learned more about new 3D transforms.</p>

                <p>The site is promoting a ticket running for the Ohio University Student Senate called Voice. The goal of the project was to create a site that could showcase the party's platform and candidates in order to reach out to students.</p>

                <div class="imageHolder noborder">
                    <img src="../images/voice/voiceiPad1.png" alt="iPad Candidate Page on iPad">

                </div>

                <div class="imageHolder noborder">
                    <img src="../images/voice/voiceiPad2.jpg" alt="Candidate Profile Screenshot">

                </div>

                <p style="text-align: center;"><span style="font-style: italic; font-weight: lighter; color: #bbb;">Spring 2013</span> </p>

        </section>



        <?php
            include_once(($path . "/includes/footer-basic.php"));
        ?>




    </body>
</html>