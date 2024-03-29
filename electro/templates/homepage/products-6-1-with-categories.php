<?php
/**
 * Products 6-1 with categories block
 *
 * @package Electro/Templates
 */

if ( ! defined( 'ABSPATH' ) ) {
    exit;
}

$section_class = empty( $section_class ) ? 'products-6-1-with-categories' : 'products-6-1-with-categories ' . $section_class;

if ( ! empty( $animation ) ) {
    $section_class .= ' animate-in-view';
}

$show_nav = ! empty( $categories ) && ! is_wp_error( $categories );
$link = '#';
if( strpos(esc_html( $section_title ), "Food") !== false ) {
	$link = 'product-category/food/';
}
?>
<section class="<?php echo esc_attr( $section_class ); ?>" <?php if ( !empty( $animation ) ) : ?>data-animation="<?php echo esc_attr( $animation );?>"<?php endif; ?>>
    <header <?php if( $show_nav ): ?>class="show-nav"<?php endif; ?>>
		<h2 class="h1"><a href='<?=$link?>'><?php echo esc_html( $section_title ); ?></a></h2>
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
    <div class="products-6-1-with-categories-inner">
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

        <div class="products-block">
            <div class="columns-6-1">
                <div class="product-main-6-1">
                    <?php
                        electro_add_6_1_main_product_hooks();
                        echo electro_do_shortcode( $shortcode_tag_featured, wp_parse_args( array( 'columns' => 1, 'per_page' => 1 ), $shortcode_atts_featured ) );
                        electro_remove_6_1_main_product_hooks();
                    ?>
                </div>
                <div class="products-6">
                    <?php echo electro_do_shortcode( $shortcode_tag,  wp_parse_args( array( 'columns' => 3, 'per_page' => 6 ), $shortcode_atts ) ); ?>
                </div>
            </div>
        </div>
    </div>
</section>
