<?php
/**
 * Datatracks functions and definitions
 *
 * @package datatracks
 */

/**
 * Set the content width based on the theme's design and stylesheet.
 */
if ( ! isset( $content_width ) ) {
  $content_width = 730; /* pixels */
}

/**
 * Set the content width for full width pages with no sidebar.
 */
function datatracks_content_width() {
  if ( is_page_template( 'page-fullwidth.php' ) || is_page_template( 'front-page.php' ) ) {
    global $content_width;
    $content_width = 1110; /* pixels */
  }
}
add_action( 'template_redirect', 'datatracks_content_width' );

if ( ! function_exists( 'datatracks_setup' ) ) :
/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function datatracks_setup() {

  /*
   * Make theme available for translation.
   * Translations can be filed in the /languages/ directory.
   * If you're building a theme based on Datatracks, use a find and replace
   * to change 'datatracks' to the name of your theme in all the template files
   */
  load_theme_textdomain( 'datatracks', get_template_directory() . '/languages' );

  // Add default posts and comments RSS feed links to head.
  add_theme_support( 'automatic-feed-links' );

  /*
   * Enable support for Post Thumbnails on posts and pages.
   *
   * @link http://codex.wordpress.org/Function_Reference/add_theme_support#Post_Thumbnails
   */
  add_theme_support( 'post-thumbnails' );

  add_image_size( 'datatracks-featured', 730, 410, true );
  add_image_size( 'tab-small', 60, 60 , true); // Small Thumbnail

  // This theme uses wp_nav_menu() in one location.
  register_nav_menus( array(
    'primary'      => __( 'Primary Menu', 'datatracks' ),
    'footer-links' => __( 'Footer Links', 'datatracks' ), // secondary menu in footer
    'Products_footer' => __( 'Products-dropdown', 'datatracks' ), // products dropdown menu 
    'services_footer' => __( 'service-dropdown', 'datatracks' ), // products dropdown menu 
    'about_footer' => __( 'about-dropdown', 'datatracks' ), // products dropdown menu 
    'insight_footer' => __( 'insight-dropdown', 'datatracks' ) // products dropdown menu 
  ) );

  // Enable support for Post Formats.
  add_theme_support( 'post-formats', array( 'aside', 'image', 'video', 'quote', 'link' ) );

  // Setup the WordPress core custom background feature.
  add_theme_support( 'custom-background', apply_filters( 'datatracks_custom_background_args', array(
    'default-color' => 'ffffff',
    'default-image' => '',
  ) ) );

  /*
   * Let WordPress manage the document title.
   * By adding theme support, we declare that this theme does not use a
   * hard-coded <title> tag in the document head, and expect WordPress to
   * provide it for us.
   */
  add_theme_support( 'title-tag' );
}
endif; // datatracks_setup
add_action( 'after_setup_theme', 'datatracks_setup' );

/**
 * Register widgetized area and update sidebar with default widgets.
 */
function datatracks_widgets_init() {
  register_sidebar( array(
    'name'          => __( 'Sidebar', 'datatracks' ),
    'id'            => 'sidebar-1',
    'before_widget' => '<aside id="%1$s" class="widget %2$s">',
    'after_widget'  => '</aside>',
    'before_title'  => '<h3 class="widget-title">',
    'after_title'   => '</h3>',
  ) );
  register_sidebar(array(
    'id'            => 'home-widget-1',
    'name'          => __( 'Homepage Widget 1', 'datatracks' ),
    'description'   => __( 'Displays on the Home Page', 'datatracks' ),
    'before_widget' => '<div id="%1$s" class="widget %2$s">',
    'after_widget'  => '</div>',
    'before_title'  => '<h3 class="widgettitle">',
    'after_title'   => '</h3>',
  ));

  register_sidebar(array(
    'id'            => 'home-widget-2',
    'name'          =>  __( 'Homepage Widget 2', 'datatracks' ),
    'description'   => __( 'Displays on the Home Page', 'datatracks' ),
    'before_widget' => '<div id="%1$s" class="widget %2$s">',
    'after_widget'  => '</div>',
    'before_title'  => '<h3 class="widgettitle">',
    'after_title'   => '</h3>',
  ));

  register_sidebar(array(
    'id'            => 'home-widget-3',
    'name'          =>  __( 'Homepage Widget 3', 'datatracks' ),
    'description'   =>  __( 'Displays on the Home Page', 'datatracks' ),
    'before_widget' => '<div id="%1$s" class="widget %2$s">',
    'after_widget'  => '</div>',
    'before_title'  => '<h3 class="widgettitle">',
    'after_title'   => '</h3>',
  ));

  register_sidebar(array(
    'id'            => 'footer-widget-1',
    'name'          =>  __( 'Footer Widget 1', 'datatracks' ),
    'description'   =>  __( 'Used for footer widget area', 'datatracks' ),
    'before_widget' => '<div id="%1$s" class="widget %2$s">',
    'after_widget'  => '</div>',
    'before_title'  => '<h3 class="widgettitle">',
    'after_title'   => '</h3>',
  ));

  register_sidebar(array(
    'id'            => 'footer-widget-2',
    'name'          =>  __( 'Footer Widget 2', 'datatracks' ),
    'description'   =>  __( 'Used for footer widget area', 'datatracks' ),
    'before_widget' => '<div id="%1$s" class="widget %2$s">',
    'after_widget'  => '</div>',
    'before_title'  => '<h3 class="widgettitle">',
    'after_title'   => '</h3>',
  ));

  register_sidebar(array(
    'id'            => 'footer-widget-3',
    'name'          =>  __( 'Footer Widget 3', 'datatracks' ),
    'description'   =>  __( 'Used for footer widget area', 'datatracks' ),
    'before_widget' => '<div id="%1$s" class="widget %2$s">',
    'after_widget'  => '</div>',
    'before_title'  => '<h3 class="widgettitle">',
    'after_title'   => '</h3>',
  ));


  register_widget( 'datatracks_social_widget' );
  register_widget( 'datatracks_popular_posts_widget' );
}
add_action( 'widgets_init', 'datatracks_widgets_init' );

include(get_template_directory() . "/inc/widgets/widget-popular-posts.php");
include(get_template_directory() . "/inc/widgets/widget-social.php");


/**
 * Enqueue scripts and styles.
 */
function datatracks_scripts() {

  wp_enqueue_style( 'datatracks-bootstrap', get_template_directory_uri() . '/inc/css/bootstrap.min.css' );

  wp_enqueue_style( 'datatracks-icons', get_template_directory_uri().'/inc/css/font-awesome.min.css' );

  if( ( is_home() || is_front_page() ) && of_get_option('datatracks_slider_checkbox') == 1 ) {
    wp_enqueue_style( 'flexslider-css', get_template_directory_uri().'/inc/css/flexslider.css' );
  }
  wp_enqueue_style( 'magnific-css', get_template_directory_uri().'/inc/css/magnific-popup.css' );
  if ( class_exists( 'jigoshop' ) ) { // Jigoshop specific styles loaded only when plugin is installed
    wp_enqueue_style( 'jigoshop-css', get_template_directory_uri().'/inc/css/jigoshop.css' );
  }
  wp_enqueue_style( 'datatracks-style', get_stylesheet_uri() );
  wp_enqueue_style( 'custom-css', get_template_directory_uri().'/inc/css/custom.css' );
	wp_enqueue_style( 'animate-css', get_template_directory_uri().'/inc/css/animate.css' );
	wp_enqueue_style( 'slick-css', get_template_directory_uri().'/inc/css/slick.css' );
	wp_enqueue_style( 'slick-theme-css', get_template_directory_uri().'/inc/css/slick-theme.css' );

  wp_enqueue_script('datatracks-bootstrapjs', get_template_directory_uri().'/inc/js/bootstrap.min.js', array('jquery') );
  wp_enqueue_script('datatracks-skrllorjs', get_template_directory_uri().'/inc/js/skrollr.min.js', array('jquery') );
  wp_enqueue_script('datatracks-stackjs', get_template_directory_uri().'/inc/js/jquery.stickystack.js' );

  wp_enqueue_script('datatracks-magnificpopupjs', get_template_directory_uri().'/inc/js/magnific-popup.js', array('jquery') );
		 wp_enqueue_script('datatracks-slick', get_template_directory_uri().'/inc/js/slick.js', array('jquery') );

  if( ( is_home() || is_front_page() ) && of_get_option('datatracks_slider_checkbox') == 1 ) {
    wp_enqueue_script( 'flexslider', get_template_directory_uri() . '/inc/js/flexslider.min.js', array('jquery'), '2.5.0', true );
  }

  wp_enqueue_script( 'datatracks-main', get_template_directory_uri() . '/inc/js/main.js', array('jquery'), '1.5.4', true );
wp_enqueue_script('wowjs', get_template_directory_uri().'/inc/js/wow_min.js', array('jquery') );

  if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
    wp_enqueue_script( 'comment-reply' );
  }
}
add_action( 'wp_enqueue_scripts', 'datatracks_scripts' );

/**
 * Add HTML5 shiv and Respond.js for IE8 support of HTML5 elements and media queries
 */
function datatracks_ie_support_header() {
  echo '<!--[if lt IE 9]>'. "\n";
  echo '<script src="' . esc_url( get_template_directory_uri() . '/inc/js/html5shiv.min.js' ) . '"></script>'. "\n";
  echo '<script src="' . esc_url( get_template_directory_uri() . '/inc/js/respond.min.js' ) . '"></script>'. "\n";
  echo '<![endif]-->'. "\n";
}
add_action( 'wp_head', 'datatracks_ie_support_header', 11 );

/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Custom functions that act independently of the theme templates.
 */
require get_template_directory() . '/inc/extras.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
require get_template_directory() . '/inc/jetpack.php';

/**
 * Load custom nav walker
 */
require get_template_directory() . '/inc/navwalker.php';

if ( class_exists( 'woocommerce' ) ) {
/**
 * WooCommerce related functions
 */
require get_template_directory() . '/inc/woo-setup.php';
}

if ( class_exists( 'jigoshop' ) ) {
/**
 * Jigoshop related functions
 */
require get_template_directory() . '/inc/jigoshop-setup.php';
}

/**
 * Metabox file load
 */
require get_template_directory() . '/inc/metaboxes.php';

/**
 * Register Social Icon menu
 */
add_action( 'init', 'register_social_menu' );

function register_social_menu() {
  register_nav_menu( 'social-menu', _x( 'Social Menu', 'nav menu location', 'datatracks' ) );
}

/* Globals variables */
global $options_categories;
$options_categories = array();
$options_categories_obj = get_categories();
foreach ($options_categories_obj as $category) {
        $options_categories[$category->cat_ID] = $category->cat_name;
}

global $site_layout;
$site_layout = array('side-pull-left' => esc_html__('Right Sidebar', 'datatracks'),'side-pull-right' => esc_html__('Left Sidebar', 'datatracks'),'no-sidebar' => esc_html__('No Sidebar', 'datatracks'),'full-width' => esc_html__('Full Width', 'datatracks'));

// Typography Options
global $typography_options;
$typography_options = array(
        'sizes' => array( '6px' => '6px','10px' => '10px','12px' => '12px','14px' => '14px','15px' => '15px','16px' => '16px','18px'=> '18px','20px' => '20px','24px' => '24px','28px' => '28px','32px' => '32px','36px' => '36px','42px' => '42px','48px' => '48px' ),
        'faces' => array(
                'arial'          => 'Arial,Helvetica,sans-serif',
                'verdana'        => 'Verdana,Geneva,sans-serif',
                'trebuchet'      => 'Trebuchet,Helvetica,sans-serif',
                'georgia'        => 'Georgia,serif',
                'times'          => 'Times New Roman,Times, serif',
                'tahoma'         => 'Tahoma,Geneva,sans-serif',
                'Open Sans'      => 'Open Sans,sans-serif',
                'palatino'       => 'Palatino,serif',
                'helvetica'      => 'Helvetica,Arial,sans-serif',
                'helvetica-neue' => 'Helvetica Neue,Helvetica,Arial,sans-serif'
        ),
        'styles' => array( 'normal' => 'Normal','bold' => 'Bold' ),
        'color'  => true
);

// Typography Defaults
global $typography_defaults;
$typography_defaults = array(
        'size'  => '14px',
        'face'  => 'helvetica-neue',
        'style' => 'normal',
        'color' => '#6B6B6B'
);

/**
 * Helper function to return the theme option value.
 * If no value has been saved, it returns $default.
 * Needed because options are saved as serialized strings.
 *
 * Not in a class to support backwards compatibility in themes.
 */
if ( ! function_exists( 'of_get_option' ) ) :
function of_get_option( $name, $default = false ) {

  $option_name = '';
  // Get option settings from database
  $options = get_option( 'datatracks' );

  // Return specific option
  if ( isset( $options[$name] ) ) {
    return $options[$name];
  }

  return $default;
}
endif;

// menu class
// add_filter('nav_menu_css_class' , 'special_nav_class' , 10 , 2);
// function special_nav_class($classes, $item){
//     $menu_locations = get_nav_menu_locations();
//     if ( has_term($menu_locations['Products_footer'], 'nav_menu', $item) ) {
//         $classes[] = 'site-navigation--link-container';
//     }
//     return $classes;
// }

// add_filter('nav_menu_css_class' , 'special_nav_class1' , 10 , 2);
// function special_nav_class1($classes, $item){
//     $menu_locations = get_nav_menu_locations();
//     if ( has_term($menu_locations['about_footer'], 'nav_menu', $item) ) {
//         $classes[] = 'site-navigation--link-container';
//     }
//     return $classes;
// }

// add_filter('nav_menu_css_class' , 'special_nav_class2' , 10 , 2);
// function special_nav_class2($classes, $item){
//     $menu_locations = get_nav_menu_locations();
//     if ( has_term($menu_locations['services_footer'], 'nav_menu', $item) ) {
//         $classes[] = 'site-navigation--link-container';
//     }
//     return $classes;
// }

// add_filter('nav_menu_css_class' , 'special_nav_class3' , 10 , 2);
// function special_nav_class3($classes, $item){
//     $menu_locations = get_nav_menu_locations();
//     if ( has_term($menu_locations['insight_footer'], 'nav_menu', $item) ) {
//         $classes[] = 'site-navigation--link-container';
//     }
//     return $classes;
// }

function news() {
  $labels = array(
    'name'               => _x( 'News', 'post type general name' ),
    'singular_name'      => _x( 'News', 'post type singular name' ),
    'add_new'            => _x( 'Add New', 'News' ),
    'add_new_item'       => __( 'Add New News' ),
    'edit_item'          => __( 'Edit News' ),
    'new_item'           => __( 'New News' ),
    'all_items'          => __( 'All News' ),
    'view_item'          => __( 'View News' ),
    'search_items'       => __( 'Search News' ),
    'not_found'          => __( 'No News found' ),
    'not_found_in_trash' => __( 'No News found in the Trash' ), 
    'parent_item_colon'  => '',
    'menu_name'          => 'News'
  );
  $args = array(
    'labels'        => $labels,
    'description'   => 'News',
    'public'        => true,
    'menu_position' => 7,
    'supports'      => array( 'title', 'thumbnail','excerpt','editor'),
    'has_archive'   => true,
	'menu_icon'     => 'dashicons-admin-post',
  );
  register_post_type( 'news', $args ); 
}
add_action( 'init', 'news' );

function blogs() {
  $labels = array(
    'name'               => _x( 'Blogs', 'post type general name' ),
    'singular_name'      => _x( 'Blogs', 'post type singular name' ),
    'add_new'            => _x( 'Add New', 'Blogs' ),
    'add_new_item'       => __( 'Add New Blogs' ),
    'edit_item'          => __( 'Edit Blogs' ),
    'new_item'           => __( 'New Blogs' ),
    'all_items'          => __( 'All Blogs' ),
    'view_item'          => __( 'View Blogs' ),
    'search_items'       => __( 'Search Blogs' ),
    'not_found'          => __( 'No Blogs found' ),
    'not_found_in_trash' => __( 'No Blogs found in the Trash' ), 
    'parent_item_colon'  => '',
    'menu_name'          => 'Blogs',
  );
  $args = array(
    'labels'        => $labels,
    'description'   => 'Blogs',
    'public'        => true,
    'menu_position' => 7,
    'supports'      => array( 'title', 'thumbnail','excerpt','editor'),
    'has_archive'   => true,
	'menu_icon'     => 'dashicons-admin-post',
	'rewrite' => array('slug' => 'blog'),
  );
  register_post_type( 'blogs', $args ); 
}
add_action( 'init', 'blogs' );
function my_taxonomies_blogs() {
  $labels = array(
    'name'              => _x( 'Blogs Categories', 'taxonomy general name' ),
    'singular_name'     => _x( 'Blogs Category', 'taxonomy singular name' ),
    'search_items'      => __( 'Search Blogs Categories' ),
    'all_items'         => __( 'All Blogs Categories' ),
    'parent_item'       => __( 'Parent Blogs Category' ),
    'parent_item_colon' => __( 'Parent Blogs Category:' ),
    'edit_item'         => __( 'Edit Blogs Category' ), 
    'update_item'       => __( 'Update Blogs Category' ),
    'add_new_item'      => __( 'Add New Blogs Category' ),
    'new_item_name'     => __( 'New Blogs Category' ),
    'menu_name'         => __( 'Blogs Categories' ),
  );
  $args = array(
    'labels' => $labels,
    'hierarchical' => true,
  );
  register_taxonomy( 'blog_categories', 'blogs', $args, 'post_tag' );
		register_taxonomy('post_tag', 'blogs');
}
add_action( 'init', 'my_taxonomies_blogs', 0 );

	



function pp_getPostViews($postID){
   $count_key = 'post_views_count';
   $count = get_post_meta($postID, $count_key, true);
   if($count==''){
     delete_post_meta($postID, $count_key);
     add_post_meta($postID, $count_key, '0');
     return "0";
   }
   return $count.' ';
}
function pp_setPostViews($postID) {
  $count_key = 'post_views_count';
  $count = get_post_meta($postID, $count_key, true);
  if($count==''){
     $count = 0;
   delete_post_meta($postID, $count_key);
   add_post_meta($postID, $count_key, '0');
  }
 else{
   $count++;
 update_post_meta($postID, $count_key, $count);
 }
}
add_theme_support( 'post-thumbnails' );
set_post_thumbnail_size( 100, 50, true );