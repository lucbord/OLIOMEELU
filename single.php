<style>
    #header {padding-bottom: 80px !important; }
</style>
<?php get_header(); ?>

<div class="content-prodotti">
    <h2 class="title-prodotti"><?php the_title(); ?></h2>    
    <div class="col-lg-7 col-md-7 col-xs-7">
        <div class="content-single">  
            <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
                <div class="thumbnails" id="post-<?php the_ID(); ?>">
                        <a class="thumbnail" href="<?php the_permalink() ?>">
                            <div class="thumb">
                                <?php the_post_thumbnail('single', array('class' => 'thumb-single')); ?>
                            </div>
                        </a>
                </div>
            <div class="txt-single"><?php the_content(''); ?></div>
            <?php endwhile; endif; ?>
        </div>
    </div>
    
        <?php 
            $loop = new WP_Query(array('post_type' => 'post', 'posts_per_page' => -1, 'orderby' => 'title', 'order' => 'ASC'));
            $count =0;
        ?>   
    <div class="col-lg-4 col-md-4 col-xs-4">
        <div class="nav-prod">

        <h3>Catalogo prodotti</h3>    
        <div class="list-prod">
            <ul>
            <?php if ( $loop ) : 
                while ( $loop->have_posts() ) : $loop->the_post(); ?>
                   <li>
                        <a href="<?php the_permalink() ?>">      
                            <?php the_title(); ?>
                        </a>
                    </li> 
                <?php endwhile; endif; ?>
            </ul>
        </div>
            
        </div>
    </div> 

</div>
<?php get_footer(); ?>