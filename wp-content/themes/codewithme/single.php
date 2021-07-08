<?php
/**
 * The Template for displaying all single posts
 */
get_header();
?>
    <div class="content-container">
        <?php while (have_posts()): ?>
            <?php the_post(); ?>
            <?php if (has_post_thumbnail()) :
                $featured_image = wp_get_attachment_image_src(get_post_thumbnail_id(get_the_ID()), 'full'); ?>
                <div class="full-width-featured-image" style="background-image:url(<?php echo $featured_image[0]; ?>);">
                    <h1><?php the_title(); ?></h1>
                </div>
            <?php endif; ?>
            <div class="container">
                <div class="row">
                    <div class="article-info col-md-3">
                        <?php $categories = get_the_category(); ?>
                        <?php if (!empty($categories)) : ?>
                            <div class="posted-in">
                                <h4><?php _e('Posted In', 'nd_dosth'); ?></h4>
                                <?php the_category(); ?>
                            </div>
                        <?php endif; ?>
                        <div class="published-on">
                            <h4><?php _e('Publish On', 'nd_dosth'); ?></h4>
                            <?php the_date(); ?>
                        </div>
                        <div class="post-author">
                            <h4><?php _e('Author', 'nd_dosth'); ?></h4>
                            <a class="author-archive"
                               href="<?php echo esc_url(get_author_posts_url(get_the_author_meta('ID'))); ?>">
                                <?php the_author(); ?>
                            </a>
                            <?php echo get_avatar(get_the_author_meta('ID'), 100); ?>
                        </div>
                    </div>
                    <div id="actual-article" class="col-md-8">
                        <?php the_content(); ?>
                        <?php get_template_part('parts/post', 'navigation'); ?>
                        <?php comments_template(); ?>
                    </div>
                </div>
            </div>
        <?php endwhile; ?>
    </div>
<?php get_footer(); ?>