<?php 

	/**
	 * Template part for displaying header layout three
	 *
	 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
	 *
	 * @package sekox
	*/

   // info
   $sekox_topbar_switch = get_theme_mod( 'sekox_topbar_switch', false );
   $sekox_phone_num = get_theme_mod( 'sekox_phone_num', __( '+020.098.456', 'sekox' ) );
   
   // contact button
   $sekox_button_text = get_theme_mod( 'sekox_button_text', __( 'Contact Us', 'sekox' ) );
   $sekox_button_link = get_theme_mod( 'sekox_button_link', __( '#', 'sekox' ) );

   // header right
   $sekox_search = get_theme_mod( 'sekox_search', false );
   $sekox_header_right = get_theme_mod( 'sekox_header_right', false );
   $sekox_menu_col = $sekox_header_right ? 'col-xxl-7 col-xl-7 col-lg-8 d-none d-lg-block' : 'col-xxl-10 col-xl-10 col-lg-9 d-none d-lg-block text-end';

?>

   <header>
      <div id="header-sticky" class="tpheader__area header-3 tpheader__transparent">
         <div class="container">
            <div class="row align-items-center">
               <div class="col-lg-2 col-md-4 col-sm-5 col-7">
                  <div class="tpheader__logo">
                     <?php sekox_header_logo();?>
                  </div>
               </div>
               <div class="col-lg-7 col-md-1 d-none d-lg-block">
                  <div class="tpheader__menu tpheader__menu-three main-menu d-flex align-items-center">
                     <nav id="mobile-menu" class="d-none d-lg-block">
                        <?php sekox_header_menu();?>
                     </nav>
                  </div>
               </div>
               <?php if ( !empty( $sekox_header_right ) ): ?>
               <div class="col-lg-3  col-md-7 col-sm-7 col-5">
                  <div class="tpheader__search-bar d-flex align-items-center justify-content-end">
                     <div class="tpheader__search header__info-search tpcolor__purple">
                        <button class="tp-search-toggle"><i class="icon_search"></i></button>
                     </div>
                     <div class="tpheader__phone d-none d-sm-block">
                        <span><?php echo esc_html__('Call Us:','sekox'); ?></span>
                        <a href="tel:<?php echo esc_attr($sekox_phone_num); ?>"><?php echo esc_html($sekox_phone_num); ?></a>
                     </div>
                     <div class="d-lg-none ml-15">
                        <button class="tp-menu-bar"><i class="fal fa-bars"></i></button>
                     </div>
                  </div>
               </div>
               <?php endif; ?>
            </div>
         </div>
      </div>
   </header>


<?php get_template_part( 'template-parts/header/header-side-info' ); ?>