<?php
/**
 * The header for our theme.
 *
 * @package RED_Starter_Theme
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
	<head>
		<meta charset="<?php bloginfo( 'charset' ); ?>">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="profile" href="http://gmpg.org/xfn/11">
		<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

	<?php wp_head(); ?>
	</head>

	<body <?php body_class(); ?>>
		<div id="page" class="hfeed site">
			<a class="skip-link screen-reader-text" href="#content"><?php esc_html( 'Skip to content' ); ?></a>

			<header id="masthead" class="site-header <?php echo ( (is_home() || is_front_page() || is_single() || is_page_template('about.php')) && get_field('banner_image')? 'full-header' : 'min-header') ?> " role="banner">
                <?php if ( (is_home() || is_front_page() || is_single() || is_page_template('about.php')) &&  get_field('banner_image')){
                    $imgArray = get_field('banner_image');
                    $image = $imgArray['url'];
                    $logoImage = get_bloginfo('template_url')."/images/logos/inhabitent-logo-full.svg";

                    echo "<div style=\"background: url('$image')".(is_front_page() || is_home()? 'center' : 'center bottom' )."/cover no-repeat\" class='banner-image'>";
					echo "<div class='background-overlay flex'>";
                } ?>

					<?php echo ( (is_front_page() || is_home())? "<div style=\"background: url('$logoImage') center/300px 300px no-repeat\" class='home-page-logo flex'>": "" ) ; ?>

				<?php echo ( is_page_template('about.php')? "<div class='nav-content flex'>" : "") ?>
						<div class="site-branding">

							<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><div class="link-space"></div></a>

						</div><!-- .site-branding -->

						<nav id="site-navigation" class="main-navigation" role="navigation">
							<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><?php esc_html( 'Primary Menu' ); ?></button>
							<?php echo ( has_nav_menu( 'primary' )? wp_nav_menu( array( 'theme_location' => 'primary', 'menu_id' => 'primary-menu' ) ) : (  current_user_can('administrator') ? "No menu items found in Primary Menu" : '' ) ); ?>

							<?php //if ( has_nav_menu( 'primary' ) ){ wp_nav_menu( array( 'theme_location' => 'primary', 'menu_id' => 'primary-menu' ) ); }?>
							<?php echo get_search_form() ?>
						</nav><!-- #site-navigation -->
				<?php echo ( is_page_template('about.php') ? "</div>" : "" )?>
				<?php echo ( is_page_template('about.php') ? "<div class='header-title flex'><h1 class='entry-title'>".get_the_title()."</h1></div>" : "" ) ; ?>


					<?php echo ( (is_front_page() || is_home())? "</div>": ""); ?>
                <?php echo ( (is_home() || is_front_page() || is_single() || is_page_template('about.php')) &&  get_field('banner_image')? "</div></div>" : ""); ?>
			</header><!-- #masthead -->


			<div id="content" class="site-content row">
