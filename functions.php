<?php

define('THEME_URL', get_template_directory_uri());
//define( "FACEBOOK_APP_ID", "692007058232935" );
//define( "FACEBOOK_SECRET", "61181e776029365425b7c3efb9f4e151" );
define('SITE_URL', get_site_url());
if (!isset($content_width)) {
    $content_width = 620;
}


function r_theme_setup()
{
    add_theme_support('post-thumbnails');
    add_image_size('featured', 1000, 600, true);
//	add_image_size( 'small', 485, 273, true );
}

add_action('after_setup_theme', 'r_theme_setup');

function r_scripts_styles()
{
    $version = time();

    wp_enqueue_style('bootstrap.min.css', THEME_URL . '/assets/css/bootstrap.min.css', array(), 1);
    wp_enqueue_style('animate.css', THEME_URL . '/assets/css/animate.min.css', array(), 1);
    wp_enqueue_style('carousel.css', THEME_URL . '/assets/css/owl.carousel.min.css', array(), 1);
    // wp_enqueue_style('fullpage.css', THEME_URL . '/assets/css/fullpage.css', array(), 1);
    wp_enqueue_style('sweet-alert.css', THEME_URL . '/assets/css/sweet-alert.css', array(), 1);
    // wp_enqueue_style('magnific-popup.cs', THEME_URL . '/assets/css/magnific-popup.cs', array(), 1);
    wp_enqueue_style('jquery.fancybox.min.css', THEME_URL . '/assets/css/jquery.fancybox.min.css', array(), 1);
    wp_enqueue_style('main.css', THEME_URL . '/assets/css/main.css', array(), $version);


    wp_enqueue_style('em-style-ext', THEME_URL . '/style.css', array(), $version);

    wp_enqueue_script('jquery.min.js', THEME_URL . '/assets/js/jquery.min.js', array(), 1, false);
    wp_enqueue_script('bootstrap.min.js', THEME_URL . '/assets/js/bootstrap.min.js', array(), 1, false);
    wp_enqueue_script('jquery.fancybox.min.js', THEME_URL . '/assets/js/jquery.fancybox.min.js', array(), 1, false);
     wp_enqueue_script('jquery.validate.min.js', THEME_URL . '/assets/js/jquery.validate.min.js', array(), 1, false);
    wp_enqueue_script('sweet-alert.min.js', THEME_URL . '/assets/js/sweet-alert.min.js', array(), 1, false);
    wp_enqueue_script('carousel.min.js', THEME_URL . '/assets/js/owl.carousel.min.js', array(), 1, false);
    wp_enqueue_script('wow.min.js', THEME_URL . '/assets/js/wow.min.js', array(), 1, false);
    wp_enqueue_script('lazyload.min.js', THEME_URL . '/assets/js/lazyload.min.js', array(), 1, false);
    // wp_enqueue_script('jquery.magnific-popup.js', THEME_URL . '/assets/js/jquery.magnific-popup.js', array(), 1, true);
    // wp_enqueue_script('fullpage.js', THEME_URL . '/assets/js/fullpage.js', array(), 1, true);

    wp_enqueue_script('main.js', THEME_URL . '/assets/js/main.js', array('jquery'), $version, false);
    wp_enqueue_script('my-app-ext', THEME_URL . '/assets/js/vsd.js', array('jquery'), $version, true);
    wp_localize_script('my-app-ext', 'MyAjax', array(
        'site_url' => SITE_URL,
        'theme_url' => THEME_URL ,
        'ajax_url' => admin_url('admin-ajax.php'),
//		'app_fb_id' => FACEBOOK_APP_ID
    ));

}

add_action('wp_enqueue_scripts', 'r_scripts_styles');


add_action('after_setup_theme', 'remove_admin_bar');
function remove_admin_bar()
{
    if (!current_user_can('administrator') and !current_user_can('editor')) {
        show_admin_bar(false);
    }
}

require_once('functions/settings.php');
require_once('functions/posts.php');
