<?php
$url_host = 'http://'.$_SERVER['HTTP_HOST'];
$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');
$pattern_uri = '/' . $pattern_document_root . '(.*)$/';

preg_match_all($pattern_uri, __DIR__, $matches);
$url_path = $url_host . $matches[1][0];
$url_path = str_replace('\\', '/', $url_path);

?>
<!-- Code Module 38 -->

<h2>Tabs</h2>


<div class="tab">
  <button class="tablinks active" onclick="openCity(event, 'Tab title1')">Tab title1</button>
  <button class="tablinks" onclick="openCity(event, 'Tab title2')">Tab title2</button>
  <button class="tablinks" onclick="openCity(event, 'Tab title3')">Tab title3</button>
</div>

<div id="Tab title1" class="tabcontent">

  <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form,<br> by injected humour, or randomised words which don't look even slightly believable.</p>
</div>

<div id="Tab title2" class="tabcontent">

  <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable.</p> 
</div>

<div id="Tab title3" class="tabcontent">

  <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable.</p>
</div>

<script>
function openCity(evt, cityName) {
  var i, tabcontent, tablinks;
  tabcontent = document.getElementsByClassName("tabcontent");
  for (i = 0; i < tabcontent.length; i++) {
    tabcontent[i].style.display = "none";
  }
  tablinks = document.getElementsByClassName("tablinks");
  for (i = 0; i < tablinks.length; i++) {
    tablinks[i].className = tablinks[i].className.replace(" active", "");
  }
  document.getElementById(cityName).style.display = "block";
  evt.currentTarget.className += " active";
}
</script>