<?php
/*
Plugin Name: NS Custom checkout fields for WooCommerce
Plugin URI: https://wordpress.org/plugins/ns-custom-checkout-page-for-woocommerce/
Description: This plugin allow to choose the fields to show in the checkout page
Version: 1.0.2
Author: NsThemes
Author URI: http://www.nsthemes.com
License: GNU General Public License v2.0
License URI: http://www.gnu.org/licenses/gpl-2.0.html
 */


if ( ! defined( 'ABSPATH' ) ) {
	exit;
}


/* *** plugin options *** */
require_once( plugin_dir_path(__FILE__).'/ns-custom-checkout-page-options.php');


require_once( plugin_dir_path(__FILE__).'/ns-admin-options/ns-admin-options-setup.php');


add_filter( 'woocommerce_checkout_fields' , 'custom_override_checkout_fields_page' );
  
function custom_override_checkout_fields_page($fields) {

	if(get_option('ns-code-checkout-name', '') )
		unset($fields['billing']['billing_first_name']);
	
	if(get_option('ns-code-checkout-last-name', ''))
		unset($fields['billing']['billing_last_name']);
	
	if(get_option('ns-code-checkout-company-name', ''))
		unset($fields['billing']['billing_company']);
	
	if(get_option('ns-code-checkout-address', '')){
		unset($fields['billing']['billing_address_1']);
		unset($fields['billing']['billing_address_2']);
	}
		
	
	if(get_option('ns-code-checkout-town', ''))
		unset($fields['billing']['billing_city']);
	
	if(get_option('ns-code-checkout-postcode', ''))
		unset($fields['billing']['billing_postcode']);
	
	if(get_option('ns-code-checkout-country', ''))
		unset($fields['billing']['billing_country']);
	
	if(get_option('ns-code-checkout-phone', ''))
		unset($fields['billing']['billing_phone']);
	
	if(get_option('ns-code-checkout-email', ''))
		unset($fields['billing']['billing_email']);
	
	if(get_option('ns-code-checkout-prov', ''))
		unset($fields['billing']['billing_state']);
	
		
	return $fields;
}
?>