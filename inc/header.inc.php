<!DOCTYPE html>
<html lang="en">

<head>

  <!-- Basic Page Needs
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->
  
  <meta charset="utf-8">

  <title><?php 
        // if site_title is not defined
        // use a demo title
        if( !isset($site_title) ) { 
          echo "Hexia_C";
        }  
          echo "$site_title &ndash; $page_title"; 
        ?> ?></title>

  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
  <meta name="description" content="<?php echo $site_description; ?>">
  <meta name="author" content="<?php echo $site_author; ?>">

  <!-- Mobile Specific Metas
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- FONT
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->
  <link href="//fonts.googleapis.com/css?family=Raleway:400,300,600" rel="stylesheet" type="text/css">

  <!-- CSS
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->
  <link rel="stylesheet" href="css/normalize.css">

  <link rel='stylesheet prefetch' href='http://cdnjs.cloudflare.com/ajax/libs/skeleton/2.0.4/skeleton.min.css'>
  <link rel='stylesheet prefetch' href='http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.4.0/css/font-awesome.min.css'>

  <link rel="stylesheet" href="css/style.css">

  <!-- Favicon
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->
  <link rel="icon" type="image/png" href="images/favicon.png">

</head>

<body>

  <!-- Header Navigation
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->
  <header class="header" role="banner">
    <div class="container">
      <!-- logo -->
      <div class="logo">
        <a href="http://demo.html5blank.com">
          <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/307033/hexia-logo.png" alt="Logo" class="logo-img">
        </a>
      </div>
      <!-- /logo -->
      
      <!-- nav -->
      <nav class="nav" role="navigation">
        <div class="menu">
          <ul>
            <li class="page_item"><a href="">Home</a></li>
            <li class="page_item"><a href="">Catalog</a></li>
            <li class="page_item"><a href="">Featured</a></li>
            <li class="page_item"><a href="">Shopping Cart</a></li>
            <li class="page_item"><a href="">Fullfillment</a></li>
            <li class="page_item"><a href="">User Profile</a></li>
            <li class="page_item"><a href="">Search</a></li>
          </ul>
        </div>
      </nav>
      <!-- /nav -->
      <div id="top-search">
        <a href="#">Sign-in</a>
        <a href="#">Register</a>
        <form class="top-search_box">
          <input type="text" placeholder="search" />
          <button class="button-primary"><i class="fa fa-search"></i> Search</button>
        </form>
        <button href="shopping_cart.php"><i class="fa fa-shopping-cart"></i> Shopping Cart</button>
      </div>
      </div>
  </header>
  <!-- /header -->