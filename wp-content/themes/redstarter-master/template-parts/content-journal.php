<?php
/**
 * Template part for displaying journal posts.
 *
 * @package RED_Starter_Theme
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
    <header class="entry-header">
        <?php if ( has_post_thumbnail() ) : ?>
            <?php the_post_thumbnail( 'full' ); ?>
        <?php endif; ?>

        <?php the_title( sprintf( '<h2 class="entry-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h2>' ); ?>


        <div class="entry-meta">
            <?php red_starter_posted_on(); ?> / <?php if (get_comments_number() != 0){comments_number( '0 Comments', '1 Comment', '% Comments' ); echo " /";}?>  <?php red_starter_posted_by(); ?>
        </div><!-- .entry-meta -->

    </header><!-- .entry-header -->

    <div class="entry-content">
        <?php the_excerpt(); ?>
        <a href="<?php the_permalink(); ?>" class="black-button button">Read more &nbsp <i class="fa fa-long-arrow-right" aria-hidden="true"></i></a>
    </div><!-- .entry-content -->
</article><!-- #post-## -->