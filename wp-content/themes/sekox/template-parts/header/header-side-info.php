<?php 

   /**
    * Template part for displaying header side information
    *
    * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
    *
    * @package sekox
   */

    $sekox_side_hide = get_theme_mod( 'sekox_side_hide', false );
    $sekox_search = get_theme_mod( 'sekox_search', false );
    $sekox_side_logo = get_theme_mod( 'sekox_side_logo', get_template_directory_uri() . '/assets/img/logo/logo.png' );
    $sekox_extra_about_text = get_theme_mod( 'sekox_extra_about_text', __( 'But I must explain to you how all this mistaken idea of denouncing pleasure and praising pain was born and will give you a complete account of the system and expound the actual teachings of the great explore', 'sekox' ) );

    $sekox_extra_map = get_theme_mod( 'sekox_extra_map', __( '#', 'sekox' ) );
    $sekox_contact_title = get_theme_mod( 'sekox_contact_title', __( 'Contact Info', 'sekox' ) );
    $sekox_extra_address = get_theme_mod( 'sekox_extra_address', __( '12/A, Mirnada City Tower, NYC', 'sekox' ) );
    $sekox_extra_phone = get_theme_mod( 'sekox_extra_phone', __( '088889797697', 'sekox' ) );
    $sekox_extra_email = get_theme_mod( 'sekox_extra_email', __( 'support@mail.com ', 'sekox' ) );
?>


   <!-- tp-off-canvas-area-start -->
   <div class="tp-offcanvas-area">
      <div class="tpoffcanvas">
         <div class="tpoffcanvas__close-btn">
            <button class="close-btn"><i class="fal fa-times"></i></button>
         </div>

         <?php if ( !empty( $sekox_side_logo ) ): ?>
         <div class="tpoffcanvas__logo">
            <a href="<?php print esc_url( home_url( '/' ) );?>">
               <img src="<?php print esc_url($sekox_side_logo); ?>" alt="<?php echo esc_attr__('logo','sekox'); ?>">
            </a>
         </div>
         <?php endif;?>

         <div class="mobile-menu"></div>
      </div>
   </div>
   <div class="body-overlay"></div>
   <!-- tp-off-canvas-area-end -->

