<?php
/**
 * sa1 Theme Function.php Codes
 * 
 * @package sa1
 * Created By: Sajidur Rahman
 * @since 1.0.0
 */
if ( site_url() == "http://localhost.com/sa1" ) {
    define( "VERSION", time() );
} else {
    define( "VERSION", wp_get_theme()->get( "Version" ) );
}
function sa1_theme_setup(){
    load_theme_textdomain( "sa1" );
    add_theme_support( "post-thumbnails" );
    add_theme_support( "custom-logo" );
    add_theme_support( "title-tag" );
    add_theme_support( 'html5', array( 'search-form', 'comment-list' ) );
    add_theme_support( "post-formats", array( "image", "gallery", "quote", "audio", "video", "link" ) );
    add_editor_style( "/assets/css/editor-style.css" );


    // Register Nav Menu
    register_nav_menu( "topmenu", __( "Top Menu", "sa1" ) );

    add_image_size( "sa1_post", 400, 400, true );
}
add_action( "after_setup_theme","sa1_theme_setup" );


function sa1_assets() {
    wp_enqueue_style( "fontawesome-css", get_theme_file_uri( "assets/css/font-awesome.min.css" ), null, "1.0" );
    wp_enqueue_style( "bootstrap-css", get_theme_file_uri( "assets/css/bootstrap.min.css" ), null, "1.0" );
    wp_enqueue_style( "custom-css", get_theme_file_uri( "assets/css/custom.css" ), null, "1.0" );
    wp_enqueue_style( "style-css", get_theme_file_uri( "assets/css/style.css" ), null, "1.0" );
    wp_enqueue_style( "pure-css", get_theme_file_uri( "assets/css/style.css" ), null, "1.0" );
    
    // Loading Plugins CSS Files
    wp_enqueue_style( "fontawesome-css", get_theme_file_uri( "assets/plugins/animate/animate.min.css" ), null, "1.0" );
    wp_enqueue_style( "fontawesome-css", get_theme_file_uri( "assets/plugins/magnific-popup/magnific-popup.css" ), null, "1.0" );
    wp_enqueue_style( "fontawesome-css", get_theme_file_uri( "assets/plugins/owl-carousel/owl.carousel.min.css" ), null, "1.0" );
    wp_enqueue_style( 'google-fonts', 'https://fonts.googleapis.com/css?family=Quicksand:300,400,500%7CSpectral:400,400i,500,600,700');
    wp_enqueue_style( "sa1-css", get_stylesheet_uri(), null, VERSION );

    // Loading Plugins JS Files
    wp_enqueue_style( "fontawesome-css", get_theme_file_uri( "assets/plugins/magnific-popup/jquery.magnific-popup.min.js" ), null, "1.0" );
    wp_enqueue_style( "carousel-css", get_theme_file_uri( "assets/plugins/owl-carousel/owl.carousel.min.js" ), null, "1.0" );
    // Loading main JS Files
    wp_enqueue_script( "bootstrap-js", get_theme_file_uri( "assets/js/bootstrap.bundle.min.js" ), null, "1.0" );
    wp_enqueue_script( "custom-js", get_theme_file_uri( "assets/js/custom.js" ), null, "1.0" );
    wp_enqueue_script( "jquery-js", get_theme_file_uri( "assets/js/jquery-1.12.1.min.js" ), null, "1.0" );
    wp_enqueue_script( "scripts-js", get_theme_file_uri( "assets/js/scripts.js" ), array( "jquery" ), "1.0", true );
}
add_action( "wp_enqueue_scripts", "sa1_assets" );

function sa1_custom_excerpt_length( $length ) {
    return 20;
}
add_filter( 'excerpt_length', 'sa1_custom_excerpt_length', 999 );