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

	<div id="primary" class="content-area">
		<main id="main" class="site-main row" role="main">

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

			<?php else : ?>

				<?php get_template_part( 'template-parts/content', 'none' ); ?>

			<?php endif; ?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>




<?php
/**
 * The template for displaying the journal archive page.
 *
 * @package RED_Starter_Theme
 */

//get_header(); ?>

<!--
<div id="primary" class="content-area">
    <main id="main" class="site-main row" role="main">

        <?php// if ( have_posts() ) : ?>

            <h1 class="small-12 columns">Latest Adventures</h1>

            <?php /* Start the Loop */ ?>

            <div class="shop-items row">
                <?php

                //while ( have_posts() ) : the_post(); ?>
                    <div class="small-12 medium-6 large-6 coloumns">
                        <?php
                       // get_template_part( 'template-parts/content', 'adventure' );
                        ?>
                    </div>
                <?php// endwhile; ?>
            </div>

            <?php //the_posts_navigation(); ?>

        <?php //else : ?>

            <?php //get_template_part( 'template-parts/content', 'none' ); ?>

        <?php //endif; ?>


    </main><!-- #main -->
</div>  --><!-- #primary -->

<?php// get_footer(); ?>



<?php
/**
 * The template for displaying product archive page.
 *
 * @package RED_Starter_Theme
 */

//get_header(); ?>

<!--
<div id="primary" class="content-area">
	<main id="main" class="site-main" role="main">

		<?php// if ( have_posts() ) : ?>

			<header class="page-header">

				<h1>SHOP STUFF</h1>

				<?php /* Secondary menu */ ?>
				<div class="product-menu">
					<?php
					//$categories = get_terms('productcategory');
					//if (!empty($categories)){
						//foreach ($categories as $cat) {
							//print_r($cat);
						//	$name = $cat->name;
						//	$link = get_term_link($cat->term_id);
						//	echo "<a href='$link'>$name</a>";
						//}
					//}
					//print_r (get_terms('productcategory')) ;

					?>
				</div>

			</header><!-- .page-header -->

			<?php /* Start the Loop */ ?>
<!--
			<div class="shop-items row">
				<?php

				//while ( have_posts() ) : the_post(); ?>
					<div class="small-6 medium-4 large-3 coloumns">
						<?php
				//		get_template_part( 'template-parts/content', 'shop' );
						?>
					</div>
				<?php// endwhile; ?>
			</div>

			<?php// the_posts_navigation(); ?>

		<?php //else : ?>

			<?php// get_template_part( 'template-parts/content', 'none' ); ?>

		<?php// endif; ?>

	</main><!-- #main -->
<!-- </div><!-- #primary -->

<?php// get_footer(); ?>



<?php
/**
 * The template for displaying product archive page.
 *
 * @package RED_Starter_Theme
 */

//get_header(); ?>

<!--
<div id="primary" class="content-area">
	<main id="main" class="site-main" role="main">



		<?php// if ( have_posts() ) : ?>

			<header class="page-header">

				<?php

				//$category = get_term_by( 'slug', get_query_var('term'), get_query_var('taxonomy') );
				//print_r( $category);
				//echo "<h1>".$category -> name."</h1>";
				//echo "<div class='tax-description'><p>".$category -> description."</p></div>";

				?>

			</header><!-- .page-header -->

			<?php /* Start the Loop */ ?>
			<!--
			<div class="shop-items row">
				<?php

				//while ( have_posts() ) : the_post(); ?>
					<div class="small-6 medium-4 large-3 coloumns">
						<?php
						//get_template_part( 'template-parts/content', 'shop' );
						?>
					</div>
				<?php// endwhile; ?>
			</div>


		<?php// else : ?>

			<?php// get_template_part( 'template-parts/content', 'none' ); ?>

		<?php// endif; ?>

	</main><!-- #main -->
<!--
</div><!-- #primary -->

<?php //get_footer(); ?>
