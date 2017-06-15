<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Wp_Fenrir
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
  <head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="profile" href="http://gmpg.org/xfn/11">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800|Roboto:300,400,700,900" rel="stylesheet">
    <?php wp_head(); ?>
    <style>
    	<?php include 'assets/css/application.min.css'; ?>
    </style>
  </head>

  <body <?php body_class(); ?>>

  <!-- SVG Icons -->
  <div style="display: none;"><?php include 'icons/sprite/svg_sprite.svg'; ?></div>

  <div id="page" class="site">
  	<header class="site-header _clearfix" role="banner">

  	</header>

  	<div id="content" class="site-content">
