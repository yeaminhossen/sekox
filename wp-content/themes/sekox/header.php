<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package sekox
 */
?>

<!doctype html>
<html <?php language_attributes();?>>
<head>
	<meta charset="<?php bloginfo( 'charset' );?>">
    <?php if ( is_singular() && pings_open( get_queried_object() ) ): ?>
    <?php endif;?>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">
	<?php wp_head();?>
</head>

<body <?php body_class();?>>

    <?php wp_body_open();?>


    <?php
        $sekox_preloader = get_theme_mod( 'sekox_preloader', false );
        $sekox_backtotop = get_theme_mod( 'sekox_backtotop', false );

        $sekox_preloader_logo = get_template_directory_uri() . '/assets/img/favicon.png';

        $preloader_logo = get_theme_mod('preloader_logo', $sekox_preloader_logo);

    ?>

    <?php if ( !empty( $sekox_preloader ) ): ?>
    <!-- pre loader area start -->
    <div id="preloader">
        <div class="preloader">
            <span></span>
            <span></span>
        </div>
    </div>
    <!-- pre loader area end -->
    <?php endif;?>

    <?php if ( !empty( $sekox_backtotop ) ): ?>
      <!-- Scroll-top -->
      <button class="scroll-top scroll-to-target" data-target="html">
         <i class="fal fa-angle-up"></i>
      </button>
      <!-- Scroll-top-end-->
    <?php endif;?>

    
    <!-- header start -->
    <?php do_action( 'sekox_header_style' );?>
    <!-- header end -->
    
    <!-- wrapper-box start -->
    <?php do_action( 'sekox_before_main_content' );?>