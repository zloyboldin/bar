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
<header class="entry-header">
<h1 class="entry-title"><span><?echo single_cat_title( '', false );?></span></h1>
</header>
  <div id="primary" class="content-area">
    <div id="content" class="site-content" role="main">

    <?php if ( have_posts() ) : ?>
<table style="width: 1400px; min-width: 1400px; max-width: 1400px;">
<tr>
<td width="60%">
      <?php /* The loop */ ?>
      <?php while ( have_posts() ) : the_post(); ?>
        <?php get_template_part( 'content', get_post_format() ); ?>
      <?php endwhile; ?>

      <?php twentythirteen_paging_nav(); ?>

    <?php else : ?>
      <?php get_template_part( 'content', 'none' ); ?>
    <?php endif; ?>
</td>
<td width="20%" style="background: rgba(0,0,0,0.6)">
<div style="padding: 15px;">
<h2 class="entry-title">Еженедельные акции</h2>
<?php $posts = get_posts ("category=15&orderby=sort&posts_per_page=-1"); ?> 
<?php if ($posts) : ?>
<?php foreach ($posts as $post) : setup_postdata ($post); ?>
 
    <div class="block" style="padding-left: 10px;">
        <div style="color: #FFB800"> 
            <a href="<?php the_permalink() ?>" rel="bookmark"><?php the_title(); ?></a> 
        </div>
    </div>
 
<?php endforeach; ?>
<?php endif; ?>
</div>
</td></tr></table>
    </div><!-- #content -->
  </div><!-- #primary -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>