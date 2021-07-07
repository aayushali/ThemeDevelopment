<?php
/**
 * The front page template file.
 *
 * If the user has selected a static page for their homepage, this is what will
 * appear.
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package Dosth App
 */

get_header();
?><?php while( have_posts() ): ?>
    <?php the_post(); ?>
    <div class="actual-content above-the-fold">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <?php the_content(); ?>
                </div>
            </div>
        </div>
        <section id="watch-dosth-in-action">
            <h2><?php echo get_post_meta(get_the_ID(), 'second_section_headline', true ); ?></h2>
            <div class="section-content">
                <?PHP echo get_post_meta(get_the_ID(), 'section_two_content', true ); ?>
            </div>
        </section>
        <section id="section-three">
            <h2><?php echo get_post_meta(get_the_ID(), 'section_three_title', true); ?></h2>
            <div class="section-content">
                <?php echo get_post_meta(get_the_ID(), 'section_three_content', true); ?>
            </div>
        </section>
        <section id="app-feature-one">
            <img src="<?php the_field('app_feature_one_image');  ?>"  alt="no image here"/>
            <div class="section-content">
                <?php echo get_post_meta(get_the_ID(),'app_feature_one_content', true ); ?>
            </div>
        </section>
        <section id="app-feature-two">
            <img src="<?php the_field('app_feature_two_image'); ?>" alt=""/>
            <div class="section-content">
                <?php the_field('app_feature_two_content'); ?>
            </div>
        </section>
        <section id="app-feature-three">
          <h2 style="text-align: center"><?php echo get_post_meta(get_the_ID(),'section_four_title', true); ?></h2>
            <div class="section-content">
                <?php echo get_post_meta(get_the_ID(), 'section_four_content', true); ?>
            </div>
            <div class="section-image">
                <?php
                $image_id = get_post_meta(get_the_ID(), 'section_four_image', true);
                $image_data = wp_get_attachment_image_src($image_id, 'full');
                $image_url = $image_data[0];
                ?>
                <img src="<?php echo $image_url ?>" alt="image" >
            </div>
        </section>
    </div>
<?php endwhile; ?>
<?php get_footer(); ?>