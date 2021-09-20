<?php

/**
 * Potolki functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Potolki
 */

if (!defined('_S_VERSION')) {
    // Replace the version number of the theme on each release.
    define('_S_VERSION', '1.0.0');
}

if (!function_exists('potolki_setup')) :
    /**
     * Sets up theme defaults and registers support for various WordPress features.
     *
     * Note that this function is hooked into the after_setup_theme hook, which
     * runs before the init hook. The init hook is too late for some features, such
     * as indicating support for post thumbnails.
     */
    function muc_column($cols)
    {
        $cols["media_url"] = "URL";
        return $cols;
    }
    function muc_value($column_name, $id)
    {
        if ($column_name == "media_url") echo '';
    }
    add_filter('manage_media_columns', 'muc_column');
    add_action('manage_media_custom_column', 'muc_value', 10, 2);

    /// CUSTOM FUNCTIONS START ///
    //////////////////////////////
    $CSS_FILES = ['normalize', 'normalize-extra', 'fonts', 'index', 'signin'];
    function style_theme()
    {
        wp_enqueue_style('style', get_stylesheet_uri());
        foreach ($GLOBALS['CSS_FILES'] as $value) {
            wp_enqueue_style($value, get_template_directory_uri() . '/assets/css/' . $value . '.css');
        }
        unset($value);
    }
    add_action('wp_enqueue_scripts', 'style_theme');

    $JS_FILES = [
        ['handle' => 'jquery-3.6.0.min', 'src' => 'jquery-3.6.0.min', 'deps' => ['jquery'], 'ver' => null, 'in_footer' => true],
        ['handle' => 'index', 'src' => 'index', 'deps' => ['jquery'], 'ver' => null, 'in_footer' => true],
        ['handle' => 'jquery.validate-1.19.3.min', 'src' => 'jquery.validate-1.19.3.min', 'deps' => ['jquery'], 'ver' => null, 'in_footer' => true],
        ['handle' => 'validation', 'src' => 'validation', 'deps' => ['jquery'], 'ver' => null, 'in_footer' => true],
        ['handle' => 'jquery.inputmask.min', 'src' => 'jquery.inputmask.min', 'deps' => ['jquery'], 'ver' => null, 'in_footer' => true]
    ];
    function scripts_theme()
    {
        wp_deregister_script('jquery');
        wp_register_script('jquery', '//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js');
        wp_enqueue_script('jquery');

        foreach ($GLOBALS['JS_FILES'] as $value) {
            wp_enqueue_script($value['handle'], get_template_directory_uri() . '/assets/js/' . $value['src'] . '.js', $value['deps'], $value['ver'], $value['in_footer']);
        }
        unset($value);
    }
    add_action('wp_footer', 'scripts_theme');

    function register_my_setting()
    {
        register_setting('general', 'phone_1_setting');
        register_setting('general', 'phone_2_setting');
        register_setting('general', 'address_setting');
        // добавляем поле
        add_settings_field(
            'phone_1_setting',
            'Телефон 1',
            'phone_1_setting_html',
            'general',
        );
        // добавляем поле
        add_settings_field(
            'phone_2_setting',
            'Телефон 2',
            'phone_2_setting_html',
            'general',
        );
        // добавляем поле
        add_settings_field(
            'address_setting',
            'Адресс',
            'address_setting_html',
            'general',
        );
    }
    function phone_1_setting_html()
    {
        $value = get_option('phone_1_setting', '');
        printf('<input type="text" id="phone_1_setting" name="phone_1_setting" value="%s"', esc_attr($value));
    }
    function phone_2_setting_html()
    {
        $value = get_option('phone_2_setting', '');
        printf('<input type="text" id="phone_2_setting" name="phone_2_setting" value="%s"', esc_attr($value));
    }
    function address_setting_html()
    {
        $value = get_option('address_setting', '');
        printf('<input type="text" id="address_setting" name="address_setting" value="%s"', esc_attr($value));
    }
    add_action('admin_init', 'register_my_setting');

    // FIX AJAX
    add_action("wp_ajax_validate_consultation_form", "k_ajax_validate_consultation_form");
    add_action("wp_ajax_nopriv_validate_consultation_form", "k_ajax_validate_consultation_form");

    function k_ajax_validate_consultation_form()
    {
        include(get_parent_theme_file_path() . '/validate_consultation_form.php');
        $responce = validate_consultation_form($_POST);
        wp_send_json($responce);
    }

    add_action("wp_ajax_check_phone", "k_ajax_check_phone");
    add_action("wp_ajax_nopriv_check_phone", "k_ajax_check_phone");

    function k_ajax_check_phone()
    {
        include(get_parent_theme_file_path() . '/validate_consultation_form.php');
        $responce = check_phone($_POST['phone']);
        wp_send_json($responce);
        wp_send_json($responce);
    }

    /// CUSTOM FUNCTIONS END ///
    ////////////////////////////

    function potolki_setup()
    {
        /*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on Potolki, use a find and replace
		 * to change 'potolki' to the name of your theme in all the template files.
		 */
        load_theme_textdomain('potolki', get_template_directory() . '/languages');

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
                'header_menu' => 'Primary',
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
                'potolki_custom_background_args',
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
endif;
add_action('after_setup_theme', 'potolki_setup');

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function potolki_content_width()
{
    $GLOBALS['content_width'] = apply_filters('potolki_content_width', 640);
}
add_action('after_setup_theme', 'potolki_content_width', 0);

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function potolki_widgets_init()
{
    register_sidebar(
        array(
            'name'          => esc_html__('Sidebar', 'potolki'),
            'id'            => 'sidebar-1',
            'description'   => esc_html__('Add widgets here.', 'potolki'),
            'before_widget' => '<section id="%1$s" class="widget %2$s">',
            'after_widget'  => '</section>',
            'before_title'  => '<h2 class="widget-title">',
            'after_title'   => '</h2>',
        )
    );
}
add_action('widgets_init', 'potolki_widgets_init');

/**
 * Enqueue scripts and styles.
 */
function potolki_scripts()
{
    wp_enqueue_style('potolki-style', get_stylesheet_uri(), array(), _S_VERSION);
    wp_style_add_data('potolki-style', 'rtl', 'replace');

    wp_enqueue_script('potolki-navigation', get_template_directory_uri() . '/js/navigation.js', array(), _S_VERSION, true);

    if (is_singular() && comments_open() && get_option('thread_comments')) {
        wp_enqueue_script('comment-reply');
    }
}
add_action('wp_enqueue_scripts', 'potolki_scripts');

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
