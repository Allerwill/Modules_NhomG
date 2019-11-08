<?php
$url_host = 'http://' . $_SERVER['HTTP_HOST'];
$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');
$pattern_uri = '/' . $pattern_document_root . '(.*)$/';

preg_match_all($pattern_uri, __DIR__, $matches);
$url_path = $url_host . $matches[1][0];
$url_path = str_replace('\\', '/', $url_path);

?>
<div class="products">
	<div class="post_item_wrap">
		<a href="product-single.html" class="woocommerce-LoopProduct-link"></a>
		<div class="post_featured">
			<a href="product-single.html" class="woocommerce-LoopProduct-link"></a>
			<div class="post_thumb">
				<a href="product-single.html" class="woocommerce-LoopProduct-link"></a>
				<a class="hover_icon hover_icon_link" href="product-single.html">
					<img src="images/product-12.jpg" style="display: inline-block; width:236px; height: 236px; border: 1px solid" class="attachment-shop_catalog size-shop_catalog" alt="product-3" title="product-3">
				</a>
			</div>
		</div>
		<div class="post_content">
			<h3>
				<a href="product-single.html">
					All the Bright Places
				</a>
			</h3>
			<div class="price">
				<span class="woocommerce-Price-amount amount">
					<span class="woocommerce-Price-currencySymbol">$</span>16.90
				</span>
			</div>
			<button class="btn btn-primary">Add to cart</button>
		</div>
	</div>
	<div class="post_item_wrap">
		<a href="product-single.html" class="woocommerce-LoopProduct-link"></a>
		<div class="post_featured">
			<a href="product-single.html" class="woocommerce-LoopProduct-link"></a>
			<div class="post_thumb">
				<a href="product-single.html" class="woocommerce-LoopProduct-link"></a>
				<a class="hover_icon hover_icon_link" href="product-single.html">
					<img src="images/product-12.jpg" style="display: inline-block; width:236px; height: 236px; border: 1px solid" class="attachment-shop_catalog size-shop_catalog" alt="product-3" title="product-3">
				</a>
			</div>
		</div>
		<div class="post_content">
			<h3>
				<a href="product-single.html">
					All the Bright Places
				</a>
			</h3>
			<div class="price">
				<span class="woocommerce-Price-amount amount">
					<span class="woocommerce-Price-currencySymbol">$</span>16.90
				</span>
			</div>
			<button class="btn btn-primary">Add to cart</button>
		</div>
	</div>
	<div class="post_item_wrap">
		<a href="product-single.html" class="woocommerce-LoopProduct-link"></a>
		<div class="post_featured">
			<a href="product-single.html" class="woocommerce-LoopProduct-link"></a>
			<div class="post_thumb">
				<a href="product-single.html" class="woocommerce-LoopProduct-link"></a>
				<a class="hover_icon hover_icon_link" href="product-single.html">
					<img src="images/product-12.jpg" style="display: inline-block; width:236px; height: 236px; border: 1px solid" class="attachment-shop_catalog size-shop_catalog" alt="product-3" title="product-3">
				</a>
			</div>
		</div>
		<div class="post_content">
			<h3>
				<a href="product-single.html">
					All the Bright Places
				</a>
			</h3>
			<div class="price">
				<span class="woocommerce-Price-amount amount">
					<span class="woocommerce-Price-currencySymbol">$</span>16.90
				</span>
			</div>
			<button class="btn btn-primary">Add to cart</button>
		</div>
	</div>
	<div class="post_item_wrap">
		<a href="product-single.html" class="woocommerce-LoopProduct-link"></a>
		<div class="post_featured">
			<a href="product-single.html" class="woocommerce-LoopProduct-link"></a>
			<div class="post_thumb">
				<a href="product-single.html" class="woocommerce-LoopProduct-link"></a>
				<a class="hover_icon hover_icon_link" href="product-single.html">
					<img src="images/product-12.jpg" style="display: inline-block; width:236px; height: 236px; border: 1px solid" class="attachment-shop_catalog size-shop_catalog" alt="product-3" title="product-3">
				</a>
			</div>
		</div>
		<div class="post_content">
			<h3>
				<a href="product-single.html">
					All the Bright Places
				</a>
			</h3>
			<div class="price">
				<span class="woocommerce-Price-amount amount">
					<span class="woocommerce-Price-currencySymbol">$</span>16.90
				</span>
			</div>
			<button class="btn btn-primary">Add to cart</button>
		</div>
	</div>
	<div class="post_item_wrap">
		<a href="product-single.html" class="woocommerce-LoopProduct-link"></a>
		<div class="post_featured">
			<a href="product-single.html" class="woocommerce-LoopProduct-link"></a>
			<div class="post_thumb">
				<a href="product-single.html" class="woocommerce-LoopProduct-link"></a>
				<a class="hover_icon hover_icon_link" href="product-single.html">
					<img src="images/product-12.jpg" style="display: inline-block; width:236px; height: 236px; border: 1px solid" class="attachment-shop_catalog size-shop_catalog" alt="product-3" title="product-3">
				</a>
			</div>
		</div>
		<div class="post_content">
			<h3>
				<a href="product-single.html">
					All the Bright Places
				</a>
			</h3>
			<div class="price">
				<span class="woocommerce-Price-amount amount">
					<span class="woocommerce-Price-currencySymbol">$</span>16.90
				</span>
			</div>
			<button class="btn btn-primary">Add to cart</button>
		</div>
	</div>
	<div class="post_item_wrap">
		<a href="product-single.html" class="woocommerce-LoopProduct-link"></a>
		<div class="post_featured">
			<a href="product-single.html" class="woocommerce-LoopProduct-link"></a>
			<div class="post_thumb">
				<a href="product-single.html" class="woocommerce-LoopProduct-link"></a>
				<a class="hover_icon hover_icon_link" href="product-single.html">
					<img src="images/product-12.jpg" style="display: inline-block; width:236px; height: 236px; border: 1px solid" class="attachment-shop_catalog size-shop_catalog" alt="product-3" title="product-3">
				</a>
			</div>
		</div>
		<div class="post_content">
			<h3>
				<a href="product-single.html">
					All the Bright Places
				</a>
			</h3>
			<div class="price">
				<span class="woocommerce-Price-amount amount">
					<span class="woocommerce-Price-currencySymbol">$</span>16.90
				</span>
			</div>
			<button class="btn btn-primary">Add to cart</button>
		</div>
	</div>
</div>