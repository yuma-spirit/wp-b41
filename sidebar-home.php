<?php
/**
 * The template for the sidebar containing the main widget area
 *
 * @package 
 * @subpackage 
 * @since 
 */
?>

<?php if ( is_active_sidebar( 'sidebar-1' ) ) : ?>
	<aside class="sidebar col-md-3 h-100 shadow-sm sticky-top">
		<?php dynamic_sidebar( 'sidebar-1' ); ?>
	</aside><!-- .sidebar .widget-area -->
<?php endif; ?>