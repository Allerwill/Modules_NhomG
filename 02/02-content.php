<?php
$url_host = 'http://'.$_SERVER['HTTP_HOST'];
$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');
$pattern_uri = '/' . $pattern_document_root . '(.*)$/';

preg_match_all($pattern_uri, __DIR__, $matches);
$url_path = $url_host . $matches[1][0];
$url_path = str_replace('\\', '/', $url_path);

?>
<!-- Code Module 02 -->
<div class="bottom-header">
	<!-- Menu -->
	<div class="menu">
		<div class="container">
			<nav class="navbar navbar-expand-lg navbar-light">
				<!-- Brand/logo -->
					<a class="navbar-brand" href="home.php">
						<img src="images/logo_light.png" alt="logo" class="img-logo img-responsive" title="green & green garden">
						<img src="images/logo_light_fixed.png" alt="logo_fixed" class="img-logo-fixed img-responsive" title="green & green garden">
					</a>
				<!-- Mobile Interface -->
				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon"></span>
				</button>
				<!-- ----- -->
				<div class="collapse navbar-collapse" id="navbarNavDropdown">
				    <ul class="navbar-nav ml-auto">
				    	<li class="nav-item dropdown">
				    		<a class="nav-link dropdown-toggle" href="http://example.com" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
				    			HOME
				    		</a>
				    		<ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
				    			<li><a class="dropdown-item" href="#">HOME 1</a></li>
				    			<li><a class="dropdown-item" href="#"> HOME 2</a></li>
				    			
				    				
				    			</li>
				    		</ul>
				    	</li>				    	 
				    	<li class="nav-item dropdown">
				    		<a class="nav-link dropdown-toggle" href="http://example.com" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
				    			FEATURES
				    		</a>
				    		<ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
				    			<li><a class="dropdown-item" href="#">ABOUT ME</a></li>
				    			<li><a class="dropdown-item" href="#">PRICINGS</a></li>
				    			<li class="dropdown-submenu"><a class="dropdown-item dropdown-toggle" href="http://google.com">TOOLS</a>
				    				<ul class="dropdown-menu">
				    					<li><a class="dropdown-item" href="#">SUPPORT</a></li>
				    				
				    					
				    				</ul>
				    			</li>
				    			<li><a class="dropdown-item" href="#">SHORTCODES</a></li>
				    			<li><a class="dropdown-item" href="#">DOCMENTATION</a></li>
				    			
				    		</ul>
				    	</li>
				    	 	<li class="nav-item dropdown">
				    		<a class="nav-link dropdown-toggle" href="http://example.com" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
				    			GALLERY
				    		</a>
				    		<ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
				    			<li><a class="dropdown-item" href="#">GRIT GALLERY</a></li>
				    			<li><a class="dropdown-item" href="#">MASONRY GALLERY</a></li>
				    			<li><a class="dropdown-item" href="#">COBBLES GALLERY</a></li>
				    			
				    			
				    		</ul>
				    	</li>
				    	<li class="nav-item dropdown">
				    		<a class="nav-link dropdown-toggle" href="http://example.com" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
				    			BLOG
				    		</a>
				    		<ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
				    			<li><a class="dropdown-item" href="#">STANDARD BLOG</a></li>
				    			<li><a class="dropdown-item" href="#">Without SIDEBAR</a></li>
				    			<li class="dropdown-submenu"><a class="dropdown-item dropdown-toggle" href="http://google.com">BLOG MASONRY</a>
				    				<ul class="dropdown-menu">
				    					<li><a class="dropdown-item" href="#">MASONRY 2 COLUMNS</a></li>
				    					<li><a class="dropdown-item" href="#">MASONRY 3 COLUMNS</a></li>
				    					
				    				</ul>
				    			</li>
				    			<li class="dropdown-submenu"><a class="dropdown-item dropdown-toggle" href="http://google.com">BLOG PORTFOLIO</a>
				    				<ul class="dropdown-menu">
				    					<li><a class="dropdown-item" href="#">ORTFOLIO 2 COLUMNS</a></li>
				    					<li><a class="dropdown-item" href="#">ORTFOLIO 3 COLUMNS</a></li>
				    					
				    				</ul>
				    			</li>
				    			<li><a class="dropdown-item" href="#">POST FORMATS</a></li>
				    			
				    		</ul>
				    	</li>
				    	<li class="nav-item dropdown">
				    		<a class="nav-link dropdown-toggle" href="http://example.com" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
				    			SHOP
				    		</a>
				    		<ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
				    			<li><a class="dropdown-item" href="#">SHOP</a></li>
				    			<li><a class="dropdown-item" href="#">SINGLE PRODUCT</a></li>
				    			
				    			
				    		</ul>
				    	</li>
				    	<li class="nav-item dropdown">
				    		<a class="nav-link dropdown-toggle" href="http://example.com" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
				    			CONTACT
				    		</a>
				    		
				    	</li>
				    	<li class="nav-item dropdown">
				    		<a class="nav-link dropdown-toggle" href="http://example.com" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
				    			FORUMS
				    		</a>
				    		<ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
				    			<li><a class="dropdown-item" href="#">ACTIVITY</a></li>
				    			<li><a class="dropdown-item" href="#">GROUPS</a></li>
				    			<li><a class="dropdown-item" href="#">MEMBERS</a></li>
				    	
				    			
				    		</ul>
				    	</li>
				    
				    </ul>
				</div>
			</nav>
		</div>
	</div>
	
</div>
<div class="ttt">
		sadas
	</div>
<script type="text/javascript">
$('document').ready(function () {
  //Menu animate
  var scrollmenu = $('.menu');
  var scrollmenu1 = $('.navbar');
  var scrollmenu2 = $('.img-logo');
  var scrollmenu3 = $('.img-logo-fixed');
  $(window).scroll(function() {
  if ($(window).scrollTop() > 0) {
    scrollmenu.addClass('show')
    scrollmenu1.addClass('show1')
    scrollmenu2.addClass('logo')
    scrollmenu3.addClass('logo-fixed')
  } else {
    scrollmenu.removeClass('show')
    scrollmenu1.removeClass('show1')
    scrollmenu2.removeClass('logo')
    scrollmenu3.removeClass('logo-fixed')
  }
});
});
</script>