<?php
$url_host = 'http://' . $_SERVER['HTTP_HOST'];
$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');
$pattern_uri = '/' . $pattern_document_root . '(.*)$/';

preg_match_all($pattern_uri, __DIR__, $matches);
$url_path = $url_host . $matches[1][0];
$url_path = str_replace('\\', '/', $url_path);

?>
<div class="content_wrap">

    <!--                    Item1-->
    <div class="column-email">
        <div class="sc_section sc_section_block  aligncenter">
            <div class="sc_section_inner">
                <div class="sc_section_content_wrap">
                    <figure class="sc_image sc_image_shape_square">
                        <img src="images/mail.png" alt="">
                    </figure>
                </div>
            </div>
        </div>
        <div class="text_column content_element ">
            <div class="wrapper">
                <p>
                    info@yoursitename.com
                    <br> www.yoursite.com
                </p>
            </div>
        </div>
    </div>
    <!--                    Item1-->


    <!--                    Item2-->
    <div class="column-phone">
        <div class="sc_section sc_section_block aligncenter">
            <div class="sc_section_inner">
                <div class="sc_section_content_wrap">
                    <figure class="sc_image sc_image_shape_square">
                        <img src="images/phone.png" alt="">
                    </figure>
                </div>
            </div>
        </div>
        <div class="wpb_text_column wpb_content_element ">
            <div class="wrapper">
                <p>
                    +1 (800) 456-7890
                    <br> +1 (800) 245-7891
                </p>
            </div>
        </div>
    </div>
    <!--                    Item2-->


    <!--                    Item3-->
    <div class="column-place">
        <div class="sc_section sc_section_block aligncenter">
            <div class="sc_section_inner">
                <div class="sc_section_content_wrap">
                    <figure class="sc_image sc_image_shape_square">
                        <img src="images/check.png" alt="">
                    </figure>
                </div>
            </div>
        </div>
        <div class="text_column content_element ">
            <div class="wrapper">
                <p>
                    176 W Street Name,
                    <br> New York, NY 10014
                </p>
            </div>
        </div>
    </div>
    <!--                    Item3-->


<!--    <div class="column-place-test">-->
<!--        <figure class="place-img">-->
<!--            <img src="images/check.png" alt="">-->
<!--        </figure>-->
<!--        <div class="test-detail">-->
<!--            <p>-->
<!--                176 W Street Name,-->
<!--                <br> New York, NY 10014-->
<!--            </p>-->
<!--        </div>-->
<!--    </div>-->

</div>