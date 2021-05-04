<?php

/**
 * Enqueue scripts and styles.
 */
function nmbet_scripts() {
	//wp_enqueue_style( 'nmbet-style', get_stylesheet_uri(), array(), _S_VERSION );
    //wp_enqueue_style( 'nm-style', get_template_directory_uri(). '/src/style.css', array(), '1.0.0', 'all' );
    
    wp_enqueue_style( 'nm-bootstrap', get_template_directory_uri(). '/src/assets/styles/bootstrap.min.css');
    wp_enqueue_style( 'nm-font', get_template_directory_uri(). '/src/assets/styles/fontawesome.css'); 
    wp_enqueue_style( 'nm-modal', get_template_directory_uri(). '/src/assets/styles/modal.css'); 
    wp_enqueue_style( 'nm-3webetstyle', get_template_directory_uri(). '/src/assets/styles/3webetstyle.css'); 

    wp_enqueue_style( 'nm-style', get_template_directory_uri(). '/src/style.css');
    wp_enqueue_style( 'nm-main', get_template_directory_uri(). '/src/main.css');

    wp_enqueue_style( 'nm-fonts', 'https://fonts.googleapis.com/css2?family=Work+Sans&display=swap'); 
    wp_enqueue_style( 'nm-font-awesome', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css'); 
    wp_enqueue_style( 'nm-aos', get_template_directory_uri(). '/src/assets/styles/aos.css'); 
    wp_enqueue_style( 'nm-slick', get_template_directory_uri(). '/src/assets/styles/slick.css'); 
    wp_enqueue_style( 'nm-slick-theme', get_template_directory_uri(). '/src/assets/styles/slick-theme.css');   
    
    //wp_style_add_data( 'nmbet-style', 'rtl', 'replace' );

	//wp_enqueue_script( 'nmbet-navigation', get_template_directory_uri() . '/js/navigation.js', array(), _S_VERSION, true );
    wp_enqueue_script( 'nm-Jquery', get_template_directory_uri() . '/src/assets/scripts/jquery-3.3.1.min.js');
    wp_enqueue_script( 'nm-Jquery12', 'https://code.jquery.com/jquery-migrate-1.2.1.min.js');
    //wp_enqueue_script( 'nm-popper', 'https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js');
    wp_enqueue_script( 'nm-bootstrap', get_template_directory_uri() . '/src/assets/scripts/bootstrap.min.js');
    wp_enqueue_script( 'nm-smooth', get_template_directory_uri() . '/src/assets/scripts/smooth.scroll.js');
    wp_enqueue_script( 'nm-aos', get_template_directory_uri() . '/src/assets/scripts/aos.js');
    wp_enqueue_script( 'nm-slick', get_template_directory_uri() . '/src/assets/scripts/slick.js');
    wp_enqueue_script( 'nm-custom', get_template_directory_uri() . '/src/assets/scripts/custom.js');
	
    
    
    
    
    
    // if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
	// 	wp_enqueue_script( 'comment-reply' );
	// }
}
add_action( 'wp_enqueue_scripts', 'nmbet_scripts' );