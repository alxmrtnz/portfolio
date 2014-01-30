<?php include 'includes/header.php'; ?>

    <body>
        <div id="if-ie">
            <?php include_once(($path . "/includes/ie.php")); ?>
        </div>
        <div class="regularSite">
        <header class="smallHeader" style="background: #3888de;">
            <div class="container">

                <?php
                    $activePage = "/profile";
                    include_once(($path . "/includes/navbar.php"));
                ?>
	<div class="wrapper">
        <div class="resumeInfo">

                <div class="backToProfile">
                    <div class="container">
                        <a href="profile">< Back to Profile</a>
                        <!-- <h1>Resume</h1> -->
                    </div>
                </div>

                <div class="container" style="margin-bottom: 0px;">
                    <div class="resumeTitle">
                        <h1>Alex Martinez<span>.</span></h1>
                        <h1 class="sub">web designer &amp; front-end developer</h1>
                    </div>
                    <a href="http://www.linkedin.com/in/alxmrtnz" target="_blank" class="big-red-btn resumeDownload">View on LinkedIn</a>

                </div><!--end .container -->
                <div class="container">
                    <h2><i class="icon-suitcase"></i>      Experience</h2>



                        <div class="resumeItem">
                            <div class="left">
                                 <h3><a href="http://www.reachws.com/" target="_blank">Reach Web Solutions</a></h3>

                                <h4>August 2013 - Present</h4>
                            </div>
                            <div class="right">
                                <div class="positionTitle">
                                    <h3>Co-Founder, Creative Director</h3>
                                    <div class="companyName hide"><a href="http://www.reachws.com/" target="_blank">Reach Web Solutions</a></div>
                                    <h4 class="hide">August 2013 - Present</h4>
                                </div>


                                <ul>
                                    <li>Founded Reach Web Solutions, LLC., a web agency that creates business critical web applications</li>
                                    <li>Helps manage/coordinate team and client projects</li>
                                    <li>Designs UX, UI, and front-end visuals for client projects</li>
                                    <li>Develops front-end code for web applications (HTML, SASS/CSS, JS)</li>
                                </ul>
                            </div>

                        </div><!-- end .resumeItem -->

                        <div class="resumeItem">
                            <div class="left">
                                 <h3><a href="http://www.jerseywatch.com/" target="_blank">Jersey Watch Network</a></h3>

                                <h4>September 2013 - Present</h4>
                            </div>
                            <div class="right">
                                <div class="positionTitle">
                                    <h3>Web Designer, Front-End Developer</h3>
                                    <div class="companyName hide"><a href="http://www.jerseywatch.com/" target="_blank">Jersey Watch Network</a></div>
                                    <h4 class="hide">September 2013 - Present</h4>
                                </div>
                                <ul>
                                    <li>Designs for the JerseyWatch.com marketing site</li>
                                    <li>Uses ExpressionEngine for front-end development and content management </li>
                                    <li>Designs UX/UI for client-facing Jersey Watch product</li>
                                </ul>
                            </div>

                        </div><!-- end .resumeItem -->


                        <!-- INCLUDE ONCE DETAILS IN CLASS ARE FIGURED OUT

                        <div class="resumeItem">
                            <div class="left">
                                 <h3 style="line-height: 24px;"><a href="http://www.clickingcreateschange.com/" target="_blank">Project C</a></h3>

                                <h4>January 2014 - Present</h4>
                            </div>
                            <div class="right">
                                <h3>Wordpress Developer<span> | <a href="http://www.clickingcreateschange.com/" target="_blank">Project C</a></span></h3>
                                <ul>
                                    <li>Currently working with a team of 6(?) students to redesign Project C's site as part of senior capstone class</li>
                                    <li>Assesses current designer patterns on the project's website, redesigns interfaces, and develops site in Wordpress</li>
                                </ul>
                            </div>

                        </div> end .resumeItem -->

                        <div class="resumeItem">
                            <div class="left">
                                 <h3><a href="http://www.viget.com/" target="_blank">Viget Labs</a></h3>

                                <h4>June - August 2013</h4>
                            </div>
                            <div class="right">
                                <div class="positionTitle">
                                    <h3>User Experience Design Intern</h3>
                                    <div class="companyName hide"><a href="http://www.viget.com/" target="_blank">Viget Labs</a></div>
                                    <h4 class="hide">June - August 2013</h4>
                                </div>
                                <ul>
                                    <li>Worked as part of Viget's Boulder office UX team</li>
                                    <li>Shadowed multiple client projects & learned new research methods </li>
                                    <li>Created a rock paper scissors game app with fellow interns</li>
                                </ul>
                            </div>

                        </div><!-- end .resumeItem -->

                        <div class="resumeItem">
                            <div class="left">
                                 <h3><a href="http://www.sundriessolutions.com/" target="_blank">Sundries Solutions</a></h3>

                                <h4>November 2013 - Present</h4>
                            </div>
                            <div class="right">
                                <div class="positionTitle">
                                    <h3>Freelance Designer</h3>
                                    <div class="companyName hide"><a href="http://www.sundriessolutions.com/" target="_blank">Sundries Solutions</a></div>
                                    <h4 class="hide">November 2012 - Present</h4>
                                </div>
                                <ul>
                                    <li>Provides Sundries Solutions' clients with interface designs for web applications, print designs for brochures and advertisements</li>
                                    <li>Shadowed multiple client projects & learned new research methods </li>
                                    <li>Created a rock paper scissors game app with fellow interns</li>
                                </ul>
                            </div>

                        </div><!-- end .resumeItem -->



                        <h2 style="margin-top: 70px;"><i class="icon-crown"></i>   Leadership</h2>


                            <div class="resumeItem">
                                <div class="left">
                                     <h3 style="line-height: 24px;"><a href="http://www.ohioums.com/" target="_blank">Ohio University <br>Multimedia Society</a></h3>

                                    <h4>June 2012 - Present</h4>
                                </div>
                                <div class="right">
                                    <div class="positionTitle">
                                    <h3>President</h3>
                                    <div class="companyName hide"><a href="http://www.ohioums.com/" target="_blank">Ohio University Multimedia Society</a></div>
                                    <h4 class="hide">June 2012 - Present</h4>
                                </div>
                                    <ul>
                                        <li>Organizes biannual networking trips - past trips include NYC, Washington D.C., and Chicago</li>
                                        <li>Runs weekly meetings in which new trends in technology and design are discussed</li>
                                        <li>Showcases student work for advice and critiques</li>
                                    </ul>
                                </div>

                            </div><!-- end .resumeItem -->

                            <div class="resumeItem">
                                <div class="left">
                                     <h3 style="line-height: 24px;"><a href="http://www.clickingcreateschange.com/" target="_blank">Project C</a></h3>

                                    <h4>May 2013 - Present</h4>
                                </div>
                                <div class="right">
                                    <div class="positionTitle">
                                        <h3>Executive Director</h3>
                                        <div class="companyName hide"><a href="http://www.clickingcreateschange.com/" target="_blank">Project C</a></div>
                                        <h4 class="hide">May 2013 - Present</h4>
                                    </div>
                                    <ul>
                                        <li>Heads Project C, a student organization that raises money for nonprofits in southeast Ohio</li>
                                        <li>Recruits designers, videographers, photographers and other creatives that help bring Project C to life</li>
                                        <li>Promotes the project and encourage community participation in the form of nominations, charitable donations and votes</li>
                                    </ul>
                                </div>

                            </div><!-- end .resumeItem -->


                        <!-- <h2><i class="icon-cog"></i>   Skills</h2> -->

                        <h2><i class="icon-gradhat"></i>   Education</h2>
                        <div class="resumeItem">
                            <div class="left">
                                 <h3 style="line-height: 24px;">Ohio University</h3>

                                <h4>May 2014</h4>
                            </div>
                            <div class="right">
                                <div class="positionTitle">
                                    <h3>B.S. in Visual Communication</h3>
                                    <div class="companyName hide">Ohio University</div>
                                    <h4 class="hide">May 2014</h4>
                                </div>

                            </div>

                        </div><!-- end .resumeItem -->

                        <div class="resumeItem">
                            <div class="left">
                                 <h3 style="line-height: 24px;">Ohio University</h3>

                                <h4>May 2014</h4>
                            </div>
                            <div class="right">
                                <div class="positionTitle">
                                    <h3>Minor in Computer Science</h3>
                                    <div class="companyName hide">Ohio University</div>
                                    <h4 class="hide">May 2014</h4>
                                </div>

                            </div>

                        </div><!-- end .resumeItem -->


                        <div class="skilloverflow" style="overflow: hidden; ">
                         <h2><i class="icon-cog"></i>   Skills</h2>

                            <div class="resumeItem skill">
                                <div class="left">
                                     <h3 style="line-height: 24px;">Proficient in</h3>


                                    <ul>
                                        <li>Adobe Creative Suite</li>
                                        <li>UI,UX Design</li>
                                        <li>HTML5, SASS/CSS</li>
                                        <li>jQuery, JavaScript</li>

                                        <li>Wordpress</li>
                                        <li>Git, GitHub</li>

                                    </ul>
                                </div>


                            </div><!-- end .resumeItem -->

                            <div class="resumeItem skill">
                                <div class="left">
                                     <h3 style="line-height: 24px;">Knowledge of</h3>


                                    <ul>
                                        <li>ExpressionEngine</li>
                                        <li>PHP</li>
                                        <li>Django, Python</li>
                                        <li>jQuery</li>



                                    </ul>
                                </div>


                            </div><!-- end .resumeItem -->
                        </div>



                       <h2><i class="icon-award"></i>   Honors &amp; Awards</h2>
                       <div class="resumeItem award">
                           <div class="left">
                                <h3 style="line-height: 24px;">Pepsi Leader Scholarship</h3>
                               <h4>Fall 2013 - Spring 2014</h4>
                           </div>


                       </div><!-- end .resumeItem -->

                       <div class="resumeItem award">
                           <div class="left">
                                <h3 style="line-height: 24px;">College of Communication Scholarship</h3>
                               <h4>Fall 2012 - Present</h4>
                           </div>


                       </div><!-- end .resumeItem -->

                       <div class="resumeItem award">
                           <div class="left">
                                <h3 style="line-height: 24px;">Latino Heritage Leadership Award</h3>
                               <h4>Spring 2012</h4>
                           </div>


                       </div><!-- end .resumeItem -->

                       <div class="resumeItem award">
                           <div class="left">
                                <h3 style="line-height: 24px;">King-Chavez-Parks Scholarship Award</h3>
                               <h4>Fall 2010 - Present</h4>
                           </div>


                       </div><!-- end .resumeItem -->





                </div>










            </div><!-- end .container -->



        </div><!-- end .resumeInfo -->

		<div class="push">
		</div><!-- end .wrapper -->

        <?php
            include_once(($path . "/includes/footer-basic.php"));
        ?>


    </body>
</html>