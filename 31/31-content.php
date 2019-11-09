<?php
$url_host = 'http://' . $_SERVER['HTTP_HOST'];
$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');
$pattern_uri = '/' . $pattern_document_root . '(.*)$/';

preg_match_all($pattern_uri, __DIR__, $matches);
$url_path = $url_host . $matches[1][0];
$url_path = str_replace('\\', '/', $url_path);

?>
<div class="product-description">
    <ul class="prd-dsc-tabs">
        <li>
            <a class="description_tab" href="#tab-description">Description</a>
        </li>
        <li >
            <a class="reviews_tab" href="#tab-reviews">Reviews (0)</a>
        </li>
    </ul>
    <div class="prd-dsc-content"
         id="tab-description" style="display: block;">
        <h2>Product Description</h2>
        <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet
            dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper
            suscipit lobortis nisl ut aliquip ex ea commodo consequat. Duis autem vel eum iriure dolor in hendrerit in
            vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et
            accumsan et iusto odio dignissim qui blandit praesent luptatum zzril delenit augue duis dolore te feugait
            nulla facilisi. Nam liber tempor cum soluta nobis eleifend option congue nihil imperdiet doming id quod
            mazim placerat facer possim assum.</p>
    </div>
</div>
