<?php
$url_host = 'http://'.$_SERVER['HTTP_HOST'];
$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');
$pattern_uri = '/' . $pattern_document_root . '(.*)$/';

preg_match_all($pattern_uri, __DIR__, $matches);
$url_path = $url_host . $matches[1][0];
$url_path = str_replace('\\', '/', $url_path);

?>

<!-- Code Module 05 -->
	<div class="row">
    	<div class="col-md-8">
        	<img src="images/1.jpg"/>
        </div>
        <div class="col-md-4">
        	<div>
            	<h1>Dr.Cloe Brooks</h1>
                <h4>Expert Clinical Psychologist in Manhattan</h4>
                <p>I am a certified specialist in the branch of psychology concerned with<br>the assessment and treatment of mental illness and behavioural<br>problems. My other passion is publishing. You can find and purchase<br>all my books within this site.</p>
            </div>
            <div>
            	<img src="images/2.png"/>
            </div>
        </div>    

    </div>