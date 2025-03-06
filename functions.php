<?php

// ********* Instead of @import Use enqueue as recommended by WordPress Codex **********/

/* Enqueue parent and child theme styles */
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
add_action( 'wp_enqueue_scripts', 'my_theme_enqueue_styles' );

/* Customize the Footer - Adding custom footer text */
function custom_footer() {
    echo '<p class="custom-footer">&copy; ' . date("Y") . ' - Custom Footer for Twenty Seventeen Child.</p>';
}
add_action('wp_footer', 'custom_footer');

/* Register sidebar */
function custom_sidebar() {
    register_sidebar( array(
        'name'          => __('Custom Sidebar', 'twentyseventeen-child'),
        'id'            => 'custom-sidebar',
        'description'   => __('A sidebar for Twenty Seventeen Child.', 'twentyseventeen-child'),
        'before_widget' => '<div class="custom-widget">',
        'after_widget'  => '</div>',
        'before_title'  => '<h3 class="custom-widget-title">',
        'after_title'   => '</h3>',
    ));
}
add_action('widgets_init', 'custom_sidebar');

/* Display Quote of the Day Widget */
function display_quote_widget() {
    if (is_front_page()) {
        echo '<div class="quote-of-the-day-widget">';
        quote_of_the_day();
        echo '</div>';
    }
}
add_action('wp_sidebar', 'display_quote_widget'); 

/* Modify Widget Titles */
function custom_widget_titles($title) {
    return '<span class="custom-widget-style">' . esc_html($title) . '</span>';
}
add_filter('widget_title', 'custom_widget_titles');

/* Custom Widget - Quote of the Day */
function quote_of_the_day() {
    $quotes = array(
        "The only way to do great work is to love what you do. - Steve Jobs",
        "It does not matter how slowly you go, as long as you do not stop. - Confucius",
        "Success is not final, failure is not fatal: It is the courage to continue that counts. - Winston Churchill",
        "A journey of a thousand miles begins with a single step. - Lao Tzu",
        "You miss 100% of the shots you don't take. - Wayne Gretzky",
        "Life is what happens when you're busy making other plans. - John Lennon"
    );

    $random_quote = esc_html($quotes[array_rand($quotes)]);

    echo '<div class="quote_of_the_day">';
    echo '<h3>Quote of the Day!</h3>';
    echo '<p>"' . $random_quote . '"</p>';
    echo '</div>';
}

/* GameZoneX Overview Text Function */
function get_gamezonex_overview() {
    return 'Our gaming team is dedicated to competing at the highest levels in esports. 
            We also have a diverse group of players with different skills and playstyles, 
            constantly looking to improve and expand our team to win tournaments, big or small. 
            We have created a community where the opportunities are endless, 
            and everyone is allowed to join regardless of skill level.';
}

function my_theme_widgets_init() {
    register_sidebar( array(
        'name'          => 'Sidebar Calendar Widget',
        'id'            => 'sidebar-calendar',
        'before_widget' => '<div class="custom-widget widget-calendar">',
        'after_widget'  => '</div>',
        'before_title'  => '<h2 class="custom-widget-title">',
        'after_title'   => '</h2>',
    ) );
}
add_action( 'widgets_init', 'my_theme_widgets_init' );