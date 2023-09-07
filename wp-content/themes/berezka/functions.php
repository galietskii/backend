<?php
/**
 * Berezka functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Berezka
 */

if ( ! defined( '_S_VERSION' ) ) {
	// Replace the version number of the theme on each release.
	define( '_S_VERSION', '1.0.0' );
}

/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function berezka_setup() {
	/*
		* Make theme available for translation.
		* Translations can be filed in the /languages/ directory.
		* If you're building a theme based on Berezka, use a find and replace
		* to change 'berezka' to the name of your theme in all the template files.
		*/
	load_theme_textdomain( 'berezka', get_template_directory() . '/languages' );

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
	register_nav_menus(
		array(
			'header-menu' => esc_html__( 'Primary', 'berezka' ),
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
			'berezka_custom_background_args',
			array(
				'default-color' => 'ffffff',
				'default-image' => '',
			)
		)
	);

	// Add theme support for selective refresh for widgets.
	add_theme_support( 'customize-selective-refresh-widgets' );

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
add_action( 'after_setup_theme', 'berezka_setup' );

// Add CLASS LOGO

add_filter( 'get_custom_logo', 'change_logo_class' );


function change_logo_class( $html ) {

    $html = str_replace( 'custom-logo', 'header__logo-white', $html );
    $html = str_replace( 'custom-logo-link', 'header__logo', $html );

    return $html;
}

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function berezka_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'berezka_content_width', 640 );
}
add_action( 'after_setup_theme', 'berezka_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function berezka_widgets_init() {
	register_sidebar(
		array(
			'name'          => esc_html__( 'Sidebar', 'berezka' ),
			'id'            => 'sidebar-1',
			'description'   => esc_html__( 'Add widgets here.', 'berezka' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);
}
add_action( 'widgets_init', 'berezka_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function berezka_scripts() {
    // Подключение jQuery через Google CDN
    wp_deregister_script('jquery');
    wp_register_script( 'jquery', get_template_directory_uri() . '/assets/js/jquery-3.6.4.min.js', false, null, true );
    wp_enqueue_script('jquery');

    // Подключение стилей
    wp_enqueue_style('berezka-style', get_stylesheet_uri(), array(), _S_VERSION);
    wp_style_add_data('berezka-style', 'rtl', 'replace');

    wp_enqueue_style('style-css', get_template_directory_uri() . '/assets/css/style.css', array(), '1.0.0');
    wp_enqueue_style('critical-css', get_template_directory_uri() . '/assets/css/critical.css', array(), '1.0.0');
    wp_enqueue_style('app-css', get_template_directory_uri() . '/assets/css/app.css', array(), '1.0.0');
    wp_enqueue_style('fancybox-css', get_template_directory_uri() . '/assets/css/jquery.fancybox.min.css', array(), '1.0.0');

    // Подключение скриптов
    wp_enqueue_script('lottie', 'https://cdnjs.cloudflare.com/ajax/libs/lottie-web/5.9.6/lottie.min.js', array(), '5.9.6', true);
    wp_enqueue_script('inputmask', get_template_directory_uri() . '/assets/js/jquery.inputmask.min.js', array('jquery'), '1.0.0', true);
    wp_enqueue_script('validate', get_template_directory_uri() . '/assets/js/jquery.validate.min.js', array('jquery'), '1.0.0', true);
    wp_enqueue_script('additional-methods', get_template_directory_uri() . '/assets/js/additional-methods.min.js', array('jquery', 'validate'), '1.0.0', true);
    wp_enqueue_script('fancybox', get_template_directory_uri() . '/assets/js/jquery.fancybox.min.js', array('jquery'), '1.0.0', true);
    wp_enqueue_script('app-js', get_template_directory_uri() . '/assets/js/app.js', array('jquery'), '1.0.0', true);
    wp_enqueue_script('form-js', get_template_directory_uri() . '/assets/js/form.js', array('jquery'), '1.0.0', true);
    wp_enqueue_script('swiper', get_template_directory_uri() . '/assets/js/swiper.js', array('jquery'), '1.0.0', true);

    // Если страница является синглом и комментарии открыты с поддержкой вложенных комментариев
    if (is_singular() && comments_open() && get_option('thread_comments')) {
        wp_enqueue_script('comment-reply');
    }
}

add_action('wp_enqueue_scripts', 'berezka_scripts');

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

add_theme_support('editor-styles');
add_theme_support('wp-block-styles');
require get_template_directory() . '/inc/custom-gutenberg.php';

/* Theme Setting Options */
if( function_exists('acf_add_options_page') ) {

    acf_add_options_page(array(
        'page_title'    => 'Theme General Settings',
        'menu_title'    => 'Theme Settings',
        'menu_slug'     => 'theme-general-settings',
        'capability'    => 'edit_posts',
        'redirect'      => false
    ));



}

// CUSTOM CPT

function create_application_post_type() {
    register_post_type('applications',
        array(
            'labels' => array(
                'name' => __('Applications'),
                'singular_name' => __('Application'),
            ),
            'public' => false, 
            'has_archive' => false,
            'show_ui' => true,
            'show_in_menu' => true,
            'supports' => array('title'),
        )
    );
	register_post_type( 'testimonials',
    array(
        'labels' => array(
            'name' => ( 'Testimonials' ),
            'singular_name' => ( 'Testimonial' ),
            'all_items' => __( 'All Testimonials' ),
        ),

        'supports' => array(
            'title',
            'editor',
            'thumbnail',
            'revisions',
            'custom-fields',
			'classic-editor',
        ),

        'rewrite' => array('slug' => 'testimonials'),
        'public' => true,
        'has_archive' => true,
        'hierarchical'        => false,
        'show_ui'             => true,
        'show_in_menu'        => true,
        'show_in_nav_menus'   => true,
        'show_in_admin_bar'   => true,
        'menu_position'       => 5,
        'menu_icon'           => 'dashicons-format-status',
        'can_export'          => true,
        'has_archive'         => true,
        'exclude_from_search' => false,
        'publicly_queryable'  => false,
        'capability_type'     => 'post',
        'show_in_rest' => true,

    )
);
}
add_action('init', 'create_application_post_type');



// if ($_SERVER["REQUEST_METHOD"] == "POST") {
//     $name = sanitize_text_field($_POST["name"]);
//     $tel = sanitize_text_field($_POST["tel"]);
//     $email = sanitize_email($_POST["email"]);
//     $address = sanitize_text_field($_POST["address"]);
//     $service = sanitize_text_field($_POST["service"]);
//     $square = floatval($_POST["square"]);
//     $bedrooms = intval($_POST["bedrooms"]);
//     $bathrooms = intval($_POST["bathrooms"]);

//     $post_id = wp_insert_post(array(
//         'post_title' => 'New Application',
//         'post_type' => 'applications', 
//         'post_status' => 'publish', 
//     ));

//     update_post_meta($post_id, 'name', $name);
//     update_post_meta($post_id, 'tel', $tel);
//     update_post_meta($post_id, 'email', $email);
//     update_post_meta($post_id, 'address', $address);
//     update_post_meta($post_id, 'service', $service);
//     update_post_meta($post_id, 'square', $square);
//     update_post_meta($post_id, 'bedrooms', $bedrooms);
//     update_post_meta($post_id, 'bathrooms', $bathrooms);

//     $to = "	test@gmail.com"; 
//     $subject = "Новая заявка от $name";
//     $message = "Имя: $name\nТелефон: $tel\nEmail: $email\nАдрес: $address\nУслуга: $service\nПлощадь: $square\nСпальни: $bedrooms\nВанные комнаты: $bathrooms";

//     wp_mail($to, $subject, $message);

//     echo "Заявка успешно отправлена и сохранена!";
// } else {
//     echo "Ошибка: Неверный метод запроса!";
// }
?>