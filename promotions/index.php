<?php
/**
 * Innexus Module - Promotions
 *
 * Innexus Promotions Assets
 *
 * @since   1.0.0
 * @package XPRO
 */

//Enqueue scripts and styles.
function XPRO_enqueue() 
{  
    wp_enqueue_script( 'innexus-promotions-script', plugin_dir_url( __FILE__ ) . 'js/script.js' , array('jquery'), '1.0' );
    wp_enqueue_style( 'innexus-promotions-style', plugin_dir_url( __FILE__ ) . '/css/style.css' );
    wp_enqueue_style( 'innexus-promotions-google-font', 'https://fonts.googleapis.com/css?family=Bevan' );
}
add_action('wp_enqueue_scripts', 'XPRO_enqueue');