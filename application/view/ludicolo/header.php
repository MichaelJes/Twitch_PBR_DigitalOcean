<?php
/**
 * Created by PhpStorm.
 * User: micha
 * Date: 3/15/2017
 * Time: 9:56 AM
 */
?>
<!DOCTYPE html>
<html lang="en">
<head>

    <title>Twitch Pbr</title>

    <!-- CSS  -->

    <link href="<?php echo URL; ?>css/materialize.css" rel="stylesheet" media="screen,projection">
    <link href="<?php echo URL; ?>css/font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet">
    <!--Table Sorter-->
    <link type="text/css" href="http://tablesorter.com/docs/css/jq.css" rel="stylesheet">
    <link type="text/css" href="http://tablesorter.com/themes/blue/style.css" rel="stylesheet">
    
    <!--Import Google Icon Font-->
    <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!--Import materialize.css-->
    <link type="text/css" href="<?php echo URL; ?>css/materialize.min.css" rel="stylesheet" media="screen,projection">
    <!--Let browser know website is optimized for mobile-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <link href="<?php echo URL; ?>css/Stylier.css" rel="stylesheet">
</head>
<body onpageshow="Materialize.showStaggeredList('#staggered-test');Materialize.showStaggeredList('#staggered-tezt');">
  <nav class=" green darken-4" role="navigation">
  
    <div class="nav-wrapper container">
          <a id="logo-container" href="<?php echo URL; ?>poke" class="brand-logo">Ghosn</a>

          
          
          <ul class="right hide-on-med-and-down ">
            <li><a href="#"><span><i class="fa fa-jpy yenSymbol"></i></span><?php echo 7 ?></a></li>
          </ul>
          <ul class="right hide-on-med-and-down ">
            <li><a href="<?php echo URL; ?>match">Current match Statistics</a></li>
          </ul>
            <!--This is for mobile-->
          <ul id="nav-mobile" class="side-nav">
            <li><a href="#">Other site</a></li>
          </ul>
          <a href="#" data-activates="nav-mobile" class="button-collapse"><i class="material-icons">menu</i></a>

    </div>
  </nav>