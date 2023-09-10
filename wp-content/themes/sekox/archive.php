<?php
/**
 * The template for displaying archive pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package sekox
 */

get_header();

$blog_column = is_active_sidebar( 'blog-sidebar' ) ? 8 : 12;

?>

<div class="tp-blog-area pt-120 pb-90">
    <div class="container">
        <div class="row">
            <div class="col-lg-<?php print esc_attr( $blog_column );?> blog-post-items">
                <div class="postbox__wrapper postbox__wrapper blog__wrapper mr-35 mb-60">
                    <?php if ( have_posts() ): ?>
                    <header class="page-header d-none">
                        <?php
							the_archive_title( '<h1 class="page-title">', '</h1>' );
							the_archive_description( '<div class="archive-description">', '</div>' );
						?>
                    </header><!-- .page-header -->
                    <?php
						/* Start the Loop */
						while ( have_posts() ):
							the_post();

							/*
							* Include the Post-Type-specific template for the content.
							* If you want to override this in a child theme, then include a file
							* called content-___.php (where ___ is the Post Type name) and that will be used instead.
							*/
							get_template_part( 'template-parts/content', get_post_type() );
						endwhile;
					?>

                    <div class="basic-pagination mb-40 pagination justify-content-left">
                        <?php sekox_pagination( '<i class="far fa-angle-left"></i>', '<i class="far fa-angle-right"></i>', '', ['class' => ''] );?>
                    </div>
                    <?php
						else:
							get_template_part( 'template-parts/content', 'none' );
						endif;
					?>
                </div>
            </div>
            <?php if ( is_active_sidebar( 'blog-sidebar' ) ): ?>
            <div class="col-lg-4">
                <div class="blog__sidebar pl-30 mb-60">
                    <?php get_sidebar();?>
                </div>
            </div>
            <?php endif;?>
        </div>
    </div>
</div>
<?php
get_footer();