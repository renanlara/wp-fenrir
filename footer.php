<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Wp_Fenrir
 */

?>

  	</div><!-- #content -->
  </div><!-- #page -->

    <footer id="footer" class="site-footer" role="contentinfo">
      <div class="container">
        <div class="row">
          <a class="text-center" href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home">
            <?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>
          </a>
        </div>
      </div>
    </footer><!-- #footer / colophon -->

    <?php wp_footer(); ?>

  </body>
</html>
