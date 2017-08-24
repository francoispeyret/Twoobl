<?php get_header(); ?>

<div class="row">

	<div id="main" class="<?php echo _MAIN_CLASS_; ?>" role="main">

		<div class="entry-header">
			<h1 class="title"><?php _e('Sorry, but the page you were trying to view does not exist.', _TWOOBL_DOMAIN_LANG_); ?></h1>
		</div>

		<div class="entry-content clearfix">
			<?php
			// TODO
			// echo apply_filters('the_content', $twoobl->field('content_404'));
			?>
		</div>

	</div>

	<?php get_sidebar(); ?>

</div>

<?php
get_footer();
