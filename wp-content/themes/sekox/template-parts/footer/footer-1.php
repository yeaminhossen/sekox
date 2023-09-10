<?php 

/**
 * Template part for displaying footer layout one
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package sekox
*/

$footer_bg_img = get_theme_mod( 'sekox_footer_bg' );
$sekox_footer_bg_url_from_page = function_exists( 'get_field' ) ? get_field( 'sekox_footer_bg' ) : '';
$sekox_footer_bg_color_from_page = function_exists( 'get_field' ) ? get_field( 'sekox_footer_bg_color' ) : '';
$footer_bg_color = get_theme_mod( 'sekox_footer_bg_color', '#f0f0f2' );
$bg_img = !empty( $sekox_footer_bg_url_from_page['url'] ) ? $sekox_footer_bg_url_from_page['url'] : $footer_bg_img;
$bg_color = !empty( $sekox_footer_bg_color_from_page ) ? $sekox_footer_bg_color_from_page : $footer_bg_color;
$footer_bg = !empty($bg_img) ? "background: url($bg_img)" : "background: $bg_color";

// bg image
$bg_img = !empty( $sekox_footer_bg_url_from_page['url'] ) ? $sekox_footer_bg_url_from_page['url'] : $footer_bg_img;

// bg color
$bg_color = !empty( $sekox_footer_bg_color_from_page ) ? $sekox_footer_bg_color_from_page : $footer_bg_color;


// footer_columns
$footer_columns = 0;
$footer_widgets = get_theme_mod( 'footer_widget_number', 4 );

for ( $num = 1; $num <= $footer_widgets; $num++ ) {
    if ( is_active_sidebar( 'footer-' . $num ) ) {
        $footer_columns++;
    }
}

switch ( $footer_columns ) {
case '1':
    $footer_class[1] = 'col-lg-12';
    break;
case '2':
    $footer_class[1] = 'col-lg-6 col-md-6';
    $footer_class[2] = 'col-lg-6 col-md-6';
    break;
case '3':
    $footer_class[1] = 'col-xl-4 col-lg-6 col-md-5';
    $footer_class[2] = 'col-xl-4 col-lg-6 col-md-7';
    $footer_class[3] = 'col-xl-4 col-lg-6';
    break;
case '4':
    $footer_class[1] = 'col-lg-3 col-md-6 col-sm-12';
    $footer_class[2] = 'col-lg-3 col-md-6 col-sm-6';
    $footer_class[3] = 'col-lg-3 col-md-6 col-sm-6';
    $footer_class[4] = 'col-lg-3 col-md-6';
    break;
default:
    $footer_class = 'col-xl-3 col-lg-3 col-md-6';
    break;
}

?>

<footer>
    <div class="footer-area grey-bg" style="<?php echo esc_attr($footer_bg);?>">
        <?php if ( is_active_sidebar('footer-1') OR is_active_sidebar('footer-2') OR is_active_sidebar('footer-3') OR is_active_sidebar('footer-4') ): ?>
        <div class="tpfooter__main pb-55 pt-95">
            <div class="container">
                <div class="row">

                <?php
                    if ( $footer_columns < 4 ) {
                    print '<div class="col-lg-3 col-md-6 col-sm-12">';
                    dynamic_sidebar( 'footer-1' );
                    print '</div>';

                    print '<div class="col-lg-3 col-md-6 col-sm-6">';
                    dynamic_sidebar( 'footer-2' );
                    print '</div>';

                    print '<div class="col-lg-3 col-md-6 col-sm-6">';
                    dynamic_sidebar( 'footer-3' );
                    print '</div>';

                    print '<div class="col-lg-3 col-md-6">';
                    dynamic_sidebar( 'footer-4' );
                    print '</div>';
                    } else {
                        for ( $num = 1; $num <= $footer_columns; $num++ ) {
                            if ( !is_active_sidebar( 'footer-' . $num ) ) {
                                continue;
                            }
                            print '<div class="' . esc_attr( $footer_class[$num] ) . '">';
                            dynamic_sidebar( 'footer-' . $num );
                            print '</div>';
                        }
                    }
                ?>

                </div>
            </div>
        </div>
        <?php endif; ?>
        <div class="tpfooter__copy-right">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="tpfooter__copy-right__content text-center pt-20 pb-20">
                            <span><?php print sekox_copyright_text(); ?></span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>
