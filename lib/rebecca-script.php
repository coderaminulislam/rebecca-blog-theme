<?php



function rebecca_scripts(){
    wp_enqueue_style( 'rebecca-fonts', rebecca_fonts_url(), array(), time() );
    wp_enqueue_style('stylesheet', get_stylesheet_uri(  ));
    wp_enqueue_style( 'bootstrap', get_template_directory_uri(). '/assets/css/libs/bootstrap.min.css', [] ); 
    wp_enqueue_style( 'owlcarousel', get_template_directory_uri(). '/assets/css/libs/owl.carousel.min.css', [] ); 
    wp_enqueue_style( 'fontawesome', get_template_directory_uri(). '/assets/css/libs/fontawesome.min.css', [] ); 
    wp_enqueue_style( 'all', get_template_directory_uri(). '/assets/css/libs/all.min.css', [] ); 
    wp_enqueue_style( 'style', get_template_directory_uri(). '/assets/css/styles.css', [] ); 



    wp_enqueue_script('JQuery');
    wp_enqueue_script( 'owl', get_template_directory_uri(). '/assets/js/libs/owl.carousel.js', [ 'jquery' ], '', true );
    wp_enqueue_script( 'scripts', get_template_directory_uri(). '/assets/js/scripts.js', [ 'jquery' ], '', true );
    
}

add_action('wp_enqueue_scripts', 'rebecca_scripts');


/*
Register Fonts
 */
function rebecca_fonts_url() {
    $font_url = '';

    /*
    Translators: If there are characters in your language that are not supported
    by chosen font(s), translate this to 'off'. Do not translate into your own language.
     */
    if ( 'off' !== _x( 'on', 'Google font: on or off', 'cleanser' ) ) {
        $font_url = 'https://fonts.googleapis.com/css?family=Fjalla+One%7CNoto+Serif%3A400%2C700%7CRoboto+Condensed%3A400%2C400i%2C700%2C700i%27CSlabo+27px';
    }
    return $font_url;
}