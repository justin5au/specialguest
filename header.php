
<!-- @designer: Justin Au @developer: Justin Au, Joseph Luzquinos -->

<?php
    $autoPlayVideo = ($_GET['v'] == 'play') ? true : false;
    $page          = basename($_SERVER["SCRIPT_FILENAME"], '.php');
    $protocol      = stripos($_SERVER['SERVER_PROTOCOL'],'https') === true ? 'https://' : 'http://';
    $domain        = basename($_SERVER["SERVER_NAME"]);
    $home          = $protocol . $domain;
?>

<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->

    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title>SpecialGuest - A New Creative Agency</title>
        <meta name="description" content="SpecialGuest is a new creative agency dedicated to hybrid thinking and hyper making. Founded by creative director Aaron Duffy in partnership with the creators of 1stAveMachine, SpecialGuest is here to work directly with clients that want to be a part of the creative process, from concept to creation.">
        <meta name="keywords" content="SpecialGuest,Special,Guest,Production,Agency,Advertising">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link rel="shortcut icon" href="<?=$home?>/favicon.ico" type="image/x-icon" />

        <link href='http://fonts.googleapis.com/css?family=Open+Sans:400italic,400,300,600,700' rel='stylesheet' type='text/css'>
        <link href='http://fonts.googleapis.com/css?family=Oswald:400,300,700' rel='stylesheet' type='text/css'>

        <link rel="stylesheet" href="css/bootstrap.min.css">
        <style>
            body {
              padding-top: 74px;
            }
        </style>
        <link rel="stylesheet" href="css/bootstrap-theme.min.css">
        <link rel="stylesheet" href="css/main.css">

        <script src="js/vendor/modernizr-2.6.2-respond-1.1.0.min.js"></script>
    </head>

    <body <?if($page!=='index'){echo 'class="tsmc-body"';}?>>

        <!--[if lt IE 7]>
            <p class="browsehappy">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->
    <!-- <div style="max-width:1440px; margin:0 auto;"> Uncomment DIV in footer.php -->

    <div class="navbar navbar-inverse navbar-fixed-top" role="navigation">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button> 
          <a class="navbar-brand" href="<?php if($page=='index'){echo '#home';} else {echo $home;}?>"><img class="logo" src="img/logo.png" alt=""></a>
        </div>
        <div class="navbar-collapse collapse">
          <ul class="nav navbar-nav menu-items">
            <li><a href="<?=$home?>#about">ABOUT<div class="menu-underline hidden-xs" style="background:#ff7e00;"></div></a></li>
            <li><a href="<?=$home?>#work">WORK<div class="menu-underline hidden-xs" style="background:#00cec2;"></div></a></li>
            <li><a href="<?=$home?>#contact">CONTACT<div class="menu-underline hidden-xs" style="background:#ff2a52;"></div></a></li>
          </ul>
        </div><!--/.navbar-collapse -->
      </div>
    </div>
