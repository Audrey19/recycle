<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title><?php bloginfo('title'); ?></title>
    
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <link rel="shortcut icon" href="favicon.ico"/>
    <link rel="stylesheet" href="<?php bloginfo('stylesheet_directory'); echo '/style.css?' . filemtime( get_stylesheet_directory() . '/style.css'); ?>">

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

    <div class="home_header">
      <img class="home_header_banner" src="<?php bloginfo('template_url'); ?>/assets/images/banner.jpg" alt="recycle cans" />
      <img class="home_header_logo" src="<?php bloginfo('template_url'); ?>/assets/images/logo-site.png" alt="recycle cans" />
      <h1 class="home_header_title">STOP AUX CANETTES ABANDONNEES DANS <span class="underline">LA RUE </span> OU JETEES DANS LES  <span class="underline"> POUBELLES PUBLIQUES</span>!</h1>
    </div>

     <!--first paragraphe and picture-->
    <div class="home_content">
      <div class="home_content_paragraphes">
        <p>On les retrouve sur les trottoirs, le bord des routes, les arrêts des transports en commun, les poubelles publiques etc. Les canettes font partie des déchets sauvages les plus courants.</p>
        <p>Pour lutter contre ce phénomène, un projet-pilote de reprise des canettes abandonnées vient d’être lancé dans 1 commune bruxelloise et 2 sites universitaires..</p>
        <p>Les canettes récupérées pourront dès lors être recyclées et connaître une deuxième vie!</p>
        <p>Savez-vous qu’une canette vide peut être recyclée et redevenir une canette en à peine 60 jours ? Une canette peut donc être recyclée jusqu’à 6 fois par an !.</p>
        <p><b><span class="underline_grey">Qui plus est la canette est recyclable à l’infini.</span></b></p>
      </div>
      <div class="home_content_img">
        <img class="home_content_img_item" src="<?php bloginfo('template_url'); ?>/assets/images/cans.jpg" alt="cans" />
      </div>
    </div>

     <!--3 green squares-->
    <div class="home_content_squares">
      <div class="home_content_squares_items 1">
        <img class="home_content_squares_logo" src="<?php bloginfo('template_url'); ?>/assets/images/logo1.png" alt="logo" />
        <h2 class="home_content_squares_items_h2">LES LIEUX DE COLLECTE</h2>
        <button class="home_content_squares_items_button" type="button"><b>EN SAVOIR PLUS</b></button>
      </div>
      <div class="home_content_squares_items 2">
        <img class="home_content_squares_logo" src="<?php bloginfo('template_url'); ?>/assets/images/logo2.png" alt="logo" />
        <h2 class="home_content_squares_items_h2">EN PRATIQUE</h2>
        <button class="home_content_squares_items_button" type="button"><b>EN SAVOIR PLUS</b></button>
      </div>
      <div class="home_content_squares_items 3">
        <img class="home_content_squares_logo" src="<?php bloginfo('template_url'); ?>/assets/images/logo3.png" alt="logo" /> 
        <h2 class="home_content_squares_items_h2">FAQ</h2>
        <button class="home_content_squares_items_button" type="button"><b>EN SAVOIR PLUS</b></button>
      </div>
    </div>

     <!--second paragraph and picture-->
      <div class="home_content">
        <div class="home_content_img_2">
          <img class="home_content_img_item " src="<?php bloginfo('template_url'); ?>/assets/images/cans.jpg" alt="cans" />
        </div>
        <div class="home_content_paragraphes">
          <p><b><span class="style">AIDEZ-NOUS A FAIRE LA DIFFERENCE!</span> <br> ET DITES STOP AUX CANETTES ABANDONNEES DANS LA RUE OU JETEES DANS LES POUBELLES PUBLIQUES!</b></p>
          <p> <b>Le principe ? </b> Les canettes consommées ou ramassées dans la rue donnent droit à un bon d’achat de 0,05 € par canette à faire valoir dans les commerces d’alimentation durable et autres petits commerces locaux, partenaires de la commune et des 2 universités participantes.</p>
          <p>Ce projet pilote sera mené pendant 6 mois par la Région bruxelloise, Bruxelles-Environnement et Bruxelles Propreté en concertation avec le secteur de l’emballage.</p>
          <p> <b>L’objectif </b> est de pouvoir tester le potentiel d’amélioration de la propreté publique et du recyclage des canettes consommées en rue via une prime de retour appliquée à ces dernières.</p>
          <p><b><i>Attention : Seuls les canettes retrouvées sur la voie publique et celles consommées dans la rue peuvent être rapportées !</i></b></p>
          <p><b>Les boissons conditionnées en canette et consommées à domicile doivent continuer à être jetées dans le sac bleu PMC.</b></p>
        </div>
    </div>

     <!--contact form-->
    <div class="contact-form">
    </div>
    
     <!--footer-->
	<div class="home_footer">
		<img class="home_footer_logo" src="<?php bloginfo('template_url'); ?>/assets/images/logo-site.png" alt="recycle cans" />
		<img class="home_footer_logo" src="<?php bloginfo('template_url'); ?>/assets/images/logo-site.png" alt="recycle cans" />
		<img class="home_footer_logo" src="<?php bloginfo('template_url'); ?>/assets/images/logo-site.png" alt="recycle cans" />
		<img class="home_footer_logo" src="<?php bloginfo('template_url'); ?>/assets/images/logo-site.png" alt="recycle cans" />
	</div>

    

  </header>
