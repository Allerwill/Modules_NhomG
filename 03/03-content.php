<?php
$url_host = 'http://'.$_SERVER['HTTP_HOST'];
$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');
$pattern_uri = '/' . $pattern_document_root . '(.*)$/';

preg_match_all($pattern_uri, __DIR__, $matches);
$url_path = $url_host . $matches[1][0];
$url_path = str_replace('\\', '/', $url_path);

?>
<!-- Code Module 03 -->
<div class="slide-banner">
	<div class="swiper-container">
    	<div class="swiper-wrapper">
        <!--Slide1-->
	      <div class="swiper-slide slide1">
	      	
            <div class="title-slide"> 
	         We Can Do Small Things <br>
	            With Great Love
	      	</div>
	      	<div class="btn-more-infor">
	      		<a href="#"> More Information</a>
	      	</div>
	      </div>
        <!--/Slide1-->
        <!--Slide2-->
	   <div class="swiper-slide slide2">
        
             
       
        <div class="title-slide2"> 
            <h6>MY SPECIALTY IS</h6>  
            Helping People Gain <br>
               Power in Their Life 

        </div>
        <div class="btn-more-infor">
            <a href="#"> More Information</a>
        </div>
      </div>
        <!--/ Slide2-->
        <div class="swiper-slide slide3">
          <div class="title-slide"> 
          Improve Your Life
         

              <p> Relate to each other from the best in you… </p>
            </div>
          <div class="btn-more-infor">
            <a href="#"> More Information</a>
          </div>
        </div>
    	</div>
    <!-- Add Arrows -->
    	<div class="swiper-button-next1 fa fa-chevron-right"></div>
    	<div class="swiper-button-prev1 fa fa-chevron-left"></div>
 	</div>
</div>
<script>
	//Slide Swiper    
    var swiper = new Swiper('.swiper-container', {
          slidesPerView: 1,
          slidesPerGroup: 1,
          loop: true,
          loopFillGroupWithBlank: true,

          autoplay: {
            delay: 500000,
            disableOnInteraction: false,
          },

          navigation: {
            nextEl: '.swiper-button-next1',
            prevEl: '.swiper-button-prev1',
          },
        });
</script>