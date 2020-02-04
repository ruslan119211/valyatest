<?php
/**
 * lushchyk functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package lushchyk
 */

if ( ! function_exists( 'lushchyk_setup' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function lushchyk_setup() {
		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on lushchyk, use a find and replace
		 * to change 'lushchyk' to the name of your theme in all the template files.
		 */
		load_theme_textdomain( 'lushchyk', get_template_directory() . '/languages' );

		// Add default posts and comments RSS feed links to head.
		add_theme_support( 'automatic-feed-links' );

		/*
		 * Let WordPress manage the document title.
		 * By adding theme support, we declare that this theme does not use a
		 * hard-coded <title> tag in the document head, and expect WordPress to
		 * provide it for us.
		 */
		add_theme_support( 'title-tag' );

		/*
		 * Enable support for Post Thumbnails on posts and pages.
		 *
		 * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
		 */
		add_theme_support( 'post-thumbnails' );

		// This theme uses wp_nav_menu() in one location.
		register_nav_menus( array(
			'menu-1' => esc_html__( 'Primary', 'lushchyk' ),
			'menu-2' => esc_html__( 'Особисте', 'lushchyk' ),
			'menu-3' => esc_html__( 'Праве меню', 'lushchyk' ),
		) );

		/*
		 * Switch default core markup for search form, comment form, and comments
		 * to output valid HTML5.
		 */
		add_theme_support( 'html5', array(
			'search-form',
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
		) );

		// Set up the WordPress core custom background feature.
		add_theme_support( 'custom-background', apply_filters( 'lushchyk_custom_background_args', array(
			'default-color' => 'ffffff',
			'default-image' => '',
		) ) );

		// Add theme support for selective refresh for widgets.
		add_theme_support( 'customize-selective-refresh-widgets' );

		/**
		 * Add support for core custom logo.
		 *
		 * @link https://codex.wordpress.org/Theme_Logo
		 */
		add_theme_support( 'custom-logo', array(
			'height'      => 250,
			'width'       => 250,
			'flex-width'  => true,
			'flex-height' => true,
		) );
	}
endif;
add_action( 'after_setup_theme', 'lushchyk_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function lushchyk_content_width() {
	// This variable is intended to be overruled from themes.
	// Open WPCS issue: {@link https://github.com/WordPress-Coding-Standards/WordPress-Coding-Standards/issues/1043}.
	// phpcs:ignore WordPress.NamingConventions.PrefixAllGlobals.NonPrefixedVariableFound
	$GLOBALS['content_width'] = apply_filters( 'lushchyk_content_width', 640 );
}
add_action( 'after_setup_theme', 'lushchyk_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function lushchyk_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar', 'lushchyk' ),
		'id'            => 'sidebar-1',
		'description'   => esc_html__( 'Add widgets here.', 'lushchyk' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
	register_sidebar( array(
		'name'          => esc_html__( 'Header WPML lang', 'lushchyk' ),
		'id'            => 'wpml_lang',
		'description'   => esc_html__( 'Add widgets here.', 'lushchyk' ),
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget'  => '</div>',
	) );
}
add_action( 'widgets_init', 'lushchyk_widgets_init' );



/**
 * Enqueue scripts and styles.
 */
function wpb_adding_styles() {
	wp_register_style('font-awesome', '//stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css',false );
	wp_enqueue_style('font-awesome');
	wp_register_style('bootstrap4', '//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css',false );
	wp_enqueue_style('bootstrap4');
	wp_register_style('slick-css', '//cdn.jsdelivr.net/gh/kenwheeler/slick@1.8.1/slick/slick.css',false );
	wp_enqueue_style('slick-css');
	wp_register_style('slick-css-theme', '//cdn.jsdelivr.net/gh/kenwheeler/slick@1.8.1/slick/slick-theme.css',false );
	wp_enqueue_style('slick-css-theme');
	wp_register_style('my_stylesheet', get_stylesheet_directory_uri() . '/css/style.css',false );
	wp_enqueue_style('my_stylesheet');
	wp_register_style('mobile_css', get_stylesheet_directory_uri() . '/css/m.style.css',false );
	wp_enqueue_style('mobile_css');
}	 
add_action( 'wp_enqueue_scripts', 'wpb_adding_styles' ); 





function lushchyk_scripts() {
	wp_deregister_script( 'jquery-core' );
	wp_register_script( 'jquery-core', '//code.jquery.com/jquery-3.3.1.min.js',true);
	wp_enqueue_script( 'jquery-core' );
	wp_register_script('slick-js', '//cdn.jsdelivr.net/gh/kenwheeler/slick@1.8.1/slick/slick.min.js', array('jquery'),'1.1', true);
	wp_enqueue_script('slick-js');
	wp_register_script('my-script', get_template_directory_uri() . '/js/script.js', array('jquery'),'1.1', true);
	wp_enqueue_script('my-script');
	wp_enqueue_script('bootstrapcdn-js', '//maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js', array('jquery'), null, true);


	wp_enqueue_style( 'lushchyk-style', get_stylesheet_uri() );

	wp_enqueue_script( 'lushchyk-navigation', get_template_directory_uri() . '/js/navigation.js', array(), '20151215', true );

	wp_enqueue_script( 'lushchyk-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20151215', true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'lushchyk_scripts' );






add_action('wp_enqueue_scripts', 'script_require');
function script_require(){
  	if( is_front_page() ){
	    wp_enqueue_script('script-single', get_template_directory_uri() . '/js/script_front_page.js', array('jquery'), null, true);
  	} 
}



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
if ( defined( 'JETPACK__VERSION' ) ) {
	require get_template_directory() . '/inc/jetpack.php';
}

//acf options
function register_acf_options_pages() {

    // Check function exists.
    if( !function_exists('acf_add_options_page') )
        return;

    // register options page.
    $option_page = acf_add_options_page(array(
        'page_title'    => __('Опції сайту'),
        'menu_title'    => __('Опції сайту'),
        'menu_slug'     => 'site-options',
        'capability'    => 'edit_posts',
        'redirect'      => false,
        'position' => 3,
        'icon_url' => 'dashicons-admin-appearance'
    ));
}

// Hook into acf initialization.
add_action('acf/init', 'register_acf_options_pages');

//TinyMCE настройка шрифтов в плагине

add_filter( 'tiny_mce_before_init', 'mce_custom_fonts' );
function mce_custom_fonts( $init ) {
    $theme_advanced_fonts = "Corbel-Bold=Corbel-Bold;" .
							"Corbel-Bold-Italic=Corbel-Bold-Italic;" .
							"Corbel=Corbel;" .
							"Corbel-Italic=Corbel-Italic;" .
							"Corbel-Light=Corbel-Light;" .
							"Corbel-Light-Italic=Corbel-Light-Italic;" .
							"Arial=arial,helvetica,sans-serif;" .
                            "Arial Black=arial black,avant garde;";
    $init['font_formats'] = $theme_advanced_fonts;
    return $init;
}

// Хлебные крошки
function the_breadcrumb(){
	global $post;
	if(!is_home()){ 
	   echo '<a href="'.site_url().'">' . __("Головна","lushchyk"). '</a> <i class="fa fa-angle-right" aria-hidden="true"></i> ';
		if(is_single()){ // записи
		the_category(', ');
		}
		elseif (is_page()) { // страницы
			if ($post->post_parent ) {
				$parent_id  = $post->post_parent;
				$breadcrumbs = array();
				while ($parent_id) {
					$page = get_page($parent_id);
					$breadcrumbs[] = '<a href="' . get_permalink($page->ID) . '">' . get_the_title($page->ID) . '</a>';
					$parent_id  = $page->post_parent;
				}
				$breadcrumbs = array_reverse($breadcrumbs);
				foreach ($breadcrumbs as $crumb) echo $crumb . ' <i class="fa fa-angle-right" aria-hidden="true"></i> ';
			}
			echo the_title();
		}
		elseif (is_category()) { // категории
			global $wp_query;
			$obj_cat = $wp_query->get_queried_object();
			$current_cat = $obj_cat->term_id;
			$current_cat = get_category($current_cat);
			$parent_cat = get_category($current_cat->parent);
			if ($current_cat->parent != 0) 
				echo(get_category_parents($parent_cat, TRUE, ' <i class="fa fa-angle-right" aria-hidden="true"></i> '));
			single_cat_title();
		}
		elseif (is_search()) { // страницы поиска
	        echo __('Результати пошуку для "','lushchyk ') . get_search_query() . '"';
	    }
	    elseif (is_tag()) { // теги (метки)
	        echo single_tag_title('', false);
	    }
	    elseif (is_day()) { // архивы (по дням)
	        echo '<a href="' . get_year_link(get_the_time('Y')) . '">' . get_the_time('Y') . '</a> &amp;raquo; ';
	        echo '<a href="' . get_month_link(get_the_time('Y'),get_the_time('m')) . '">' . get_the_time('F') . '</a> &amp;raquo; ';
	        echo get_the_time('d');
	    }
	    elseif (is_month()) { // архивы (по месяцам)
	        echo '<a href="' . get_year_link(get_the_time('Y')) . '">' . get_the_time('Y') . '</a> &amp;raquo; ';
	        echo get_the_time('F');
	    }
	    elseif (is_year()) { // архивы (по годам)
	        echo get_the_time('Y');
	    }
	    elseif (is_404()) { // если страницы не существует
	        echo __('Помилка 404','lushchyk "');
	    }
	  
	    if (get_query_var('paged')) // номер текущей страницы
	        echo ' (' . get_query_var('paged').__('-я сторінка)','lushchyk "');
		 
		}
}




// Обрезка текста
function the_truncated_post($symbol_amount) {
	$content_no_filter = get_the_content(); // содержимое поста (текущего в цикле) из базы
	$content_filter_applied = apply_filters( 'the_content', $content_no_filter ); // применяем фильтр the_content
	echo substr($content_filter_applied, 0, strrpos(substr($content_filter_applied, 0, $symbol_amount), ' ')) . '...';
}

function facebook1( $atts ){
	 return "foo = ". get_field('facebook','options');
}
add_shortcode('facebooktag', 'facebook1');
function linkedin1( $atts ){
	  return "foo = ". get_field('linkedin','options');
}
add_shortcode('linkedintag', 'vc_say_hello_render');
// function youtube1( $atts ){
// 	  return "foo = ". get_field('youtube','options');
// }
// add_shortcode('youtubetag', 'youtube1');



add_shortcode( 'youtubetag', 'vc_say_hello_render' );
function vc_say_hello_render() {
    if( get_field('youtube','options')  ): 
        echo the_field('youtube','options');  
    endif; 
}