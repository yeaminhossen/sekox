<?php 

	/**
	 * Template part for displaying header layout two
	 *
	 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
	 *
	 * @package sekox
	*/

	// info
    $sekox_topbar_switch = get_theme_mod( 'sekox_topbar_switch', false );
    $sekox_mail_id = get_theme_mod( 'sekox_mail_id', __( 'info@educal.com', 'sekox' ) );
    $sekox_address = get_theme_mod( 'sekox_address', __( 'Moon ave, New York, 2020 NY US', 'sekox' ) );
    $sekox_address_url = get_theme_mod( 'sekox_address_url', __( 'https://goo.gl/maps/qzqY2PAcQwUz1BYN9', 'sekox' ) );

    // contact button
	 $sekox_button_text = get_theme_mod( 'sekox_button_text', __( "Let's Talk", "sekox" ) );
    $sekox_button_link = get_theme_mod( 'sekox_button_link', __( '#', 'sekox' ) );


    // header right
    $sekox_search = get_theme_mod( 'sekox_search', false );
    $sekox_header_right = get_theme_mod( 'sekox_header_right', false );
    $sekox_menu_col = $sekox_header_right ? 'col-xxl-7 col-xl-7 col-lg-8 d-none d-lg-block' : 'col-xxl-10 col-xl-10 col-lg-9 d-none d-lg-block text-end';

?>


   <header>
      <div id="header-sticky" class="tpheader__area header-2 tpheader__transparent">
         <div class="container">
            <div class="row align-items-center">
               <div class="col-lg-4 col-md-4 col-sm-3 col-7">
                  <div class="tpheader__logo">
                     <?php sekox_header_logo();?>
                  </div>
               </div>
               <div class="col-lg-8 col-md-8 col-sm-9 col-5">
                  <div class="tpheader__menu main-menu d-lg-flex align-items-center justify-content-end">
                     <nav id="mobile-menu" class="d-none d-lg-block">
                        <?php sekox_header_menu();?>
                     </nav>
                     <?php if ( !empty( $sekox_header_right ) ): ?>
                     <div class="tpheader__right d-flex align-items-center justify-content-end ml-10">
                        <div class="tpheader__search header__info-search tpcolor__purple">
                           <button class="tp-search-toggle"><i class="icon_search"></i></button>
                        </div>
                        <div class="tpheader__btn ml-30 d-none d-sm-block">
                           <a href="<?php echo esc_url($sekox_button_link); ?>"><?php echo esc_html($sekox_button_text); ?></a>
                        </div>
                        <div class="d-lg-none ml-15">
                           <button class="tp-menu-bar"><i class="fal fa-bars"></i></button>
                        </div>
                     </div>
                     <?php endif; ?> 
                  </div>
               </div>
            </div>
         </div>
      </div>
   </header>



<?php get_template_part( 'template-parts/header/header-side-info' ); ?>