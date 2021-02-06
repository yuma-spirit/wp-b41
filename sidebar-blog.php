<?php
/**
 * The template for the sidebar containing the main widget area
 *
 * @package 
 * @subpackage 
 * @since 
 */
?>

<?php if ( is_active_sidebar( 'sidebar-2' ) ) : ?>
	<aside class="sidebar col-md-3 h-100">
		<?php dynamic_sidebar( 'sidebar-2' ); ?>
	</aside><!-- .sidebar .widget-area -->
<?php endif; ?>