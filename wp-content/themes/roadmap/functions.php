<?php

add_action('init', 'register_my_menus');
add_action('init', 'films_posttype');
add_action('init', 'events_posttype');
add_action('init', 'service_posttype');
// add_action('wp_enqueue_style', 'hii_css');
add_action('rss2_item', 'add_custom_fields_to_rss', 1);
add_action('wp_enqueue_scripts', 'hii_js');
add_action('wp_enqueue_scripts', 'hii_jquery', 11);
add_action('after_setup_theme', 'remove_admin_bar');
add_action ( 'manage_events_posts_custom_column', 'events_column', 10, 2 );
//add_action('admin_menu', 'removeDefaultPostType');
// add_filter('acf/fields/google_map/api', 'my_acf_google_map_api');
add_filter('get_the_excerpt', 'mp_trim_excerpt_whitespace', 1);
add_filter('excerpt_length', 'custom_excerpt_length', 999);
add_filter( 'the_password_form', 'custom_password_form' );
// add_filter('gform_init_scripts_footer', '__return_true');
add_filter ( 'manage_events_posts_columns', 'events_acf_columns' );
if (! current_user_can('manage_options')) {
    add_filter('show_admin_bar', '__return_false');
}
add_post_type_support( 'page', 'excerpt' );
add_theme_support('post-thumbnails');
add_theme_support('post-formats', ['aside', 'gallery', 'link', 'image', 'quote', 'video', 'audio']);
add_theme_support('html5', ['script', 'style', 'caption', 'comment-form', 'comment-list', 'gallery', 'search-form']);
remove_action('wp_head', 'wp_generator');
remove_action('wp_head', 'print_emoji_detection_script', 7);
remove_action('wp_print_styles', 'print_emoji_styles');
remove_action('admin_print_scripts', 'print_emoji_detection_script');
remove_action('admin_print_styles', 'print_emoji_styles');

function register_my_menus()
{
    register_nav_menu('primary-menu', __('Primary Menu'));
    register_nav_menu('footer-menu', __('Footer Menu'));
    register_nav_menu('services', __('Services'));
}

function hii_js() {
     wp_enqueue_script( 'font-awesome', 'https://kit.fontawesome.com/4ec07707b6.js');
     wp_enqueue_script( 'dna-js', get_stylesheet_directory_uri() . '/dist/bundle.js', array(), '1.0.0', true);
     wp_enqueue_script( 'infusion-tracking', 'https://dicksnanton.infusionsoft.app/app/webTracking/getTrackingCode');
     wp_enqueue_script( 'infusion-recaptcha', 'https://dicksnanton.infusionsoft.com/resources/external/recaptcha/production/recaptcha.js?b=1.70.0.252135');
     wp_enqueue_script( 'infusion-timezone', 'https://dicksnanton.infusionsoft.com/app/timezone/timezoneInputJs?xid=90e281f739054fb6d59642273e73ef07');
     wp_enqueue_script( 'google-recaptcha', 'https://www.google.com/recaptcha/api.js?onload=onloadInfusionRecaptchaCallback&render=explicit');
     // wp_enqueue_script('google-fonts-new', 'https://fonts.googleapis.com/css2?family=Almarai:wght@400;700&family=Rubik:wght@300;400;700&display=swap');
     wp_enqueue_style('main', get_template_directory_uri() . '/style.css');
}

function hii_css()
{
    // wp_enqueue_script('google-fonts-new', 'https://fonts.googleapis.com/css2?family=Almarai:wght@400;700&family=Rubik:wght@300;400;700&display=swap');
    wp_enqueue_style('main', get_template_directory_uri() . '/style.css');
    if (is_singular() && comments_open() && get_option('thread_comments')) {
        wp_enqueue_script('comment-reply');
    }
}

function hii_jquery() {
    wp_deregister_script('jquery');
    // wp_register_script('jquery', "//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js", false, null);
    // wp_enqueue_script('jquery');
}

function convert_into_id( $string_id )
{
    $string_exploded = explode(' ', $string_id);
    $string_imploded = $string_exploded.implode('_', $string_exploded);
    $string = str_replace('&', '', $string_imploded);
    return strtolower($string);
}


// ACF Options Page
if (function_exists('acf_add_options_page')) {
	acf_add_options_page(array(
	    'page_title' 	=> 'Theme General Settings',
	    'menu_title'	=> 'Theme Settings',
	    'menu_slug' 	=> 'theme-general-settings',
	    'capability'	=> 'edit_posts',
	    'redirect'		=> false,
	    'position' 		=> 2
	));
 }

// Films Post Type
function films_posttype()
{
    register_post_type(
        'film',
    // CPT Options
        array(
            'labels' => array(
                'name' => __('Films'),
                'singular_name' => __('Film')
            ),
            'public' => true,
            'has_archive' => false,
            // 'rewrite' => array('slug' => 'testimonials'),
            'show_ui'             => true,
            'show_in_menu'        => true,
            'show_in_nav_menus'   => true,
            'show_in_admin_bar'   => true,
            'menu_icon'           => 'dashicons-video-alt2',
            'menu_position'       => 5,
            'can_export'          => true,
            'has_archive'         => true,
            'hierarchical'		  => false,
            'exclude_from_search' => false,
            'publicly_queryable'  => true,
            'capability_type'     => 'post',
            'supports' => array( 'title', 'page-attributes' )
        )
    );
}

// Service Pages Post Type
function service_posttype()
{
    register_post_type(
        'service',
    // CPT Options
        array(
            'labels' => array(
                'name' => __('Services'),
                'singular_name' => __('Service')
            ),
            'public' => true,
            'has_archive' => true,
            'rewrite' => array('slug' => 'service'),
            'show_ui'             => true,
            'show_in_menu'        => true,
            'show_in_nav_menus'   => true,
            'show_in_admin_bar'   => true,
            'menu_icon'           => 'dashicons-networking',
            'menu_position'       => 6,
            'can_export'          => true,
            'has_archive'         => true,
            'hierarchical'		  => false,
            'exclude_from_search' => false,
            'publicly_queryable'  => true,
            'capability_type'     => 'post',
            'supports' => array( 'title', 'thumbnail', 'page-attributes' )
        )
    );
}

// **********
// START - Events Post Type
// **********
function events_posttype()
{
    register_post_type(
        'events',
    // CPT Options
        array(
            'labels' => array(
                'name' => __('Events'),
                'singular_name' => __('Event')
            ),
            'public' => true,
            'has_archive' => false,
            'rewrite' => array('slug' => 'event'),
            'show_ui'             => true,
            'show_in_menu'        => true,
            'show_in_nav_menus'   => true,
            'show_in_admin_bar'   => true,
            'menu_icon'           => 'dashicons-tickets-alt',
            'menu_position'       => 7,
            'can_export'          => true,
            'has_archive'         => true,
            'hierarchical'		  => false,
            'exclude_from_search' => false,
            'publicly_queryable'  => true,
            'capability_type'     => 'post',
            'supports' => array( 'title' )
        )
    );
}

function events_acf_columns ( $columns )
{
    return array_merge ( $columns, array ( 
        'event_location' => __ ( 'Location'),
        'event_start_date' => __ ( 'Starts' ),
        'event_end_date' => __ ( 'Ends' )
    ));
}

function events_column ( $column, $post_id ) {
    switch ( $column ) {
        case 'event_location':
            echo get_field('event_location', $post_id);
            break;
        case 'event_start_date':
            echo get_field ('event_start_date', $post_id );
            break;
        case 'event_end_date':
            echo get_field ('event_end_date',  $post_id );
            break;
    }
}

// **********
// END - Events Post Type
// **********

function remove_hash($string)
{
    $str = ltrim($string, '#');
    return $str;
}

// Featured Image in RSS
function add_custom_fields_to_rss() {
    if(get_post_type() == 'post' && $my_meta_value = wp_get_attachment_url(get_post_meta(get_the_ID(), '_thumbnail_id', true))) {
        ?>
        <postimage><?php echo $my_meta_value; ?></postimage>
        <?php
    }
}