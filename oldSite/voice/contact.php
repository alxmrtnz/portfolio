<HTML>
	<head>
		<title>Vote Voice</title>
		<?php require "core/includes/head.php" ?>
		<link rel="stylesheet" href="core/css/contact.css">
		
	</head>
	<body>
		<div id="wrapper">
			<div id="header">
				<?php require "core/includes/header.php" ?>
			</div>
			
			
			<div id="contentWrapper">
				
				<ul id="contactLinks">
					<li>
						<div class="flip-container" ontouchstart="this.classList.toggle('hover');">
							<div class="flipper">
								<div class="front">
									<a href="http://www.twitter.com/votevoiceou"><img src="core/images/twitterFront.png" alt="" class="linkImg"></a>
								</div>
								<div class="back">
									<a href="http://www.twitter.com/votevoiceou"><img src="core/images/twitterBack.png" alt="" class="linkImg"></a>
								</div>
							</div>
						</div>
					</li>
					<li>
						<div class="flip-container" ontouchstart="this.classList.toggle('hover');">
							<div class="flipper">
								<div class="front">
									<a href="http://www.facebook.com/votevoiceou"><img src="core/images/facebookFront.png" alt="" class="linkImg"></a>
								</div>
								<div class="back">
									<a href="http://www.facebook.com/votevoiceou"><img src="core/images/facebookBack.png" alt="" class="linkImg"></a>
								</div>
							</div>
						</div>
					</li>
					<li>
						<div class="flip-container" ontouchstart="this.classList.toggle('hover');">
							<div class="flipper">
								<div class="front">
									<a href="mailto:votevoiceou@gmail.com"><img src="core/images/emailFront.png" alt="" class="linkImg"></a>
								</div>
								<div class="back">
									<a href="mailto:votevoiceou@gmail.com"><img src="core/images/emailBack.png" alt="" class="linkImg"></a>
								</div>
							</div>
						</div>
					</li>
				</ul>
<!--
				<form action="/contact" method="post">
			
					<h4>Send us some electronic mail</h4>
					
										
					<p>
						<label for="name">Your Name:</label>
						<input type="text" id="name" name="name">
					</p>
					

					<p>
						<label for="email">Email Address:</label>
						<input type="text" id="email" name="email">
					</p>
					

					<p>
						<label for="message">Message:</label>
						<textarea rows="10" name="message"></textarea>
					</p>
					<div class="dots">
						<input class="submit" type="submit" name="submit" value="send">
					</div>
				</form> -->
				
			</div> <!-- end contentWrapper -->
			
			
			
			<div id="illustration">
        

            	
            	
            	
			
			
			<div id="footer">
				<?php require "core/includes/footer.php" ?>
			</div>
		</div>
	</body>
	<?php require "core/includes/scripts.php" ?>
	<script src="core/javascript/jqueryUI/js/jquery-ui-1.10.2.custom.min.js"></script>
	<script src="core/javascript/jquery.autoellipsis.js"></script>
	<script src="core/javascript/candidates.js"></script>
</HTML>