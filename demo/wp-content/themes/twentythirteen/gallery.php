<?php
/*
Template Name: Gallery
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

                        <h1 class="entry-title"><span style="padding: 0 10px;"><?php the_title(); ?></span></h1>
                    </header><!-- .entry-header -->

                    <div class="entry-content">
                        <?php
                        global $vk_group_id;
                        global $vk_albums_per_page;
                        the_content();
                        if (isset($_GET['album'])) { ?>
                            <div class="vk-photos-wrap">
                                <?php
                                $album_id = $_GET['album'];
                                $album_content = get_curl_data("https://api.vk.com/method/photos.getAlbums?owner_id=".$vk_group_id."&album_ids=".$album_id."&v=5.37");
                                $response = json_decode($album_content)->response;
                                $album_title = $response->items[0]->title;
                                $photos_content = get_curl_data("https://api.vk.com/method/photos.get?owner_id=".$vk_group_id."&album_id=".$album_id."&photo_sizes=1&v=5.37");
                                $response = json_decode($photos_content)->response;
                                echo '<div class="vk-photos-wrap-title">
                                          <a href="'.get_permalink().'" style="color: #ea9629;">'.get_the_title().'</a>
                                          &nbsp;/&nbsp;'.$album_title.'
                                      </div>';
                                foreach ($response->items as $photo) { ?>
                                    <a href="<?php echo $photo->sizes[4]->src?>" class="vk-photo">
                                        <div class="vk-photo-img-wrapper">
                                            <img src="<?php echo $photo->sizes[7]->src?>" alt="<?php echo $photo->id?>"/>
                                        </div>
                                    </a>
                                <?php
                                }
                                ?>
                            </div>
                        <?php } else { ?>
                            <div class="vk-albums-wrap">
                                <?php
                                $curr_page = (get_query_var('page')) ? get_query_var('page') : 1;
                                $offset = $vk_albums_per_page * ($curr_page - 1);
                                $content = get_curl_data("https://api.vk.com/method/photos.getAlbums?owner_id=".$vk_group_id."&count=".$vk_albums_per_page."&offset=".$offset."&need_covers=1&photo_sizes=1&v=5.37&oauth=1");
                                $response = json_decode($content)->response;
                                $total_pages = (int)ceil($response->count / $vk_albums_per_page);
                                foreach ($response->items as $album) {
                                    ?>
                                    <a href="<?php echo get_permalink().'?album='.$album->id?>" class="vk-album">
                                        <div class="vk-album-img-wrapper">
                                            <img src="<?php echo isset($album->sizes[8]) ? $album->sizes[8]->src : $album->sizes[(count($album->sizes) - 1)]->src?>" alt="<?php echo $album->title?>"/>
                                        </div>
                                        <div class="vk-album-desc">
                                            <?php echo $album->title?>
                                        </div>
                                    </a>
                                <?php
                                }
                                if ($total_pages > 1) {
                                    ?>
                                    <div class="ngg-navigation">
                                        <?php
                                        if ($curr_page > 1) {
                                            echo '<a class="prev" href="'.get_permalink().($curr_page-1).'">◄</a>';
                                        }
                                        for ($i = -3; $i <= 3; $i++) {
                                            $page_id = $curr_page + $i;
                                            if ($page_id > 0 && $page_id <= $total_pages) {
                                                if ($page_id == $curr_page) {
                                                    echo '<span class="current">'.$curr_page.'</span>';
                                                } else {
                                                    echo '<a class="page-numbers" href="'.get_permalink().($page_id).'">'.$page_id.'</a>';
                                                }
                                            }
                                        }
                                        if ($curr_page < $total_pages) {
                                            echo '<a class="next" href="'.get_permalink().($curr_page+1).'">►</a>';
                                        }
                                        ?>
                                    </div>
                                <?php
                                }
                                ?>
                            </div>
                        <?php
                        }
                        ?>

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
