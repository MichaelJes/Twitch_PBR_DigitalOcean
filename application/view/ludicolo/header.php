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

    <!--Import Google Icon Font-->
    <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!--Import materialize.css-->
    <link type="text/css" href="<?php echo URL; ?>css/materialize.min.css" rel="stylesheet" media="screen,projection">
    <!--Let browser know website is optimized for mobile-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <link href="<?php echo URL; ?>css/Stylier.css" rel="stylesheet">
</head>
<body>
  <nav class=" green darken-2" role="navigation">
  
    <div class="nav-wrapper container">
          <a id="logo-container" href="<?php echo URL; ?>poke" class="brand-logo">TPP statistics</a>
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