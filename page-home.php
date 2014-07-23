<?php /* 
	Template Name: 01. Home 
*/ ?>

 <?php get_header(); ?>

  <?php /* echo get_new_royalslider(1); */  ?> 



	<div class="col-xs-12 ">

		<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
		<div class="post" id="post-<?php the_ID(); ?>">
		
			
			<?php the_content('<p>Leggi il resto &raquo;</p>'); ?>
			<?php wp_link_pages(array('before' => '<p><strong>Pages:</strong> ', 'after' => '</p>', 'next_or_number' => 'number')); ?>
			<?php edit_post_link('Edit', '<p>', '.</p>'); ?>
			
		</div>

		<?php endwhile; endif; ?>

	</div>



<?php get_footer(); ?>
