<?php /* 
	Template Name: 02. Prodotti
*/ ?>

<style>
    #header {padding-bottom: 80px !important; }
</style>
 <?php get_header(); ?>
<div class="content-prodotti">
    <h2 class="title-prodotti"><?php the_title(); ?></h2>
    
    <div class="col-lg-12 ">

		<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
		<div class="post-prodotti" id="post-<?php the_ID(); ?>">
		
			
			<?php the_content('<p>Leggi il resto &raquo;</p>'); ?>
			<?php wp_link_pages(array('before' => '<p><strong>Pages:</strong> ', 'after' => '</p>', 'next_or_number' => 'number')); ?>
			
		</div>

		<?php endwhile; endif; ?>

	</div>
    
        <?php 
                $loop = new WP_Query(array('post_type' => 'post', 'posts_per_page' => -1, 'orderby' => 'title', 'order' => 'ASC'));
                $count =0;
        ?>

	

            <?php if ( $loop ) : 

                while ( $loop->have_posts() ) : $loop->the_post(); ?>
                    <div class="col-lg-4 col-md-4 col-xs-6 thumb">  
                        <div class="thumbnails" id="post-<?php the_ID(); ?>">
                            <a class="thumbnail" href="<?php the_permalink() ?>">
                                <div class="thumb">
                                    <?php the_post_thumbnail('home', array('class' => 'thumb-prodotti')); ?>
                                    <div class="tit-prodotto">
                                        <?php the_title(); ?>
                                    </div>
                                </div>     
                            </a>
                        </div>
                    </div>
		<?php endwhile; endif; ?>

</div>	
<?php get_footer(); ?>
