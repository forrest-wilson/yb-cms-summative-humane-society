<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Humane_Society
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="http://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'humane-society' ); ?></a>

	<header id="masthead" class="site-header">
		<?php get_template_part('template-parts/header', 'nav'); ?>
	</header>

	<?php if (has_header_image()) : ?>

	<section class="jumbotron jumbotron-fluid feature-image" style="background-image: url('<?php echo get_header_image(); ?>');">

	<?php else : ?>
	
	<section class="jumbotron jumbotron-fluid feature-image feature-image-default">

	<?php endif; ?>

		<div class="opaque-cover"></div>
		<div class="container">
		<?php if (is_home() || is_front_page()) : ?>
			<h1><?php echo bloginfo('name'); ?></h1>
			<h3><?php echo bloginfo('description'); ?></h3>
		<?php elseif (is_search()) : ?>
			<h1><?php printf( esc_html__( 'Search Results for: %s', 'humane-society' ), '<span>' . get_search_query() . '</span>' ); ?></h1>
		<?php elseif (is_archive()) : ?>
			<h1><?php echo get_the_archive_title(); ?></h1>
		<?php elseif (is_404()) : ?>
			<h1><?php echo "404: Page Not Found"; ?></h1>
		<?php else : ?>
			<h1><?php echo the_title(); ?></h1>
		<?php endif; ?>
		</div>
	</section>

	<div id="content" class="site-content">
