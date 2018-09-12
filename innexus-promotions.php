<?php
/**
 *
 * @link https://www.getinnexus.com
 * @since 1.0.0
 * @package XPRO
 *
 * Plugin Name: Innexus Promotions
 * Plugin URI: https://www.getinnexus.com
 * Description: Innexus Promotions functionality, allowing auto-cycling of quarterly promotions
 * Author: Innexus by Innereactive
 * Author URI: https://www.getinnexus.com
 * Version: 1.05.07
 */

// Exit if accessed directly.
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * Define global constants.
 *
 * @since 1.0.0
 */
// Plugin version.
if ( ! defined( 'XPRO_VERSION' ) ) {
	define( 'XPRO_VERSION', '1.0' );
}

if ( ! defined( 'XPRO_NAME' ) ) {
	define( 'XPRO_NAME', trim( dirname( plugin_basename( __FILE__ ) ), '/' ) );
}

if ( ! defined( 'XPRO_DIR' ) ) {
	define( 'XPRO_DIR', WP_PLUGIN_DIR . '/' . XPRO_NAME );
}

if ( ! defined( 'XPRO_URL' ) ) {
	define( 'XPRO_URL', WP_PLUGIN_URL . '/' . XPRO_NAME );
}

/**
 * Promotions
 */
require_once( XPRO_DIR . '/promotions/fields.php' );
require_once( XPRO_DIR . '/promotions/index.php' );
require_once( XPRO_DIR . '/distribute/BFIGitHubPluginUploader.php' );
if ( is_admin() ) {
    new BFIGitHubPluginUpdater( __FILE__, 'InnereactiveDeveloper', "innexus-promotions" );
}
