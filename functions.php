<?php


require get_template_directory() . '/lib/device_detector.php';

if ( ! function_exists( 'cpi_setup' ) ):
 class cpitest{
	 function __construct($args=''){
		 //$this->init($args);
	 }
	 public  function init($args=''){
		 add_action( 'wp_enqueue_scripts', array(&$this,"cpi_scripts" ));
	 }
	public function cpi_scripts() {
		// Theme stylesheet.
		wp_enqueue_style( 'cpi-style', get_stylesheet_uri() );
		//Load bootstrap font
		wp_enqueue_style( 'cpi-bootstrap',  'https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css', array( 'cpi-style' ), '20160412' );
		wp_enqueue_style( 'cpi-menu-css',  '/wp-content/themes/cpitest/css/menu.css', array( 'cpi-style' ), '20160412' );
		//Load google font
		//wp_enqueue_style( 'cpi-gfont',  'https://fonts.googleapis.com/css?family=Lato:400,700', array( 'cpi-style' ), '20160412' );
		// include sscripts
		wp_enqueue_script( 'cpi-bootstrap-js',  'https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js', array('jquery'), '20160412', true );
		wp_enqueue_script( 'cpi-script', get_template_directory_uri() . '/js/functions.js', array( 'jquery' ), '20160412', true );
		wp_localize_script( 'cpi-script', 'screenReaderText', array(
			'expand'   => __( 'expand child menu', 'cpi' ),
			'collapse' => __( 'collapse child menu', 'cpi' ),
		) );
	}

}
$obj = new cpitest();



/** Tell WordPress to run cpi_setup() when the 'after_setup_theme' hook is run. */
add_action( 'after_setup_theme', 'cpi_setup' );
function cpi_setup() {
	  /* HTML5 */
  	add_theme_support( 'html5' );
	// This theme styles the visual editor with editor-style.css to match the theme style.
	add_editor_style();
	// Post Format support. You can also use the legacy "gallery" or "asides" (note the plural) categories.
	add_theme_support( 'post-formats', array( 'aside', 'gallery' ) );
	// This theme uses post thumbnails
	add_theme_support( 'post-thumbnails' );
	// Add default posts and comments RSS feed links to head
	add_theme_support( 'automatic-feed-links' );

	// This theme uses wp_nav_menu() in one location.
	register_nav_menus( array(
		'primary' => __( 'Primary Navigation', 'cpi_site' ),
	) );

}
endif;

// function cpi_widget_init() {

// 	register_sidebar( array(
// 		'name' => __( 'Home Widget Area', 'cpi_site' ),
// 		'id' => 'home-widget-area',
// 		'description' => __( 'The home widget area', 'cpi_site' ),
// 		'before_widget' => '<li id="%1$s" class="widget-container %2$s">',
// 		'after_widget' => '</li>',
// 		'before_title' => '<h1 class="widget-title">',
// 		'after_title' => '</h1>',
// 	) );
	
// 	register_sidebar( array(
// 		'name' => __( 'Sidebar Right Widget Area', 'cpi_site' ),
// 		'id' => 'sidebar-right-widget-area',
// 		'description' => __( 'The sidebar right widget area', 'cpi_site' ),
// 		'before_widget' => '<li id="%1$s" class="widget-container %2$s">',
// 		'after_widget' => '</li>',
// 		'before_title' => '<h1 class="widget-title">',
// 		'after_title' => '</h1>',
// 	) );

	
// }


//register_nav_menu( 'secondary', 'Secondary Menu' );
//register_nav_menu( 'sidebar', 'Sidebar Menu' );


	//use html5shiv to support html5 tag to internet exploere (version bellow 9)
// wp_register_style( 'ie_html5shiv', get_template_directory_uri() . '/js/html5shiv.js' );
// wp_enqueue_style( 'ie_html5shiv');
// wp_style_add_data( 'ie_html5shiv', 'conditional', 'lt IE 9' );

// wp_register_style( 'ie_respond', get_template_directory_uri() . '/js/respond.min.js' );
// wp_enqueue_style( 'ie_respond');
// wp_style_add_data( 'ie_respond', 'conditional', 'lt IE 9' );

function cpi_post_thumbnail() {
	if ( post_password_required() || is_attachment() || ! has_post_thumbnail() ) {
		return;
	}
	if ( is_singular() ) :
	?>

	<div class="post-thumbnail">
		<?php the_post_thumbnail(); ?>
	</div><!-- .post-thumbnail -->

	<?php else : ?>

	<a class="post-thumbnail" href="<?php the_permalink(); ?>" aria-hidden="true">
		<?php
			the_post_thumbnail( 'post-thumbnail', array( 'alt' => get_the_title() ) );
		?>
	</a>

	<?php endif; // End is_singular()
}

function the_excerpt_more_link( $excerpt ){
    $post = get_post();
    $excerpt .= '... <a href="'. get_permalink($post->ID) . '">continue readingssssssssss</a>.';
    return $excerpt;
}
add_filter( 'the_excerpt', 'the_excerpt_more_link', 21 );

