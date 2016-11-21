<?php
/**
 * The template for displaying the home page.
 *
 * @package RED_Starter_Theme
 */

?>
<div class="homePage">

<?php get_header(); ?>

<div id="primary" class="content-area small-12 columns">
    <main id="main" class="site-main" role="main">

        <div class="shop-stuff row">
            <h1 class="small-12 columns center-text">Shop Stuff</h1>
                <?php get_template_part( 'template-parts/content', 'home'); ?>

        </div>





            <?php /* Start the Loop */ ?>
            <?php query_posts(array("post_type"=>"journal", "posts_per_page"=>3)) ?>
            <div class="journal-section row">
                <?php if ( have_posts() ) : ?>

                <h1 class="small-12 columns center-text">INHABITANT JOURNAL</h1>

                        <?php $journal_counter = 1; ?>

                        <?php while ( have_posts() ) : the_post(); ?>
                        <article id="post-<?php the_ID(); ?>" class="small-12 medium-6 large-4 <?php echo ($journal_counter == 3? 'hide-for-medium-only' : '' )?> columns  ">
                            <?php
                            get_template_part( 'template-parts/content', 'home' );
                            ?>
                            <?php $journal_counter ++; ?>
                        </article><!-- #post-## -->
                        <?php endwhile; wp_reset_query(); ?>
                        <?php endif; ?>
            </div>


        <?php /* Adventure Posts */ ?>
        <?php query_posts(array("post_type"=>"adventure", "posts_per_page"=>4)) ?>
        <div class="adventure-section row">
            <?php if ( have_posts() ) : ?>

                <h1 class="small-12 columns center-text">LATEST ADVENTURES</h1>

                <?php $post_count = 1 ?>
                <?php while ( have_posts() ) : the_post(); ?>

                    <?php echo (($post_count ==1)? '<div class="small-12 medium-6 large-6 columns first-column">' : '') ?>
                    <?php echo (($post_count ==2)? '<div class="small-12 medium-6 large-6 columns second-column flex"><div class="second-post">': '') ?>
                    <?php echo (($post_count ==3)? '<div class="three-and-four flex"><div class="third-post">': '') ?>
                    <?php echo (($post_count ==4)? '<div class="fourth-post">': '') ?>


                    <?php get_template_part( 'template-parts/content' ); ?>


                    <?php echo(($post_count ==1)? '</div>': '') ?>
                    <?php echo (($post_count ==4)? '</div></div></div>': '') ?>
                    <?php echo (($post_count ==2)? '</div>': '') ?>
                    <?php echo (($post_count ==3)? '</div>': '') ?>
                    <?php $post_count ++ ?>
                <?php endwhile; wp_reset_query(); ?>
            <?php endif; ?>
            <div class="small-12 columns">
                <a href="<?php the_permalink(); ?>adventure" class="green-button button">More Adventures</a>
            </div>
        </div>







        <?php the_posts_navigation(); ?>



    </main><!-- #main -->
</div><!-- #primary -->


<?php get_footer(); ?>
</div>
