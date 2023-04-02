<?php

// Load HTML5 Blank styles
function fsd_styles() {
	$rand_num = rand();
    wp_register_style( 'main-css', get_template_directory_uri() . '/assets/css/style.css?ver=' . $rand_num, array(), null );
	wp_enqueue_style( 'main-css' );
	
	wp_register_style( 'slick-css', 'https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css', array(), null );
	wp_enqueue_style( 'slick-css' );

	wp_register_script('slick-js', 'https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js', array('jquery'), true );
	wp_enqueue_script('slick-js');
	
	wp_register_style( 'adobe-font', 'https://use.typekit.net/nma5kgv.css', array(), null );
	wp_enqueue_style( 'adobe-font' );
	
	wp_register_style( 'fontawesome', 'https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css', array(), null );
	wp_enqueue_style( 'fontawesome' );
    
    //wp_register_script('aos-script', 'https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js', array('jquery'), null, true);
	//wp_enqueue_script('aos-script');
	
	wp_register_script('main-js', get_template_directory_uri() . '/assets/js/main.js?ver=' . $rand_num, array('jquery'), null, true);
	wp_enqueue_script( 'main-js' );
}
add_action( 'wp_enqueue_scripts', 'fsd_styles' ); // Add Theme Stylesheet