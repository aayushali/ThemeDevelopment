<?php
/*
 * Registers option with the Theme Customizer
 */

add_action('customize_register','aka_customize_register');
function aka_customize_register($wp_customize){
    // Move homepage settings section underneath the 'site Identity' section
    $wp_customize->get_section('title_tagline')->priority = 1;
    $wp_customize -> get_section('static_front_page')->priority = 2;

    $wp_customize -> get_section('static_front_page') -> title = __('Homepage Preferences', 'codewithme');


    // Theme Options Panel
    $wp_customize->add_panel( 'nd_dosth_theme_options',
        array(
            //'priority'         => 100,
            'title'            => __( 'Theme Options', 'codewithme' ),
            'description'      => __( 'Theme Modifications like color scheme, theme texts and layout preferences can be done here', 'codewithme' ),
        )
    );
    // Text Options Section
    $wp_customize->add_section( 'nd_dosth_text_options',
        array(
            'title'         => __( 'Text Options', 'codewithme' ),
            'priority'      => 1,
            'panel'         => 'nd_dosth_theme_options'
        )
    );
    // Setting for Copyright text.
    $wp_customize->add_setting( 'nd_dosth_copyright_text',
        array(
            'type' => 'option',
            'default'           => __( 'All Rights Reserved', 'codewithme' ),
            'sanitize_callback' => 'sanitize_text_field',
            'transport'         => 'refresh',
        )
    );
    // Control for Copyright text
    $wp_customize->add_control( 'nd_dosth_copyright_text',
        array(
            'type'        => 'text',
            'priority'    => 10,
            'section'     => 'nd_dosth_text_options',
            'label'       => 'Copyright text',
            'description' => 'Text put here will be outputted in the footer',
        )
    );

// Setting for Read More text.
    $wp_customize->add_setting( 'nd_dosth_readmore_text',
        array(
            'type'              => 'option',
            'default'           => __( 'Read More ', 'codewithme' ),
            'sanitize_callback' => 'sanitize_text_field',
            'transport'         => 'refresh',
        )
    );
// Control for Read More text
    $wp_customize->add_control( 'nd_dosth_readmore_text',
        array(
            'type'        => 'text',
            'priority'    => 2,
            'section'     => 'nd_dosth_text_options',
            'label'       => 'Read More text',
            'description' => 'Text put here will be as the text for Read More link in the archives',
            'active_callback' => 'nd_dosth_hide_readmore_on_condition'
        )
    );
    // Setting to Show/Hide Read More Link.
    $wp_customize->add_setting( 'nd_dosth_show_readmore',
        array(
            'type'              => 'option',
            'default'           => true,
            'sanitize_callback' => 'nd_dosth_sanitize_checkbox',
            'transport'         => 'refresh',
        )
    );

    // Control to Show/Hide Read More Link.
    $wp_customize->add_control( 'nd_dosth_show_readmore',
        array(
            'type'        => 'checkbox',
            'section'     => 'nd_dosth_text_options',
            'label'       => 'Show Read More Link',
            'description' => 'Turn off this checkbox to hide Read More Link on Post archives',
        )
    );


}
