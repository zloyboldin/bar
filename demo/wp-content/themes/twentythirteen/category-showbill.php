<?php
/**
 * The template for displaying Category pages
 *
 * @link http://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage Twenty_Thirteen
 * @since Twenty Thirteen 1.0
 */
get_header();
?>
<header class="entry-header">
<h1 class="entry-title"><span><?echo single_cat_title( '', false );?></span></h1>
</header>
  <div id="primary" class="content-area">
    <div id="content" class="site-content" role="main">
<?
//global $query_string;
//query_posts($query_string . '&posts_per_page=2&paged='. get_query_var('paged'));
//query_posts(array('category_name'=> 'showbill', 'posts_per_page'=>'15', 'paged' => get_query_var('paged')));
//query_posts($query_string.'&cat=7&posts_per_page=15');

?>
    <?php if ( have_posts() ) : ?>

      <?php while ( have_posts() ) : the_post(); ?>
        <?php get_template_part( 'content', get_post_format() ); ?>
      <?php endwhile; ?>

      <?php twentythirteen_paging_nav(); ?>

    <?php else : ?>1
      <?php get_template_part( 'content', 'none' ); ?>
    <?php endif; ?>

    </div><!-- #content -->
  </div><!-- #primary -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>