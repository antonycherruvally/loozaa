<?php
/**
 * The header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package electro
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="google-site-verification" content="wDikKogk6Kj4pXF5FzygNq-H1_9k9dFi9rFzvQCWyhY" />
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
 <link rel="shortcut icon" href="favicon.ico">

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div class="off-canvas-wrapper">
<div id="page" class="hfeed site">
	<?php
	/**
	 * @hooked electro_skip_links - 0
	 * @hooked electro_top_bar - 10
	 */
	do_action( 'electro_before_header_v5' ); ?>

	<header id="masthead" class="site-header header-v5">
		<div class="stick-this">
			<div class="container <?php echo has_electro_mobile_header() ? 'hidden-lg-down' : ''; ?>">
				<?php
				/**
				 */ 
				do_action( 'electro_header_v5' ); ?>

			</div>

			<?php
			/**
			 * @hooked electro_handheld_header - 10
			 */
			do_action( 'electro_after_header' ); ?>

		</div>
		<div class="mobheadnavi" style="display: none;">
			<ul class="mobhead_navul">
				<li><a href="<?php echo get_home_url(); ?>">Home</a></li>
				<li><a href="<?php echo get_home_url(); ?>/super-deals">Deals</a></li>
				<li><a href="<?php echo get_home_url(); ?>/feautured-proucts/">Features</a></li>
				<li><a href="<?php echo get_home_url(); ?>/new-arrivals/">New Arrivals</li>
			</ul>
	    </div>
	</header><!-- #masthead -->
		<div class="homes_icon_main">
		<div class="home_icon">
			<div class="ladies_icon"><a href="<?php echo get_home_url(); ?>/product-category/ladies-wear/">
				
					<div class="perf_icon_img">
						<img src="<?php echo get_home_url(); ?>/wp-content/uploads/2018/10/perf.png">
						
					</div>
					<span class="icon_head_ladies" style="float: left;">المرأة الخليجية</span>
				</a>
			</div>
			<div class="men_icon"><a href="<?php echo get_home_url(); ?>/product-category/mens-wear/">
				
					<div class="cap_icon_img">
					<img src="<?php echo get_home_url(); ?>/wp-content/uploads/2018/10/menscap.png">
					</div>
				<span class="icon_head2" style="float: left;">الرجل الخليجي</span></a>
			</div>
			<div class="abaya_icon"><a href=<?php echo get_home_url(); ?>/product-category/abayas/">

				
					<div class="abaya_icon_img">
						<img src="<?php echo get_home_url(); ?>/wp-content/uploads/2018/08/chichek2-on_low_res-e1533198809829.png">
						
					</div>
					<span class="icon_head1" style="float: left;">عبايات</span>
				</a>
			</div>
		</div>
		<div class="home_icon2">
			<div class="perfume_icon"><a href="<?php echo get_home_url(); ?>/product-category/perfume/">
				
					<div class="oud_icon_img">
						<img src="<?php echo get_home_url(); ?>/wp-content/uploads/2018/08/99415BA-2-e1533198060395.png">
					</div>
				<span class="icon_head_oud" style="float: left;">عطور</span></a>
			</div>
			<div class="gifts_icon"><a href="<?php echo get_home_url(); ?>/product-category/gift/">
				
					<div class="gift_icon_img">
						<img src="<?php echo get_home_url(); ?>/wp-content/uploads/2018/10/Gift-1-icon.png">
						
					</div>
				<span class="icon_head_gift" style="float: left;">هدايا</span></a>
					
			</div>
			<div class="homeaces_icon"><a href="<?php echo get_home_url(); ?>/leftproduct-category/homeaccessories/">
				
					<div class="home_icon_img">
						<img src="<?php echo get_home_url(); ?>/wp-content/uploads/2018/10/wall.png">
					</div>
				<span class="icon_head_home" style="float: left;">المنزل ا لخليجي</span></a>
					
			</div>
		</div>
	</div>
	

	<?php do_action( 'electro_before_content' ); ?>

	<div id="content" class="site-content" tabindex="-1">
		<div class="container">
		<?php
		/**
		 * @hooked woocommerce_breadcrumb - 10
		 */
		do_action( 'electro_content_top' ); ?>
