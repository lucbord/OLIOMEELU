<?php /* 
	Template Name: 02. Food menu 
*/ ?>

<?php get_header(); ?>

<div class="col-xs-12 col-md-8 col-lg-8" id="menu">

	<h1>IL NOSTRO MENU</h1>

	<h2><span>ANTIPASTI</span></h2>

	<?php query_posts( array( 'post_type' => 'foodmenu','tipologia' => 'antipasti', 'showposts' => 10 ) ); ?>
	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

	<div class="media" id="piatto">
		<?php 
			 if ( has_post_thumbnail()) {
			   $large_image_url = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'large');
			   echo '<a href="' . $large_image_url[0] . '" class="pull-left" title="' . the_title_attribute('echo=0') . '" >';
			   echo get_the_post_thumbnail($post->ID, 'food', array( 'class'	=> "media-object")); 
			   echo '</a>';
			 }
		?>
		
	<div class="media-body">
		<h3 class="media-heading"><?php the_title(); ?></h3>
		<?php the_content(); ?>
		<div class="col-md-8 col-md-offset-7">
			<a href="http://www.facebook.com/share.php?v=4&src=bm&u=<?php the_permalink(); ?>" target="_blank" class="fb"><img src="<?php bloginfo('template_directory') ?>/img/fb.png" />Share su Facebook</a>
		</div>	</div>
	</div>
	
	<?php endwhile; endif; ?>

	<?php wp_reset_query();?>


	<h2><span>PRIMI PIATTI</span></h2>

	<?php query_posts( array( 'post_type' => 'foodmenu','tipologia' => 'primi', 'showposts' => 10 ) ); ?>
	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
		
	<div class="media">
		<?php 
			 if ( has_post_thumbnail()) {
			   $large_image_url = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'large');
			   echo '<a href="' . $large_image_url[0] . '" class="pull-left" title="' . the_title_attribute('echo=0') . '" >';
			   echo get_the_post_thumbnail($post->ID, 'food', array( 'class'	=> "media-object")); 
			   echo '</a>';
			 }
		?>
	<div class="media-body">
		<h3 class="media-heading"><?php the_title(); ?></h3>
		<?php the_content(); ?>
		<div class="col-md-8 col-md-offset-7">
			<a href="http://www.facebook.com/share.php?v=4&src=bm&u=<?php the_permalink(); ?>" target="_blank" class="fb"><img src="<?php bloginfo('template_directory') ?>/img/fb.png" />Share su Facebook</a>
		</div>
	</div>
	</div>
	
	<?php endwhile; endif; ?>

	<?php wp_reset_query();?>


	<h2><span>SECONDI PIATTI</span></h2>
	<?php query_posts( array( 'post_type' => 'foodmenu','tipologia' => 'secondi', 'showposts' => 10 ) ); ?>
	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
		
	<div class="media">
		<?php 
			 if ( has_post_thumbnail()) {
			   $large_image_url = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'large');
			   echo '<a href="' . $large_image_url[0] . '" class="pull-left" title="' . the_title_attribute('echo=0') . '" >';
			   echo get_the_post_thumbnail($post->ID, 'food', array( 'class'	=> "media-object")); 
			   echo '</a>';
			 }
		?>
	<div class="media-body">
		<h3 class="media-heading"><?php the_title(); ?></h3>
		<?php the_content(); ?>
		<div class="col-md-8 col-md-offset-7">
			<a href="http://www.facebook.com/share.php?v=4&src=bm&u=<?php the_permalink(); ?>" target="_blank" class="fb"><img src="<?php bloginfo('template_directory') ?>/img/fb.png" />Share su Facebook</a>
		</div>
	</div>
	</div>
	
	<?php endwhile; endif; ?>

	<?php wp_reset_query();?>


	<h2><span>DESSERT</span></h2>
	<?php query_posts( array( 'post_type' => 'foodmenu','tipologia' => 'dessert', 'showposts' => 10 ) ); ?>
	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
		
	<div class="media">
		<?php 
			 if ( has_post_thumbnail()) {
			   $large_image_url = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'large');
			   echo '<a href="' . $large_image_url[0] . '" class="pull-left" title="' . the_title_attribute('echo=0') . '" >';
			   echo get_the_post_thumbnail($post->ID, 'food', array( 'class'	=> "media-object")); 
			   echo '</a>';
			 }
		?>
	<div class="media-body">
		<h3 class="media-heading"><?php the_title(); ?></h3>
		<?php the_content(); ?>
		<div class="col-md-8 col-md-offset-7">
			<a href="http://www.facebook.com/share.php?v=4&src=bm&u=<?php the_permalink(); ?>" target="_blank" class="fb"><img src="<?php bloginfo('template_directory') ?>/img/fb.png" />Share su Facebook</a>
		</div>
	</div>
	</div>
	
	<?php endwhile; endif; ?>

	<?php wp_reset_query();?>

</div>

	<div class="col-xs-12 col-md-4 col-lg-4">
		<?php include(TEMPLATEPATH."/sidebar.php");?>
	</div>

<?php get_footer(); ?>