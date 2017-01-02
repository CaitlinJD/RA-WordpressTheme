<?php
/**
 * The template for displaying product and adventure archive page.
 *
 * @package RED_Starter_Theme
 */

/**
 * The template for displaying product and adventure archive page.
 *
 * @package RED_Starter_Theme
 */

get_header(); ?>

	<div id="primary" class="content-area small-12 columns">
		<main id="main" class="site-main" role="main">

			<?php if ( have_posts() ) : ?>

				<header class="page-header small-12 columns ">

					<?php if (is_tax()) : ?>
						<?php $category = get_term_by( 'slug', get_query_var('term'), get_query_var('taxonomy') ); ?>
					<?php endif; ?>

					<h1 class="center-text">
						<?php echo (((get_post_type() == 'product') && is_tax())? $category -> name :
							((get_post_type() == 'product')? 'SHOP STUFF' :
								((get_post_type() == 'adventure')? "LATEST ADVENTURES" : ""))); ?>
					</h1>


						<?php if ( get_post_type() == 'product') : ?>
							<?php /* Secondary menu */ ?>

							<div class="product-menu small-12 columns center-text">
								<?php if (is_tax()) : ?>
									<div class='tax-description'><?php echo $category -> description ?></div>
								<?php else : ?>
									<?php
									$categories = get_terms('productcategory');
									if (!empty($categories)){
										foreach ($categories as $cat) {
											//print_r($cat);
											$name = $cat->name;
											$link = get_term_link($cat->term_id);
											echo "<a href='$link'>$name</a>";
										}
									}
									//print_r (get_terms('productcategory')) ;

									?>
								<?php endif; ?>
							</div>
						<?php endif; ?>



				</header><!-- .page-header -->

				<?php /* Start the Loop */ ?>
				<div class="posts row <?php echo ((get_post_type('adventure')? 'adventures' : 'shop-items')); ?>">
					<?php

					while ( have_posts() ) : the_post(); ?>
						<div class="<?php echo ((get_post_type() == 'product')? 'small-6 medium-4 large-3' : 'small-12 medium-6 large-6'); ?> columns">
							<?php
                            get_template_part( 'template-parts/content' );
							//get_template_part( 'template-parts/content', 'shop' );
							?>
						</div>
					<?php endwhile; ?>
				</div>

				<?php the_posts_navigation(); ?>
			<?php elseif ( current_user_can('administrator') ) : ?>
				<h2>You have no adventure posts. Install the REGISTER POST TYPES plugin to create adventure posts.</h2>
			<?php else : ?>

				<?php get_template_part( 'template-parts/content', 'none' ); ?>

			<?php endif; ?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>
