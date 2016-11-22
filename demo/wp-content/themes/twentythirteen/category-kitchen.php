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
get_header(); ?>
<header class="entry-header">3
  <ul id="nav-menu"><li><h1 class="entry-title"><a href="/category/menu/kitchen/" class="food-active">КУХНЯ</a></h1></li>&middot;<li><h1 class="entry-title"><a href="/category/menu/bar/" class="food">БАР</a></h1></li></ul>
</header>
if($dir[1]=="kitchen"){
  $posts = get_posts("category__in=13&posts_per_page=-1&orderby=menu_order&order=ASC");
  foreach($posts as $pst){
        $namePages[] = $pst->post_title;
  }
}

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