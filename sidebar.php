<?php
/**
 * The sidebar containing the main widget area
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Wp_Fenrir
 */

if ( ! is_active_sidebar( 'sidebar-1' ) ) {
	return;
}
?>

<aside id="secondary" class="widget-area" role="complementary">
	<?php
    $args = array(
      'name' => 'Exemplo'
    );
    the_component('sidebar', $args);
  ?>
</aside><!-- #secondary -->
