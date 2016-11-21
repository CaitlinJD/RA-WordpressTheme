<?php
/**
 * Template part for displaying single product posts.
 *
 * @package RED_Starter_Theme
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
    <header class="entry-header content-title row">
        <h2 class="small-12 columns center-text"><?php echo get_field('content_title'); ?></h2>

        <div class="entry-content primary small-12 columns">
            <?php the_content(); ?>
        </div>
    </header><!-- .entry-header -->



    <header class="entry-header secondary-title row">
        <h2 class="small-12 columns center-text"><?php echo get_field('secondary_title'); ?></h2>

        <div class="small-12 columns entry-content secondary">
            <?php echo get_field('secondary_content'); ?>
        </div>
    </header><!-- .entry-header -->




</article><!-- #post-## -->