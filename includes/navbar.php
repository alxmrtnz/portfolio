
<?php


$root = ($_SERVER['HTTPS'] ? 'https' : 'http') . '://' . $_SERVER['HTTP_HOST'] . '/';

$pages = array();
$pages["/work"] = "work";
$pages["/profile"] = "profile";
$pages["/contact"] = "contact";
?>




<nav>
    <div id="mainLogo">
        <a href="/" class="active">al<span>e</span>x<span>&nbsp;</span>m<span>a</span>rt<span>i</span>n<span>e</span>z</a>
    </div>
                    <ul>


                        <li id="mainNavItems">
                            <ul>
                            <?php foreach($pages as $url=>$title):?>
                                  <li>
                                       <a <?php if($url === $activePage):?>class="active"<?php endif;?> href="<?php echo $url;?>">
                                         <?php echo $title;?>
                                      </a>
                                  </li>

                                <?php endforeach;?>

                            </ul>
                        </li> <!-- end #mainNavItems -->
                    </ul>

                            <i id="mobileSwitch" class="icon-menu"></i>

                </nav>


            </div>
        </header><!-- end header -->

        <nav class="mobileMenu">

            <ul>
                <li>

                    <a href="<?php if($workPiece === true):?>../<?php endif;?>/" class="notActive">home</a>
                </li>
                <li>

                    <a href="<?php if($workPiece === true):?>../<?php endif;?>work" class="notActive">work</a>
                </li>
                <li>
                    <a href="<?php if($workPiece === true):?>../<?php endif;?>profile" class="">profile</a>
                </li>
                <li>
                    <a href="<?php if($workPiece === true):?>../<?php endif;?>contact" class="notActive">contact</a>
                </li>
                <!--<li>
                    <a href="#" class="notActive">blog</a>
                </li>-->
            </ul>

        </nav><!-- end mobileMenu -->