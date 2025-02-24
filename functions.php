<?php

//*********Instead of @import Use enqueue ad recommended by WordPress Codex **********/

function my_theme_enqueue_styles() 
{ 
    $parent_style = 'parent-style'; // This is 'twentyseventeen-style' for the Twenty Seventeen theme.
 
    wp_enqueue_style( $parent_style, get_template_directory_uri() . '/style.css' );
    wp_enqueue_style( 'child-style',
        get_stylesheet_directory_uri() . '/style.css',
        array( $parent_style ),
        wp_get_theme()->get('Version')
    );
}
/* Action Hooks */
add_action( 'wp_enqueue_scripts', 'my_theme_enqueue_styles' );

/* Customize the Footer */

function custom_footer()
{
    echo '<p style = "text-align:center; font-size:14px;">&copy; ' . date("Y") . ' - Custom Footer for Twenty Seventeen Child.</p';
}
add_action('wp_footer', 'custom_footer');