</div><!-- #content -->

<footer id="colophon" class="site-footer">
    <div class="wrap">

        <!-- Footer Container (Flexbox) -->
        <div class="footer-container">
            <!-- Footer 1: Social Media Links -->
            <div class="footer1-social-media">
                <h3>Social Media Links</h3>
                <ul>
                    <li><a href="https://facebook.com/testingprofile1" target="_blank">Facebook</a></li>
                    <li><a href="https://instagram.com/testingprofile2" target="_blank">Instagram</a></li>
                    <li><a href="https://discord.com/testingprofile1" target="_blank">Discord</a></li>
                    <li><a href="https://twitter.com/testingprofile3" target="_blank">Twitter</a></li>
                </ul>
            </div>

            <!-- Footer 2: Contact Information -->
            <div class="footer2-contact-info">
                <h3>Contact Information</h3>
                <p>Contact Us: <a href="mailto:gaminginquiries@gamezonex.com">gaminginquiries@gamezonex.com</a></p>
                <p>Phone: (61) 413 847 123</p>
                <p>Address: 123 Gaming St, Perth, Australia</p>
            </div>
        </div>

        <?php
        get_template_part( 'template-parts/footer/footer', 'widgets' );

        if ( has_nav_menu( 'social' ) ) :
        ?>
            <nav class="social-navigation" aria-label="<?php esc_attr_e( 'Footer Social Links Menu', 'twentyseventeen' ); ?>">
                <?php
                wp_nav_menu(
                    array(
                        'theme_location' => 'social',
                        'menu_class'     => 'social-links-menu',
                        'depth'          => 1,
                        'link_before'    => '<span class="'
                    )
                );
                ?>
            </nav>
        <?php endif; ?>
    </div><!-- .wrap -->
</footer><!-- #colophon -->
</div><!-- .site-content-contain -->
</div><!-- #page -->
<?php wp_footer(); ?>

</body>
</html>