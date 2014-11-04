<?php /* 
	Template Name: 06. Contatti
*/ ?>
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.6.4/jquery.min.js"></script>
  <script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=true"></script>
  <script type="text/javascript" src="<?php bloginfo('template_directory');?>/js/gmaps.js"></script>
  <link rel="stylesheet" href="http://twitter.github.com/bootstrap/1.3.0/bootstrap.min.css" />
  <link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory');?>/js/examples.css" />
  <script type="text/javascript">
    var map;
    $(document).ready(function(){
      map = new GMaps({
        el: '#map',
        lat: 43.916697,
        lng: 7.847656,
        zoomControl : false,
        zoom: 17,
        panControl : false,
        streetViewControl : false,
        mapTypeControl: false,
        overviewMapControl: false,
        
      });
        map.addMarker({
            lat: 43.916697,
            lng: 7.847656
          });
    });
  </script>
<style>
    #header {padding-bottom: 80px !important; }
</style>


 <?php get_header(); ?>
<div class="content-prodotti">
    <h2 class="title-prodotti"><?php the_title(); ?></h2>
    <div class="content-prod">
    <div class="col-lg-12" style="padding: 0 !important;">
<div id="map"></div>
	
            <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
		<div class="post-prodotti" id="post-<?php the_ID(); ?>">
		
			
			<?php the_content('<p>Leggi il resto &raquo;</p>'); ?>
			<?php wp_link_pages(array('before' => '<p><strong>Pages:</strong> ', 'after' => '</p>', 'next_or_number' => 'number')); ?>
			
		</div>

		<?php endwhile; endif; ?>

	</div>

</div>	
<?php get_footer(); ?>
