<? php

//If you want to change the currency name on the woocommerece

// BDT is Default currency name and Bangladeshi Taka is custom currency name.

function add_custom_currency( $currencies ) {
  $currencies["BDT"] = 'Bangladeshi Taka';
  return $currencies;
}
add_filter( 'woocommerce_currencies', 'add_custom_currency' );