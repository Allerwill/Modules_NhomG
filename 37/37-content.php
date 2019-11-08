<?php
$url_host = 'http://'.$_SERVER['HTTP_HOST'];
$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');
$pattern_uri = '/' . $pattern_document_root . '(.*)$/';

preg_match_all($pattern_uri, __DIR__, $matches);
$url_path = $url_host . $matches[1][0];
$url_path = str_replace('\\', '/', $url_path);

?>
<!-- Code Module 37 -->
<div class="module-37">
	<div class="container">
		<form action="#" method="get" id="search-members-form">
			<label for="members_search">
				<input type="text" name="members_search" id="members_search" placeholder="Search Members...">
			</label>
			<input type="submit" id="members_search_submit" name="members_search_submit" value="Search">
		</form>
	</div>
</div>
