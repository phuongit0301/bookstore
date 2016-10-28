<?php
    include('inc/wp_bootstrap_navwalker.php');

    add_theme_support( 'html5', array(
        'search-form',
        'comment-form',
        'comment-list',
        'gallery',
        'caption',
    ) );

    add_theme_support( 'post-formats', array(
        'aside',
        'image',
        'video',
        'quote',
        'link',
        'gallery',
        'status',
        'audio',
        'chat',
    ) );

    add_theme_support( 'post-formats', array( 'aside', 'gallery' ) );


    add_theme_support( 'post-thumbnails', array( 'post', 'page', 'company_relate', 'product_feature', 'product_worker' ) );
    add_image_size( 'feature-image', 960, 500, true ); 
    add_image_size( 'medium-thumb', 300, 156, true );
    add_image_size( 'small-thumb', 120, 120, true );

    function register_menu() {
        register_nav_menu('primary-menu', __('Primary Menu'));
    }
    add_action('init', 'register_menu');

    //add css js to admin dashboard
    add_action('admin_enqueue_scripts','load_css_js_head');

    function load_css_js_head()
    {

        wp_register_style( 'bootstrap-css', get_template_directory_uri().'/css/bootstrap/bootstrap.min.css' );
        wp_enqueue_style( 'bootstrap-css' );

        wp_register_style( 'bootstrap-colorpicker-css', get_template_directory_uri().'/css/bootstrap/bootstrap-colorpicker.min.css' );
        wp_enqueue_style( 'bootstrap-colorpicker-css' );

        wp_register_style( 'admin-css', get_template_directory_uri().'/css/admin.css' );
        wp_enqueue_style( 'admin-css' );

        /* Register & Enqueue scripts. */
        /*wp_register_script( 'jquery-js', get_template_directory_uri().'/js/jquery/jquery.js' );
        wp_enqueue_script( 'jquery-js');*/

        wp_enqueue_script('jquery');
        wp_enqueue_script('jquery-ui-core');


       wp_register_script( 'bootstrap-js', get_template_directory_uri().'/js/bootstrap/bootstrap.min.js' );
        wp_enqueue_script( 'bootstrap-js');

        wp_register_script( 'bootstrap-colorpicker-js', get_template_directory_uri().'/js/bootstrap/bootstrap-colorpicker.min.js' );
        wp_enqueue_script( 'bootstrap-colorpicker-js');

        wp_register_script( 'admin-js', get_template_directory_uri().'/js/admin.js' );
        wp_enqueue_script( 'admin-js');
    }

    function add_to_author_profile( $contactmethods ) {
    
        $contactmethods['rss_url'] = 'RSS URL';
        $contactmethods['google_profile'] = 'Google Profile URL';
        $contactmethods['twitter_profile'] = 'Twitter Profile URL';
        $contactmethods['facebook_profile'] = 'Facebook Profile URL';
        $contactmethods['linkedin_profile'] = 'Linkedin Profile URL';
        
        return $contactmethods;
    }
    add_filter( 'user_contactmethods', 'add_to_author_profile', 10, 1);
    
    add_theme_support( 'admin-bar', array( 'callback' => '__return_false') );