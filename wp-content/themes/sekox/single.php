<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package sekox
 */

get_header();

$blog_column = is_active_sidebar( 'blog-sidebar' ) ? 8 : 12;

?>


<section class="tp-blog-area postbox__area blog-area pt-120 pb-60">
    <div class="container">
        <div class="row">
            <div class="col-lg-<?php print esc_attr( $blog_column );?>">
                <div class="postbox__wrapper postbox__details blog__wrapper mr-35 mb-60">
                    <?php
					while ( have_posts() ):
					the_post();

					get_template_part( 'template-parts/content', get_post_format() );

					?>

                    <!-- biography -->
        			<?php get_template_part( 'template-parts/biography' ); ?>

                    <?php

						// If comments are open or we have at least one comment, load up the comment template.
						if ( comments_open() || get_comments_number() ):
							comments_template();
						endif;

						endwhile; // End of the loop.
					?>
                </div>
            </div>
            <?php if ( is_active_sidebar( 'blog-sidebar' ) ): ?>
            <div class="col-xxl-4 col-xl-4 col-lg-4">
                <div class="blog__sidebar sidebar__wrapper pl-30 mb-60">
                    <?php get_sidebar();?>
                </div>
            </div>
            <?php endif;?>
        </div>
    </div>
</section>

<?php
get_footer();