<?php
/**
 * The sidebar containing the main widget area
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Twenty_Seventeen_Child
 */

/* Checks if the custom-sidebar has active widgets */
if ( is_active_sidebar( 'custom-sidebar' ) ) :
?>
    <aside id = "secondary" class = "widget-area">
        <?php
        /* Displays active widgets from the custom sidebar */
        dynamic_sidebar('custom-sidebar');
        ?>
    </aside><!-- #secondary --> 

<?php else : /* If no widgets are active in the custom-sidebar, there is a fallback message */
?>
<!-- Sidebar container will still show, but with a message -->
    <aside id = "secondary" class = "widget-area">
        <p><?php esc_html_e('No widgets found.', 'twentyseventeen-child'); /* Displays a message if there are no widgets found */
        ?></p>
    </aside><!-- #secondary --> 
<?php endif; ?>

