<?php
/**
 * The template for displaying single product posts.
 *
 * @package RED_Starter_Theme
 */

get_header(); ?>

    <div id="primary" class="content-area small-12 columns">
        <main id="main" class="site-main" role="main">

            <?php while ( have_posts() ) : the_post(); ?>

                <?php get_template_part( 'template-parts/content', 'single-product' ); ?>

            <?php endwhile; // End of the loop. ?>

        </main><!-- #main -->
    </div><!-- #primary -->

<?php get_footer(); ?>