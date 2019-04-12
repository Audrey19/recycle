<?php
/*
Template Name: Commerces
*/
?>

<?php get_header(); ?>

<section class="commerces_container">
    <h1 class="titel"><?php the_field('titre'); ?></h1>
    <div class="commerces_container_box">
    <?php while ( have_rows('raccourci') ) : the_row();?>
        <div class="commerces_container_box_item">
            <h1><?php the_sub_field('titre'); ?></h1>
            <p><?php the_sub_field('textarea'); ?></p>
        </div>
        <?php   endwhile;?>
    </div>
</section>
 

<?php get_footer(); ?>