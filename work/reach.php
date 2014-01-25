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




        <a class="next-arrow right" href="oums">
            <i class="icon-right-open"></i>
            <span>OUMS</span>
        </a>


        <section class="workItem caseStudy">
                <h1>Reach Web Solutions</h1>
                <h2>Responsive Design, Front-End Development, CSS3 <a href="http://www.reachws.com/" target="_blank" class="small-red-link">Launch Site</a></h2>
                <div class="previewContainer mainHighlight">
                    <div class="shadow">

                            <img src="../images/browserTop.svg" alt="top of browser">
                            <img class="second" src="../images/reach/reach.png" alt="Reach Web Solutions">

                    </div>
                </div>


                <p>Reach Web Solutions is a new agency specializing in web apps that I co-founded in the fall of 2013. As Creative Director and Co-Founder of ReachWS, I have been responsible for the visual design and branding of the company.</p>


                <div class="imageHolder noborder">
                    <img src="../images/reach/reachphone.png" alt="iPhone Screenshots">

                </div>

                <div class="imageHolder noborder">
                    <img src="../images/reach/reachiPad.png" alt="iPad Process Screenshot">

                </div>

                <div class="imageHolder noborder">
                    <img src="../images/reach/reachiPad2.png" alt="iPad Contact Screenshot">

                </div>

                <p style="text-align: center;"><span style="font-style: italic; font-weight: lighter; color: #bbb;">Fall 2013</span> </p>

        </section>




         <?php
             include_once(($path . "/includes/footer-basic.php"));
         ?>




    </body>
</html>