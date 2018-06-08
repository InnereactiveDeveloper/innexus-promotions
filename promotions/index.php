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
function XPRO_scripts() 
{  
    wp_enqueue_script( 'innexus-promotions-script', plugin_dir_url( __FILE__ ) . 'js/script.js' , array('jquery'), '1.0' );
}
add_action('wp_enqueue_scripts', 'XPRO_scripts');