<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package stemchik
 */

get_header();
?>

	<main id="primary" class="site-main">

        <main class="main">
            <div class="custom-page">
                <div class="custom-page__container">
                    <h1 class="custom-page__heading heading heading_dark"><?php echo the_title(); ?></h1>
                    <?php the_content(); ?>
                </div>
            </div>
        </main>

	</main><!-- #main -->

<?php

get_footer();
