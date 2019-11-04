<?php
$url_host = 'http://'.$_SERVER['HTTP_HOST'];
$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');
$pattern_uri = '/' . $pattern_document_root . '(.*)$/';

preg_match_all($pattern_uri, __DIR__, $matches);
$url_path = $url_host . $matches[1][0];
$url_path = str_replace('\\', '/', $url_path);

?>
<!-- Code Module 01 -->
<div class="header">
	<div class="top-header">
		<div class="container">
			<div class="row">
				<div class="col-md-6">
					<div class="text-address pd-line">
						<i class="fa fa-home" aria-hidden="true"></i>
						<span>123, New Lenox Chicago, IL 60606</span>
					</div>
				</div>
				<div class="col-md-6">
					<div class="text-contact">
						<div class="mail sameline pd-line">
							<i class="fa fa-envelope-o" aria-hidden="true"></i>
							<span>info@yoursite.com</span>
						</div>
						<div class="phone sameline pd-line">
							<i class="fa fa-phone" aria-hidden="true"></i>
							<span>123-456-7890</span>
						</div>
						<div class="btn-appointment">
							<a href="#">Make an appointment</a>
						</div>
					</div>	
				</div>
			</div>
		</div>
	</div>
</div>