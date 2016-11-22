<?php
/**
 * The Header template for our theme
 *
 * Displays all of the <head> section and everything up till <div id="main">
 *
 * @package WordPress
 * @subpackage Twenty_Thirteen
 * @since Twenty Thirteen 1.0
 */
?>
<?php wp_enqueue_script("jquery"); ?>

<!DOCTYPE html>
<!--[if IE 7]>
<html class="ie ie7" <?php language_attributes(); ?>>
<![endif]-->
<!--[if IE 8]>
<html class="ie ie8" <?php language_attributes(); ?>>
<![endif]-->
<!--[if !(IE 7) | !(IE 8)  ]><!-->
<html <?php language_attributes(); ?>>
<!--<![endif]-->
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width">
    <meta property="og:title" content="<?php wp_title( '|', true, 'right' ); ?>"/>
    <title><?php wp_title( '|', true, 'right' ); ?></title>
    <link rel="profile" href="http://gmpg.org/xfn/11">
    <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/slick.css" type="text/css" media="screen" />

    <!--[if lt IE 9]>
    <script src="<?php echo get_template_directory_uri(); ?>/js/html5.js"></script>
    <![endif]-->
    <?php wp_head(); ?>
    <script src="<?php echo get_template_directory_uri(); ?>/js/slick.js"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/js/snow.js"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/js/effects.core.js"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/js/effects.bounce.js"></script>
    <script src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8/jquery-ui.min.js"></script>
</head>
<script>
    var ColorArray=["FFCC00","FFFF33","FFFF00","FF9933","FF3300","FF0000",
        "FF6666","FF0033","FF0066","FF6699","FF0099","FF3399","FF00CC","FF33CC","FF33FF",
        "FF00FF","CC00CC","CC33CC","9900CC","CC00FF","9933FF","9900FF","9966FF","6633FF",
        "6666FF","6699FF","0066FF","0099FF","3399FF","00CCFF","66CCCC","33FFFF","00CCCC",
        "00CC99","33FF66","339933","00FF00","33CC33","33CC00","33FF00","66CC33",
        "99FF33","CCFF00"];

    function randomColor(){
        r = Math.floor(Math.random() * (256));
        g = Math.floor(Math.random() * (256));
        b = Math.floor(Math.random() * (256));
        jQuery('a .logo-back').css('background-color','rgb('+r+','+g+','+b+')');
    }

    function rnd_color() {
        var col='#'+ColorArray[Math.floor(Math.random()*ColorArray.length)];
        jQuery('a .logo-back').css('background-color',col);
    }

    jQuery(document).ready(function(){
// randomColor();
// var t = setInterval(randomColor,3000);
        rnd_color();
        var t = setInterval(rnd_color,3000);
    });
</script>

<body <?php body_class(); ?>>
<?php if (is_front_page()){ ?>
    <div class="back-image">
        <img src="https://pp.vk.me/c621923/v621923444/33663/5OGjwc5OhNM.jpg" alt="" class="image"/>
    </div>
    <!--<script>
            var currentImage = 1;
            if (window.innerWidth <= 640) {
                jQuery('.back-image').html('<img src="https://pp.vk.me/c621923/v621923444/33661/rtL7pgPW174.jpg" alt="" class="image"/>');
                currentImage = 0;
            }  else {
                jQuery('.back-image').html('<img src="https://pp.vk.me/c621923/v621923444/33663/5OGjwc5OhNM.jpg" alt="" class="image"/>');
                currentImage = 1;
            }
            jQuery(window).on('resize', function(){
                if ((window.innerWidth > 640) && (currentImage == 0)) {
                    jQuery('.back-image').html('<img src="https://pp.vk.me/c621923/v621923444/33663/5OGjwc5OhNM.jpg" alt="" class="image"/>');
                    currentImage = 1;
                }
            });
    </script>-->
    <div class="map-main">
        <div class="map_info" id="menu-food" style="z-index: 2 !important;">
            <img class="pointer" src="<?php echo get_template_directory_uri(); ?>/images/pointer_menu.png" width="25px"/>
            <a href="/kitchen/"><img class="point" src="<?php echo get_template_directory_uri(); ?>/images/point.png" /></a>
            <div class="map_hover" style="position: absolute; top: -40px;left: -3px;"><a href="/kitchen/">Посмотреть</a><br>наше Меню</div></div>

        <div class="map_info" id="menu-bar" style="z-index: 2 !important;">
            <img class="pointer" src="<?php echo get_template_directory_uri(); ?>/images/pointer_bar.png" width="25px"/>
            <a href="/bar/"><img class="point" src="<?php echo get_template_directory_uri(); ?>/images/point.png" /></a>
            <div class="map_hover" style="top: -42px; left: -80px"><a href="/bar/">Заглянуть</a> в<br>Барную карту</div>
        </div>

        <!--<div class="map_info" id="dj" style="z-index: 2 !important;">
            <img class="pointer" src="<?php /*echo get_template_directory_uri(); */?>/images/pointer_dj.png" width="25px"/>
            <a href="/category/showbill/"><img class="point" src="<?php /*echo get_template_directory_uri(); */?>/images/point.png"/></a>
            <div class="map_hover" style="top: -30px; left: -80px">Истории <a href="/category/showbill/">тут</a></div>
        </div>
-->
        <div class="map_info" id="tv" style="z-index: 2 !important;">
            <img class="pointer" src="<?php echo get_template_directory_uri(); ?>/images/pointer_tv.png" width="35px"/>
            <a href="/video/"><img class="point" src="<?php echo get_template_directory_uri(); ?>/images/point.png"/></a>
            <div class="map_hover" style="top: -30px;">Видео <a href="/video/">тут</a></div>
        </div>

        <div class="map_info" id="exit" style="z-index: 2 !important;">
            <img class="pointer" src="<?php echo get_template_directory_uri(); ?>/images/pointer_exit.png" width="25px"/>
            <a href="/category/promotion_week/"><img class="point" src="<?php echo get_template_directory_uri(); ?>/images/point.png"/></a>
            <div class="map_hover" style="top: -40px; left: -50px"><a href="/category/promotion_week/">Ознакомиться</a> с Акциями</div>
        </div>
    </div>
<?php
}
?>
<!--<div id="picture"><img src="<?php echo get_template_directory_uri(); ?>/images/back_main.png" style="position: fixed"></div>-->
<div id="page" class="hfeed site">
    <div class="new-arrow-top"><i class="fa fa-chevron-up"></i></div>
    <header id="masthead" class="site-header">
        <div class="menu-pointer"><div class="image"></div></div>
        <div class="targ_link"><i class="fa fa-bars"></i></div>
        <div id="navbar" class="navbar">
            <nav id="site-navigation" class="navigation main-navigation" role="navigation">
                <h3 class="menu-toggle"><?php _e( 'Menu', 'twentythirteen' ); ?></h3>
                <a class="screen-reader-text skip-link" href="#content" title="<?php esc_attr_e( 'Skip to content', 'twentythirteen' ); ?>"><?php _e( 'Skip to content', 'twentythirteen' ); ?></a>
                <?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_class' => 'nav-menu' ) ); ?>
                <?//php get_search_form(); ?>
            </nav><!-- #site-navigation -->
        </div><!-- #navbar -->

        <div id="navbar-two" class="navbar-two" >
            <div class="info">
                <div class="navbar-phone">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/ico_phone.png" style="padding: 0 10px 0 50px;"/>
                    (383) 383-02-92
                </div>
                <div class="logo" style="display: inline;">	<a href="/"><div class="logo-back"></div><img class="logo" src="<?php echo get_template_directory_uri(); ?>/images/logo_new2.png" width = ""/></a></div>
                <div class="navbar-address">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/ico_adress.png" style="padding-right: 10px;"/>
                    Новосибирск, Романова, 28
                </div>
            </div>
        </div>
        <script>
            setInterval(function(){
                jQuery('.menu-pointer').toggleClass('moved');
            },500);
            jQuery('.targ_link').on('click', function(){
                jQuery('.menu-item-has-children').removeClass('menu-open-sub-menu');
                jQuery('.main-navigation').toggleClass('active');
                jQuery('.targ_link').toggleClass('active');
                jQuery('.site-header').toggleClass('targ_opened');
            });
            jQuery('.menu-item-has-children > a').on('click', function(){
                event.preventDefault();
                if (jQuery(this).parent().hasClass('menu-open-sub-menu')) {
                    jQuery('.menu-item-has-children').removeClass('menu-open-sub-menu');
                } else {
                    jQuery('.menu-item-has-children').removeClass('menu-open-sub-menu');
                    jQuery(this).parent().addClass('menu-open-sub-menu');
                }
            });

            var arrowTop  = jQuery('.new-arrow-top');

            function scrollPointer(){
                if (jQuery(window).scrollTop() > 100) {
                    arrowTop.fadeIn(400);
                } else {
                    arrowTop.fadeOut(400);
                }
            }
            jQuery(window).scroll(function(){
                scrollPointer();
            });
            jQuery(arrowTop).click(function() {
                jQuery("html, body").animate({ scrollTop:0 },
                    {
                        duration: 800,
                        easing: "easeInOutExpo"
                    });
            });
        </script>
        <!--<div class="map"><a href="<?php echo get_site_url();?>/map/"><img src="<?php echo get_template_directory_uri(); ?>/images/ico_360.png"/></a></div>-->


    </header><!-- #masthead -->

    <div id="main" class="site-main">
