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




        <a class="next-arrow right" href="battleofthehands">
            <i class="icon-right-open"></i>
        </a>


        <section class="workItem caseStudy">

                <div class="previewContainer mainHighlight" style="margin-top:70px;">
                    <div class="shadow">

                            <img src="../images/browserTop.svg" alt="top of browser">
                            <img class="second" src="../images/reach/reach.png" alt="Reach Web Solutions">

                    </div>
                </div>
                <h1><span>Reach Web Solutions</span></h1>
                <h2>Responsive Design, Visual Design, Front-End Development, CSS3 <a href="http://www.reachws.com/" target="_blank" class="small-red-link">Launch Site</a></h2>

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



        <script>
        $('header').delay('500').animate({backgroundColor: '#58c3aa'}, 1000);

        </script>
    </body>
</html>