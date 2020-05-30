<?php
/**
 * The Header for our theme.
 *
 * @package OceanWP WordPress theme
 */ ?>

<!DOCTYPE html>
<html class="<?php echo esc_attr( oceanwp_html_classes() ); ?>" <?php language_attributes(); ?><?php oceanwp_schema_markup( 'html' ); ?>>
<head>
    <meta name=”viewport” content=”width=device-width, initial-scale=1″>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
    <link rel="profile" href="https://gmpg.org/xfn/11">
    <link href="https://fonts.googleapis.com/css?family=Barlow+Condensed|Indie+Flower&display=swap" rel="stylesheet">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?> <?php oceanwp_schema_markup( 'html' ); ?>>

	<?php do_action( 'ocean_before_outer_wrap' ); ?>

	<div id="outer-wrap" class="site clr">

		<?php do_action( 'ocean_before_wrap' ); ?>

		<div id="wrap" class="clr">

			<?php do_action( 'ocean_top_bar' ); ?>

			<?php do_action( 'ocean_header' ); ?>

			<?php do_action( 'ocean_before_main' ); ?>
			
			<main id="main" class="site-main clr"<?php oceanwp_schema_markup( 'main' ); ?>>

				<?php do_action( 'ocean_page_header' ); ?>
