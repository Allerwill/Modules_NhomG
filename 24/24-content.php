<?php
$url_host = 'http://' . $_SERVER['HTTP_HOST'];
$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');
$pattern_uri = '/' . $pattern_document_root . '(.*)$/';

preg_match_all($pattern_uri, __DIR__, $matches);
$url_path = $url_host . $matches[1][0];
$url_path = str_replace('\\', '/', $url_path);

?>
<div class="team-members">
    <tr>
        <td>
            <!--    Team member 1st-->
            <div class="post_content">
                <div class="member-avatar">
                    <img alt="Donna Adams" src="images/DonnaAdams.jpg">
                </div>
                <h5 class="member-name">
                    <a href="#">Donna Adams</a>
                </h5>
                <div class="member-position">
                    Psychologist
                </div>
                <div class="about-member">
                    Ut enim ad minim veniam, quis nostrud exer tation ullamco laboris nisi ut aliquip ex ea commodo
                    consequat.
                </div>
                <div class="socials_item">
                    <a href="#" target="_blank" class="social_icons social_twitter">
                        <i class="btn btn-primary"><span class="fa fa-twitter"></span></i>
                    </a>
                    <a href="#" target="_blank" class="social_icons social_facebook">
                        <i class="btn btn-primary"><span class="fa fa-facebook"></span></span></i>
                    </a>
                    <a href="#" target="_blank" class="social_icons social_google-plus">
                        <i class="btn btn-primary"> <span class="fa fa-google-plus"></span>
                            </span></i>

                    </a>
                    <a href="#" target="_blank" class="social_icons social_linkedin">
                        <i class="btn btn-primary"> <span class="fa fa-linkedin"></span>
                            </span></i>

                    </a>
                </div>
            </div>
            <!--    Team member 1st-->
        </td>
        <td>
            <!--    Team member 2nd-->
            <div class="post_content">
                <div class="member-avatar">
                    <img alt="Donna Adams" src="images/CynthiaMarshall.jpg">
                </div>
                <h5 class="member-name">
                    <a href="#">Donna Adams</a>
                </h5>
                <div class="member-position">
                    Psychologist
                </div>
                <div class="about-member">
                    Ut enim ad minim veniam, quis nostrud exer tation ullamco laboris nisi ut aliquip ex ea commodo
                    consequat.
                </div>
                <div class="socials_item">
                    <a href="#" target="_blank" class="social_icons social_twitter">
                        <i class="btn btn-primary"><span class="fa fa-twitter"></span></i>
                    </a>
                    <a href="#" target="_blank" class="social_icons social_facebook">
                        <i class="btn btn-primary"><span class="fa fa-facebook"></span></span></i>
                    </a>
                    <a href="#" target="_blank" class="social_icons social_google-plus">
                        <i class="btn btn-primary"> <span class="fa fa-google-plus"></span>
                            </span></i>

                    </a>
                    <a href="#" target="_blank" class="social_icons social_linkedin">
                        <i class="btn btn-primary"> <span class="fa fa-linkedin"></span>
                            </span></i>

                    </a>
                </div>
            </div>
            <!--    Team member 2nd-->
        </td>

    </tr>

</div>
