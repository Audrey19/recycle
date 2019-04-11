<?php
/*
Template Name: Lieux de collecte
*/
?>

<?php get_header(); ?>


<!-- google map -->
<section class="map_container">


<div id="googleMap" style="width:100%;height:400px;"></div>

<script>
function myMap() {
var mapProp= {
  center:new google.maps.LatLng(51.508742,-0.120850),
  zoom:5,
};
var map = new google.maps.Map(document.getElementById("googleMap"),mapProp);
}
</script>

<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyC-qGnuTsvT9FzQeikzj7jgNYQwhagTw7Y&callback=myMap"></script>



<!--<div id="map"></div>
    <script>
      var map;
      function initMap() {
        map = new google.maps.Map(document.getElementById('map'), {
          center: {lat: 50.5011, lng: 4.4765},
          zoom: 8
        });
      }
    </script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyC-qGnuTsvT9FzQeikzj7jgNYQwhagTw7Y&callback=initMap"
    async defer></script>

    !-->
</section>


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
    -->
    <?php while ( have_rows('3_iem_onglet_raccourci') ) : the_row(); ?>
    <div class="locations_container_box3">
        <div class="locations_container_box_title">
            <?php 
                $image_logo = get_sub_field('logo2');
                if( !empty($image_logo) ): ?>
                    <img class="location_logo" src="<?php echo $image_logo['url']; ?>" alt="<?php echo $image_logo['alt']; ?>" />
            <?php endif; ?>
            <h1><?php the_sub_field('ecole2'); ?></h1>
        </div>
        <div class="locations_container_box_address">
            <h2><?php the_sub_field('adresse2'); ?></h2>
            <h2><?php the_sub_field('adresse2_bis'); ?></h2>
        </div>
        <div class="locations_container_box_contact">
            <p><?php the_sub_field('contacte2'); ?></p>
        </div>
       
    </div>
    <?php endwhile; ?>
    
</section>



<!-- contact person -->
<section class="contact_container">
    <div class="contact-container-box">
        <h1><?php the_field('onglet_contacte_titre'); ?></h1>
        <p><?php the_field('onglet_contacte_texte'); ?></p>
    </div>

</section>



<?php get_footer(); ?>