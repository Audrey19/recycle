<?php get_header(); ?>

<!--banner-->
<section class="banner">
        <?php 

      $image = get_field('image_principale');

      if( !empty($image) ): ?> 
        <img  class="banner_img" src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
      <?php endif; ?>
      <h1 class="banner_title"><?php the_field('titre'); ?></h1>
    </section>

     <!--first paragraphe and picture-->
    <section class="home_content">
      <div class="home_content_paragraphes">
        <p><?php the_field('premier_paragraphe'); ?></p>
      </div>
      <div class="home_content_img">
      <?php 
          $image = get_field('seconde_image');
          if( !empty($image) ): ?>
            <img class="home_content_img_item" src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
      <?php endif; ?>
      </div>
    </section>

     <!--3 green squares-->
    <section class="home_content_squares">

        <?php while ( have_rows('raccourci') ) : the_row(); ?>
        <div class="home_content_squares_items 1"> 
          <?php 
              $image_logo = get_sub_field('logo');
              if( !empty($image_logo) ): ?>
                <img class="home_content_squares_logo" src="<?php echo $image_logo['url']; ?>" alt="<?php echo $image_logo['alt']; ?>" />
          <?php endif; ?>
          <h2 class="home_content_squares_items_h2"><?php the_sub_field('titre'); ?></h2>
          <?php 
             $link = get_sub_field('lien');
             if( $link ): ?>
              <a class="home_content_squares_items_button" href="<?php echo $link; ?>">EN SAVOIR PLUS</a>
          <?php endif; ?>
        </div>
        <?php endwhile; ?>

      </section>

      <!--<div class="home_content_squares_items 1">
        <img class="home_content_squares_logo" src="<?php bloginfo('template_url'); ?>/assets/images/location.svg" alt="logo" />
        <h2 class="home_content_squares_items_h2">LES LIEUX DE COLLECTE</h2>
        <button class="home_content_squares_items_button" type="button"><b>EN SAVOIR PLUS</b></button>
      </div>
      <div class="home_content_squares_items 2">
        <img class="home_content_squares_logo" src="<?php bloginfo('template_url'); ?>/assets/images/pratique.svg" alt="logo" />
        <h2 class="home_content_squares_items_h2">EN PRATIQUE</h2>
        <button class="home_content_squares_items_button" type="button"><b>EN SAVOIR PLUS</b></button>
      </div>
      <div class="home_content_squares_items 3">
        
        <img class="home_content_squares_logo" src="<?php bloginfo('template_url'); ?>/assets/images/faq.svg" alt="logo" /> 
        <h2 class="home_content_squares_items_h2">FAQ</h2>
        <button class="home_content_squares_items_button" type="button"><b>EN SAVOIR PLUS</b></button>
      </div>-->
   

     <!--second paragraph and picture-->
      <div class="home_content">
        <div class="home_content_img_2">
          <?php 
              $image = get_field('troisieme_image');
              if( !empty($image) ): ?>
                <img class="home_content_img_item " src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
          <?php endif; ?>
        </div>
        <div class="home_content_paragraphes">
          <p><?php the_field('second_paragraphe'); ?></p>
        </div>
    </div>

    

<?php get_footer(); ?>