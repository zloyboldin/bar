<?php
/*
Template Name: Kitchen and Bar
*/
?>
<?php
get_header(); ?>
    <header class="entry-header">
        <? $dir = explode("/", $_SERVER[REQUEST_URI]);?>
        <ul class="nav-menu1" id="nav">
            <h1 class="entry-title">
                <li class="kitchen">
                    <a href="/kitchen/" <?if($dir[1]=="kitchen"){?>class="food-active"<?} else {?> class="food"<?}?>>КУХНЯ</a>
                </li>&middot;
                <li class="bar">
                    <a href="/bar/" <?if($dir[1]=="bar"){?>class="food-active"<?} else {?> class="food"<?}?>>БАР</a>
                </li>
            </h1>
        </ul>
    </header>
    <div id="primary" class="content-area">
        <div id="content" class="site-content no-standart-nav" role="main">
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