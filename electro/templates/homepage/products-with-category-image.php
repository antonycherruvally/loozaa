<?php
/**
 * Products with category and image block
 *
 * @package Electro/Templates
 */

if ( ! defined( 'ABSPATH' ) ) {
    exit;
}

$section_class = empty( $section_class ) ? 'products-with-category-image' : 'products-with-category-image ' . $section_class;
if ( ! empty( $animation ) ) {
    $section_class .= ' animate-in-view';
}

$show_nav = ! empty( $categories ) && ! is_wp_error( $categories );
$link = '#';
if( strpos(esc_html( $section_title ), "Perfumes") !== false ) {
	$link = 'product-category/perfume/';
}
if( strpos(esc_html( $section_title ), "Mens Wear") !== false ) {
	$link = 'product-category/mens-wear/';
}
if( strpos(esc_html( $section_title ), "Ladies Wear") !== false ) {
	$link = 'product-category/ladies-wear/';
}
if( strpos(esc_html( $section_title ), "Children") !== false ) {
	$link = 'product-category/children/';
}
if( strpos(esc_html( $section_title ), "Accessories") !== false ) {
	$link = 'product-category/accessories/';
}

if( strpos(esc_html( $section_title ), "Home Accessories") !== false ) {
	$link = 'product-category/homeaccessories/';
}
if( strpos(esc_html( $section_title ), "Abayas") !== false ) {
	$link = 'product-category/abayas/';
}

?>

<section class="<?php echo esc_attr( $section_class ); ?>" <?php if ( !empty( $animation ) ) : ?>data-animation="<?php echo esc_attr( $animation );?>"<?php endif; ?>>
    <header <?php if( $show_nav ): ?>class="show-nav"<?php endif; ?>>
        <h2 class="h1">
			<a href='<?=$link?>'>
				<?php echo esc_html( $section_title ); ?>
			</a>
		</h2>
        <?php if ( true === $show_nav ) : ?>
            <ul class="nav nav-inline">
                <?php if ( ! empty( $categories_title ) ) : ?>
                    <li class="nav-item active">
						 
                        <span class="nav-link"><?php echo esc_html( $categories_title ); ?></span>
                    </li>
                <?php endif; ?>
                <?php foreach( $categories as $category ) : ?>
                    <li class="nav-item">
                        <a class="nav-link" href="<?php echo esc_url( get_term_link( $category ) ); ?>"><?php echo esc_html( $category->name ); ?></a>
                    </li>
                <?php endforeach; ?>
            </ul>
        <?php endif; ?>
    </header>
    <div class="products-with-category-image-inner">
        <?php if ( ! empty( $vcategories ) && ! is_wp_error( $vcategories ) ) : ?>
        <div class="categories-menu-list">
            <ul class="nav">
                <?php foreach( $vcategories as $vcategory ) : ?>
                <li class="nav-item">
                    <a class="nav-link" href="<?php echo esc_url( get_term_link( $vcategory ) ); ?>"><?php echo esc_html( $vcategory->name ); ?></a>
                </li>
                <?php endforeach; ?>
            </ul>
        </div>
        <?php endif; ?>

        <?php if ( ! empty( $image[0] ) ) : ?>
        <div class="image-block">
            <a href="<?php echo esc_attr( $img_action_link ); ?>" class="action-link">
                <img src="<?php echo esc_url( $image[0] ); ?>" alt="">
            </a>
        </div>
        <?php endif; ?>

        <div class="products-block">
            <?php echo electro_do_shortcode( $shortcode_tag, wp_parse_args( array( 'columns' => 3, 'per_page' => 6 ), $shortcode_atts ) ); ?>
        </div>
    </div>
</section>
