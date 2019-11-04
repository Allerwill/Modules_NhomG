<?php
$url_host = 'http://'.$_SERVER['HTTP_HOST'];
$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');
$pattern_uri = '/' . $pattern_document_root . '(.*)$/';

preg_match_all($pattern_uri, __DIR__, $matches);
$url_path = $url_host . $matches[1][0];
$url_path = str_replace('\\', '/', $url_path);

?>
<!-- Code Module 11 -->
<p class="header">Question & Concerns</p>
<div class="container">
  <div class="row">
  <div class="col-md-6">
  <p class="text"><i class="fas fa-minus-circle" style="margin:0 5px;"></i>where do i get Lorem ipsum</p>
         <div class="description">
         <p>Lorem ipsum dolor sit, amet consectetur a
         dipisicing elit. Incidunt eligendi sint cumque 
         esse in delectus! Obcaecati blanditiis itaque sit numquam, 
         excepturi nisi, nulla soluta, voluptatem consectetur minima modi enim quam.
         Incidunt eligendi sint cumque 
         esse in delectus! Obcaecati blanditiis itaque sit numquam, 
         excepturi nisi, nulla soluta,
         voluptatem consectetur minima modi
         </p>
         </div>
         <p class="text"><i class="fas fa-plus-circle" style="margin:0 5px;"></i>What happens at the end of the paid period</p>
         <p class="text"><i class="fas fa-plus-circle" style="margin:0 5px;"></i>What happens at the end of the paid period</p>
  </div>
  <div class="col-md-6">
  <p class="text"><i class="fas fa-minus-circle" style="margin:0 5px;"></i>where do i get Lorem ipsum</p>
         <div class="description">
         <p>Lorem ipsum dolor sit, amet consectetur a
         dipisicing elit. Incidunt eligendi sint cumque 
         esse in delectus! Obcaecati blanditiis itaque sit numquam, 
         excepturi nisi, nulla soluta, voluptatem consectetur minima modi enim quam.
         Incidunt eligendi sint cumque 
         esse in delectus! Obcaecati blanditiis itaque sit numquam, 
         excepturi nisi, nulla soluta,
         voluptatem consectetur minima modi
         </p>
         </div>
         <p class="text"><i class="fas fa-plus-circle" style="margin:0 5px;"></i>What happens at the end of the paid period</p>
         <p class="text"><i class="fas fa-plus-circle" style="margin:0 5px;"></i>What happens at the end of the paid period</p>
  </div>
  </div>
</div>