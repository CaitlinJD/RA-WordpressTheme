<?php
/**
 * The template for displaying adventure single posts.
 *
 * @package RED_Starter_Theme
 */

get_header(); ?>

    <div id="primary" class="content-area small-12 columns">
        <main id="main" class="site-main" role="main">

            <div class="row">
            <?php while ( have_posts() ) : the_post(); ?>

                <?php get_template_part( 'template-parts/content', 'single-adventure' ); ?>



            <?php endwhile; // End of the loop. ?>

            </div>
        </main><!-- #main -->
    </div><!-- #primary -->

<?php get_footer(); ?>