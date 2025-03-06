<?php
/**
 * The sidebar containing the main widget area
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 */

?>

<aside id="secondary" class="widget-area" aria-label="<?php esc_attr_e( 'Blog Sidebar', 'twentyseventeen' ); ?>">

    <!-- Main Sidebar Widgets -->
    <?php if ( is_active_sidebar( 'sidebar-1' ) ) : ?>
        <?php dynamic_sidebar( 'sidebar-1' ); ?>
    <?php endif; ?>

    <!-- Ensure GameZoneX Overview and Events Are Displayed -->
    <?php if ( is_active_sidebar( 'gamezonex-overview' ) ) : ?>
        <?php dynamic_sidebar( 'gamezonex-overview' ); ?>
    <?php endif; ?>

    <?php if ( is_active_sidebar( 'events-section' ) ) : ?>
        <?php dynamic_sidebar( 'events-section' ); ?>
    <?php endif; ?>

    <!-- Always Show Calendar -->
    <div class="sidebar-calendar">
        <?php if ( is_active_sidebar( 'sidebar-calendar' ) ) : ?>
            <?php dynamic_sidebar( 'sidebar-calendar' ); ?>
        <?php else : ?>
            <div class="custom-widget widget-calendar">
                <h2 class="custom-widget-title">Calendar</h2>
                <?php the_widget( 'WP_Widget_Calendar' ); ?>
            </div>
        <?php endif; ?>
    </div>

    <!-- Custom Quote of the Day Widget -->
    <?php do_action('wp_sidebar'); ?>

</aside><!-- #secondary -->
