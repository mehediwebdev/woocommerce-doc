<?php

// Our hooked in function - $fields is passed via the filter!
function remove_some_checkout_fields( $fields ) {
	
//unset($fields['billing']['billing_first_name']);	
//unset($fields['billing']['billing_last_name']);	
//unset($fields['billing']['billing_email']);	
unset($fields['order']['order_comments']);
unset($fields['billing']['billing_company']);
//unset($fields['billing']['billing_address_1']);
//unset($fields['billing']['billing_address_2']);
unset($fields['billing']['billing_city']);
unset($fields['billing']['billing_postcode']);
unset($fields['billing']['billing_country']);
//unset($fields['billing']['billing_state']);
//unset($fields['billing']['billing_phone']);

return $fields;
}
add_filter( 'woocommerce_checkout_fields' , 'remove_some_checkout_fields' );
