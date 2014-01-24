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



        <a class="next-arrow left" href="scripps">

            <i class="icon-left-open"></i>
            <span>Scripps</span>
        </a>


        <section class="workItem caseStudy">


                <h1 style="margin-top: 40px;">Infographics</h1>
                <h2>Data Visualization, Research, Illustration</h2>

                <p>Here you can see a collection of infographic pieces that I've created during my time at Ohio University. Not only have these pieces helped me learn how to organize and visualize data, but the research involved with each piece has contributed to a lot of interesting factoids.</p>

                <h1  >Barclays Center, Brooklyn</h1>

                <div class="imageHolder" style="margin: 25px auto 30px auto;">
                    <img src="../images/infographics/Barclays-Center-small.png" alt="Barclays Center">
                    <div class="subtitle">
                        <p><a href="../images/infographics/Barclays-Center-full-size.pdf">View Fullsize (PDF 10.7mb)</a></p>
                    </div>
                </div>

                <h1  >Ohio University History</h1>

                <div class="imageHolder" style="margin: 25px auto 30px auto;">
                    <img src="../images/infographics/outimelineCover.png" alt="Ohio University Timeline Infographic">
                    <div class="subtitle">
                        <p><a href="../images/infographics/OU-Timeline-full-size.pdf">View Fullsize (PDF 6.2mb)</a></p>
                    </div>
                </div>

                <h1  >Cost of Commuting</h1>

                <div class="imageHolder" style="margin: 25px auto 30px auto;">
                    <img src="../images/infographics/Cost-of-Commuting-small.png" alt="Cost of Commuting">
                    <div class="subtitle">
                        <p><a href="../images/infographics/Cost-of-Commuting-full-size.pdf">View Fullsize (PDF 1.2mb)</a></p>
                    </div>
                </div>



                <h1  >Miguel Cabrera Triple Crown</h1>

                <div class="imageHolder" style="margin: 25px auto 30px auto;">
                    <img src="../images/infographics/Miguel-Cabrera-small.jpg" alt="Miguel Cabrera Triple Crown">
                    <div class="subtitle">
                        <p><a href="../images/infographics/Miguel-Cabrera-full-size.pdf">View Fullsize (PDF 1.8mb)</a></p>
                    </div>
                </div>

                <h1  >Conflict in the Congo</h1>

                <div class="imageHolder" style="margin: 25px auto 30px auto;">
                    <img src="../images/infographics/Conflict-in-the-Congo-small.jpg" alt="Conflict in the Congo Infographic">
                    <div class="subtitle">
                        <p><a href="../images/infographics/Conflict-in-the-Congo-full-size.pdf">View Fullsize (PDF 1.9mb)</a></p>
                    </div>
                </div>


        </section>




        <?php
            include_once(($path . "/includes/footer-basic.php"));
        ?>


    </body>
</html>