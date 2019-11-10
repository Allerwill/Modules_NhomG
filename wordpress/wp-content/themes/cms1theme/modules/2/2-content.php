<?php
 $url_host = 'http://' . $_SERVER['HTTP_HOST'];
 $pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');
 $pattern_uri = '/' . $pattern_document_root . '(.*)$/';

 preg_match_all($pattern_uri, __DIR__, $matches);
 $url_path = $url_host . $matches[1][0];
 $url_path = str_replace('\\', '/', $url_path);
?>
<div class="swiper-container">
    <div class="swiper-wrapper">
      <div class="swiper-slide">
      <div class="slideshow1">
        <p class="content-slideshow1" alt="#" class="img-responsive">
        </p>
      </div>
      </div>
      <div class="swiper-slide">
      <p style="background-image: url(<?php echo $url_path ?>/images/slide2.jpg);width:1900px;height:460px;background-repeat: no-repeat;background-size: cover;background-position: center center;opacity: 1;visibility: inherit;z-index: 20;" class="img-responsive">
        </p>
      </div>
      <div class="swiper-slide">
      <p style="background-image: url(<?php echo $url_path ?>/images/slide1.jpg);width:1900px;height:460px;background-repeat: no-repeat;background-size: cover;background-position: center center;opacity: 1;visibility: inherit;z-index: 20;" class="img-responsive">
        </p>
      </div>
    </div>
    <!-- Add Arrows -->
    <div class="swiper-button-next"></div>
    <div class="swiper-button-prev"></div>

  </div>
