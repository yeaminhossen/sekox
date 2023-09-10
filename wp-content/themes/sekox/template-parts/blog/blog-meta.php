<?php 

/**
 * Template part for displaying post meta
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package sekox
 */

$categories = get_the_terms( $post->ID, 'category' );
$sekox_blog_date = get_theme_mod( 'sekox_blog_date', true );
$sekox_blog_comments = get_theme_mod( 'sekox_blog_comments', true );
$sekox_blog_author = get_theme_mod( 'sekox_blog_author', true );
$sekox_blog_cat = get_theme_mod( 'sekox_blog_cat', false );

?>


<div class="postbox__meta mb-20">
    
    <?php if ( !empty($sekox_blog_author) ): ?>
        <span><a href="<?php print esc_url( get_author_posts_url( get_the_author_meta( 'ID' ) ) );?>"><i class="fal fa-user"></i> <?php print get_the_author();?></a></span>
    <?php endif;?>

    <?php if ( !empty($sekox_blog_cat) ): ?>
        <?php if ( !empty( $categories[0]->name ) ): ?>  
            <span><a href="<?php print esc_url(get_category_link($categories[0]->term_id)); ?>"><i class="fal fa-tag"></i> <?php echo esc_html($categories[0]->name); ?></a></span>
        <?php endif;?>
    <?php endif;?>

    <?php if ( !empty($sekox_blog_date) ): ?>
        <span><a href="<?php echo get_day_link(get_post_time('Y'), get_post_time('m'), get_post_time('j')); ?>"><i class="fal fa-calendar-check"></i> <?php the_time( get_option('date_format') ); ?> </a></span>
    <?php endif;?>

    <?php if ( !empty($sekox_blog_comments) ): ?>
        <span><a href="<?php comments_link();?>"><i class="fal fa-comments"></i> <?php comments_number();?></a></span>
    <?php endif;?>
</div>