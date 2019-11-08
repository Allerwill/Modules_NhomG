<?php
$url_host = 'http://'.$_SERVER['HTTP_HOST'];
$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');
$pattern_uri = '/' . $pattern_document_root . '(.*)$/';

preg_match_all($pattern_uri, __DIR__, $matches);
$url_path = $url_host . $matches[1][0];
$url_path = str_replace('\\', '/', $url_path);

?>
<!-- Code Module 04 -->
<div class="container">
  <div class="content">
    <h1>Psychological Services</h1>
    <h5>
      IT'S MY GOAL TO CREATE A COMFORTABLE, SAFE ENVIRONMENT WHERE WE'LL WORK TOGETHER TO ACHIEVE YOUR GOALS.
    </h5>
    <div class="row">
      <div class="col-md-6">
          <div class="name">
             <a href="#"><i class="fa fa-check" aria-hidden="true"></i><span>Drug Abuse Prevention and Treatment</span></a>
          </div>
          <div class="name">
             <a href="#"><i class="fa fa-check" aria-hidden="true"></i><span>Drug Abuse Prevention and Treatment</span></a>
          </div>
          <div class="name">
             <a href="#"><i class="fa fa-check" aria-hidden="true"></i><span>Drug Abuse Prevention and Treatment</span></a>
          </div>
          <div class="name">
             <a href="#"><i class="fa fa-check" aria-hidden="true"></i><span>Drug Abuse Prevention and Treatment</span></a>
          </div>
          <div class="name">
             <a href="#"><i class="fa fa-check" aria-hidden="true"></i><span>Drug Abuse Prevention and Treatment</span></a>
          </div>
          
      </div>
       <div class="col-md-6">
           <div class="name">
             <a href="#"><i class="fa fa-check" aria-hidden="true"></i><span>Drug Abuse Prevention and Treatment</span></a>
          </div>
          <div class="name">
             <a href="#"><i class="fa fa-check" aria-hidden="true"></i><span>Drug Abuse Prevention and Treatment</span></a>
          </div>
          <div class="name">
             <a href="#"><i class="fa fa-check" aria-hidden="true"></i><span>Drug Abuse Prevention and Treatment</span></a>
          </div>
          <div class="name">
             <a href="#"><i class="fa fa-check" aria-hidden="true"></i><span>Drug Abuse Prevention and Treatment</span></a>
          </div>
          <div class="name">
             <a href="#"><i class="fa fa-check" aria-hidden="true"></i><span>Drug Abuse Prevention and Treatment</span></a>
          </div>
      </div>
    </div>
    <a href="#" class="btn-more">Explore more</a>
    </div>
  </div>
</div>

     