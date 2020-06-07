<?php
if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

/*
Plugin Name: WooCommerce Moov Money Gateway
Description: Adds Moov Money Gateway to WooCommerce e-commerce plugin
Version: 1.0
*/

// Include our Gateway Class and register Payment Gateway with WooCommerce
add_action( 'plugins_loaded', 'woo_mom_init', 0 );
function woo_mom_init() {
	// If the parent WC_Payment_Gateway class doesn't exist
	// it means WooCommerce is not installed on the site
	// so do nothing
	if ( ! class_exists( 'WC_Payment_Gateway' ) ) return;
	
	// If we made it this far, then include our Gateway Class
	include_once( 'moov-money.php' );

    /*add_action( 'admin_menu', 'add_submenu_mm', 20 );
    function add_submenu_mm() {
        if ( current_user_can( 'manage_woocommerce' ) ) {
            add_submenu_page( 'woocommerce', __( 'Moov Money Customer', 'woocommerce' ),  __( 'Moov Money', 'woocommerce' ) , 'view_woocommerce_reports', 'wc-mom-costomer', array(WC_Gateway_Moov_Money::class, 'output_variations' ) );
        }
    }*/

	// Now that we have successfully included our class,
	// Lets add it too WooCommerce
	add_filter( 'woocommerce_payment_gateways', 'woo_add_mom_gateway' );
	function woo_add_mom_gateway( $methods ) {
		$methods[] = 'WC_Gateway_Moov_Money';
		return $methods;
	}

}


// Add custom action links
add_filter( 'plugin_action_links_' . plugin_basename( __FILE__ ), 'spyr_authorizenet_aim_action_links_mom' );
function spyr_authorizenet_aim_action_links_mom( $links ) {
	$plugin_links = array(
		'<a href="' . admin_url( 'admin.php?page=wc-settings&tab=checkout' ) . '">' . __( 'Settings', 'woocommerce' ) . '</a>',
	);

	// Merge our new link with the default ones
	return array_merge( $plugin_links, $links );	
}

?>