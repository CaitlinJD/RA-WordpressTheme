<?php
/**
 * Template part for displaying page content for the contact page.
 *
 * @package RED_Starter_Theme
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
    <header class="entry-header">
        <h1><?php the_title(); ?></h1>
    </header>

    <div class="entry-content">
        <?php echo (get_field('map_src')? "<div class='map'>".get_field('map_src')."</div>": ""); ?>

        <h2><?php echo get_field('secondary_title'); ?></h2>
        <?php the_content(); ?>
        <?php echo "<div class='contact-form'>".do_shortcode(get_field('form'))."</div>"; ?>

        <?php
        wp_link_pages( array(
            'before' => '<div class="page-links">' . esc_html( 'Pages:' ),
            'after'  => '</div>',
        ) );
        ?>
    </div><!-- .entry-content -->
</article><!-- #post-## -->