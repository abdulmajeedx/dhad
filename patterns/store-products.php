<?php
/**
 * Title: أحدث المنتجات والتصنيفات
 * Slug: dhad/store-products
 * Categories: dhad, woocommerce
 * Description: شبكة أحدث المنتجات ثم قائمة التصنيفات. يحتاج WooCommerce.
 */
?>
<!-- wp:group {"align":"wide","style":{"spacing":{"padding":{"bottom":"var:preset|spacing|70"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignwide" style="padding-bottom:var(--wp--preset--spacing--70)">
	<!-- wp:group {"align":"wide","layout":{"type":"flex","justifyContent":"space-between","verticalAlignment":"bottom"}} -->
	<div class="wp-block-group alignwide">
		<!-- wp:heading {"level":2} -->
		<h2 class="wp-block-heading">أحدث المنتجات</h2>
		<!-- /wp:heading -->
		<!-- wp:paragraph {"fontSize":"small"} -->
		<p class="has-small-font-size"><a href="/shop/">كل المنتجات ←</a></p>
		<!-- /wp:paragraph -->
	</div>
	<!-- /wp:group -->
	<!-- wp:woocommerce/product-new {"columns":3,"rows":2,"align":"wide"} /-->
</div>
<!-- /wp:group -->

<!-- wp:group {"align":"wide","style":{"spacing":{"padding":{"bottom":"var:preset|spacing|70"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignwide" style="padding-bottom:var(--wp--preset--spacing--70)">
	<!-- wp:heading {"level":2} -->
	<h2 class="wp-block-heading">تصفّح حسب التصنيف</h2>
	<!-- /wp:heading -->
	<!-- wp:woocommerce/product-categories {"hasCount":false,"align":"wide"} /-->
</div>
<!-- /wp:group -->
