<?php
$url_host = 'http://'.$_SERVER['HTTP_HOST'];
$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');
$pattern_uri = '/' . $pattern_document_root . '(.*)$/';

preg_match_all($pattern_uri, __DIR__, $matches);
$url_path = $url_host . $matches[1][0];
$url_path = str_replace('\\', '/', $url_path);

?>
<!-- Code Module 6 -->
<div class="module-6">
	<div class="container">
		<h2 class="title-md6">How I Can Help You</h2>
		<div class="note">
			<span>It's my goal to create a comfortable, safe environment, where we'll work to achieve the goal together</span>
		</div>
		<div class="service">
			<div class="swiper-container">
				<div class="swiper-wrapper">
					<div class="swiper-slide">
						<div class="item-service">
							<a class="img-service"><img src="images/service-1-370x370.jpg" alt="img-service" class="img-fluid"><i class="fa fa-link" aria-hidden="true"></i></a>
							<div class="text-service">
								<a href="#" class="name-service">Family Psychology</a>
								<p class="description-service">
									The most common and dangerous features of low self-esteem is negative self-talk.
								</p>	
							</div>
						</div>
					</div>
					<div class="swiper-slide">
						<div class="item-service">
							<a class="img-service"><img src="images/service-1-370x370.jpg" alt="img-service" class="img-fluid"><i class="fa fa-link" aria-hidden="true"></i></a>
							<div class="text-service">
								<a href="#" class="name-service">Family Psychology</a>
								<p class="description-service">
									The most common and dangerous features of low self-esteem is negative self-talk.
								</p>	
							</div>
						</div>
					</div>
					<div class="swiper-slide">
						<div class="item-service">
							<a class="img-service"><img src="images/service-1-370x370.jpg" alt="img-service" class="img-fluid"><i class="fa fa-link" aria-hidden="true"></i></a>
							<div class="text-service">
								<a href="#" class="name-service">Family Psychology</a>
								<p class="description-service">
									The most common and dangerous features of low self-esteem is negative self-talk.
								</p>	
							</div>
						</div>
					</div>
					<div class="swiper-slide">
						<div class="item-service">
							<a class="img-service"><img src="images/service-1-370x370.jpg" alt="img-service" class="img-fluid"><i class="fa fa-link" aria-hidden="true"></i></a>
							<div class="text-service">
								<a href="#" class="name-service">Family Psychology</a>
								<p class="description-service">
									The most common and dangerous features of low self-esteem is negative self-talk.
								</p>	
							</div>
						</div>
					</div>
				</div>
				<div class="swiper-button-next1 fa fa-angle-left button btn-left"></div>
				<div class="swiper-button-prev1 fa fa-angle-right button btn-right"></div>
			</div>
		</div>
	</div>
</div>

<script>
	//Slide Swiper    
    var swiper = new Swiper('.swiper-container', {
          slidesPerView: 4,
          spaceBetween: 80,
          slidesPerGroup: 1,
          loop: true,
          loopFillGroupWithBlank: true,

          autoplay: {
            delay: 50000,
            disableOnInteraction: false,
          },

          navigation: {
            nextEl: '.swiper-button-next1',
            prevEl: '.swiper-button-prev1',
          },
        });
</script>