<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package sekox
 */

$sekox_video_url = function_exists( 'get_field' ) ? get_field( 'fromate_style' ) : NULL;

if ( is_single() ): 
?>

<article id="post-<?php the_ID();?>" <?php post_class( 'postbox__item blog__item format-video mb-50' );?>>
    <?php if ( has_post_thumbnail() ): ?>
    <div class="postbox__thumb postbox__video w-img p-relative">
        <?php the_post_thumbnail( 'full', ['class' => 'img-responsive'] );?>

        <?php if(!empty($sekox_video_url)) : ?>
        <a href="<?php print esc_url( $sekox_video_url );?>" class="play-btn pulse-btn popup-video"><i
                class="fas fa-play"></i></a>
        <?php endif; ?>
    </div>
    <?php endif;?>

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

<article id="post-<?php the_ID();?>" <?php post_class( 'postbox__item blog__item mb-50' );?>>
    <?php if ( has_post_thumbnail() ): ?>
    <div class="postbox__thumb postbox__video w-img p-relative">
        <a href="<?php the_permalink();?>">
            <?php the_post_thumbnail( 'full', ['class' => 'img-responsive'] );?>
        </a>
        <a href="<?php print esc_url( $sekox_video_url );?>" class="play-btn pulse-btn popup-video"><i
                class="fas fa-play"></i></a>
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