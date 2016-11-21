<?php
/**
 * Template part for displaying single posts.
 *
 * @package RED_Starter_Theme
 */

?>

<article id="post-<?php the_ID(); ?>" class="small-12 medium-12 large-12 columns <?php get_post_class(); ?>">
    <header class="entry-header">
        <?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
        <div class="by-author"><?php red_starter_posted_by(); ?></div>
    </header><!-- .entry-header -->

    <div class="entry-content">
        <?php the_content(); ?>

    </div><!-- .entry-content -->

</article><!-- #post-## -->
