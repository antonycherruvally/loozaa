<?php
/**
 * electro engine room
 *
 * @package electro
 */

/**
 * Initialize all the things.
 */
require get_template_directory() . '/inc/init.php';

/**
 * Note: Do not add any custom code here. Please use a child theme so that your customizations aren't lost during updates.
 * http://codex.wordpress.org/Child_Themes
 */
 add_filter( 'woocommerce_currency_symbol', 'wc_change_uae_currency_symbol', 10, 2 );

function wc_change_uae_currency_symbol( $currency_symbol, $currency ) {
	$path = str_replace('/demo' , '', $_SERVER[REQUEST_URI]); // remove unecessary strings
	if( get_userdata(wp_get_current_user()->ID)->roles[0] == 'vendor' ) {
		if( $path == '/my-account/' ) {
			wp_redirect( home_url('/vendor-dashboard') );
			exit();
		}
		if( $path == '/my-account/orders/' ) {
			wp_redirect( home_url('/wp-admin/admin.php?page=wcv-vendor-orders') );
			exit();
		}
	}
	switch ( $currency ) {
		case 'AED':
			$currency_symbol = 'AED';
		break;
	}

	return $currency_symbol;
}

/* Redirect Vendors to Vendor Dashboard on Login */
add_filter('woocommerce_login_redirect', 'login_redirect', 10, 2);
function login_redirect( $redirect_to, $user ) {
// WCV dashboard — Uncomment the 3 lines below if using WC Vendors Free instead of WC Vendors Pro
if (class_exists('WCV_Vendors') && WCV_Vendors::is_vendor( $user->ID ) ) {
$redirect_to = get_permalink( get_option( 'wcvendors_vendor_dashboard_page_id' ) );
}
 
return $redirect_to; 
}
add_action( 'wp_head', 'wps_params', 10 );
function wps_params() {
    ?>
    	<script>
	if (window.location.pathname == '/' && jQuery(window).width() <= 480) {
	   window.location = "/ome v2 mobile/";
	}
	</script>

    <?php
}
add_action('woocommerce_product_meta_start', 'custom_woocommerce_product_meta_start');
function custom_woocommerce_product_meta_start() {
   if ( is_shop() ) { 
        $wcv_profile_id =       get_the_author_meta('ID');
        $profile_url =          bp_core_get_user_domain ( $wcv_profile_id );
        echo '<a href="'. $profile_url .'">Visit My Profile</a>';
    }
}  
/*function add_to_login($user_login, $user)
{
	if($user->roles[0] == 'vendor') {
		//wp_redirect( home_url('/vendor_dashboard') );	exit();
	}
}
add_action('wp_login', 'add_to_login', 10, 2);*/
