<?php
$url_host = 'http://'.$_SERVER['HTTP_HOST'];
$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');
$pattern_uri = '/' . $pattern_document_root . '(.*)$/';

preg_match_all($pattern_uri, __DIR__, $matches);
$url_path = $url_host . $matches[1][0];
$url_path = str_replace('\\', '/', $url_path);

?>
<!-- Code Module 08 -->
<div class="container">
 	<div class="content">
 		<h1>                  
 	 		 Featured Articles
		</h1>
		<div class="row">
			<div class="col-md-4">
			 	<div class="new">
			 		<a href="#" class="img-new img-responsive"><img src="images/post-1.jpg"></a>
			 		<a href="#" class="time-new">March 7, 2016</a>
			 		<h3><a href="#" class="name-new">
                                                                    Cognitive Behavioral Therapy for Insomnia
                                                                </a></h3>
			 		<p>
			 			Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est...
			 		</p>
			 		<a href="#" class="btn-more">Read article</a>
			 	</div>
			 </div>
			 <div class="col-md-4">
			 	<div class="new">
			 		<a href="#" class="img-new img-responsive"><img src="images/post-2.jpg"></a>
			 		<a href="#" class="time-new">March 7, 2016</a> 	
			 		<h3><a href="#" class="name-new">
                                                                    Family Therapy and Marriage Counseling
                                                                </a></h3>
			 		<p>
			 			Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est...
			 		</p>
			 		<a href="#" class="btn-more">Read article</a>
			 	</div>
			 </div>
			 <div class="col-md-4">
			 	<div class="new">
			 		<a href="#" class="img-new img-responsive"><img src="images/post-3.jpg"></a>
			 		<a href="#" class="time-new">March 7, 2016</a>
			 		<h3><a href="#" class="name-new">
                                                                    Six Important Rules for Parenting Teenagers
                                                                </a></h3>
			 		<p>
			 			Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est...
			 		</p>
			 		<a href="#" class="btn-more">Read article</a>
			 	</div>
			 </div>
			 
	 	</div>
 	</div>
</div>