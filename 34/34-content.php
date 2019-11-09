<?php
$url_host = 'http://' . $_SERVER['HTTP_HOST'];
$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');
$pattern_uri = '/' . $pattern_document_root . '(.*)$/';

preg_match_all($pattern_uri, __DIR__, $matches);
$url_path = $url_host . $matches[1][0];
$url_path = str_replace('\\', '/', $url_path);

?>
<div class="form_contact_page_bg">
    <div class="page_content_wrap">
        <div class="content_wrap ">
            <div class="content">
                <div class="wrapper">
                    <div class="sc_form_wrap scheme_light">
                        <div class="sc_form sc_form_style_form_1 aligncenter margin_top_huge margin_bottom_huge">
                            <h2 class="sc_form_title">
                                Contact Us Today
                            </h2>
                            <form data-formtype="form_1" method="post" action="include/sendmail.php" class="inited">
                                <div class="sc_form_info">
                                    <div class="columns_wraps">

                                        <div class="column-name">
                                            <div class="sc_form_item sc_form_field label_over">
                                                <label class="required" for="sc_form_username"></label>
                                                <input class="user-name" id="sc_form_username" type="text" name="username"
                                                       placeholder="Name *">
                                            </div>
                                        </div>

                                        <div class="column-email">
                                            <div class="sc_form_item sc_form_field label_over">
                                                <label class="required" for="sc_form_email"></label>
                                                <input class="user-email" id="sc_form_email" type="text" name="email"
                                                       placeholder="E-mail *">
                                            </div>
                                        </div>

                                        <div class="column-subject">
                                            <div class="sc_form_item sc_form_field label_over">
                                                <label class="required" for="sc_form_subj"></label>
                                                <input class="user-subject" id="sc_form_subj" type="text" name="subject"
                                                       placeholder="Subject">
                                            </div>
                                        </div>


                                    </div>
                                </div>
                                <div class="sc_message-form">
                                    <label class="required" for="sc_form_message"></label>
                                    <textarea class="user-message" id="sc_form_message" name="message" placeholder="Message"></textarea>
                                </div>
                                <div class="sc_form_button">
                                    <button class="btn-primary">Send Message</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>