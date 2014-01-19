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



        <a class="next-arrow left" href="oums">
            <i class="icon-left-open"></i>
        </a>
        <a class="next-arrow right" href="votevoice">
            <i class="icon-right-open"></i>
        </a>

        <section class="workItem caseStudy">

                <div class="previewContainer mainHighlight">
                    <div class="shadow">
                            <img src="../images/browserTop.svg" alt="top of browser">
                            <img class="second" src="../images/rps/rps1.png" alt="Battle of the Hands">
                    </div>
                </div>
                <h1><span>Battle of the Hands</span></h1>
                <h2> UX Design, Art Direction <a href="http://battle-of-the-hands.herokuapp.com/" target="_blank" class="small-red-link">Launch the App ></a></h2>

                <p>Over the summer of 2013, I worked as a User Experience Design intern at <a href="http://www.viget.com/" target="_blank">Viget Labs</a> in Boulder, CO. Part of Viget's internship program required the interns in each of the company's three offices collaborate on a group project.</p>

                <p>In the Boulder office, my intern group was made up of myself, a front-end development intern, and a back-end development intern. We chose to build a Rock Paper Scissors game. The project proved to be a very interesting UX design challenge as it was not a typical website.</p>

                <h1 class="left">User Stories and User Flows</h1>
                <div class="imageHolder">
                    <img src="../images/rps/rpsUserflows.jpg" alt="user flows">
                    <div class="subtitle">
                        <p>Defining user stories and flows allowed us to walk through the process we aimed to create for our game.</p>
                    </div>
                </div>

                <p>Our idea was to implement the game in phases, starting with the ability to play against a computer and then adding in the ability to play against other humans. We started by writing up User Stories to figure out what a user would be able to do with our app in each phase we would implement.</p>

                <p>To figure out how a user would progress through a game, I began white-boarding user flow diagrams. I then transferred the diagrams into Omnigraffle and then worked to refine them by adding specific annotations and details about each step in the process.</p>

                <h1 class="left">Wireframing</h1>

                <div class="imageHolder">
                    <img src="../images/rps/rps-wireframe1.jpg" alt="wireframes">
                    <div class="subtitle">
                        <p>Creating screenstates for each phase gave our team a blueprint to work from.</p>
                    </div>
                </div>

                <p>Because of the five phase implementation plan for our project, I found it easiest to create small simplified wireframes for each screen state a user would encounter as they made their way through the game. By doing this, I was also able to list out all of the specific features that would be available within a screen. These became a good reference for both our front-end and back-end devs.</p>

                <div class="imageHolder">
                    <img src="../images/rps/rps-wireframe2.jpg" alt="wireframes">
                    <div class="subtitle">
                        <p>I created storyboards to convey the indended animations of action sequences.</p>
                    </div>
                </div>

                <p>As we moved into the front-end development of the game, I created more detailed wireframes that featured my concepts for various animations. By showing these actions through wireframes, I was able tow work with Samii (FED) to create the animations featured in our game.</p>

                <h1 class="left">Art Direction</h1>

                <div class="imageHolder">
                    <img src="../images/rps/rpsmockup.jpg" alt="Steve's Mockup">
                    <div class="subtitle">
                        <p>One of Steve Schoeffel's main mockups for the project.</p>
                    </div>
                </div>

                <p>Our group, lacking a dedicated design intern, sought help from Viget designer Steve Schoeffel for the visual design of the project. We decided that we wanted to go for a flat cartoonish look and also wanted to include a bit of Boulder in the project (the Flatirons and Chautauqua Park). With our mood boards and after several conversations, Steve was able to create Photoshop comps that I then modified as needed to fit the different screen states necessary for front-end dev.</p>

                <p style="text-align: center;"><span style="font-style: italic; font-weight: lighter; color: #bbb;">Summer 2013</span> </p>

        </section>




        <?php
            include_once(($path . "/includes/footer-basic.php"));
        ?>



        <script>
        $( document ).ready(function() {
            $('header').delay('500').animate({backgroundColor: '#405344'}, 1000);
        });
        </script>
    </body>
</html>