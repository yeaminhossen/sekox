<?php
/**
 * Breadcrumbs for Eduker theme.
 *
 * @package     Eduker
 * @author      Theme_Pure
 * @copyright   Copyright (c) 2022, Theme_Pure
 * @link        https://www.themepure.net
 * @since       Eduker 1.0.0
 */


function sekox_breadcrumb_func() {
    global $post;  
    $breadcrumb_class = '';
    $breadcrumb_show = 1;


    if ( is_front_page() && is_home() ) {
        $title = get_theme_mod('breadcrumb_blog_title', __('Blog','sekox'));
        $breadcrumb_class = 'home_front_page';
    }
    elseif ( is_front_page() ) {
        $title = get_theme_mod('breadcrumb_blog_title', __('Blog','sekox'));
        $breadcrumb_show = 0;
    }
    elseif ( is_home() ) {
        if ( get_option( 'page_for_posts' ) ) {
            $title = get_the_title( get_option( 'page_for_posts') );
        }
    }

    elseif ( is_single() && 'post' == get_post_type() ) {
      $title = get_the_title();
    } 
    elseif ( is_single() && 'product' == get_post_type() ) {
        $title = get_theme_mod( 'breadcrumb_product_details', __( 'Shop', 'sekox' ) );
    } 
    elseif ( is_single() && 'courses' == get_post_type() ) {
      $title = esc_html__( 'Course Details', 'sekox' );
    } 
    elseif ( 'courses' == get_post_type() ) {
      $title = esc_html__( 'Courses', 'sekox' );
    } 
    elseif ( is_search() ) {
        $title = esc_html__( 'Search Results for : ', 'sekox' ) . get_search_query();
    } 
    elseif ( is_404() ) {
        $title = esc_html__( 'Page not Found', 'sekox' );
    } 
    elseif ( function_exists( 'is_woocommerce' ) && is_woocommerce() ) {
        $title = get_theme_mod( 'breadcrumb_shop', __( 'Shop', 'sekox' ) );
    } 
    elseif ( is_archive() ) {
        $title = get_the_archive_title();
    } 
    else {
        $title = get_the_title();
    }
 


    $_id = get_the_ID();

    if ( is_single() && 'product' == get_post_type() ) { 
        $_id = $post->ID;
    } 
    elseif ( function_exists("is_shop") AND is_shop()  ) { 
        $_id = wc_get_page_id('shop');
    } 
    elseif ( is_home() && get_option( 'page_for_posts' ) ) {
        $_id = get_option( 'page_for_posts' );
    }

    $is_breadcrumb = function_exists( 'get_field' ) ? get_field( 'is_it_invisible_breadcrumb', $_id ) : '';
    if( !empty($_GET['s']) ) {
      $is_breadcrumb = null;
    }

      if ( empty( $is_breadcrumb ) && $breadcrumb_show == 1 ) {

        $bg_img_from_page = function_exists('get_field') ? get_field('breadcrumb_background_image',$_id) : '';
        $hide_bg_img = function_exists('get_field') ? get_field('hide_breadcrumb_background_image',$_id) : '';

        // get_theme_mod
        $bg_img = get_theme_mod( 'breadcrumb_bg_img' );
        $sekox_breadcrumb_shape_switch = get_theme_mod( 'sekox_breadcrumb_shape_switch', true );
        $breadcrumb_info_switch = get_theme_mod( 'breadcrumb_info_switch', true );

        if ( $hide_bg_img && empty($_GET['s']) ) {
            $bg_img = '';
        } else {
            $bg_img = !empty( $bg_img_from_page ) ? $bg_img_from_page['url'] : $bg_img;
        }?>

         <!-- page title area start -->
         <section class="breadcrumb__area pt-125 pb-105 tp-breadcrumb__bg <?php print esc_attr( $breadcrumb_class );?>" data-background="<?php print esc_attr($bg_img);?>">
            <div class="container">
               <div class="row">
               	<?php if (!empty($breadcrumb_info_switch)) : ?>
                  <div class="col-xxl-12">
                     <div class="tp-breadcrumb text-center">
                        <h2 class="tp-breadcrumb__title"><?php echo wp_kses_post( $title ); ?></h2>
                        <div class="tp-breadcrumb__link mb-10">
                           <?php if(function_exists('bcn_display')) {
	                           bcn_display();
	                        } ?>
                        </div>
                     </div>
                  </div>
                  <?php endif; ?>
               </div>
            </div>
         </section>
         <!-- page title area end -->
        <?php
      }
}

add_action( 'sekox_before_main_content', 'sekox_breadcrumb_func' );

// sekox_search_form
function sekox_search_form() {
    ?>

   <!-- header-search -->
   <div class="tpsearchbar tp-sidebar-area">
      <button class="tpsearchbar__close"><i class="fal fa-times"></i></button>
      <div class="search-wrap text-center">
         <div class="container">
            <div class="row justify-content-center">
               <div class="col-md-6 col-12 pt-100 pb-100">
                  <h2 class="tpsearchbar__title"><?php print esc_attr__( 'What Are You Looking For?', 'sekox' );?> </h2>
                  <div class="tpsearchbar__form">
                     <form method="get" action="<?php print esc_url( home_url( '/' ) );?>" >
                        <input type="search" name="s" value="<?php print esc_attr( get_search_query() )?>" placeholder="<?php print esc_attr__( 'Enter Your Keyword', 'sekox' );?>" >
                        <button class="tpsearchbar__search-btn" type="submit"><i class="fal fa-search"></i></button>
                     </form>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
   <div class="search-body-overlay"></div>
   <!-- header-search-end -->

   <?php
}

add_action( 'sekox_before_main_content', 'sekox_search_form' );