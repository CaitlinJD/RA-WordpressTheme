<?php
/**
 * The template for displaying journal single posts.
 *
 * @package RED_Starter_Theme
 */

get_header(); ?>

<div id="primary" class="content-area small-12 medium-8 large-9 columns">
    <main id="main" class="site-main" role="main">

        <?php while ( have_posts() ) : the_post(); ?>

            <?php get_template_part( 'template-parts/content', 'single' ); ?>

            <?php if(wp_get_post_terms(get_the_ID(), 'journalcategory')) : ?>
                <span>POSTED IN <i class="fa fa-long-arrow-right" aria-hidden="true"></i> <span class="post-categories">
                <?php
                $categories = wp_get_post_terms(get_the_ID(), 'journalcategory');
                if (!empty($categories)) {
                    $cat_count = count($categories);
                    $i = 1;
                    foreach ($categories as $cat) {
                        $name = $cat->name;
                        echo (( $i != $cat_count )? $name.", " : $name );
                        $i ++ ;
                    }
                }
                ?>
                    </span></span>
            <?php endif; ?>

            <?php if(wp_get_post_terms(get_the_ID(), 'journalcategory')) : ?>
        <span>TAGGED <i class="fa fa-long-arrow-right" aria-hidden="true"></i> <span class="post-tags">
                <?php
                $categories = wp_get_post_terms(get_the_ID(), 'journaltags');
                if (!empty($categories)) {
                    $cat_count = count($categories);
                    $i = 1;
                    foreach ($categories as $cat) {
                        $name = $cat->name;
                        echo (( $i != $cat_count )? $name." , " : $name );
                        $i ++ ;
                    }
                }
                ?>
                </span></span>
            <?php endif; ?>


            <?php
            // If comments are open or we have at least one comment, load up the comment template.
            if ( comments_open() || get_comments_number() ) :
                comments_template();
            endif;
            ?>

        <?php endwhile; // End of the loop. ?>

    </main><!-- #main -->
</div><!-- #primary -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>
