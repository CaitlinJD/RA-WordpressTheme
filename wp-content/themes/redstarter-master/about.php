<?php /* Template Name: About */ ?>

<?php get_header(); ?>

    <div id="primary" class="content-area small-12 columns">
        <main id="main" class="site-main" role="main">

        <?php if ( have_posts() ) : ?>
            <?php while ( have_posts() ) : the_post(); ?>

                <?php get_template_part( 'template-parts/content', 'about' ); ?>


            <?php endwhile; // End of the loop. ?>

        <? endif; ?>

        </main><!-- #main -->
    </div><!-- #primary -->


<?php get_footer(); ?>