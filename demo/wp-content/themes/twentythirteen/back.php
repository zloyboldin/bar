<?php
/*
Template Name: Contacts
*/
?>
<?php get_header(); ?>

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
                        <div class="contacts-wrap clearfix">
                            <div class="contacts-wrap-left">
                                <div class="contacts-img-wrap">
                                    <img alt="" src="http://113bar.ru/demo/wp-content/uploads/2013/12/dLqBSL2hJOA.jpg" />
                                </div>
                                <div class="contacts-information">
                                    <div class="contacts-info-title">Кафе-бар 113</div>

                                    <div>г. Новосибирск, ул. Романова, 28. Вход с торца.</div>

                                    <div class="contacts-info-work">Режим работы:</div>
                                    <div id="TA_virtualsticker101" class="TA_virtualsticker" style="float: right;">
                                        <ul id="DBfhKkw" class="TA_links MQE4kINXYtx">
                                            <li id="PAUwSp" class="2uvcpk5ReDQp">
                                                <a target="_blank"
                                                   href="http://www.tripadvisor.ru/img/cdsi/img2/branding/tripadvisor_sticker_logo_88x55-18961-2.png"
                                                   alt="TripAdvisor"/></a>
                                            </li>
                                        </ul>
                                    </div>
                                    <script src="http://www.jscache.com/wejs?wtype=virtualsticker&amp;uniq=101&amp;lang=ru&amp;locationId=5473933&amp;langversion=2"></script>
                                    <div style="text-align: left; width: 250px;">
                                        пн-чт 10:00-02:00 <br>
                                        пт c 10:00 <br>
                                        сб c 12:00 <br>
                                        вс 12:00-02:00
                                    </div>
                                </div>
                            </div>
                            <div class="contacts-wrap-right">
                                    <a id="firmsonmap_biglink"
                                       href="http://maps.2gis.ru/#/?history=project/novosibirsk/center/82.91705007009,55.033813527323/zoom/16/state/widget/id/141266769638980/firms/141266769638980">Перейти к большой карте</a>
                                    <script charset="utf-8"
                                            type="text/javascript"
                                            src="http://firmsonmap.api.2gis.ru/js/DGWidgetLoader.js"></script>
                                    <script charset="utf-8" type="text/javascript">// <![CDATA[
                                        new DGWidgetLoader({
                                            "borderColor":"#a3a3a3",
                                            "width":"600",
                                            "height":"460",
                                            "wid":"59b50f26adaea30a3fb1f9055e326a68",
                                            "pos":{
                                                "lon":"82.91705007009",
                                                "lat":"55.033813527323","zoom":"16"
                                            },
                                            "opt":{
                                                "ref":"hidden",
                                                "card":["name","contacts","payings","flamp"],
                                                "city":"novosibirsk"
                                            },
                                            "org":[{"id":"141266769638980"}]});
                                    </script>
                                    <noscript style="color: #c00; font-size: 16px; font-weight: bold;">Виджет карты использует JavaScript. Включите его в настройках вашего браузера.</noscript>
                            </div>
                        </div>
                        <div class="contacts-wrap clearfix">
                            <div class="contacts-google-wrap">
                                <div class="contacts-google">
                                    <iframe src="https://www.google.com/maps/embed?pb=!1m0!3m2!1sru!2s!4v1418695833195!6m8!1m7!1sGAHl8a3l9poAAAQY_aGt-w!2m2!1d55.03430437136101!2d82.91672713442676!3f163.86493522537677!4f-15.61253589457607!5f0.7820865974627469"
                                            width="100%" height="100%" frameborder="0"></iframe>
                                </div>
                            </div>
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