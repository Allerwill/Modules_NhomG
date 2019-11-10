<?php
$url_host = 'http://' . $_SERVER['HTTP_HOST'];
$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');
$pattern_uri = '/' . $pattern_document_root . '(.*)$/';

preg_match_all($pattern_uri, __DIR__, $matches);
$url_path = $url_host . $matches[1][0];
$url_path = str_replace('\\', '/', $url_path);

?>
<!-- Audio Player -->
<div class="sc_line1 empty_space"></div>
<h3 class="sc_title sc_title_regular home_h2">Audio Player</h3>
<div class="sc_audio_player sc_audio sc_audio_info" data-width="" data-height="">
    <div class="sc_audio_header">
        <div class="sc_audio_author">
            <span class="sc_audio_author_name">Lily Hunter</span>
        </div>
        <h4 class="sc_audio_title">Dream Music</h4>
    </div>
    <div class="__sc_audio_container">
        <audio class="__sc_audio" src="uploads/sample-violetray.mp3" data-title="Dream Music" data-author="Lily Hunter"></audio>
    </div>
</div>
<!-- /Audio Player -->