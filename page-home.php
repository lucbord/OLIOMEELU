<?php /* 
	Template Name: 01. Home 
*/ ?>

 <?php get_header(); ?>

<?php echo get_new_royalslider(1); ?>



	<div class="col-xs-12 col-md-8 col-lg-8">

		<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
		<div class="post" id="post-<?php the_ID(); ?>">
		<h2><?php the_title(); ?></h2>
			
			<?php the_content('<p>Leggi il resto &raquo;</p>'); ?>
			<?php wp_link_pages(array('before' => '<p><strong>Pages:</strong> ', 'after' => '</p>', 'next_or_number' => 'number')); ?>
			<?php edit_post_link('Edit', '<p>', '.</p>'); ?>
			
		</div>

		<?php endwhile; endif; ?>

	</div>

	<div class="col-xs-12 col-md-4 col-lg-4">
		<?php include(TEMPLATEPATH."/sidebar.php");?>
	</div>

<?php get_footer(); ?>
