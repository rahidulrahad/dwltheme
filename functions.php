<?php

add_action( 'after_setup_theme', 'theme_support' );

if ( ! function_exists( 'theme_support' ) ) {

	function theme_support(){
        load_theme_textdomain('dwltest', get_template_directory(). '/languages');
        add_theme_support('post-thumbnails');

        add_theme_support('title-tag');

        add_theme_support('custom-logo', array(
            'width' => 150,
            'height' => 50,
        ));

		register_nav_menus( array(
	    	'primary_menu' => __( 'Primary Menu', 'dwltest' ),
	    	'footer_menu'  => __( 'Footer Menu', 'dwltest' ),
		) );
	}

}

// sidebar
add_action('widgets_init', 'dwl_widgets');

function dwl_widgets(){
    register_sidebar(array(
        'name'          => __( 'Main Sidebar', 'dwltest' ),
		'id'            => 'sidebar-1',
		'description'   => __('our main sidebar', 'dwltest'),
        'before_widget' => '<div class="tm-2-rows-md-swap">',
        'after_widget' => '</div>',
        'before_title' => '<h3 class="tm-gold-text tm-title">',
        'after_title' => '</h3>'
    ));
    register_sidebar(array(
        'name'          => __( 'left Sidebar', 'dwltest' ),
		'id'            => 'sidebar-2',
		'description'   => __('our main sidebar', 'dwltest'),
        'before_widget' => '<div class="left sidebar ">',
        'after_widget' => '</div>',
        'before_title' => '<h3 class="tm-gold-text">',
        'after_title' => '</h3>'
    ));
    register_sidebar(array(
        'name'          => __( 'right Sidebar', 'dwltest' ),
		'id'            => 'sidebar-3',
		'description'   => __('our main sidebar', 'dwltest'),
        'before_widget' => '<div class="left sidebar ">',
        'after_widget' => '</div>',
        
    ));
    register_sidebar(array(
        'name'          => __( 'Blog Sidebar', 'dwltest' ),
		'id'            => 'sidebar-4',
		'description'   => __('our main sidebar', 'dwltest'),
        'before_widget' => '<div class="tm-aside-containe">',
        'after_widget' => '</div>',
        'before_title' => '<h3 class="tm-gold-text tm-title">',
        'after_title' => '</h3>'
    ));
    register_sidebar(array(
        'name'          => __( 'footer one', 'dwltest' ),
		'id'            => 'footer-1',
		'description'   => __('our footer', 'dwltest'),
        'before_widget' => '<div class="tm-footer-content-box tm-footer-links-container">',
        'after_widget' => '</div>',
        'before_title' => '<h3 class="tm-gold-text tm-title tm-footer-content-box-title">',
        'after_title' => '</h3>'
    ));
    register_sidebar(array(
        'name'          => __( 'footer two', 'dwltest' ),
		'id'            => 'footer-2',
		'description'   => __('our footer', 'dwltest'),
        'before_widget' => '<div class="tm-footer-content-box">',
        'after_widget' => '</div>',
        'before_title' => '<h3 class="tm-gold-text tm-title tm-footer-content-box-title">',
        'after_title' => '</h3>'
    ));
}


add_action('wp_enqueue_scripts','myscript');

if(!function_exists('myscript')){
    function myscript(){
        wp_enqueue_style("bootstrap_css", get_template_directory_uri() . '/assets/css/bootstrap.min.css', array(), wp_get_theme()->get('Version'),'all');
        wp_enqueue_style("tempate", get_template_directory_uri() . '/assets/css/templatemo-style.css', array(), wp_get_theme()->get('Version'),'all');

        wp_enqueue_script('bootstrap-script', get_template_directory_uri().'/assets/js/bootstrap.min.js', array(),wp_get_theme()->get('Version'), true);
        wp_enqueue_script('bootstrap-script', get_template_directory_uri().'/assets/js/jquery-1.11.3.js', array(),wp_get_theme()->get('Version'), true);
    }
}





