<?php

/**
 * Mazzako Portal functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Mazzako_Portal
 */

if (!defined('_S_VERSION')) {
	// Replace the version number of the theme on each release.
	define('_S_VERSION', '1.0.0');
}

/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function mazzako_portal_setup()
{
	/*
		* Make theme available for translation.
		* Translations can be filed in the /languages/ directory.
		* If you're building a theme based on Mazzako Portal, use a find and replace
		* to change 'mazzako-portal' to the name of your theme in all the template files.
		*/
	load_theme_textdomain('mazzako-portal', get_template_directory() . '/languages');

	// Add default posts and comments RSS feed links to head.
	add_theme_support('automatic-feed-links');

	/*
		* Let WordPress manage the document title.
		* By adding theme support, we declare that this theme does not use a
		* hard-coded <title> tag in the document head, and expect WordPress to
		* provide it for us.
		*/
	add_theme_support('title-tag');

	/*
		* Enable support for Post Thumbnails on posts and pages.
		*
		* @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
		*/
	add_theme_support('post-thumbnails');

	// This theme uses wp_nav_menu() in one location.
	register_nav_menus(
		array(
			'menu-1' => esc_html__('Primary', 'mazzako-portal'),
		)
	);

	/*
		* Switch default core markup for search form, comment form, and comments
		* to output valid HTML5.
		*/
	add_theme_support(
		'html5',
		array(
			'search-form',
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
			'style',
			'script',
		)
	);

	// Set up the WordPress core custom background feature.
	add_theme_support(
		'custom-background',
		apply_filters(
			'mazzako_portal_custom_background_args',
			array(
				'default-color' => 'ffffff',
				'default-image' => '',
			)
		)
	);

	// Add theme support for selective refresh for widgets.
	add_theme_support('customize-selective-refresh-widgets');

	/**
	 * Add support for core custom logo.
	 *
	 * @link https://codex.wordpress.org/Theme_Logo
	 */
	add_theme_support(
		'custom-logo',
		array(
			'height'      => 250,
			'width'       => 250,
			'flex-width'  => true,
			'flex-height' => true,
		)
	);
}
add_action('after_setup_theme', 'mazzako_portal_setup');

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function mazzako_portal_content_width()
{
	$GLOBALS['content_width'] = apply_filters('mazzako_portal_content_width', 640);
}
add_action('after_setup_theme', 'mazzako_portal_content_width', 0);

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function mazzako_portal_widgets_init()
{
	register_sidebar(
		array(
			'name'          => esc_html__('Sidebar', 'mazzako-portal'),
			'id'            => 'sidebar-1',
			'description'   => esc_html__('Add widgets here.', 'mazzako-portal'),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);
	register_sidebar(
		array(
			'name'          => esc_html__('HomePageAds2', 'mazzako-portal'),
			'id'            => 'homeadss',
			'description'   => esc_html__('Add widgets here.', 'mazzako-portal'),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);
	register_sidebar(
		array(
			'name'          => esc_html__('HomePageAds3', 'mazzako-portal'),
			'id'            => 'homeadsss',
			'description'   => esc_html__('Add widgets here.', 'mazzako-portal'),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);
	register_sidebar(
		array(
			'name'          => esc_html__('Header Social Icons', 'mazzako-portal'),
			'id'            => 'headersocial',
			'description'   => esc_html__('Add widgets here.', 'mazzako-portal'),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);
}
add_action('widgets_init', 'mazzako_portal_widgets_init');

/**
 * Enqueue scripts and styles.
 */
function mazzako_portal_scripts()
{
	wp_enqueue_style('mazzako-portal-style', get_stylesheet_uri(), array(), _S_VERSION);
	wp_style_add_data('mazzako-portal-style', 'rtl', 'replace');

	wp_enqueue_script('mazzako-portal-navigation', get_template_directory_uri() . '/js/navigation.js', array(), _S_VERSION, true);

	if (is_singular() && comments_open() && get_option('thread_comments')) {
		wp_enqueue_script('comment-reply');
	}
}
add_action('wp_enqueue_scripts', 'mazzako_portal_scripts');

/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Functions which enhance the theme by hooking into WordPress.
 */
require get_template_directory() . '/inc/template-functions.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
if (defined('JETPACK__VERSION')) {
	require get_template_directory() . '/inc/jetpack.php';
}







class bootstrap_5_wp_nav_menu_walker extends Walker_Nav_menu
{
	private $current_item;
	private $dropdown_menu_alignment_values = [
		'dropdown-menu-start',
		'dropdown-menu-end',
		'dropdown-menu-sm-start',
		'dropdown-menu-sm-end',
		'dropdown-menu-md-start',
		'dropdown-menu-md-end',
		'dropdown-menu-lg-start',
		'dropdown-menu-lg-end',
		'dropdown-menu-xl-start',
		'dropdown-menu-xl-end',
		'dropdown-menu-xxl-start',
		'dropdown-menu-xxl-end'
	];

	function start_lvl(&$output, $depth = 0, $args = null)
	{
		$dropdown_menu_class[] = '';
		foreach ($this->current_item->classes as $class) {
			if (in_array($class, $this->dropdown_menu_alignment_values)) {
				$dropdown_menu_class[] = $class;
			}
		}
		$indent = str_repeat("\t", $depth);
		$submenu = ($depth > 0) ? ' sub-menu' : '';
		$output .= "\n$indent<ul class=\"dropdown-menu$submenu " . esc_attr(implode(" ", $dropdown_menu_class)) . " depth_$depth\">\n";
	}

	function start_el(&$output, $item, $depth = 0, $args = null, $id = 0)
	{
		$this->current_item = $item;

		$indent = ($depth) ? str_repeat("\t", $depth) : '';

		$li_attributes = '';
		$class_names = $value = '';

		$classes = empty($item->classes) ? array() : (array) $item->classes;

		$classes[] = ($args->walker->has_children) ? 'dropdown' : '';
		$classes[] = 'nav-item';
		$classes[] = 'nav-item-' . $item->ID;
		if ($depth && $args->walker->has_children) {
			$classes[] = 'dropdown-menu dropdown-menu-end';
		}

		$class_names =  join(' ', apply_filters('nav_menu_css_class', array_filter($classes), $item, $args));
		$class_names = ' class="' . esc_attr($class_names) . '"';

		$id = apply_filters('nav_menu_item_id', 'menu-item-' . $item->ID, $item, $args);
		$id = strlen($id) ? ' id="' . esc_attr($id) . '"' : '';

		$output .= $indent . '<li ' . $id . $value . $class_names . $li_attributes . '>';

		$attributes = !empty($item->attr_title) ? ' title="' . esc_attr($item->attr_title) . '"' : '';
		$attributes .= !empty($item->target) ? ' target="' . esc_attr($item->target) . '"' : '';
		$attributes .= !empty($item->xfn) ? ' rel="' . esc_attr($item->xfn) . '"' : '';
		$attributes .= !empty($item->url) ? ' href="' . esc_attr($item->url) . '"' : '';

		$active_class = ($item->current || $item->current_item_ancestor || in_array("current_page_parent", $item->classes, true) || in_array("current-post-ancestor", $item->classes, true)) ? 'active' : '';
		$nav_link_class = ($depth > 0) ? 'dropdown-item ' : 'nav-link ';
		$attributes .= ($args->walker->has_children) ? ' class="' . $nav_link_class . $active_class . ' dropdown-toggle" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"' : ' class="' . $nav_link_class . $active_class . '"';

		$item_output = $args->before;
		$item_output .= '<a' . $attributes . '>';
		$item_output .= $args->link_before . apply_filters('the_title', $item->title, $item->ID) . $args->link_after;
		$item_output .= '</a>';
		$item_output .= $args->after;

		$output .= apply_filters('walker_nav_menu_start_el', $item_output, $item, $depth, $args);
	}
}
// register a new menu
register_nav_menu('main-menu', 'Main menu');


function wptheme_sidebar()
{

	register_sidebar(array(
		'name' => esc_html__('Header Ads', 'wptheme'),
		'id' => 'header-ads',
		'description' => esc_html__('Add New Sidebar', 'wptheme'),
		'before_widget' => '',
		'after_widget' => '',
		'before_title' => '',
		'after_title' => '',

	));

	register_sidebar(array(
		'name' => esc_html__('HomePage Aside-Ads', 'wptheme'),
		'id' => 'aside-ads',
		'description' => esc_html__('Add New Sidebar', 'wptheme'),
		'before_widget' => '',
		'after_widget' => '',
		'before_title' => '',
		'after_title' => '',

	));


	register_sidebar(array(
		'name' => esc_html__('Footer Frist', 'wptheme'),
		'id' => 'footer-1',
		'description' => esc_html__('Add New Sidebar', 'wptheme'),
		'before_widget' => '',
		'after_widget' => '',
		'before_title' => '',
		'after_title' => '',

	));
	register_sidebar(array(
		'name' => esc_html__('Footer Second', 'wptheme'),
		'id' => 'footer-2',
		'description' => esc_html__('Add New Sidebar', 'wptheme'),
		'before_widget' => '',
		'after_widget' => '',
		'before_title' => '',
		'after_title' => '',

	));
	register_sidebar(array(
		'name' => esc_html__('Footer Third', 'wptheme'),
		'id' => 'footer-3',
		'description' => esc_html__('Add New Sidebar', 'wptheme'),
		'before_widget' => '',
		'after_widget' => '',
		'before_title' => '',
		'after_title' => '',

	));
}

add_action('widgets_init', 'wptheme_sidebar');


if (function_exists('register_sidebar')) {

	register_sidebar(array(
		'name' => __('Home longAds1'),
		'id' => 'header-ads1',
		'description' => __('header long 1'),
		'before_widget' => '',
		'after_widget' => "",
		'before_title' => '',
		'after_title' => '',
	));
}


// Function to handle the thumbnail request
function get_the_post_thumbnail_src($img)
{
	return (preg_match('~\bsrc="([^"]++)"~', $img, $matches)) ? $matches[1] : '';
}
function wpvkp_social_buttons($content)
{
	global $post;
	if (is_singular() || is_home()) {

		// Get current page URL 
		$sb_url = urlencode(get_permalink());

		// Get current page title
		$sb_title = str_replace(' ', '%20', get_the_title());

		// Get Post Thumbnail for pinterest
		$sb_thumb = get_the_post_thumbnail_src(get_the_post_thumbnail());

		// Construct sharing URL without using any script
		$twitterURL = 'https://twitter.com/intent/tweet?text=' . $sb_title . '&amp;url=' . $sb_url . '&amp;via=wpvkp';
		$facebookURL = 'https://www.facebook.com/sharer/sharer.php?u=' . $sb_url;
		$whatsappURL = 'whatsapp://send?text=' . $sb_title . ' ' . $sb_url;

		// Based on popular demand added Pinterest too
		$pinterestURL = 'https://pinterest.com/pin/create/button/?url=' . $sb_url . '&amp;media=' . $sb_thumb[0] . '&amp;description=' . $sb_title;

		// Add sharing button at the end of page/page content
		$content .= '<div class="social-box"><div class="social-btn">';
		$content .= '<a class="col-2 sbtn s-twitter" href="' . $twitterURL . '" target="_blank" rel="nofollow"><span></span></a>';
		$content .= '<a class="col-2 sbtn s-facebook" href="' . $facebookURL . '" target="_blank" rel="nofollow"><span></span></a>';
		$content .= '<a class="col-2 sbtn s-whatsapp" href="' . $whatsappURL . '" target="_blank" rel="nofollow"><span></span></a>';
		$content .= '</div></div>';

		return $content;
	} else {
		// if not a post/page then don't include sharing button
		return $content;
	}
};
add_filter('the_content', 'wpvkp_social_buttons');
add_shortcode('social', 'wpvkp_social_buttons');

add_filter('comment_form_defaults', 'my_comment_title', 20);
function my_comment_title($defaults)
{
	$defaults['title_reply'] = __('प्रतिक्रिया दिनुहोस्', 'customizr-child');
	return $defaults;
}