<?php
$url_host = 'http://'.$_SERVER['HTTP_HOST'];
$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');
$pattern_uri = '/' . $pattern_document_root . '(.*)$/';

preg_match_all($pattern_uri, __DIR__, $matches);
$url_path = $url_host . $matches[1][0];
$url_path = str_replace('\\', '/', $url_path);

?>
<!-- Code Module 38 -->
<div class="container">
<form action="#" method="post" id="members-directory-form" class="dir-form">
	<div class="item-list-tabs" role="navigation">

		<div class="selected" id="members-all">

				<a href="#" id="boder">
					All Members 
					<span>15</span>
				</a>
	
			
				<label for="members-order-by">Order By:</label>
				<select id="members-order-by">
					<option value="active">Last Active</option>
					<option value="newest">Newest Registered</option>
					<option value="alphabetical">Alphabetical</option>
				</select>
			
		</div>
	</div>
	
		</form>
</div>