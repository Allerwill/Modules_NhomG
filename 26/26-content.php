<?php
$url_host = 'http://' . $_SERVER['HTTP_HOST'];
$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');
$pattern_uri = '/' . $pattern_document_root . '(.*)$/';

preg_match_all($pattern_uri, __DIR__, $matches);
$url_path = $url_host . $matches[1][0];
$url_path = str_replace('\\', '/', $url_path);

?>
<aside class="widget_product_categories">
    <h5 class="widget_title">
        Categories
    </h5>
    <ul class="product-categories">
        <li class="fa fa-check">
            <a class="prd-cats" href="#">All</a>
            <span class="count">(12)</span></span>
        </li>
        <br>
        <li class="fa fa-check">
            <a class="prd-cats" href="#">Books</a>
            <span class="count">(7)</span>
        </li>
        <br>

        <li class="fa fa-check">
            <a class="prd-cats" href="#">Magazines</a>
            <span class="count">(5)</span>
        </li>
        <br>
        <li class="fa fa-check">
            <a class="prd-cats" href="#">Uncategorized</a>
            <span class="count">(0)</span>
        </li>

    </ul>
</aside>