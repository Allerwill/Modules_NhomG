<?php
$url_host = 'http://'.$_SERVER['HTTP_HOST'];
$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');
$pattern_uri = '/' . $pattern_document_root . '(.*)$/';

preg_match_all($pattern_uri, __DIR__, $matches);
$url_path = $url_host . $matches[1][0];
$url_path = str_replace('\\', '/', $url_path);

?>
<!-- Code Module 10 -->
 <div class="footer">
        <div class="logo">
            <a href="#">
                <img src="images/logo.png"/>
            </a>
        </div>
        <div class="address">
            <div class="left">
                <p>123, New Lenox</p>
                <P>USA, Chicago, IL60606</P>
            </div>
            <div class="right">
                <p>Phone: 123-456-7890</p>
                <p>Pax:123.456.7890</p>
            </div>
        </div>
        <div class="icon">
            <div class="item">
                <a href="#" class="fa fa-twitter-square" aria-hidden="true"></a>
            </div>
            <div class="item">
                <a href="#" class="fa fa-facebook-square" aria-hidden="true"></a>
            </div>
            <div class="item">
                <a href="#" class="fa fa-google-plus-official" aria-hidden="true"></a>
            </div>
            <div class="item">
                <a href="#" i class="fa fa-instagram" aria-hidden="true"></a>
            </div>
        </div>
</div>
