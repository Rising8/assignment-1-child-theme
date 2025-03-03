<?php

//*********Instead of @import Use enqueue as recommended by WordPress Codex **********/

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
/* Action Hooks */
add_action( 'wp_enqueue_scripts', 'my_theme_enqueue_styles' );

/* Customize the Footer - Adding custom footer text */

function custom_footer()
{
    echo '<p style = "text-align:center; font-size:14px;">&copy; ' . date("Y") . ' - Custom Footer for Twenty Seventeen Child.</p>';
}
add_action('wp_footer', 'custom_footer');

/* Custom Sidebar Widget - Register sidebar and widget functionality */

function custom_sidebar()
{
    /* Register custom sidebar */
    register_sidebar( array(
        'name'          => __('Custom Sidebar', 'twentyseventeen-child'),
        'id'            => 'custom-sidebar',
        'description'   => __('A sidebar for twentyseventeen child.', 'twentyseventeen-child'),
        'before_widget' => '<div class="custom-widget">',
        'after_widget'  => '</div>',
        'before_title'  => '<h3 class = "custom-widget-title">',
        'after_title'   => '</h3>',
    ));

    /* Custom Quote of the Day Widget on the front page */
    if (is_front_page())
    {
        echo '<div class = "quote-of-the-day-widget">';
        quote_of_the_day();
        echo '</div>';
    }

    /* Custom Search Widget with Accessibility Improvements */

    echo '<div class = "custom-widget-search">';
    echo '<form role = "search" method = "get" id = "searchform" action = "' . home_url( '/') . '" aria-label = "Search">';
    echo '<label for = "search-input" class = "screen-reader-text">Search</label>'; // label for screen readers
    echo '<input type = "search" id = "search-input" class = "search-field" placeholder = "Search..." value = "' . get_search_query() . '" name = "s" />';
    echo '<button type = "submit" class = "search-submit">Search</button>';
    echo '</form>';
    echo '</div>';
}
/* Action Hooks: hook the sidebar registration function to widgets_init action */
add_action('widgets_init', 'custom_sidebar');

/* Modifying Widget Titles - Filter for widget titles 
It allows to easily customize the apperance of widget titles across the whole site without manually editing each widget.
You can control it by modifying the CSS for .custom-widget-style in style.css */

function custom_widget_titles($title)
{
    /* Custom widget class for styling purposes */
    return '<span class = "custom-widget-style">' . $title . '</span>';
}
/* Hooks the widget title customization to widget_title function */
add_filter('widget_title', 'custom_widget_titles');

/* Custom Widget - Quote of the Day! */

function quote_of_the_day()
{
    /* Array of quotes for the quote of the day widget */
    $quotes = array(
        "The only way to do great work is to love what you do. - Steve Jobs",
        "It does not matter how slowly you go, as long as you do not stop. - Confucius",
        "Success is not final, failure is not fatal: It is the courage to continue that counts. - Winston Churchill",
        "A journey of a thousand miles begins with a single step - Lao Tzu",
        "You miss 100% of the shots you don't take. - Wayne Gretzky",
        "Life is what happens when you're busy making other plans. - John Lennon"
    );

    /* Gets a random quote from the array */
    $random_quote = $quotes[array_rand($quotes)];

    /* Displays the quote */
    echo '<div class = "quote_of_the_day">';
    echo '<h3>Quote of the day!</h3>';
    echo '<p>"' . esc_html($random_quote) . '"</p>';
    echo '</div>';
}