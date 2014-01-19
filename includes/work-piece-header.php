<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="description" content="Alex Martinez Portfolio Site">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link rel="stylesheet" href="../css/style.css">
        <link rel="author" href="humans.txt">

        <link href='http://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
        <link href='http://fonts.googleapis.com/css?family=Muli:300,400,300italic,400italic' rel='stylesheet' type='text/css'>

        <link rel="stylesheet" href="../css/fontello.css">
        <link rel="stylesheet" href="../css/animation.css">

        <!--[if IE 7]>
        <link rel="stylesheet" href="../css/fontello-ie7.css">
        <![endif]-->

        <!--[if lt IE 9]>
            <link rel="stylesheet" type="text/css" href="../css/ie8-and-down.css" />
        <![endif]-->


        <?php
        $title;
        $path=$_SERVER['PHP_SELF'];
        $page=basename($path);
        switch("$page")
        {
        case 'index.php':
             $title = 'alxmrtnz | Work';
             break;
        case 'reach.php':
             $title = 'alxmrtnz | Reach Web Solutions';
             break;
        case 'scripps.php':
             $title = 'alxmrtnz | Scripps JSchool Redesign';
             break;
        case 'votevoice.php':
             $title = 'alxmrtnz | Vote Voice';
             break;

        case 'battleofthehands.php':
             $title = 'alxmrtnz | Battle of the Hands';
             break;

        }
        echo '<title>'.$title.'</title>';
        ?>
    </head>