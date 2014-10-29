<?php /* 
	Template Name: 04. PhotoGallery
*/ ?>

<style>
    #header {padding-bottom: 80px !important; }
</style>
 <?php get_header(); ?>
<div class="content-prodotti">
    <h2 class="title-prodotti"><?php the_title(); ?></h2>
    <div class="content-prod">
    <div class="col-lg-12 ">

		<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
		<div class="post-prodotti" id="post-<?php the_ID(); ?>">
		
			
			<?php the_content('<p>Leggi il resto &raquo;</p>'); ?>
			<?php wp_link_pages(array('before' => '<p><strong>Pages:</strong> ', 'after' => '</p>', 'next_or_number' => 'number')); ?>
			
		</div>

		<?php endwhile; endif; ?>

	</div>

</div>	
<?php get_footer(); ?>
