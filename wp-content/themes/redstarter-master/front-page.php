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


        <?php // Shop Stuff Section ?>

            <?php if ( get_terms('productcategory') ) : ?>
            <div class="shop-stuff row">
                <h1 class="small-12 columns center-text">Shop Stuff</h1>
                    <?php get_template_part( 'template-parts/content', 'home'); ?>

            </div>
            <?php elseif ( current_user_can('administrator') ) : ?>
                <h1 class="small-12 columns center-text">You have no Shop categories. Add the Register Post Types plugin to add categories.</h1>
            <?php endif; ?>

        <?php // Journal Posts Section ?>

            <?php /* Start the Loop */ ?>
            <div class="journal-section row">
                <?php query_posts(array("post_type"=>"journal", "posts_per_page"=>3)) ?>
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
                <?php elseif ( current_user_can('administrator') ) : ?>
                    <h1 class="small-12 columns center-text">You have no Journal posts. Add the Register Post Types plugin to add journal posts.</h1>
               <?php else : ?>
                    <?php if ( have_posts() ) : ?>
                        <?php while ( have_posts() ) : the_post(); ?>
                        <?php
                            get_template_part( 'template-parts/content', 'journal' );
                        ?>
                        <?php endwhile; ?>
                    <?php endif; ?>
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
                <div class="small-12 columns">
                    <a href="<?php the_permalink(); ?>adventure" class="green-button button">More Adventures</a>
                </div>
            <?php elseif ( current_user_can('administrator') ) : ?>
            <h1 class="small-12 columns center-text">You have no Adventure posts. Add the Register Post Types plugin to add adventure posts.</h1>
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
                <div class="small-12 columns">
                    <a href="<?php the_permalink(); ?>adventure" class="green-button button">More Adventures</a>
                </div>
            <?php elseif ( current_user_can('administrator') ) : ?>
                <h1 class="small-12 columns center-text">You have no Adventure posts. Add the Register Post Types plugin to add adventure posts.</h1>
            <?php endif; ?>


        </div>









        <?php the_posts_navigation(); ?>



    </main><!-- #main -->
</div><!-- #primary -->


<?php get_footer(); ?>
</div>
