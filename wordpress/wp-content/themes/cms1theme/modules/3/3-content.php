<?php
 $url_host = 'http://' . $_SERVER['HTTP_HOST'];
 $pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');
 $pattern_uri = '/' . $pattern_document_root . '(.*)$/';

 preg_match_all($pattern_uri, __DIR__, $matches);
 $url_path = $url_host . $matches[1][0];
 $url_path = str_replace('\\', '/', $url_path);
?>
<div class="container">
    <div class="header">
        <h2 class="Services">Psychological Services</h2>
        <div class="description">
            It's my goal to create a comfortable, safe environment
            where we'll work together to achieve your goals.
        </div>
    </div>

    <div>
        <ul class="bannerli">
            <li>
                <div class="banner">
                    <span><i class="fas fa-check icon"></i></span>
                    <span class="item_title">Drug Abuse Prevention and Treatment</span>
                </div>
                <br>
                <div class="banner">
                    <span><i class="fas fa-check icon"></i></span>
                    <span class="item_title">Drug Abuse Prevention and Treatment</span>
                </div>
                <br>
                <div class="banner">
                    <span><i class="fas fa-check icon"></i></span>
                    <span class="item_title">Drug Abuse Prevention and Treatment</span>
                </div>
                <br>
                <div class="banner">
                    <span><i class="fas fa-check icon"></i></span>
                    <span class="item_title">Drug Abuse Prevention and Treatment</span>
                </div>
                <br>
                <div class="banner">
                    <span><i class="fas fa-check icon"></i></span>
                    <span class="item_title">Drug Abuse Prevention and Treatment</span>
                </div>
            </li>
            <!--  -->
            <li>
                <div class="banner">
                    <span><i class="fas fa-check icon"></i></span>
                    <span class="item_title">Drug Abuse Prevention and Treatment</span>
                </div>
                <br>
                <div class="banner">
                    <span><i class="fas fa-check icon"></i></span>
                    <span class="item_title">Drug Abuse Prevention and Treatment</span>
                </div>
                <br>
                <div class="banner">
                    <span><i class="fas fa-check icon"></i></span>
                    <span class="item_title">Healthy Lifestyles Guided Self-Change</span>
                </div>
                <br>
                <div class="banner">
                    <span><i class="fas fa-check icon"></i></span>
                    <span class="item_title">Drug Abuse Prevention and Treatment</span>
                </div>
                <br>
                <div class="banner">
                    <span><i class="fas fa-check icon"></i></span>
                    <span class="item_title">Drug Abuse Prevention and Treatment</span>
                </div>
            </li>

        </ul>
    </div>
    <br>
</div>
<div class="footer">
<a href="#" class="footer1">Explore more</a>
</div>
</div>