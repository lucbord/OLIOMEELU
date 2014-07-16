<?php
/*
Template Name: Archives
*/
		global $options;

		foreach ($options as $value) {
			if (get_settings( $value['id'] ) === FALSE) { 
				$$value['id'] = stripslashes( $value['std'] ); 
			} else { 
				$$value['id'] = stripslashes( get_settings( $value['id'] ) ); 
			} 
		}
?>

<?php get_header(); ?>

<?php include(TEMPLATEPATH."/primary-sidebar.php");?>


   <div class="content">

<div class="post">
	<h2>Archives by Month:</h2>
		<ul><?php wp_get_archives('type=monthly'); ?></ul>

	<h2>Archives by Subject:</h2>
		<ul><?php wp_list_categories(); ?></ul>
	
</div><!-- end post -->

</div>


<?php get_footer(); ?>
