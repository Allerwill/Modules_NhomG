<?php

$url_host = 'http://' . $_SERVER['HTTP_HOST'];
$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');
$pattern_uri = '/' . $pattern_document_root . '(.*)$/';

preg_match_all($pattern_uri, __DIR__, $matches);
$url_path = $url_host . $matches[1][0];
$url_path = str_replace('\\', '/', $url_path);
?>

<!--  -->
<div class="intel">
<div class="container">
    <div class="row">
        <div class="col-md-5">

            <div class="about-img" style="height: 619px;">
                <img src="<?php echo $url_path ?>/images/about_me (1).jpg" alt="#" class="img-responsive imgstander">
            </div>
        </div>

        <div class="col-md-7">
            <h1 id="title">Dr. Cloe Brooks</h1>
            <div class="title1">
                Expert Clinical Psychologist in Manhattan
            </div>
            <br>
            <div class="about-text-2">
                I am a certified specialist in the branch of psychology
                concerned with the assessment and treatment of mental illness and behavioural problems.
                My other passion is publishing. You can find and purchase all my books within this site.
            </div>
        </div>
    </div>
</div>
</div>
</div>
</div>