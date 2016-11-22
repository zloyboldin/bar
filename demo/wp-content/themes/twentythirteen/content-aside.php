<?php
/**
 * The template for displaying posts in the Aside post format
 *
 * @package WordPress
 * @subpackage Twenty_Thirteen
 * @since Twenty Thirteen 1.0
 */
?>
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
    <header class="entry-header">
        <?php if (is_single()) { ?>
            <h1 class="entry-title"><span style="padding: 0 10px;"><?php the_title(); ?></span></h1>
        <?php } else { ?>
            <h2 class="entry-title">
                <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
            </h2>
        <?php } ?>
    </header><!-- .entry-header -->
    <div class="entry-content">
        <div class="main-wrapper">
            <?php if (has_post_thumbnail() && !post_password_required()) {
                $image_id = get_post_thumbnail_id();
                $image_url = wp_get_attachment_image_src($image_id, 'full-size', true);
                $image_url = $image_url[0];
            ?>
                <a href="<?echo $image_url?>"><img src="<?echo $image_url?>" /></a>
            <?php } ?>
            <?php the_content( __( 'Continue reading <span class="meta-nav">&rarr;</span>', 'twentythirteen' ) ); ?>
            <?php wp_link_pages( array( 'before' => '<div class="page-links"><span class="page-links-title">' . __( 'Pages:', 'twentythirteen' ) . '</span>', 'after' => '</div>', 'link_before' => '<span>', 'link_after' => '</span>' ) ); ?>
            <footer class="entry-meta">
                <?php if ( comments_open() && ! is_single() ) : ?>
                    <div class="comments-link">
                        <?php comments_popup_link( '<span class="leave-reply">' . __( 'Leave a comment', 'twentythirteen' ) . '</span>', __( 'One comment so far', 'twentythirteen' ), __( 'View all % comments', 'twentythirteen' ) ); ?>
                    </div><!-- .comments-link -->
                <?php endif; // comments_open() ?>

                <?php if ( is_single() && get_the_author_meta( 'description' ) && is_multi_author() ) : ?>
                    <?php get_template_part( 'author-bio' ); ?>
                <?php endif; ?>
            </footer><!-- .entry-meta -->
            <div class="entry-meta">
                <?php twentythirteen_entry_meta(); ?>
                <?php edit_post_link( __( 'Edit', 'twentythirteen' ), '<span class="edit-link">', '</span>' ); ?>
            </div><!-- .entry-meta -->
        </div>
    </div><!-- .entry-content -->
</article><!-- #post -->