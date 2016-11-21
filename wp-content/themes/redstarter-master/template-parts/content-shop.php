<?php
/**
 * Template part for displaying product posts.
 *
 * @package RED_Starter_Theme
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
    <header class="entry-header">
        <?php if ( has_post_thumbnail() ) : ?>
            <?php echo ((get_post_type == 'product')? '<a href="'.the_permalink(). '">' : ''); ?>

            <?php the_post_thumbnail( 'square-thumb' ); ?>

            <?php echo ((get_post_type == 'product')? '</a>' : ''); ?>
        <?php endif; ?>
    </header><!-- .entry-header -->

    <div class="entry-content read-article">
        <div class='dotted_line'>
        <?php
        echo (get_the_title()? '<div class="item_name"><p>'. get_the_title().'</p></div>': '<div class="item_name">N/A</div>'); ?>

        <?php if (!empty(get_field('price'))){
                $price = get_field('price');
                if($price)
                echo '<div class="item_price"><p>$' . number_format($price, 2).'</p></div>';
                }else{ echo "<div class='item_price'>N/A</div>";}?>


        </div>
        <?php
        wp_link_pages( array(
            'before' => '<div class="page-links">' . esc_html( 'Pages:' ),
            'after'  => '</div>',
        ) );
        ?>
    </div><!-- .entry-content -->

    <footer class="entry-footer">
        <?php red_starter_entry_footer(); ?>
    </footer><!-- .entry-footer -->
</article><!-- #post-## -->
