<?php
/**
 * Child theme functions
 *
 * When using a child theme (see http://codex.wordpress.org/Theme_Development
 * and http://codex.wordpress.org/Child_Themes), you can override certain
 * functions (those wrapped in a function_exists() call) by defining them first
 * in your child theme's functions.php file. The child theme's functions.php
 * file is included before the parent theme's file, so the child theme
 * functions would be used.
 *
 * Text Domain: oceanwp
 * @link http://codex.wordpress.org/Plugin_API
 *
 */

/**
 * Load the parent style.css file
 *
 * @link http://codex.wordpress.org/Child_Themes
 */

// Add favicon
function favicon_link() {
    echo '<link rel="shortcut icon" type="image/x-icon" href="/wp-content/uploads/2020/05/parrot.svg" />' . "\n";
}
add_action( 'wp_head', 'favicon_link' );

// Blog : display title in the Header
function my_alter_page_header_title( $title ) {

    // Change the posts title to their actual title
    // OceanWP doc : https://docs.oceanwp.org/article/235-alter-main-page-title
    if ( is_singular( 'post') ) {
        $title = get_the_title();
    }
    // Return the title
    return "''".$title. "''";
}
add_filter( 'ocean_title', 'my_alter_page_header_title', 20 );

//Enqueue multiple style sheets into child theme
function oceanwp_child_enqueue_parent_style() {
    // Dynamically get version number of the parent stylesheet (lets browsers re-cache your stylesheet when you update your theme)
    $theme   = wp_get_theme( 'OceanWP' );
    $version = $theme->get( 'Version' );
    // Load the stylesheet
       wp_enqueue_style( 'child-style', get_stylesheet_directory_uri() . '/style.css', array ('oceanwp-style'), $version );
       wp_enqueue_style( 'child-navbar-style', get_stylesheet_directory_uri() . '/custom/navbar.css', array(), '1.0', 'all' );
       wp_enqueue_style( 'child-home-style', get_stylesheet_directory_uri() . '/custom/home.css', array(), '1.0', 'all' );
       wp_enqueue_style( 'child-voyages-style', get_stylesheet_directory_uri() . '/custom/voyages.css', array(), '1.0', 'all' );
       wp_enqueue_style( 'child-concept-style', get_stylesheet_directory_uri() . '/custom/concept.css', array(), '1.0', 'all' );
       wp_enqueue_style( 'child-carnets-style', get_stylesheet_directory_uri() . '/custom/carnets.css', array(), '1.0', 'all' );
       wp_enqueue_style( 'child-contact-style', get_stylesheet_directory_uri() . '/custom/contact.css', array(), '1.0', 'all' );
       wp_enqueue_style( 'child-articles-style', get_stylesheet_directory_uri() . '/custom/articles.css', array(), '1.0', 'all' );
}
add_action( 'wp_enqueue_scripts', 'oceanwp_child_enqueue_parent_style' );

// Add custom font to font settings
function ocean_add_custom_fonts() {
    return array( 'BarlowCondensed-Regular', 'IndieFlower-Regular' );
}
