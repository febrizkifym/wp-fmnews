<!DOCTYPE HTML>
<html>
    <head>
        <meta charset="<?php bloginfo('charset'); ?>">
    	<meta name="viewport" content="width=device-width">
        <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">
        <title><?php bloginfo('title'); ?></title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <link rel="stylesheet" href="<?php echo get_stylesheet_uri(); ?>">
        <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <?php wp_head(); ?>
    </head>
<body>
<div class="container">
<header>
    <div class="row">
<!--
       <form action="" method="GET">
           <input name="query" value="" type="text" class="search" placeholder="Cari Berita">
       </form>
-->
        <div class="branding">
            <a href="#"><?php bloginfo('name'); ?></a>
        </div>
        <nav class="navbar navbar-default">
            <div class="container-fluid">
              <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                  <span class="sr-only">Toggle navigation</span>
                  <span class="icon-bar"></span>
                  <span class="icon-bar"></span>
                  <span class="icon-bar"></span>
                </button>
              </div>
                <?php bootstrap_nav(); ?>
            </div> 
        </nav>
    </div>
</header>