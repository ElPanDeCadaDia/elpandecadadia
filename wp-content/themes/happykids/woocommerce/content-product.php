<?php
/**
 * The template for displaying product content within loops.
 *
 * Override this template by copying it to yourtheme/woocommerce/content-product.php
 *
 * @author  WooThemes
 * @package WooCommerce/Templates
 * @version 2.4.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}

global $product, $woocommerce_loop;

// Store loop count we're currently on
if ( empty( $woocommerce_loop['loop'] ) ) {
	$woocommerce_loop['loop'] = 0;
}

$gen_sets = theme_get_option('general', 'gen_sets');

// Store column count for displaying the grid
 if ( empty( $woocommerce_loop['columns'] ) ){
	$gen_template = ( isset($gen_sets['_gen_woo_template_select']) ) ? $gen_sets['_gen_woo_template_select'] : 'sb_none';
	switch ($gen_template) {
		case 'sb_right':
		case 'sb_left':
			$woocommerce_loop['columns'] = apply_filters( 'loop_shop_columns', 3 );
			break;
		case 'sb_double':
			$woocommerce_loop['columns'] = apply_filters( 'loop_shop_columns', 2 );
			break;
		case 'sb_none':
			$woocommerce_loop['columns'] = apply_filters( 'loop_shop_columns', 4 );
			break;
	};
 }

// Ensure visibility
if ( ! $product || ! $product->is_visible() ) {
	return;
}

// Increase loop count
$woocommerce_loop['loop']++;

// Extra post classes
$classes = array();
if ( 0 == ( $woocommerce_loop['loop'] - 1 ) % $woocommerce_loop['columns'] || 1 == $woocommerce_loop['columns'] ) {
	$classes[] = 'first';
}
if ( 0 == $woocommerce_loop['loop'] % $woocommerce_loop['columns'] ) {
	$classes[] = 'last';
}
?>
<li <?php post_class( $classes ); ?>>

	<?php do_action( 'woocommerce_before_shop_loop_item' ); ?>
	<div class="sale-wrapper"><?php woocommerce_show_product_loop_sale_flash(); ?></div>
	<div class="content-wrapper">
		<figure>
			<?php $is_lightbox_off = ( isset($gen_sets['_woo_lightbox_disabled']) ) ? $gen_sets['_woo_lightbox_disabled'] : false; 
				if ($is_lightbox_off) :?>
					<a href="<?php the_permalink(); ?>" class="kids_picture" title="<?php the_title(); ?>">
				<?php else : ?>	
					<a href="<?php echo( wp_get_attachment_url( get_post_thumbnail_id() )); ?>" data-rel="prettyPhoto" class="prettyPhoto kids_picture" title="<?php echo(esc_attr( get_the_title( get_post_thumbnail_id() ) ) ); ?>">	
				<?php endif; ?>	
		<?php
			/**
			 * woocommerce_before_shop_loop_item_title hook
			 *
			 * @hooked woocommerce_show_product_loop_sale_flash - 10
			 * @hooked woocommerce_template_loop_product_thumbnail - 10
			 */
			woocommerce_template_loop_product_thumbnail()
		?></a>
		</figure>
	</div>

		<a href="<?php the_permalink(); ?>"><div class="title"><?php the_title(); ?></div></a>

		<?php
			/**
			 * woocommerce_after_shop_loop_item_title hook
			 *
			 * @hooked woocommerce_template_loop_price - 10
			 */
			do_action( 'woocommerce_after_shop_loop_item_title' );
		?>



	<?php

		/**
		 * woocommerce_after_shop_loop_item hook
		 *
		 * @hooked woocommerce_template_loop_add_to_cart - 10
		 */
		do_action( 'woocommerce_after_shop_loop_item' );

	?>

</li>
