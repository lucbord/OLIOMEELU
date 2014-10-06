<?php /* 
	Template Name: 01. Home 
*/ ?>

 <?php get_header(); ?>

        <?php echo get_new_royalslider(1); ?>

	<div class="col-lg-12 ">

		<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
		<div class="post" id="post-<?php the_ID(); ?>">
		
			
			<?php the_content('<p>Leggi il resto &raquo;</p>'); ?>
			<?php wp_link_pages(array('before' => '<p><strong>Pages:</strong> ', 'after' => '</p>', 'next_or_number' => 'number')); ?>
			<?php edit_post_link('Edit', '<p>', '.</p>'); ?>
			
		</div>

		<?php endwhile; endif; ?>

	</div>

        <?php query_posts('showposts=3'); ?>
        
            <div class="col-lg-12">
            <div class="box-title-prod">
               <h2>I PRODOTTI DEL FRANTOIO PANIZZI</h2>	
            </div>               
                <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
                    <div class="col-lg-4 col-md-4 col-xs-4 thumb ">
                        <div class="thumbnails" id="post-<?php the_ID(); ?>">
                            <a class="thumbnail" href="<?php the_permalink() ?>">  
                                <?php the_post_thumbnail('post-thumbnails', array('class' => 'img-home')); ?>
                            </a>

                        </div>
                    </div>
                <?php endwhile; endif; ?>

            </div>
<?php get_footer(); ?>
