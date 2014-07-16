
<?php get_header(); ?>

<div class="row">

	<div class="col-xs-12 col-md-8">

	<?php if (have_posts()) : ?>

		<?php while (have_posts()) : the_post(); ?>

			<div class="post" id="post-<?php the_ID(); ?>">
				<h2><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h2>
				<h3><?php the_time('j F Y') ?> | <?php the_category(', ') ?> | <?php comments_popup_link('0 Commenti', '1 Commento', '% Commenti'); ?></h3>

				<div class="entry">
					<?php the_content('Leggi il resto della notizia &rarr;'); ?>
					
					<?php edit_post_link('Modifica la notizia.', '<p>', '</p>'); ?>
				</div>

				<?php if (function_exists('the_tags')) { the_tags('<p class="postmetadata">Tags: ', ', ', '</p>'); } ?>
			</div>

		<?php endwhile; ?>

			<div class="navigation">
				<?php if(function_exists('wp_pagenavi')) { wp_pagenavi(); } else { ?>
		
		        <div class="alignleft"><?php next_posts_link('&larr; Previous Entries') ?></div>
		        <div class="alignright"><?php previous_posts_link('Next Entries &rarr;') ?></div>
		        <?php } ?>
			</div>

	<?php else : ?>
	
		<div class="post">
			<h2 class="center">Not Found</h2>
			<p class="center">Sorry, but you are looking for something that isn't here.</p>
		</div>

	<?php endif; ?>

	

	</div>

	<div class="col-xs-6 col-md-4">
		<?php include(TEMPLATEPATH."/primary-sidebar.php");?>
	</div>

	</div>




<?php get_footer(); ?>