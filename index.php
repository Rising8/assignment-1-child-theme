<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since Twenty Seventeen 1.0
 * @version 1.0
 */

get_header(); ?>

<div class="wrap">
	<header class="page-header">
		<h1 class="page-title">GameZoneX</h1> <!-- Fixed Page Title -->

        <!-- Website Summary Section -->
        <div class="website-summary">
            <h2>GameZoneX Overview</h2>
            <p>Our gaming team is dedicated to competing at the highest levels in esports. We also have a diverse group of players with different skills and playstyles, constantly looking to improve and expand our team to win tournaments, big or small. We have created a community where the opportunities are endless and everyone is allowed to join regardless of skill levels.</p>
        </div>

		<h2 class="page-title"><?php _e( 'Gaming Team', 'twentyseventeen' ); ?></h2>

        <!-- Players Section -->
        <div class="players-list">
            <h3>Meet our Professional Players</h3>
            <div class="player">
                <img src="https://img.freepik.com/free-photo/hispanic-teenager-playing-video-game-holding-controller-relaxed-with-serious-expression-face-simple-natural-looking-camera_839833-3187.jpg" alt="Player 1" class="player-image">
                <p class="player-name">Jeff Hamilton</p>
            </div>
            <div class="player">
                <img src="https://thumbs.dreamstime.com/b/arabic-guy-gamer-taking-selfie-video-call-friends-showing-victory-sign-winning-game-copy-space-arabic-guy-gamer-284866091.jpg" alt="Player 2" class="player-image">
                <p class="player-name">Blake Conroy</p>
            </div>
            <div class="player">
                <img src="https://thumbs.dreamstime.com/b/streamer-young-man-professional-gamer-playing-online-games-computer-headphones-make-selfie-photo-neon-color-243511228.jpg" alt="Player 3" class="player-image">
                <p class="player-name">Jake McDonald</p>
            </div>
        </div>
        
        <!-- Community Link Section -->
        <p class="header-description">Join our gaming community for the latest updates, tips, and gaming news!
        <a href="https://discord.gg/j1H6P4xw" class="discord-link">https://discord.gg/j1H6P4xw</a></p>

        <div class="events-section">
            <h2 class="events-title">Upcoming Events/Tournaments</h2>
            <p class="events-description">Stay tuned for upcoming events and tournaments!</p>

            <!-- Event 1 -->
            <div class="event">
                <button class="event-title" onclick="toggleEventDetails(this)">
                    <h3>Exo Tournament</h3>
                </button>
                <div class="event-details" style="display:none;">
                    <p class="event-date">Date: March 8, 2025</p>
                    <p>Details: A thrilling tournament for all skill levels!</p>
                </div>
            </div>

            <!-- Event 2 -->
            <div class="event">
                <button class="event-title" onclick="toggleEventDetails(this)">
                    <h3>Brittania Event</h3>
                </button>
                <div class="event-details" style="display:none;">
                    <p class="event-date">Date: May 1, 2025</p>
                    <p>Details: All skill levels invited! $500 in prizes to win!</p>
                </div>
            </div>

            <!-- Event 3 -->
            <div class="event">
                <button class="event-title" onclick="toggleEventDetails(this)">
                    <h3>Corpse Event</h3>
                </button>
                <div class="event-details" style="display:none;">
                    <p class="event-date">Date: June 29, 2025</p>
                    <p>Details: A special gaming event with $5000 in prizes to win!</p>
                </div>
            </div>

            <!-- Event 4 -->
            <div class="event">
                <button class="event-title" onclick="toggleEventDetails(this)">
                    <h3>Mid Season Tournament</h3>
                </button>
                <div class="event-details" style="display:none;">
                    <p class="event-date">Date: August 13, 2025</p>
                    <p>Details: World Gaming Cup qualifiers!</p>
                </div>
            </div>
        </div> 
	</header>

	<div id="primary" class="content-area">
		<main id="main" class="site-main">

			<?php
			if ( have_posts() ) :

				// Start the Loop.
				while ( have_posts() ) :
					the_post();

					/*
					 * Include the Post-Format-specific template for the content.
					 * If you want to override this in a child theme, then include a file
					 * called content-___.php (where ___ is the Post Format name) and that
					 * will be used instead.
					 */
					get_template_part( 'template-parts/post/content', get_post_format() );

				endwhile;

                /* Pagination for posts */
				the_posts_pagination(
					array(
						/* translators: Hidden accessibility text. */
						'prev_text'          => twentyseventeen_get_svg( array( 'icon' => 'arrow-left' ) ) . '<span class="screen-reader-text">' . __( 'Previous page', 'twentyseventeen' ) . '</span>',
						/* translators: Hidden accessibility text. */
						'next_text'          => '<span class="screen-reader-text">' . __( 'Next page', 'twentyseventeen' ) . '</span>' . twentyseventeen_get_svg( array( 'icon' => 'arrow-right' ) ),
						/* translators: Hidden accessibility text. */
						'before_page_number' => '<span class="meta-nav screen-reader-text">' . __( 'Page', 'twentyseventeen' ) . ' </span>',
					)
				);

			else :

                // Message for when no posts are available 
                echo '<p>No posts are available.</p>';

			endif;
			?>

		</main><!-- #main -->
	</div><!-- #primary -->
	<?php get_sidebar(); ?>
</div><!-- .wrap -->

<script>
    /* This is the javascript code for when you click on each individual events/tournaments to show more details */
    /* Toggles visibility of event details when the button is clicked */
    function toggleEventDetails(button) 
    {
        var eventDetails = button.nextElementSibling; // Get the div containing event details
        if (eventDetails.style.display === "none" || eventDetails.style.display === "") 
        {
            eventDetails.style.display = "block"; // Show event details
        } 
        else 
        {
            eventDetails.style.display = "none"; // Hide event details
        }
    }
</script>

<?php
get_footer();
?>