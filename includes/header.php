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
             $title = 'Profile | Alex Martinez';
             break;
        case 'contact.php':
             $title = 'Contact | Alex Martinez';
             break;
        case 'work.php':
             $title = 'Work | Alex Martinez';
             break;
        case 'reach.php':
             $title = 'Reach Web Solutions | Alex Martinez';
             break;
        case 'scripps.php':
             $title = 'Scripps JSchool Redesign | Alex Martinez';
             break;
        case 'votevoice.php':
             $title = 'Vote Voice | Alex Martinez';
             break;

        case 'battleofthehands.php':
             $title = 'Battle of the Hands | Alex Martinez';
             break;
        case 'infographics.php':
             $title = 'Infographics | Alex Martinez';
             break;
        case 'oums.php':
             $title = 'Ohio University Multimedia Society | Alex Martinez';
             break;
        case 'resume.php':
             $title = 'Resume | Alex Martinez';
             break;
        }

        echo '<title>'.$title.'</title>';

        $path = $_SERVER['DOCUMENT_ROOT'];
        ?>
    </head>


