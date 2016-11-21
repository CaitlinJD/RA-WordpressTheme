<?php
/**
 * The template for displaying the journal archive page.
 *
 * @package RED_Starter_Theme
 */

get_header(); ?>


<div id="primary" class="content-area small-12 medium-8 large-9 columns">
    <main id="main" class="site-main" role="main">

        <?php if ( have_posts() ) : ?>

            <?php /* Start the Loop */ ?>
            <?php while ( have_posts() ) : the_post(); ?>

                <?php
                get_template_part( 'template-parts/content', 'journal' );
                ?>

            <?php endwhile; ?>

            <?php the_posts_navigation(); ?>

        <?php else : ?>

            <?php get_template_part( 'template-parts/content', 'none' ); ?>

        <?php endif; ?>

    </main><!-- #main -->
</div><!-- #primary -->
<?php get_sidebar(); ?>
<?php get_footer(); ?>
