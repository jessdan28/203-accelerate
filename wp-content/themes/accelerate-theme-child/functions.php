<?php
/**
* Accelerate Marketing Child functions and definitions
*
* @link http://codex.wordpress.org/Theme_Development
* @link http://codex.wordpress.org/Child_Themes
*
* @package WordPress
* @subpackage Accelerate Marketing
* @since Accelerate Marketing 2.0
*/

// Enqueue scripts and styles
function accelerate_child_scripts(){
	wp_enqueue_style( 'accelerate-style', get_template_directory_uri() . '/style.css' );
    wp_enqueue_style( 'child-style', get_stylesheet_directory_uri() . '/style.css', array( 'accelerate-style' ));
    wp_enqueue_style( 'accelerate-child-google-fonts','//fonts.googleapis.com/css?family=Lobster+Two:400,700');
}
add_action( 'wp_enqueue_scripts', 'accelerate_child_scripts' );

function create_custom_post_types() {
    register_post_type( 'case_studies',
        array(
            'labels' => array(
                'name' => __( 'Case Studies' ),
                'singular_name' => __( 'Case Study' )
            ),
            'public' => true,
            'has_archive' => true,
            'rewrite' => array( 'slug' => 'case-studies' ),
        )
    );
     register_post_type( 'custom_about', //assigns a unique name
        array( //defines settings (many more options available)
            'labels' => array(
                'name' => __( 'About' ), //human-readable name, plural
                'singular_name' => __( 'About' ) //human-readable name, singular
            ),
            'public' => true,
            'has_archive' => true, //ensures posts are archived
            'rewrite' => array( 'slug' => 'about' ), //defines URL slug for archive
         )
    );
}
add_action( 'init', 'create_custom_post_types' );

