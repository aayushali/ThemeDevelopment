<?php
function nd_codewithme_enqueue_styles()
{
    wp_enqueue_style('normalize', get_stylesheet_directory_uri() . '/assets/css/normalize.css', array(), false, 'all');
    wp_enqueue_style('bootstrap', get_stylesheet_directory_uri() . '/assets/css/bootstrap.min.css', array(), false, 'all');
    wp_enqueue_style('superfish', get_stylesheet_directory_uri() . '/assets/css/superfish.css', array(), false, 'all');
    wp_enqueue_style('slick', get_stylesheet_directory_uri() . '/assets/css/slick.css', array(), false, 'all');
    wp_enqueue_style('ubuntu-font', 'https://fonts.googleapis.com/css?family=Ubuntu:300,400,400i,700', array(), false);
    wp_enqueue_style('main-stylesheet', get_stylesheet_uri(), array('normalize', 'bootstrap'), "8.0", 'all');
}

add_action('wp_enqueue_scripts', 'nd_codewithme_enqueue_styles');
function nd_codewithme_enqueue_scripts()
{
    wp_enqueue_script('modernizr', get_stylesheet_directory_uri() . '/assets/js/modernizr.min.js', array(), '1.0.0', true);
    wp_enqueue_script('superfish', get_stylesheet_directory_uri() . '/assets/js/superfish.min.js', array('jquery'), '1.0.0', true);
    wp_enqueue_script('fitvids', get_stylesheet_directory_uri() . '/assets/js/jquery.fitvids.js', array('jquery'), '1.0.0', true);
    wp_enqueue_script('slick', get_stylesheet_directory_uri() . '/assets/js/slick.min.js', array('jquery'), '1.0.0', true);
    wp_enqueue_script('main-js', get_stylesheet_directory_uri() . '/assets/js/main.js', array('jquery'), '1.0.0', true);
    $translation_array = array("email_placeholder" => esc_attr__('Enter your email address here', 'nd_codewithme'), 'ajax_url' => admin_url('admin-ajax.php'),);
    wp_localize_script('main-js', 'translated_text_object', $translation_array);
}

add_action('wp_enqueue_scripts', 'nd_codewithme_enqueue_scripts');
/*-----------------------------------------------------------------------------------*/
/* Adds new body classes
/*-----------------------------------------------------------------------------------*/
add_filter('body_class', 'add_browser_classes');
function add_browser_classes($classes)
{
    // WordPress global variables with browser information
    global $is_gecko, $is_IE, $is_opera, $is_safari, $is_chrome;
    if ($is_chrome) {
        $classes[] = 'chrome';
    } elseif ($is_gecko) {
        $classes[] = 'gecko';
    } elseif ($is_opera) {
        $classes[] = 'opera';
    } elseif ($is_safari) {
        $classes[] = 'safari';
    } elseif ($is_IE) {
        $classes[] = 'internet-explorer';
    }
    return $classes;
}

function nd_codewithme_theme_setup()
{
    /*
    * Make theme available for translation.
    * Translations can be filed in the /languages/ directory.
    */
    load_theme_textdomain('nd_codewithme', get_stylesheet_directory() . '/languages');
    // Add <title> tag support
    add_theme_support('title-tag');
    // Add custom-logo support
    add_theme_support('custom-logo');
    // Add widgets support
    add_theme_support('widgets');
    // Add Featured image support
    add_theme_support('post-thumbnails');
    // Add HTML5 Support
    add_theme_support('html5', array('search-form', 'comment-list', 'comment-form', 'gallery', 'caption'));
    // Register Navigation Menus
    register_nav_menus(array('header' => esc_html__('Display this menu in Header', 'nd_codewithme'), 'footer' => esc_html__('Display this menu in Footer', 'nd_codewithme')));
    // custom image size
    add_image_size('blog-thumbnail', 260, 175, true);
}

add_action('after_setup_theme', 'nd_codewithme_theme_setup');
/**
 * Register widget area.
 *
 * @link http://codex.wordpress.org/Function_Reference/register_sidebar
 */
function nd_codewithme_register_sidebars()
{
    register_sidebar(array('name' => esc_html__('Footer Section One', 'nd_codewithme'), 'id' => 'footer-section-one', 'description' => esc_html__('Widgets added here would appear inside the first section of the footer', 'nd_codewithme'), 'before_widget' => '<aside id="%1$s" class="widget %2$s">', 'after_widget' => '</aside>', 'before_title' => '<h4 class="widget-title">', 'after_title' => '</h4>',));
    register_sidebar(array('name' => esc_html__('Footer Section Two', 'nd_codewithme'), 'id' => 'footer-section-two', 'description' => esc_html__('Widgets added here would appear inside the second section of the footer', 'nd_codewithme'), 'before_widget' => '<aside id="%1$s" class="widget %2$s">', 'after_widget' => '</aside>', 'before_title' => '<h4 class="widget-title">', 'after_title' => '</h4>',));
// register sidebar for blog post
    register_sidebar(array('name' => esc_html__('Blog', 'codewithme'), 'id' => 'blog', 'description' => esc_html__('Widgets added here would appear inside the all blog pages', 'codewithme'), 'before_widget' => '', 'after_widget' => '', 'before_title' => '', 'after_title' => '',));
}

add_action('widgets_init', 'nd_codewithme_register_sidebars');
/*
 * Custom Excerpt Length
 */
function custom_excerpt_length()
{
    return 20;
}

add_filter('excerpt_length', 'custom_excerpt_length');
/*
 * Remove brackets at the end of each excerpt
 */
function custom_excerpt_more()
{
    return '...';
}

add_filter('excerpt_more', 'custom_excerpt_more');
/*
 *  OUtputs the post's thumbnail and title when ID of the post is provided
 */
function aayush_output_post_thumb_and_title($post_id)
{ ?>
    <div class="post-info">
        <?php //Output Post's Thumbnail
        ?>
        <?php $page_thumb = wp_get_attachment_image_src(get_post_thumbnail_id($post_id), 'thumbnail'); ?>
        <?php if (!empty($page_thumb[0])): ?>
            <a href="<?php echo get_the_permalink($post_id); ?>" class="post-thumb">
                <img src="<?php echo $page_thumb[0]; ?>" alt=""/>
            </a>
        <?php endif; ?>
        <?php //Output Previous Page Title
        ?>
        <a href="<?php echo get_the_permalink($post_id); ?>" class="post-title">
            <?php echo get_the_title($post_id); ?>
        </a>
    </div>
<?php }