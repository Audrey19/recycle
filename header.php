<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title><?php bloginfo('title'); ?></title>
    
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <link rel="shortcut icon" href="favicon.ico"/>
    <link rel="stylesheet" href="<?php bloginfo('stylesheet_directory'); echo '/style.css?' . filemtime( get_stylesheet_directory() . '/style.css'); ?>">
    <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
    <script type="text/javascript" src="/scripts/emailpage.js"></script>
    <?php wp_head(); ?>

    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>

<body>
  <!--nav-menu-->
  <header>
  
    <?php wp_nav_menu(array('menu_id' => 'menu_container','theme_location' => 'primary' )); ?>
    <div class="logo-container">
      <div class="logo-container-box">
    <a href="http://localhost:3000/recycle/"><img class="logo" src="<?php bloginfo('template_url'); ?>/assets/images/logo-primederetour.png" alt="recycle cans" /></a>
      </div>
    </div>
    
 
      <button class="hamburger hamburger--slider" type="button">
        <span class="hamburger-box">
          <span class="hamburger-inner"></span>
        </span>
        <script>
          var hamburger = document.querySelector(".hamburger");
          var navigation = document.querySelector(".menu");
          hamburger.addEventListener("click", function() {
            hamburger.classList.toggle("is-active");
            navigation.classList.toggle("is-active");
          });
        </script>
      </button>


    </header>



    

