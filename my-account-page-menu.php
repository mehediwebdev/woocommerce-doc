<?php

add_filter ( 'woocommerce_account_menu_items', 'misha_remove_my_account_links' );
function misha_remove_my_account_links( $menu_links ){
 
	unset( $menu_links['edit-address'] ); // Addresses
 
 
	unset( $menu_links['dashboard'] ); // Remove Dashboard
	unset( $menu_links['payment-methods'] ); // Remove Payment Methods
	unset( $menu_links['orders'] ); // Remove Orders
	unset( $menu_links['downloads'] ); // Disable Downloads
	unset( $menu_links['edit-account'] ); // Remove Account details tab
	unset( $menu_links['customer-logout'] ); // Remove Logout link
   unset( $menu_links['wishlist'] ); // Remove Logout link
	return $menu_links;
 
}


function kc_menu_panel_nav() {
    $items = array(
        'dashboard'       => __( 'Dashboard', 'woocommerce' ),
        'orders'          => __( 'Orders', 'woocommerce' ),
        'downloads'       => __( 'Downloadsssssssssssssssssss', 'woocommerce' ),
        'edit-address'    => __( 'Addressessssssssssss', 'woocommerce' ),
        'payment-methods' => __( 'Payment Methodsssss', 'woocommerce' ),
        'edit-account'    => __( 'Account Details', 'woocommerce' ),
        'wishlist' => __( 'Wishlist', 'woocommerce' ), // My custom tab here
        'customer-logout' => __( 'Logout', 'woocommerce' ),
    );

    return $items;
}
add_filter( 'woocommerce_account_menu_items' , 'kc_menu_panel_nav' );