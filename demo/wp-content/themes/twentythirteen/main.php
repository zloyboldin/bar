<?php
/*
Template Name: Main page
*/
?>
<?php get_header(); ?>
<script>
function pointer_bounce(){
	jQuery(".pointer").effect("bounce", { times: 1, distance: 5 }, 1000, function(){ jQuery(".pointer").effect("bounce", { times: 1, distance: 5 }, 1000, pointer_bounce)});
}

jQuery(document).ready(function(){
	pointer_bounce();
});


</script>
	<div id="primary" class="content-area">
		<div id="content" class="site-content" role="main">
		<?php if ( have_posts() ) : ?>

			<?php /* The loop */ ?>
			<?php while ( have_posts() ) : the_post(); ?>
				<?php get_template_part( 'content', get_post_format() ); ?>
			<?php endwhile; ?>

			<?php twentythirteen_paging_nav(); ?>

		<?php else : ?>
			<?php get_template_part( 'content', 'none' ); ?>
		<?php endif; ?>

		</div><!-- #content -->
	</div><!-- #primary -->
<?php get_sidebar(); ?>
<?php get_footer(); ?>