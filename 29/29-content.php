<?php
$url_host = 'http://' . $_SERVER['HTTP_HOST'];
$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');
$pattern_uri = '/' . $pattern_document_root . '(.*)$/';

preg_match_all($pattern_uri, __DIR__, $matches);
$url_path = $url_host . $matches[1][0];
$url_path = str_replace('\\', '/', $url_path);

?>
<div class="bar-banner">
	<h1 class="page-title">
		Shop
	</h1>
	<div class="cover-search">
		<div class="mode_buttons">
			<form action="#" method="post">
				<input type="hidden" name="cloe_brooks_shop_mode" value="thumbs">
				<a href="#" class="woocommerce_thumbs icon-th" title="Show products as thumbs"><i class="fa fa-th-list"></i></a>
				<a href="#" class="woocommerce_list icon-th-list" title="Show products as list"><i class="fa fa-th-large"></i></a>
			</form>
		</div>
		<p class="woocommerce-result-count">
			Showing all 12 results
		</p>
		<form class="woocommerce-ordering" method="get">
			<select name="orderby" class="orderby">
				<option value="menu_order" selected="selected">Default sorting</option>
				<option value="popularity">Sort by popularity</option>
				<option value="rating">Sort by average rating</option>
				<option value="date">Sort by newness</option>
				<option value="price">Sort by price: low to high</option>
				<option value="price-desc">Sort by price: high to low</option>
			</select>
			<input type="hidden" name="q" value="/shop/">
		</form>
	</div>
</div>