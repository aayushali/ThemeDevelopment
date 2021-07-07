<?php
/**
 * The template for displaying all static pages
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 */

get_header();
?>
<?php while (have_posts()): ?>
<?php the_post(); ?>
<div class="content-container">
    <h1 class="page-title"><?php the_title(); ?></h1>
    <div class="container">
        <div class="row">
            <div class="col-sm-8 actual-content">
                <?php the_content(); ?>
            </div>
            <?php if (has_post_thumbnail()): ?>
            <div class="col-sm-4">
                <div class="featured-image">
                    <?php $image_url = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID),'large', true);?>
                    <img src="<?php echo $image_url[0]; ?>" alt="about image" />

                </div>
                <?php  endif; ?>
            </div>
        </div>
    </div>
</div>
<?php endwhile; ?>
<?php get_footer(); ?>
