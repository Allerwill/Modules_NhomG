<?php
$url_host = 'http://' . $_SERVER['HTTP_HOST'];
$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');
$pattern_uri = '/' . $pattern_document_root . '(.*)$/';

preg_match_all($pattern_uri, __DIR__, $matches);
$url_path = $url_host . $matches[1][0];
$url_path = str_replace('\\', '/', $url_path);

?>
<div class="product-single">
    <table>
        <tr>
            <td style="width: 620px">
                <div class="images">
                    <a href="images/product-12.jpg" class="icon-view-hover"
                       title="" data-rel="prettyPhoto" rel="magnific">
                        <img src="images/product-12.jpg"
                             style="width: 400px; height: 400px; display: inline-block; border: solid 1px"
                             class="attachment-shop_single size-shop_single" alt="product-12" title="product-12">
                    </a>
                    <!--                    <img src="images/product-12.jpg" alt="">-->
                    <!--                    <a href="#" class="fa-close"></a>-->
                    <!--                    <img class="fa-expand" src="images/product-12.jpg" alt="">-->
                </div>
            </td>
            <td style="width: 30px"></td>
            <td style="width: 350px">
                <!-- entry-summary -->
                <div class="summary entry-summary">
                    <h1 class="product_title">The Meat Free Monday Cookbook</h1>
                    <div>
                        <p class="price">
                            <span class="prd-price">$14.90</span>
                        </p>
                    </div>
                    <div>
                        <p>Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl
                            ut aliquip ex ea commodo consequat</p>
                    </div>
                    <form class="cart" method="post" action="#">
                        <div class="quantity">
                            <input type="number" step="1" min="1" max="100" name="quantity" value="1" title="Qty"
                                   class="input-text qty text" size="4" style="text-align: center; height: 38px;">
                            <span class="q_inc"></span><span class="q_dec"></span></div>
                        <input type="hidden" name="add-to-cart" value="215">
                        <button type="submit" class="btn btn-primary">Add to cart</button>
                    </form>

                    <!-- product_meta -->
                    <div class="product_meta">
                        <hr>
                        <span class="posted_in">Categories:
							<a class="cat-types" href="#" rel="tag">All</a>,
							<a class="cat-types" href="#" rel="tag">Magazines</a>
						</span>
                        <br>
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