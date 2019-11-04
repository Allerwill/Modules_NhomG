<?php
$url_host = 'http://' . $_SERVER['HTTP_HOST'];
$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');
$pattern_uri = '/' . $pattern_document_root . '(.*)$/';

preg_match_all($pattern_uri, __DIR__, $matches);
$url_path = $url_host . $matches[1][0];
$url_path = str_replace('\\', '/', $url_path);

?>
<div class="product type-product has-post-thumbnail product_cat-all product_cat-magazines first instock shipping-taxable purchasable product-type-simple">
	<table>
		<tr>
			<td style="width: 620px">
				<div class="images">
					<a href="images/product-12.jpg" class="woocommerce-main-image zoom hover_icon hover_icon_view" title="" data-rel="prettyPhoto" rel="magnific">
						<img src="images/product-12-600x600.jpg" style="width: 400px; height: 400px; display: inline-block; border: solid 1px" class="attachment-shop_single size-shop_single" alt="product-12" title="product-12">
					</a>
				</div>
			</td>
			<td style="width: 30px"></td>
			<td style="width: 350px">
				<!-- entry-summary -->
				<div class="summary entry-summary">
					<h1 class="product_title entry-title">The Meat Free Monday Cookbook</h1>
					<div>
						<p class="price">
							<span class="woocommerce-Price-amount amount">
								<span class="woocommerce-Price-currencySymbol"></span>$14.90
							</span>
						</p>
					</div>
					<div>
						<p>Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat</p>
					</div>
					<form class="cart" method="post" action="#">
						<div class="quantity">
							<input type="number" step="1" min="1" max="100" name="quantity" value="1" title="Qty" class="input-text qty text" size="4">
							<span class="q_inc"></span><span class="q_dec"></span></div>
						<input type="hidden" name="add-to-cart" value="215">
						<button type="submit" class="btn btn-primary">Add to cart</button>
					</form>

					<!-- product_meta -->
					<div class="product_meta">
						<span class="posted_in">Categories:
							<a href="#" rel="tag">All</a>,
							<a href="#" rel="tag">Magazines</a>
						</span>
						<span class="product_id">Product ID:
							<span>215</span>
						</span>
					</div>
					<!-- /product_meta -->
				</div>
				<!-- /entry-summary -->
			</td>
		</tr>
	</table>



	<!-- woocommerce-tabs -->
	<div class="woocommerce-tabs wc-tabs-wrapper trx-stretch-width woocommerce-tabs1 inited" style="position: relative; box-sizing: border-box; left: -134.545px; width: 1439px; padding-left: 134.545px; padding-right: 134.455px;">
		<ul class="tabs wc-tabs">
			<li class="description_tab active">
				<a href="#tab-description">Description</a>
			</li>
			<li class="reviews_tab">
				<a href="#tab-reviews">Reviews (0)</a>
			</li>
		</ul>
		<div class="woocommerce-Tabs-panel woocommerce-Tabs-panel--description panel entry-content wc-tab" id="tab-description" style="display: block;">
			<h2>Product Description</h2>
			<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim qui blandit praesent luptatum zzril delenit augue duis dolore te feugait nulla facilisi. Nam liber tempor cum soluta nobis eleifend option congue nihil imperdiet doming id quod mazim placerat facer possim assum.</p>
		</div>
		<div class="woocommerce-Tabs-panel woocommerce-Tabs-panel--reviews panel entry-content wc-tab" id="tab-reviews" style="display: none;">
			<div id="reviews" class="woocommerce-Reviews">
				<div id="comments">
					<h2 class="woocommerce-Reviews-title">Reviews</h2>
					<p class="woocommerce-noreviews">There are no reviews yet.</p>
				</div>
				<div id="review_form_wrapper">
					<div id="review_form">
						<div id="respond" class="comment-respond">
							<form action="#" method="post" id="commentform" class="comment-form">
								<div class="social-login-widget">
									<div class="social-login-connect-with">Connect with:</div>
									<div class="social-login-provider-list">
										<a rel="nofollow" href="#" title="Connect with Facebook" class="social-login-provider wp-social-login-provider-facebook" data-provider="Facebook">
											<img alt="Facebook" title="Connect with Facebook" src="images/facebook.png">
										</a>
										<a rel="nofollow" href="#" title="Connect with Google" class="social-login-provider wp-social-login-provider-google" data-provider="Google">
											<img alt="Google" title="Connect with Google" src="images/google.png">
										</a>
										<a rel="nofollow" href="#" title="Connect with Twitter" class="social-login-provider wp-social-login-provider-twitter" data-provider="Twitter">
											<img alt="Twitter" title="Connect with Twitter" src="images/twitter.png">
										</a>
									</div>
									<div class="wp-social-login-widget-clearing"></div>
								</div>
								<p class="comment-notes">
									<span id="email-notes">
										Your email address will not be published.
									</span>
									Required fields are marked
									<span class="required">*</span>
								</p>
								<label for="rating">Your Rating</label>
								<p class="stars">
									<span>
										<a class="star-1" href="#">1</a>
										<a class="star-2" href="#">2</a>
										<a class="star-3" href="#">3</a>
										<a class="star-4" href="#">4</a>
										<a class="star-5" href="#">5</a>
									</span>
								</p>
								<p class="stars"><span><a class="star-1" href="#">1</a><a class="star-2" href="#">2</a><a class="star-3" href="#">3</a><a class="star-4" href="#">4</a><a class="star-5" href="#">5</a></span></p><select name="rating" id="rating" aria-required="true" style="display: none;">
									<option value="">Rate…</option>
									<option value="5">Perfect</option>
									<option value="4">Good</option>
									<option value="3">Average</option>
									<option value="2">Not that bad</option>
									<option value="1">Very Poor</option>
								</select>
								<p class="comment-form-comment">
									<label for="comment">
										Your Review
										<span class="required">*</span>
									</label>
									<textarea id="comment" name="comment" cols="45" rows="8" aria-required="true"></textarea>
								</p>
								<p class="comment-form-author">
									<label for="author">
										Name
										<span class="required">*</span>
									</label>
									<input id="author" name="author" type="text" value="" size="30" aria-required="true" required="">
								</p>
								<p class="comment-form-email">
									<label for="email">
										Email
										<span class="required">*</span>
									</label>
									<input id="email" name="email" type="email" value="" size="30" aria-required="true" required="">
								</p>
								<p class="form-submit">
									<input name="submit" type="submit" id="submit" class="submit" value="Submit">
									<input type="hidden" name="comment_post_ID" value="215" id="comment_post_ID">
									<input type="hidden" name="comment_parent" id="comment_parent" value="0">
								</p>
							</form>
						</div>
					</div>
				</div>
				<div class="clear"></div>
			</div>
		</div>
	</div>
	<div class="trx-stretch-width-original"></div>
	<!-- /woocommerce-tabs -->
</div>