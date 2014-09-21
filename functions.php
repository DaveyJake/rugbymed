<?php
/**
 * USA Rugby Medical Symposium functions and definitions
 *
 * @package USA Rugby Medical Symposium
 */

/**
 * Set the content width based on the theme's design and stylesheet.
 */
if ( ! isset( $content_width ) ) {
	$content_width = 1050; /* pixels */
}

if ( ! function_exists( 'rugbymed_setup' ) ) :

function rugbymed_setup() {

	// This theme uses wp_nav_menu() in one location.
	register_nav_menus( array(
		'main-sidebar' => __( 'Main Sidebar Menu', 'rugbymed' ),
	) );


	// Allow website to be translated
	load_theme_textdomain( 'rugbymed', get_template_directory() . '/languages' );
	
	// Add default posts and comments RSS feed links to head.
	add_theme_support( 'automatic-feed-links' );

	// Add thumbnail support
	add_theme_support( 'post-thumbnails' );

	// HTML5 Support
	add_theme_support( 'html5', array(
		'search-form', 'comment-form', 'comment-list', 'gallery', 'caption',
	) );
	add_theme_support( 'post-formats', array(
		'aside', 'image', 'video', 'quote', 'link',
	) );
}
endif; // rugbymed_setup
add_action( 'after_setup_theme', 'rugbymed_setup' );

// Include custom widgets --------------------------------------------------------------------------------------
function rugbymed_widgets_init() {
	register_sidebar( array(
		'name'          => __( 'Main Sidebar Menu', 'rugbymed' ),
		'id'            => 'main-sidebar',
		'description'   => '',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h1 class="widget-title">',
		'after_title'   => '</h1>',
	) );
}
add_action( 'widgets_init', 'rugbymed_widgets_init' );

/// Include custom widgets --------------------------------------------------------------------------------------

include("widgets/simple-widget.php");
include("widgets/featured-widget.php");

// Include Pagination --------------------------------------------------------------------------------------

include("inc/template-tags.php");

// Require jquery --------------------------------------------------------------------------------------

if (!is_admin()) add_action("wp_enqueue_scripts", "my_jquery_enqueue", 11);
function my_jquery_enqueue() {
   wp_deregister_script('jquery');
   wp_register_script('jquery', "http" . ($_SERVER['SERVER_PORT'] == 443 ? "s" : "") . "://ajax.googleapis.com/ajax/libs/jquery/1.9.0/jquery.min.js", false, null);
   wp_enqueue_script('jquery');

   // load a JS file from my theme: js/theme.js
   wp_enqueue_script('custom', get_template_directory_uri() . '/js/main.min.js', array('jquery'), '1.0', true);

}

//Enqueue scripts and styles --------------------------------------------------------------------------------------------------------

function rugbymed_scripts() {
	wp_enqueue_style( 'style', get_template_directory_uri() . '/css/style.css', false, '2.0.1' );
}
add_action( 'wp_enqueue_scripts', 'rugbymed_scripts' );


//Add Image Sizes ---------------------------------------------------------------------------------------------------------------
add_image_size( 'hero', 1030, 571, true );


// Selects Custom Post Type Templates for single and archive pages ---------------------------------------------------------------
add_filter('template_include', 'custom_template_include');

function custom_template_include($template) {
	$custom_template_location = '/views/';
    if ( get_post_type () ) {
    	if ( is_archive() ) :
        	if(file_exists(get_stylesheet_directory() . $custom_template_location . 'archive-' . get_post_type() . '.php'))
            	return get_stylesheet_directory() . $custom_template_location . 'archive-' . get_post_type() . '.php';
        endif;
        if ( is_single() ) :
        	if(file_exists(get_stylesheet_directory() . $custom_template_location . 'single-' . get_post_type() . '.php'))
            	return get_stylesheet_directory() . $custom_template_location . 'single-' . get_post_type() . '.php';
        endif;
        if ( is_page() ) :
        	if(file_exists(get_stylesheet_directory() . $custom_template_location . '_page-' . get_post_type() . '.php'))
            	return get_stylesheet_directory() . $custom_template_location . '_page-' . get_post_type() . '.php';
        endif;
    }
    return $template;
}

// Read More text ---------------------------------------------------------------------------------------------------------------

function new_content_more($more) {
       global $post;
       return ' <a href="' . get_permalink() . ' " class="more-link ajax">Read More...</a> ';
}   
add_filter( 'the_content_more_link', 'new_content_more' );

// Exerpt Filter ----------------------------------------------------------------------------------------------------------------

function get_excerpt($count){
  $permalink = get_permalink($post->ID);
  $excerpt = get_the_content();
  $excerpt = strip_tags($excerpt);
  $excerpt = substr($excerpt, 0, $count);
  $excerpt = substr($excerpt, 0, strripos($excerpt, " "));
  $excerpt = $excerpt.'... <a href="'.$permalink.'">more</a>';
  return $excerpt;
}

// Subtitle Support -------------------------------------------------------------------------------------------------------------

function theme_slug_add_subtitles_support() {
    add_post_type_support( 'custom-post-type-slug', 'subtitles' );
}
add_action( 'init', 'theme_slug_add_subtitles_support' );

// Using Categories as Classes --------------------------------------------------------------------------------------------------

function category_id_class($classes) {
    global $post;
    foreach((get_the_category($post->ID)) as $category)
    	$classes[] = $category->category_nicename;
    	return $classes;
}
add_filter('post_class', 'category_id_class');
add_filter('body_class', 'category_id_class');