<?php
$url_host = 'http://'.$_SERVER['HTTP_HOST'];
$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');
$pattern_uri = '/' . $pattern_document_root . '(.*)$/';

preg_match_all($pattern_uri, __DIR__, $matches);
$url_path = $url_host . $matches[1][0];
$url_path = str_replace('\\', '/', $url_path);

?>
 <!-- Code Module 21  -->
 <!-- Sidebar  -->
<aside class="widget widget_search">
    <form role="search" method="get" class="search_form" action="#">
        <input type="text" class="search_field" placeholder="" value="" name="s" title="Search for:" />
        <button type="submit" class="search_button  icon-search-light"><i class="fa fa-search"></i></button>
    </form>
</aside>  
 <!-- Sidebar  -->

