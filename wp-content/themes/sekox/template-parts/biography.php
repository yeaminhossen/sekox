<?php
    $author_data = get_the_author_meta( 'description', get_query_var( 'author' ) );
    $author_info = get_the_author_meta( 'sekox_write_by');
    $facebook_url = get_the_author_meta( 'sekox_facebook' );
    $twitter_url = get_the_author_meta( 'sekox_twitter' );
    $linkedin_url = get_the_author_meta( 'sekox_linkedin' );
    $instagram_url = get_the_author_meta( 'sekox_instagram' );
    $youtube_url = get_the_author_meta( 'sekox_youtube' );
    $sekox_write_by = get_the_author_meta( 'sekox_write_by' );
    $author_bio_avatar_size = 180;
    if ( $author_data != '' ):
?>

    <div class="blog__author mb-75 d-sm-flex">
        <div class="blog__author-img mr-30">
            <?php print get_avatar( get_the_author_meta( 'user_email' ), $author_bio_avatar_size, '', '', [ 'class' => 'media-object img-circle' ] );?>  
        </div>
        <div class="blog__author-content">
            <h5><?php echo get_the_author_meta('display_name') ?></h5>
            <?php if(!empty($sekox_write_by)) : ?>
            <span><?php echo esc_html($sekox_write_by); ?></span>
            <?php endif; ?>
            <div class="social-links d-flex">
                <?php if(!empty($facebook_url)) : ?>
                <a href="<?php echo esc_url($facebook_url); ?>"><i class="fab fa-facebook-f"></i></a>
                <?php endif; ?>
                <?php if(!empty($twitter_url)) : ?>
                <a href="<?php echo esc_url($twitter_url); ?>"><i class="fab fa-twitter"></i></a>
                <?php endif; ?>
                <?php if(!empty($linkedin_url)) : ?>
                <a href="<?php echo esc_url($linkedin_url); ?>"><i class="fab fa-linkedin"></i></a>
                <?php endif; ?>
                <?php if(!empty($instagram_url)) : ?>
                <a href="<?php echo esc_url($instagram_url); ?>"><i class="fab fa-instagram"></i></a>
                <?php endif; ?>
                <?php if(!empty($youtube_url)) : ?>
                <a href="<?php echo esc_url($youtube_url); ?>"><i class="fab fa-youtube"></i></a>
                <?php endif; ?>
            </div>
            <p><?php the_author_meta( 'description' );?></p>
        </div>
    </div>

<?php endif;?>
