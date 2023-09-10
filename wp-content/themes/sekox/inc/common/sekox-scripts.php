<?php

/**
 * sekox_scripts description
 * @return [type] [description]
 */
function sekox_scripts() {

    /**
     * all css files
    */

    wp_enqueue_style( 'sekox-fonts', sekox_fonts_url(), array(), time() );
    if( is_rtl() ){
        wp_enqueue_style( 'bootstrap-rtl', SEKOX_THEME_CSS_DIR.'bootstrap.rtl.min.css', array() );
    }else{
        wp_enqueue_style( 'bootstrap', SEKOX_THEME_CSS_DIR.'bootstrap.min.css', array() );
    }
    wp_enqueue_style( 'animate', SEKOX_THEME_CSS_DIR . 'animate.css', [] );
    wp_enqueue_style( 'swiper-bundle', SEKOX_THEME_CSS_DIR . 'swiper-bundle.css', [] );
    wp_enqueue_style( 'fontawesome-5-pro', SEKOX_THEME_CSS_DIR . 'fontawesome-5-pro.css', [] );
    wp_enqueue_style( 'slick', SEKOX_THEME_CSS_DIR . 'slick.css', [] );
    wp_enqueue_style( 'meanmenu', SEKOX_THEME_CSS_DIR . 'meanmenu.css', [] );
    wp_enqueue_style( 'magnific-popup', SEKOX_THEME_CSS_DIR . 'magnific-popup.css', [] );
    wp_enqueue_style( 'eleganticons', SEKOX_THEME_CSS_DIR . 'elegantIcons.css', [] );
    wp_enqueue_style( 'spacing', SEKOX_THEME_CSS_DIR . 'spacing.css', [] );

    wp_enqueue_style( 'sekox-core', SEKOX_THEME_CSS_DIR . 'sekox-core.css', [], time() );
    wp_enqueue_style( 'sekox-unit', SEKOX_THEME_CSS_DIR . 'sekox-unit.css', [], time() );
    wp_enqueue_style( 'sekox-custom', SEKOX_THEME_CSS_DIR . 'sekox-custom.css', [] );
    wp_enqueue_style( 'sekox-style', get_stylesheet_uri() );

    // all js
    wp_enqueue_script( 'waypoints', SEKOX_THEME_JS_DIR . 'waypoints.js', [ 'jquery' ], false, true );
    wp_enqueue_script( 'bootstrap-bundle', SEKOX_THEME_JS_DIR . 'bootstrap.bundle.min.js', [ 'jquery' ], '', true );
    wp_enqueue_script( 'swiper-bundle', SEKOX_THEME_JS_DIR . 'swiper-bundle.js', [ 'jquery' ], false, true );
    wp_enqueue_script( 'meanmenu', SEKOX_THEME_JS_DIR . 'meanmenu.js', [ 'jquery' ], false, true );
    wp_enqueue_script( 'slick', SEKOX_THEME_JS_DIR . 'slick.js', [ 'jquery' ], false, true );
    wp_enqueue_script( 'magnific-popup', SEKOX_THEME_JS_DIR . 'magnific-popup.js', [ 'jquery' ], '', true );
    wp_enqueue_script( 'counterup', SEKOX_THEME_JS_DIR . 'counterup.js', [ 'jquery' ], false, true );
    wp_enqueue_script( 'wow', SEKOX_THEME_JS_DIR . 'wow.js', [ 'jquery' ], false, true );
    wp_enqueue_script( 'isotope-pkgd', SEKOX_THEME_JS_DIR . 'isotope-pkgd.js', [ 'imagesloaded' ], false, true );

    wp_enqueue_script( 'sekox-main', SEKOX_THEME_JS_DIR . 'main.js', [ 'jquery' ], time(), true );

    if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
        wp_enqueue_script( 'comment-reply' );
    }
}
add_action( 'wp_enqueue_scripts', 'sekox_scripts' );

/*
Register Fonts
 */
function sekox_fonts_url() {
    $font_url = '';

    /*
    Translators: If there are characters in your language that are not supported
    by chosen font(s), translate this to 'off'. Do not translate into your own language.
     */
    if ( 'off' !== _x( 'on', 'Google font: on or off', 'sekox' ) ) {
        $font_url = 'https://fonts.googleapis.com/css2?family=Work+Sans:wght@400;500;600;700;800;900&display=swap';
    }
    return $font_url;
}