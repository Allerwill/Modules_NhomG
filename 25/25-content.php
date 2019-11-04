<?php
$url_host = 'http://' . $_SERVER['HTTP_HOST'];
$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');
$pattern_uri = '/' . $pattern_document_root . '(.*)$/';

preg_match_all($pattern_uri, __DIR__, $matches);
$url_path = $url_host . $matches[1][0];
$url_path = str_replace('\\', '/', $url_path);

?>

<aside class="widget widget_tag_cloud">
	<h5 class="widget_title">Tags</h5>
	<div class="tagcloud">
		<a href="#">audio</a>
		<a href="#">biological</a>
		<a href="#">cognitive</a>
		<a href="#">Lectures</a>
		<a href="#">My Office</a>
		<a href="#">portfolio</a>
		<a href="#">Presentations</a>
	</div>
</aside>