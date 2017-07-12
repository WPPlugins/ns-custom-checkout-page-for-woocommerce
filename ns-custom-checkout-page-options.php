<?php
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

function ns_cuscheckout_activate_set_options()
{
    add_option('ns-code-checkout-name', '');
	add_option('ns-code-checkout-last_name', '');
	add_option('ns-code-checkout-company-name', '');
	add_option('ns-code-checkout-address', '');
	add_option('ns-code-checkout-town', '');
	add_option('ns-code-checkout-postcode', '');
	add_option('ns-code-checkout-country', '');
	add_option('ns-code-checkout-phone', '');
	add_option('ns-code-checkout-email', '');
	add_option('ns-code-checkout-prov', '');
	
}

register_activation_hook( __FILE__, 'ns_cuscheckout_activate_set_options');



function ns_cuscheckout_register_options_group()
{
    register_setting('ns_cuscheckout_options_group', 'ns-code-checkout-name'); 
	register_setting('ns_cuscheckout_options_group', 'ns-code-checkout-last-name'); 
	register_setting('ns_cuscheckout_options_group', 'ns-code-checkout-company-name'); 
	register_setting('ns_cuscheckout_options_group', 'ns-code-checkout-address'); 
	register_setting('ns_cuscheckout_options_group', 'ns-code-checkout-town'); 
	register_setting('ns_cuscheckout_options_group', 'ns-code-checkout-postcode'); 
	register_setting('ns_cuscheckout_options_group', 'ns-code-checkout-country'); 
	register_setting('ns_cuscheckout_options_group', 'ns-code-checkout-phone'); 
	register_setting('ns_cuscheckout_options_group', 'ns-code-checkout-email'); 
	register_setting('ns_cuscheckout_options_group', 'ns-code-checkout-prov'); 
		
}
 
add_action ('admin_init', 'ns_cuscheckout_register_options_group');

?>