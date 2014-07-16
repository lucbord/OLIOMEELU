<?php
 
/*
 
Template Name: 03. Full
 
*/
 
?>
<?php get_header(); ?>


<div class="row">




		<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
		<div class="post" id="post-<?php the_ID(); ?>">
		<h2><?php the_title(); ?></h2>
			<div class="entry">
				<?php the_content('<p>Leggi il resto &raquo;</p>'); ?>

				<?php wp_link_pages(array('before' => '<p><strong>Pages:</strong> ', 'after' => '</p>', 'next_or_number' => 'number')); ?>
				
				<?php edit_post_link('Edit', '<p>', '.</p>'); ?>
			</div>
		</div>
		<?php endwhile; endif; ?>
	</div>




<div class="row">
<?php get_footer(); ?>
</div>