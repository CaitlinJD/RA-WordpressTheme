<?php
/**
 * Template part for displaying single product posts.
 *
 * @package RED_Starter_Theme
 */

?>

<article id="post-<?php the_ID(); ?>" class="row <?php get_post_class(); ?>">
    <header class="entry-header small-12 medium-6 large-6 columns">
        <?php if ( has_post_thumbnail() ) : ?>
            <?php the_post_thumbnail( 'large' ); ?>
        <?php endif; ?>
    </header><!-- .entry-header -->

    <div class="entry-content small-12 medium-6 large-6 columns">
        <?php
        echo (get_the_title()? '<div class="item_name"><h1>'. get_the_title().'</h1></div>': '<div class="item_name">N/A</div>'); ?>

        <?php if (!empty(get_field('price'))){
            $price = get_field('price');
            if($price)
                echo '<div class="item_price"><h3>$' . number_format($price, 2).'</h3></div>';
        }else{ echo "<div class='item_price'>N/A</div>";}?>

        <?php the_content(); ?>


    </div><!-- .entry-content -->

    <footer class="entry-footer">
        <?php //red_starter_entry_footer(); ?>
    </footer><!-- .entry-footer -->
</article><!-- #post-## -->
