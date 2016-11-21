<?php
/**
 * Template part for displaying adventure posts and product posts.
 *
 * @package RED_Starter_Theme
 */

?>

<article id="post-<?php the_ID(); ?>" class=" <?php echo ((get_post_type() == 'adventure')? 'adventure-section' : '' ); ?>" <?php //get_post_class(); ?> >
	<?php echo ((get_post_type() == 'product')? '<a href="'.get_the_permalink(). '">' : ''); ?>
	<?php if ( has_post_thumbnail() ) : ?>
		<?php the_post_thumbnail( 'square-thumb' ); ?>
	<?php endif; ?>
	<?php echo ((get_post_type() == 'product')? '</a>' : ''); ?>

	<div class="read-article <?php echo((get_post_type() == 'product')? 'grey-border' : ''); ?>">
		<?php echo((get_post_type() == 'product')? '<dl><dt>' : '<h2>'); ?>
		<?php the_title() ?>
		<?php echo((get_post_type() == 'product')? '</dt><dd>' : '</h2>'); ?>

		<?php if (get_post_type() == 'product') : ?>
			<?php $price = get_field('price');
			echo '$' . number_format($price, 2).'</dd></dl>'; ?>
		<?php endif; ?>

		<?php if (get_post_type() !== 'product') : ?>
			<a href="<?php the_permalink(); ?>" class="white-button button">Read more</a>
		<?php endif; ?>
		<div>



</article><!-- #post-## -->
