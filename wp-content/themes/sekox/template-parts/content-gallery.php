<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package sekox
 */

$gallery_images = function_exists('get_field') ? get_field('gallery_images') : '';
if ( is_single() ): ?>

<article id="post-<?php the_ID();?>" <?php post_class( 'postbox__item blog__item format-gallery mb-50' );?>>
    <?php if ( !empty( $gallery_images ) ): ?>
    <div class="swiper-container blog-post-slider-active">
        <div class="swiper-wrapper">
            <?php foreach ( $gallery_images as $key => $image ): ?>
            <div class="swiper-slide">
                <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>">
            </div>
            <?php endforeach; ?>
        </div>
        <div class="blog-post-slider-nav">
            <div class="blog-nav-prev nav-button"><i class="fal fa-angle-left"></i></div>
            <div class="blog-nav-next nav-button"><i class="fal fa-angle-right"></i></div>
        </div>
    </div>
    <?php endif; ?>

    <div class="postbox__content">
        <!-- blog meta -->
        <?php get_template_part( 'template-parts/blog/blog-meta' ); ?>
        <h3 class="postbox__title">
            <?php the_title();?>
        </h3>
        <div class="postbox__text">
            <?php the_content();?>
            <?php
                    wp_link_pages( [
                        'before'      => '<div class="page-links">' . esc_html__( 'Pages:', 'sekox' ),
                        'after'       => '</div>',
                        'link_before' => '<span class="page-number">',
                        'link_after'  => '</span>',
                    ] );
                ?>
        </div>
        <?php print sekox_get_tag();?>
    </div>
</article>
<?php else: ?>

<article id="post-<?php the_ID();?>" <?php post_class( 'postbox__item blog__item mb-50 format-gallery');?>>

    <?php if ( !empty( $gallery_images ) ): ?>
    <div class="swiper-container blog-post-slider-active">
        <div class="swiper-wrapper">
            <?php foreach ( $gallery_images as $key => $image ): ?>
            <div class="swiper-slide">
                <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>">
            </div>
            <?php endforeach; ?>
        </div>
        <div class="blog-post-slider-nav">
            <div class="blog-nav-prev nav-button"><i class="fal fa-angle-left"></i></div>
            <div class="blog-nav-next nav-button"><i class="fal fa-angle-right"></i></div>
        </div>
    </div>
    <?php endif; ?>

    <div class="postbox__content">
        <!-- blog meta -->
        <?php get_template_part( 'template-parts/blog/blog-meta' ); ?>

        <h4 class="postbox__title">
            <a href="<?php the_permalink();?>"><?php the_title();?></a>
        </h4>
        <div class="postbox__text">
            <?php the_excerpt();?>
        </div>
        <!-- blog btn -->
        <?php get_template_part( 'template-parts/blog/blog-btn' ); ?>
    </div>
</article>


<?php
endif;?>