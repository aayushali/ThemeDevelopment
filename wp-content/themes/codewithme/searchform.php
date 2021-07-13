
<?php
/**
 * Template for displaying search forms
 */
?>
<form role="search" method="get" class="search-form" action="<?php echo esc_url( home_url( '/' ) ); ?>">
    <label>
        <span class="screen-reader-text"><?php _x( 'Search for:', 'label', 'codewithme'); ?></span>
        <input type="search" class="search-field" placeholder="<?php echo esc_attr_x( 'Search Articles', 'placeholder', 'codewithme' ); ?>" value="<?php echo get_search_query(); ?>" name="s" />
    </label>
    <input type="submit" class="search-submit" value="<?php echo esc_attr_x( 'Search', 'submit button', 'codewithme' ); ?>" />
</form>