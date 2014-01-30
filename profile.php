<?php include 'includes/header.php'; ?>


    <body>
        <div id="if-ie">
            <?php include_once(($path . "/includes/ie.php")); ?>
        </div>
        <div class="regularSite">
        	<div class="wrapper">
	        <header class="smallHeader" style="background: #3888de;">
	            <div class="container">

	                <?php
	                	$activePage = "/profile";
                        include_once(($path . "/includes/navbar.php"));
	                ?>

	        <div class="profileInfo">
	            <div class="container" style="overflow: hidden; margin-bottom: 200px;">
	                <div class="leftSidebar">
	                    <img src="images/alex.jpg" alt="Alex Martinez">


	                    <div class="infoSnippets">
	                        <ul>
	                            <li class="link">
	                                <a href="resume">View Resume</a>
	                            </li>
	                            <li>
	                                <h3>Expertise</h3>
	                                <h4>UX/UI Design<br>Front-End Dev<br>HTML/CSS/JS</h4>
	                            </li>
	                            <li>
	                                <h3>Education</h3>
	                                <h4>Ohio University</h4>
	                            </li>
	                            <li>
	                                <h3>Hometown</h3>
	                                <h4>Toledo, OH</h4>
	                            </li>
	                        </ul>
	                    </div>

	                </div>

	                <div class="mainCopy">

	                    <h1>Hi<span>,</span> my name is Alex<span>.</span></h1>
                        <div class="mobileResumeLink">
                            <a class="mobileResume" href="resume">View Resume</a>
                        </div>
	                    <p>I'm a designer and front-end developer with interests in UX and interface design. I love responsive design, web fonts, CSS preprocessing, <a href="https://news.layervault.com/stories" target="_blank">Designer News</a>, and a good burrito.</p>

	                    <p>Over the summer, I interned as a User Experience Designer at <a href="http://www.viget.com/" target="_blank">Viget</a> in Boulder, CO. I currently work part-time for the <a href="http://www.jerseywatch.com/" target="_blank">Jersey Watch Network</a> in Athens, OH and recently co-founded <a href="http://www.reachws.com/" target="_blank">Reach Web Solutions</a>, a web agency specializing in business-critical web applications.</p>

	                    <p>In May 2014, I'll be graduating from Ohio University with BS in Visual Communications and a minor in Computer Science. </p>

	                    <p>Want to chat? Feel free to <a href="contact.php" target="_blank">contact me</a> and I'll get back to you asap :)</p>



	                    <!-- <div class="reading">
	                        <h1>My Reading List</h1>
	                        <p>Learning never stops. Below is a list of books I've read or am currently reading to help improve myself as a designer, as a developer, and as a person. Thanks to <a href="http://oykun.com/profile/" target="_blank">Oykun Yilmaz's site</a>, for the idea to keep track. </p>

	                        <ul>
	                            <li>
	                                <img src="images/books/justmytype.jpg"alt="Just My Type">
	                                <p class="bookTitle">Just My Type</p>
	                                <p class="author">Simon Garfield</p>
	                                <a href="http://www.amazon.com/Just-My-Type-About-Fonts/dp/B00CVDMFY8" target="_blank">on Amazon</a>
	                            </li>
	                            <li>
	                                <img src="images/books/theshapeofdesign.jpg"alt="The Shape of Design">
	                                <p class="bookTitle">The Shape of Design</p>
	                                <p class="author">Frank Chimero</p>
	                                <a href="http://shapeofdesignbook.com/" target="_blank">Online</a>
	                            </li>
	                            <li>
	                                <img src="images/books/leanstartup.jpg"alt="The Lean Startup">
	                                <p class="bookTitle">The Lean Startup</p>
	                                <p class="author">Eric Ries</p>
	                                <a href="http://www.amazon.com/The-Lean-Startup-Entrepreneurs-Continuous/dp/0307887898" target="_blank">on Amazon</a>
	                            </li>

	                        </ul>
	                    </div> end .reading -->

	                </div><!-- end .mainCopy -->

	            </div>



	        </div>

			<div class="push"></div>
		   </div> <!-- end .wrapper-->

        <?php
            include_once(($path . "/includes/footer-basic.php"));
        ?>


    </body>
</html>