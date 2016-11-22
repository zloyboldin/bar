<?php
/**
 * The template for displaying the footer
 *
 * Contains footer content and the closing of the #main and #page div elements.
 *
 * @package WordPress
 * @subpackage Twenty_Thirteen
 * @since Twenty Thirteen 1.0
 */
?>

</div><!-- #main -->

</div><!-- #page -->

<?php if ( is_front_page() ){ ?>
    <div class="flamp-horisontal">
        <a class="flamp-widget" href="http://novosibirsk.flamp.ru/firm/113_bar-141266769638980"  data-flamp-widget-type="big" data-flamp-widget-count="3" data-flamp-widget-orientation="landscape" data-flamp-widget-id="141266769638980">Отзывы о нас на Флампе</a><script>!function(d,s){var js,fjs=d.getElementsByTagName(s)[0];js=d.createElement(s);js.async=1;js.src="//widget.flamp.ru/loader.js";fjs.parentNode.insertBefore(js,fjs);}(document,"script");</script>
    </div>
    <div class="flamp-vertical">
        <a class="flamp-widget" href="http://novosibirsk.flamp.ru/firm/113_bar-141266769638980"  data-flamp-widget-type="big" data-flamp-widget-count="3" data-flamp-widget-orientation="portrait" data-flamp-widget-id="141266769638980">Отзывы о нас на Флампе</a><script>!function(d,s){var js,fjs=d.getElementsByTagName(s)[0];js=d.createElement(s);js.async=1;js.src="//widget.flamp.ru/loader.js";fjs.parentNode.insertBefore(js,fjs);}(document,"script");</script>
    </div>
    <?
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
    function cropStr($str, $size){
        $str = substr($str,0, $size);
        return substr($str, 0, strrpos($str, ' ' )).'...';
    }

    $today = getdate();
    query_posts('category_name=promotion_week'); ?>
    <?
    if( have_posts() ){

            ?>
            <div class="hidden-post" style="display: none;">
                <?php
                global $vk_group_id;
                $wall_content = get_curl_data("https://api.vk.com/method/wall.get?filter=owner&owner_id=".$vk_group_id."&count=1&v=5.37");
                $response = json_decode($wall_content)->response;
                if (isset($response->items) && isset($response->items[0]->is_pinned) &&
                    ($response->items[0]->is_pinned == 1)) {
                    $vk_wall_photo = null;
                    if (isset($response->items[0]->attachments) &&
                        ($response->items[0]->attachments[0]->type == 'photo')) {
                        $vk_wall_photo = $response->items[0]->attachments[0]->photo->photo_604;
                    }
                    $vk_wall_text = cropStr($response->items[0]->text, 80);
                ?>
                <div class="advps-slide vk"
                     style="width: 250px; height: 250px; border-radius: 250px; top: 0px; position: absolute; left: 0px; display: block; z-index: 11; opacity: 1; background: url(<?php echo $vk_wall_photo?>) 50% 50% / cover;">
                    <a target="_blank"
                       href="<?php echo get_permalink()?>pinned"> </a>

                    <div class="advps-excerpt-one" style="width:100%;height:100%;top:0; left:0;">
                        <a href="<?php echo get_permalink()?>pinned"
                           style="color: rgb(230, 230, 230);">
                            <div class="advps-overlay-one"
                                 style="background-color:#000000; -moz-opacity:0;filter:alpha(opacity=0);opacity:0;"></div>
                        </a>

                        <div class="advps-excerpt-block-one"
                             style="color:#FFFFFF;font-size:12px;-moz-opacity:1;filter:alpha(opacity=100);opacity:1;">
                            <h2 class="advs-title"
                                style="font-size:22px !important;margin:5px 0px 10px 0px !important;color:#FFFFFF"><a
                                    href="<?php echo get_permalink()?>pinned"
                                    style="color:#FFFFFF"><?php echo $vk_wall_text?></a></h2>
                        </div>
                    </div>
                </div>
                <?php } ?>
                <!--<div class="advps-slide new-year"
                     style="width: 250px; height: 250px; border-radius: 250px; top: 0px; position: absolute; left: 0px; display: block; z-index: 11; opacity: 1; background: url('http://113bar.ru/demo/wp-content/uploads/2015/11/ke9UgEwHVrE.jpg') 50% 50% / cover;">
                    <div id="snow" class="snow"></div>
                    <a target="_blank"
                       href="<?php /*echo get_permalink()*/?>newyear/"> </a>

                    <div class="advps-excerpt-one" style="width:100%;height:100%;top:0; left:0;">
                        <a href="<?php /*echo get_permalink()*/?>newyear/"
                           style="color: rgb(230, 230, 230);">
                            <div class="advps-overlay-one"
                                 style="background-color:#000000; -moz-opacity:0;filter:alpha(opacity=0);opacity:0;"></div>
                        </a>

                        <div class="advps-excerpt-block-one"
                             style="color:#FFFFFF;font-size:12px;-moz-opacity:1;filter:alpha(opacity=100);opacity:1;">
                            <h2 class="advs-title"
                                style="font-size:22px !important;margin:5px 0px 10px 0px !important;color:#FFFFFF"><a
                                    href="<?php /*echo get_permalink()*/?>newyear/"
                                    style="color:#FFFFFF">Новый год со 113</a></h2>
                        </div>
                    </div>
                </div>-->
            </div>
            <div class="slider-footer">
                <?php echo do_shortcode( '[advps-slideshow optset="4"]' ); ?>
                <script>
                    /*jQuery('.slider-footer .advps-slide-container >:first-child ').prepend(jQuery('.hidden-post > .advps-slide.new-year'));*/
                    jQuery('.slider-footer .advps-slide-container >:first-child ').prepend(jQuery('.hidden-post > .advps-slide.vk'));
                    /*snow(1);*/
                </script>
            </div>
    <?}}?>
<div class="for-footer"></div>
<footer id="colophon" class="clearfix site-footer" role="contentinfo">
    <?php get_sidebar( 'main' ); ?>

    <div class="site-info clearfix">
        <?php do_action( 'twentythirteen_credits' ); ?>
        <div class="footer-copy">
            © 2015, Бар 113. Все права защищены.
        </div>



        <div class="footer-private">
            <!--<a href="mailto: info@bar113.ru">Email: info@bar113.ru</a>
<img src="<?echo get_bloginfo(template_url)?>/images/key.png" style="padding-left: 50px;"> Staff only-->

            <!-- .site-info -->

            <a href="http://metrika.yandex.ru/stat/?id=23758168&amp;from=informer"
               target="_blank" rel="nofollow"><img src="//bs.yandex.ru/informer/23758168/3_1_FFFFFFFF_EFEFEFFF_0_pageviews"
                                                   style="width:88px; height:31px; border:0;" alt="Яндекс.Метрика" title="Яндекс.Метрика: данные за сегодня (просмотры, визиты и уникальные посетители)" onclick="try{Ya.Metrika.informer({i:this,id:23758168,lang:'ru'});return false}catch(e){}"/></a>
            <!-- /Yandex.Metrika informer -->

            <!-- Yandex.Metrika counter -->
            <script type="text/javascript">
                jQuery( "iframe" ).wrap("<div class='video-wrapper'></div>");
                (function (d, w, c) {
                    (w[c] = w[c] || []).push(function() {
                        try {
                            w.yaCounter23758168 = new Ya.Metrika({id:23758168,
                                clickmap:true,
                                trackLinks:true,
                                accurateTrackBounce:true});
                        } catch(e) { }
                    });

                    var n = d.getElementsByTagName("script")[0],
                        s = d.createElement("script"),
                        f = function () { n.parentNode.insertBefore(s, n); };
                    s.type = "text/javascript";
                    s.async = true;
                    s.src = (d.location.protocol == "https:" ? "https:" : "http:") + "//mc.yandex.ru/metrika/watch.js";

                    if (w.opera == "[object Opera]") {
                        d.addEventListener("DOMContentLoaded", f, false);
                    } else { f(); }
                })(document, window, "yandex_metrika_callbacks");
            </script>
            <noscript><div><img src="//mc.yandex.ru/watch/23758168" style="position:absolute; left:-9999px;" alt="" /></div></noscript>
            <!-- /Yandex.Metrika counter -->
        </div>
        <div class="footer-icons">
            <a href="https://vk.com/bar113" target="_blank"><img src="<?echo get_bloginfo(template_url)?>/images/vk.png"></a>
            <a href="http://instagram.com/113bar" target="_blank"><img src="<?echo get_bloginfo(template_url)?>/images/instgrm.png"></a>
            <a href="https://twitter.com/bar_113" target="_blank"><img src="<?echo get_bloginfo(template_url)?>/images/tw.png"></a>
        </div>

    </div>
</footer><!-- #colophon -->
<?php if ( !is_front_page() ){ ?>
    <div id="back_overlay"></div>
<?php }?>
<?php wp_footer(); ?>
</body>
</html>