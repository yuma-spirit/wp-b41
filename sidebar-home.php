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
		<?php dynamic_sidebar( 'sidebar-1' ); ?>
<?php endif; ?>