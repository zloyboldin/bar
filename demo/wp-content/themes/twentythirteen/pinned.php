<?php
/*
Template Name: Pinned
*/
?>
<?php

get_header(); ?>
<?php
function get_curl_data($url) {
    $ch = curl_init();
    $timeout = 3;
    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, $timeout);
    $data = curl_exec($ch);
    curl_close($ch);
    return $data;
}
?>
    <div id="primary" class="content-area">
        <div id="content" class="site-content" role="main">

            <?php /* The loop */ ?>
            <?php while ( have_posts() ) : the_post(); ?>

                <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                    <header class="entry-header">
                        <?php if ( has_post_thumbnail() && ! post_password_required() ) : ?>
                            <div class="entry-thumbnail">
                                <?php the_post_thumbnail(); ?>
                            </div>
                        <?php endif; ?>

                        <h1 class="entry-title"><span style="padding: 0 10px;">ВНИМАНИЕ!</span></h1>
                    </header><!-- .entry-header -->

                    <div class="entry-content">
                        <?php
                        global $vk_group_id; ?>
                        <div class="vk-photos-wrap">
                            <?php
                            $wall_content = get_curl_data("https://api.vk.com/method/wall.get?filter=owner&owner_id=".$vk_group_id."&count=1&v=5.37");
                            $response = json_decode($wall_content)->response;
                            if (isset($response->items) && isset($response->items[0]->is_pinned) &&
                                ($response->items[0]->is_pinned == 1)) {
                            ?>
                            <div class="personal-wrap clearfix">
                                <?php if (isset($response->items[0]->attachments) &&
                                          ($response->items[0]->attachments[0]->type == 'photo')) {?>
                                    <div class="personal-img-wrap">
                                        <img src="<?php echo $response->items[0]->attachments[0]->photo->photo_807?>">
                                    </div>
                                <?php
                                }
                                $patterns = array ('/\[(id.*)\|(.*)\]/U');
                                $replace = array ('<a href="http://vk.com/$1">$2</a>');
                                echo nl2br(preg_replace($patterns, $replace, $response->items[0]->text));?>
                            </div>
                            <?php
                            } else {
                                echo 'К сожалению, в данный момент в группе нет закреплённого поста! =(';
                            }
                            ?>
                        </div>
                    </div><!-- .entry-content -->

                    <footer class="entry-meta">
                        <?php edit_post_link( __( 'Edit', 'twentythirteen' ), '<span class="edit-link">', '</span>' ); ?>
                    </footer><!-- .entry-meta -->
                </article><!-- #post -->

                <?php comments_template(); ?>
            <?php endwhile; ?>

        </div><!-- #content -->
    </div><!-- #primary -->
<?php get_sidebar(); ?>
<?php get_footer(); ?>