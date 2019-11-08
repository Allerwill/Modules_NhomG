<?php
$url_host = 'http://' . $_SERVER['HTTP_HOST'];
$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');
$pattern_uri = '/' . $pattern_document_root . '(.*)$/';

preg_match_all($pattern_uri, __DIR__, $matches);
$url_path = $url_host . $matches[1][0];
$url_path = str_replace('\\', '/', $url_path);

?>
<aside class="widget widget_text">
    <h5 class="widget_title">Text Widget</h5>
    <div class="textwidget">
        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quisquam, magni commodi</br> fugit in quo provident.
    </div>
</aside>
