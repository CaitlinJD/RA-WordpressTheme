<?php
/**
 * The sidebar containing the main widget area.s
 *
 * @package RED_Starter_Theme
 */

if ( ! is_active_sidebar( 'sidebar-1' ) ) {
	if ( current_user_can('administrator') ) {
		echo '<div id="secondary" class="widget-area small-12 medium-4 large-3 columns" role="complementary">';
			echo '<p>No content in sidebar. Add widgets to the sidebar through dashboard.</p>';
		echo '</div>';
	} else {
		return;
	}
}
?>

<div id="secondary" class="widget-area small-12 medium-4 large-3 columns" role="complementary">
	<?php dynamic_sidebar( 'sidebar-1' ); ?>
</div><!-- #secondary -->
