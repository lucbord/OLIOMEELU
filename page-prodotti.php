<?php /* 
	Template Name: 02. Prodotti
*/ ?>

 <?php get_header(); ?>

        <?php 
                $loop = new WP_Query(array('post_type' => 'prodotti', 'posts_per_page' => -1, 'orderby' => 'title', 'order' => 'ASC'));
                $count =0;
        ?>

	<div class="col-lg-12 ">

                <?php if ( $loop ) : 

                        while ( $loop->have_posts() ) : $loop->the_post(); ?>
		<div class="post" id="post-<?php the_ID(); ?>">
                    <li>                                  
                        <a class="thumbnail" href="<?php the_permalink() ?>">
                            <div class="thumb-brand">
                                <?php the_post_thumbnail("shop"); ?>
                                <div class="title-brand">
                                    <?php the_title(); ?>
                                </div>
                            </div>     
                        </a>

                    </li> 
			
		</div>

		<?php endwhile; endif; ?>

	</div>
<?php get_footer(); ?>
