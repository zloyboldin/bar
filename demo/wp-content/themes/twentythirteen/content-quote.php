<?php
/**
 * The template for displaying posts in the Quote post format
 *
 * @package WordPress
 * @subpackage Twenty_Thirteen
 * @since Twenty Thirteen 1.0
 */
$category = get_the_category();
?>
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
    <header class="entry-header">
        <h1 class="entry-title"><span><?echo $category[0]->name;?></span></h1>

    </header>
    <div class="personal-slider-wrap">
        <div class="slider-safe-zone">
            <div class="personal-slider">
                <?
                $needed_id = get_the_ID();
                $go_to = 0;
                $posts = get_posts("category_name=personal&numberposts=-1");
                if ($posts){
                    $count = 0;
                    foreach ($posts as $post){
                        setup_postdata ($post);
                        $thumb_id = get_post_thumbnail_id();
                        $thumb_url = wp_get_attachment_image_src($thumb_id,'thumbnail-size', true);
                        if ($needed_id == $post->ID) {
                            $go_to = $count;
                        }
                        $count++;
                        ?>
                        <div class="personal-slide">
                            <a href="<? echo get_permalink()?>" title="<? echo $post->post_title ?>" style="position: relative;max-width: 300px;">
                                <div class="personal-post-img <?php echo ($thumb_url[1] > $thumb_url[2]) ? 'landscape' : 'portrait' ?>">
                                    <img src="<?php echo $thumb_url[0]?>" alt=""/>
                                </div>
                            </a>
                        </div>
                    <?}
                }
                wp_reset_query();
                ?>
            </div>
        </div>
        <div class="personal-next"></div>
        <div class="personal-prev"></div>
    </div>

    <script>
        var slider = jQuery('.personal-slider').slick({
            dots: false,
            infinite: true,
            arrows: true,
            initialSlide: <?php echo $go_to?>,
            autoplay: true,
            autoplaySpeed: 5000,
            pauseOnHover: false,
            speed: 500,
            slidesToShow: 7,
            slidesToScroll: 1,
            swipeToSlide: true,
            prevArrow: '.personal-prev',
            nextArrow: '.personal-next',
            responsive: [
                {
                    breakpoint: 1025,
                    settings: {
                        slidesToShow: 6,
                        arrows: true
                    }
                },
                {
                    breakpoint: 769,
                    settings: {
                        slidesToShow: 5,
                        arrows: true
                    }
                },
                {
                    breakpoint: 641,
                    settings: {
                        slidesToShow: 4,
                        arrows: true
                    }
                },
                {
                    breakpoint: 481,
                    settings: {
                        slidesToShow: 3,
                        arrows: true
                    }
                }
            ]
        });
    </script>
    <header class="entry-header">
        <h1 class="entry-title">
            <a href="<?php echo esc_url( twentythirteen_get_link_url() ); ?>"><?php the_title(); ?></a>
        </h1>
    </header>
    <div class="entry-content">
        <div class="personal-wrap clearfix">
            <div class="personal-img-wrap">
                <?
                $image_id = get_post_thumbnail_id();
                $image_url = wp_get_attachment_image_src($image_id, 'full-size', true);
                $image_url = $image_url[0];
                ?>
                <img src="<?echo $image_url?>" />
            </div>
                <?php the_content( __( 'Continue reading <span class="meta-nav">&rarr;</span>', 'twentythirteen' ) ); ?>
                <?php wp_link_pages( array( 'before' => '<div class="page-links"><span class="page-links-title">' . __( 'Pages:', 'twentythirteen' ) . '</span>', 'after' => '</div>', 'link_before' => '<span>', 'link_after' => '</span>' ) ); ?>
        </div>

    </div>
    <footer class="entry-meta">
        <?php twentythirteen_entry_meta(); ?>

        <?php if ( comments_open() && ! is_single() ) : ?>
            <span class="comments-link">
			<?php comments_popup_link( '<span class="leave-reply">' . __( 'Leave a comment', 'twentythirteen' ) . '</span>', __( 'One comment so far', 'twentythirteen' ), __( 'View all % comments', 'twentythirteen' ) ); ?>
		</span><!-- .comments-link -->
        <?php endif; // comments_open() ?>
        <?php edit_post_link( __( 'Edit', 'twentythirteen' ), '<span class="edit-link">', '</span>' ); ?>
    </footer><!-- .entry-meta -->
</article><!-- #post -->
