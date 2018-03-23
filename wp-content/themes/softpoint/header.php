<?php
/**
 * The header for our theme
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package SoftPoint
 */

?>
<!doctype html>
<?php softpoint_html_before(); ?>
<html <?php language_attributes(); ?>>
<head>
	<?php softpoint_head_top(); ?>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="http://gmpg.org/xfn/11">

	<?php softpoint_head_bottom(); ?>
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

	<?php softpoint_body_top(); ?>

	<div class="<?php if ( get_theme_mod( 'boxed_site' ) ) : echo 'container sp-container'; endif; ?> sp-content-bg">
		<div id="page" class="site">
			<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'softpoint' ); ?></a>

			<?php softpoint_header_before(); ?>
			<?php softpoint_header(); ?>
			<?php softpoint_header_after(); ?>

			<div id="content" class="site-content">
				<div class="<?php if ( !get_theme_mod( 'boxed_site' ) && !is_page_template( 'page-templates/full-width-blank.php' ) && !is_page_template( 'page-templates/front-page.php' ) ) : echo 'container sp-container'; endif; ?>">
					<div class="row justify-content-center">
