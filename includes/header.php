<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="description" content="The online portfolio of Alex Martinez, a web designer and front-end developer from Ohio with expertise in UX/UI design and a love for responsive design, typography, Designer News, and a good burrito.">
        <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no, maximum-scale=1.0">


        <link rel="stylesheet" href="/css/style.css">
        <link rel="shortcut icon" href="http://www.alxmrtnz.com/favicon.ico" />

        <link href='http://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
        <link href='http://fonts.googleapis.com/css?family=Muli:300,400,300italic,400italic' rel='stylesheet' type='text/css'>

        <link rel="stylesheet" href="/css/fontello.css">
        <link rel="stylesheet" href="/css/animation.css">

        <!--[if IE 7]>
        <link rel="stylesheet" href="/css/fontello-ie7.css">
        <![endif]-->

        <!--[if lt IE 9]>
            <link rel="stylesheet" type="text/css" href="css/ie8-and-down.css" />
        <![endif]-->

        <?php
        $title;
        $pagepath=$_SERVER['PHP_SELF'];
        $page=basename($pagepath);

        switch("$page")
        {
        case 'index.php':
             $title = 'Alex Martinez | Web Designer &amp; Front-End Developer';
             break;
        case 'profile.php':
             $title = 'Alex Martinez | Profile';
             break;
        case 'contact.php':
             $title = 'Alex Martinez | Contact';
             break;
        case 'work.php':
             $title = 'Alex Martinez | Work';
             break;
        case 'reach.php':
             $title = 'Alex Martinez | Reach Web Solutions';
             break;
        case 'scripps.php':
             $title = 'Alex Martinez | Scripps JSchool Redesign';
             break;
        case 'votevoice.php':
             $title = 'Alex Martinez | Vote Voice';
             break;

        case 'battleofthehands.php':
             $title = 'Alex Martinez | Battle of the Hands';
             break;
        case 'infographics.php':
             $title = 'Alex Martinez | Infographics';
             break;
        case 'oums.php':
             $title = 'Alex Martinez | Ohio University Multimedia Society';
             break;
        }
        echo '<title>'.$title.'</title>';

        $path = $_SERVER['DOCUMENT_ROOT'];
        ?>
    </head>


