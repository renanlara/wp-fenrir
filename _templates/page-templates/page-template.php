<?php
/**
 * The template: %TEMPLATE_NAME%
 *
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Wp_Fenrir
 */

get_header(); ?>

<div id="primary" class="content-area">
  <main id="main" class="site-main" role="main">

    <h1><?php the_title(); ?></h1>

  </main><!-- #main -->
</div><!-- #primary -->

<?php
get_sidebar();
get_footer();
