<?php
/*
Template Name: Contact
*/
?>

<?php get_header(); ?>

	<!-- COMPONENT // Hero -->
  <section class='section hero -content'>
    <div class='hero__content -content'>
      <div class='container'>

        <div class='row'>
          <div class='col-12'>

          	<h6><?php wp_title("",true)?></h6>
            <h1 class='-light'>Drop us a line!</h1>

          </div>
        </div>

      </div>
    </div>

    <ul class="hero__slideshow -content cycle-slideshow" data-cycle-fx="fade" data-cycle-speed="8000" data-cycle-timeout="50" data-cycle-slides="> li">
      <li style="background-image:url(<?php bloginfo('template_directory'); ?>/img/hero_dsb_blog.jpg);"></li>
    </ul>
    
  </section>

  <!-- COMPONENT // Content -->
  <section class='section contact -bg-grey'>
    <div class='contact__overview container'>
      <div class='row'>

        <div class="col-1"></div>
        
        <div class="col-5">
          <h3>Email</h3>
          <p><a href="mailto:<?php the_field('business_email', 'option'); ?>"><?php the_field('business_email', 'option'); ?></a></p>
        </div>
        
        <div class="col-5">
          <h3>Phone</h3>
          <p><a href="tel:<?php the_field('business_phone', 'option'); ?>"><?php the_field('business_phone', 'option'); ?></a></p>
        </div>

        <div class="col-1"></div>

      </div>
    </div>
  </section>

  <!-- COMPONENT // Content -->
  <section class='section content -padding50px -bg-light'>
    <div class='content__overview container'>
      <div class='row'>

        <div class="col-2"></div>
        
        <div class="col-8">
          <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
            <?php the_content(); ?>
            <div class='line-break'></div>
          <?php endwhile; endif; ?>
          <?php echo do_shortcode( '[contact-form-7 id="1" title="Contact Us"]' ); ?>
        </div>

        <div class="col-2"></div>

      </div>
    </div>
  </section>

  <!-- COMPONENT // Location -->
  <section class='section location -bg-grey'>

    <div class='location__block'>
      <div class="location__map">
        <div id="map"></div>
      </div>
      <div class="location__details">
        <div class="location__details--inner">
          <h4>Hours & Location</h4>
          <p><?php the_field('business_hours', 'option'); ?></p>
          <p><?php the_field('business_address', 'option'); ?></p>
          <p class="note">If you are located in the NYC area, we would be happy to meet with you in person.</p>
      </div>
    </div>

  </section>

  <script>
      function initMap() {
        var dsb = {lat: 40.6204674, lng: -74.0169689};
        var map = new google.maps.Map(document.getElementById('map'), {
          zoom: 11,
          styles: [
            {
              "elementType": "geometry",
              "stylers": [
                {
                  "color": "#f5f5f5"
                }
              ]
            },
            {
              "elementType": "labels.icon",
              "stylers": [
                {
                  "visibility": "off"
                }
              ]
            },
            {
              "elementType": "labels.text.fill",
              "stylers": [
                {
                  "color": "#616161"
                }
              ]
            },
            {
              "elementType": "labels.text.stroke",
              "stylers": [
                {
                  "color": "#f5f5f5"
                }
              ]
            },
            {
              "featureType": "administrative.land_parcel",
              "elementType": "labels.text.fill",
              "stylers": [
                {
                  "color": "#bdbdbd"
                }
              ]
            },
            {
              "featureType": "poi",
              "elementType": "geometry",
              "stylers": [
                {
                  "color": "#eeeeee"
                }
              ]
            },
            {
              "featureType": "poi",
              "elementType": "labels.text.fill",
              "stylers": [
                {
                  "color": "#757575"
                }
              ]
            },
            {
              "featureType": "poi.business",
              "stylers": [
                {
                  "visibility": "off"
                }
              ]
            },
            {
              "featureType": "poi.park",
              "elementType": "geometry",
              "stylers": [
                {
                  "color": "#e5e5e5"
                }
              ]
            },
            {
              "featureType": "poi.park",
              "elementType": "labels.text",
              "stylers": [
                {
                  "visibility": "off"
                }
              ]
            },
            {
              "featureType": "poi.park",
              "elementType": "labels.text.fill",
              "stylers": [
                {
                  "color": "#9e9e9e"
                }
              ]
            },
            {
              "featureType": "road",
              "elementType": "geometry",
              "stylers": [
                {
                  "color": "#ffffff"
                }
              ]
            },
            {
              "featureType": "road.arterial",
              "elementType": "labels",
              "stylers": [
                {
                  "visibility": "off"
                }
              ]
            },
            {
              "featureType": "road.arterial",
              "elementType": "labels.text.fill",
              "stylers": [
                {
                  "color": "#757575"
                }
              ]
            },
            {
              "featureType": "road.highway",
              "elementType": "geometry",
              "stylers": [
                {
                  "color": "#dadada"
                }
              ]
            },
            {
              "featureType": "road.highway",
              "elementType": "labels",
              "stylers": [
                {
                  "visibility": "off"
                }
              ]
            },
            {
              "featureType": "road.highway",
              "elementType": "labels.text.fill",
              "stylers": [
                {
                  "color": "#616161"
                }
              ]
            },
            {
              "featureType": "road.local",
              "stylers": [
                {
                  "visibility": "off"
                }
              ]
            },
            {
              "featureType": "road.local",
              "elementType": "labels.text.fill",
              "stylers": [
                {
                  "color": "#9e9e9e"
                }
              ]
            },
            {
              "featureType": "transit.line",
              "elementType": "geometry",
              "stylers": [
                {
                  "color": "#e5e5e5"
                }
              ]
            },
            {
              "featureType": "transit.station",
              "elementType": "geometry",
              "stylers": [
                {
                  "color": "#eeeeee"
                }
              ]
            },
            {
              "featureType": "water",
              "elementType": "geometry",
              "stylers": [
                {
                  "color": "#F3F1F1"
                }
              ]
            },
            {
              "featureType": "water",
              "elementType": "labels.text.fill",
              "stylers": [
                {
                  "color": "#FFFFFF"
                }
              ]
            }
          ],
          center: dsb
        });
        var marker = new google.maps.Marker({
          position: dsb,
          map: map
        });
      }
  </script>
  <script async defer
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyC622souE56T5iAWG-edNRDPBhDGxB1Tlk&callback=initMap">
  </script>


<?php get_footer(); ?>