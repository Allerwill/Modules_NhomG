<?php
$url_host = 'http://'.$_SERVER['HTTP_HOST'];
$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');
$pattern_uri = '/' . $pattern_document_root . '(.*)$/';

preg_match_all($pattern_uri, __DIR__, $matches);
$url_path = $url_host . $matches[1][0];
$url_path = str_replace('\\', '/', $url_path);

?>
<!-- Code Module 42 -->

<div class="container">
  <h2>Table</h2>
 
  <table class="table">
    <thead>
      <tr class="main">
        <th>#</th>
        <th>Column1</th>
        <th>Column2</th>
        <th>Column3</th>
        <th>Column4</th>
      </tr>
    </thead>
    <tbody>
      <tr class="1">
        <td>1</td>
        <td>Raw 1 Cell 1</td>
        <td>Raw 1 Cell 2</td>
        <td>Raw 1 Cell 3</td>
        <td>Raw 1 Cell 4</td>
      </tr>      
     <tr class="2">
        <td>2</td>
        <td>Raw 2 Cell 1</td>
        <td>Raw 2 Cell 2</td>
        <td>Raw 2 Cell 3</td>
        <td>Raw 2 Cell 4</td>
      </tr>
      <tr class="3">
        <td>3</td>
        <td>Raw 3 Cell 1</td>
        <td>Raw 3 Cell 2</td>
        <td>Raw 3 Cell 3</td>
        <td>Raw 3 Cell 4</td>
      </tr>
      <tr class="4">
        <td>1</td>
        <td>Raw 4 Cell 1</td>
        <td>Raw 4 Cell 2</td>
        <td>Raw 4 Cell 3</td>
        <td>Raw 4 Cell 4</td>
      </tr>
      <tr class="5">
        <td>5</td>
        <td>Raw 5 Cell 1</td>
        <td>Raw 5 Cell 2</td>
        <td>Raw 5 Cell 3</td>
        <td>Raw 5 Cell 4</td>
      </tr>  
      </tr>
    </tbody>
  </table>
</div>