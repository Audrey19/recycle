<?php
/*
Template Name: FAQ
*/
?>

<?php get_header(); ?>
 

 <section class="faq_container">
 <?php while ( have_rows('raccourci') ) : the_row(); ?>
    <div class="faq">
        <h1><?php the_sub_field('titre'); ?></h1>
        <p><?php the_sub_field('texte'); ?></p>
    </div>
    <?php endwhile; ?>
 </section>

<?php get_footer(); ?>