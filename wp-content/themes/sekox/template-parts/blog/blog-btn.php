<?php

/**
 * Template part for displaying post btn
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package sekox
 */

$sekox_blog_btn = get_theme_mod( 'sekox_blog_btn', 'Read More' );
$sekox_blog_btn_switch = get_theme_mod( 'sekox_blog_btn_switch', true );

?>

<?php if ( !empty( $sekox_blog_btn_switch ) ): ?>
<div class="read-more-btn">
    <a class="tp-btn" href="<?php the_permalink();?>"><?php echo esc_html( $sekox_blog_btn );?></a>
</div>
<?php endif;?>

