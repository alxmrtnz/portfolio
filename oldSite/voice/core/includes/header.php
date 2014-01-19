<div id="headerBG">
    	<div id="headerContent">
        
        	<a id="logoClick" href="index.php">
            	<div id="logoClick">
                </div>
            </a>
                <div id="logoWrap">
              
                        <object data="core/images/voiceLogo.svg" type="image/svg+xml" class="chart">
                                <a href="core/images/voiceLogo.svg">
                                    <!--[if lte IE 8 ]-->
                                        <img src="core/images/voiceLogo.png" alt="Vote Voice">
                                    <!--[endif]-->
                                </a>
                        </object>
                  
                </div>
            
        
        	<div id="headerRightContent">
        		<?php 

                $electionDay = '04/18';

                if (date('m/d') == $electionDay){
                ?>
                <div id="voteButtonContainer">
                    <a id="voteButton" href="https://webapps.ohio.edu/stusenate">
                        VOTE TODAY
                    </a>
                </div>
                <?php } ?>
                <ul id="nav">
                
                    <li>
                        <a href="platform.php">PLATFORM</a>
                    </li>
                    
                    <li>
                        <a href="candidates.php">CANDIDATES</a>
                    </li>
                    <!--
                    <li>
                        <a href="index.php">MEDIA</a>
                    </li>
                    -->
                    <li>
                        <a href="contact.php">CONTACT</a>
                    </li>
                    
                 </ul>
                
                
        
        	</div> <!-- Close header-right-content -->
        </div><!-- Close header-content -->
        
        
        
        <div id="headerBGBottom">
        
        </div>
    </div>