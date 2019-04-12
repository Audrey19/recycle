<?php
/*
Template Name: En pratique
*/
?>

<?php get_header(); ?>

<section class="pratique_container">
    <h1><?php the_field('titre'); ?></h1>
    <p><?php the_field('texarea'); ?></p>

    <?php while ( have_rows('raccourci') ) : the_row(); ?>
    <div class="pratique_container_box">
        <h1><?php the_sub_field('titre'); ?></h1>
        <p><?php the_sub_field('textarea'); ?></p>
    </div>
    <?php endwhile; ?>

</section>

<section class="modeemploi_container">
    <div class="modeemploi_container2">
        <h1><?php the_field('titre2'); ?></h1>
        <div class="modeemploi_container_box">
        <?php while ( have_rows('raccourci2') ) : the_row(); ?>
            <div class="modeemploi_container_box_item">
                <p class="nmb"><?php the_sub_field('number'); ?></p>
                <p class="text"><?php the_sub_field('etape'); ?></p>
            </div>
        <?php endwhile; ?>
        </div>

        <?php while ( have_rows('attention') ) : the_row(); ?>
        <div class="modeemploi_container_3">
            <?php 
                $logo = get_sub_field('num');
                    if( !empty($logo) ): ?>
                    <img class="logo" src="<?php echo $logo['url']; ?>" alt="<?php echo $image_logo['alt']; ?>" />
            <?php endif; ?>
            <p><?php the_sub_field('texte'); ?></p>
        </div>
        <?php endwhile; ?>
    </div>
</section>


 

<?php get_footer(); ?>