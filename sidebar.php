
<div class="sidebar <?php echo $et_columnorder; ?>">
<ul>
<?php if ( !function_exists('register_sidebar')
        || !dynamic_sidebar('sidebar-widgets') ) : ?>
        

<li><h2>Archives</h2>
	<ul>
		<?php wp_get_archives('type=monthly'); ?>
	</ul>
</li>


<?php wp_list_bookmarks(); ?>


<?php endif; ?>

</ul>

</div>

