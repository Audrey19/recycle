<?php
/*
Template Name: Lieux de collecte
*/
?>

<?php get_header(); ?>


<!-- google map -->
<section class="map_container"></section>


<!-- location points -->

<section class="locations_container">
<?php while ( have_rows('raccourci') ) : the_row(); ?>
    <div class="locations_container_box1">
        <div class="locations_container_box_title">
        <?php 
              $image_logo = get_sub_field('logo');
              if( !empty($image_logo) ): ?>
                <img class="location_logo" src="<?php echo $image_logo['url']; ?>" alt="<?php echo $image_logo['alt']; ?>" />
          <?php endif; ?>
            <h1><?php the_sub_field('ecole'); ?></h1>
        </div>
        <div class="locations_container_box_address">
           <h2><?php the_sub_field('adresse'); ?></h2>
        </div>
        <div class="locations_container_box_contact">
            <p><?php the_sub_field('contact'); ?></p>
        </div>
    </div> 
    <?php endwhile; ?>
<!--
   
    <div class="locations_container_box2">
        <div class="locations_container_box_title">
            <img class="location_logo" src=""/>
            <h1>ulb</h1>
        </div>
        <div class="locations_container_box_address">
         <h2>ampus AlmaRue Jardin Martin V, 561200 Bruxelles</h2>
        </div>
        <div class="locations_container_box_contact">
            <p> Contact en cas de problème avec la machine : espaces-exterieurs-gtpw@uclouvain.be</p>
            <p> 02.764.44.30 (téléphone du secrétariat des services techniques, ouvert en permanence pendant les jours ouvrables et heures de service).</p>
        </div> 
    </div>
    -->
    <div class="locations_container_box3">
        <div class="locations_container_box_title">
            <img class="location_logo" src=""/>
            <h1>ville de bruxelles</h1>
        </div>
        <div class="locations_container_box_address">
            <h2>ampus AlmaRue Jardin Martin V, 561200 Bruxelles</h2>
            <h2>ampus AlmaRue Jardin Martin V, 561200 Bruxelles</h2>
        </div>
        <div class="locations_container_box_contact">
            <p> Contact en cas de problème avec la machine : espaces-exterieurs-gtpw@uclouvain.be</p>
            <p> 02.764.44.30 (téléphone du secrétariat des services techniques, ouvert en permanence pendant les jours ouvrables et heures de service).</p>
        </div> 
    </div>

    
</section>



<!-- contact person -->
<section class="contact_container">
    <div class="contact-container-box">
        <h1><?php the_field('onglet_contacte_titre'); ?></h1>
        <p><?php the_field('onglet_contacte_texte'); ?></p>
    </div>

</section>



<?php get_footer(); ?>