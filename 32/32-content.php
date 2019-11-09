<?php
$url_host = 'http://' . $_SERVER['HTTP_HOST'];
$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');
$pattern_uri = '/' . $pattern_document_root . '(.*)$/';

preg_match_all($pattern_uri, __DIR__, $matches);
$url_path = $url_host . $matches[1][0];
$url_path = str_replace('\\', '/', $url_path);

?>
<div class="product-reviews">
    <ul class="prd-dsc-tabs">
        <li>
            <a class="description_tab" href="#tab-description">Description</a>
        </li>
        <li>
            <a class="reviews_tab" href="#tab-reviews">Reviews (0)</a>
        </li>
    </ul>

    <div class="prd-rew-content">
        <div id="reviews" class="user-reviews">
            <div id="comments">
                <h2 class="reviews-title">Reviews</h2>
                <p class="noreviews">There are no reviews yet.</p>
            </div>
            <div id="review_form_wrapper">
                <div id="review_form">
                    <div id="respond" class="comment-respond">
                        <form action="#" method="post" id="commentform" class="comment-form">
                            <div class="social-login-widget">
                                <div class="social-login-connect-with">Connect with:</div>
                                <div class="social-login-provider-list">
                                    <a rel="nofollow" href="#" title="Connect with Facebook"
                                       class="social-login-provider wp-social-login-provider-facebook"
                                       data-provider="Facebook">
                                        <img alt="Facebook" title="Connect with Facebook" src="images/facebook.png">
                                    </a>
                                    <a rel="nofollow" href="#" title="Connect with Google"
                                       class="social-login-provider wp-social-login-provider-google"
                                       data-provider="Google">
                                        <img alt="Google" title="Connect with Google" src="images/google.png">
                                    </a>
                                    <a rel="nofollow" href="#" title="Connect with Twitter"
                                       class="social-login-provider wp-social-login-provider-twitter"
                                       data-provider="Twitter">
                                        <img alt="Twitter" title="Connect with Twitter" src="images/twitter.png">
                                    </a>
                                </div>
                                <div class="wp-social-login-widget-clearing"></div>
                            </div>
                            <p class="comment-notes">
                                    <span id="email-notes">
                                        Your email address will not be published.
                                      </span> Required fields are marked
                                <span class="required">*</span>
                            </p>
                            <label class="comment-notes" for="rating">Your Rating</label>
                            <div class="rating1">
                                <input type="hidden" name="star" id="star1"><label for="star1"></label>
                                <input type="hidden" name="star" id="star2"><label for="star2"></label>
                                <input type="hidden" name="star" id="star3"><label for="star3"></label>
                                <input type="hidden" name="star" id="star4"><label for="star4"></label>
                                <input type="hidden" name="star" id="star5"><label for="star5"></label>
                            </div>
                            <div class="rating2">
                                <input type="hidden" name="star" id="star1"><label for="star1"></label>
                                <input type="hidden" name="star" id="star2"><label for="star2"></label>
                                <input type="hidden" name="star" id="star3"><label for="star3"></label>
                                <input type="hidden" name="star" id="star4"><label for="star4"></label>
                                <input type="hidden" name="star" id="star5"><label for="star5"></label>
                            </div>

                            <div class="comment-form-comment">
                                <span class="required">Your Review *</span>
                                <p >
                                    <textarea class="comment-text-field" id="comment" name="comment" type="text" value="" cols="45" rows="8" aria-required="true" required=""></textarea>

                                </p>

                                <p class="comment-form-author">
                                    <label for="author">
                                        Name
                                        <span class="required">*</span>
                                    </label>
                                    <input class="ath-name" id="author" name="author" type="text" value="" size="30" aria-required="true"
                                           required="">

                                </p>
                                <p class="comment-form-email">
                                    <label for="email">
                                        Email
                                        <span class="required">*</span>
                                    </label>
                                    <input class="ath-email" id="email" name="email" type="email" value="" size="30" aria-required="true"
                                           required="">
                                </p>
                                <p class="form-submit">
                                    <input name="submit" type="submit" id="submit" class="submit btn-primary" value="Submit">
                                    <input type="hidden" name="comment_post_ID" value="215" id="comment_post_ID">
                                    <input type="hidden" name="comment_parent" id="comment_parent" value="0">
                                </p>
                            </div>

<!--                            <select name="rating" id="rating" aria-required="true" style="display: none;">-->
<!--                                <option value="">Rate…</option>-->
<!--                                <option value="5">Perfect</option>-->
<!--                                <option value="4">Good</option>-->
<!--                                <option value="3">Average</option>-->
<!--                                <option value="2">Not that bad</option>-->
<!--                                <option value="1">Very Poor</option>-->
<!--                            </select>-->

                        </form>
                    </div>
                </div>
            </div>
            <div class="clear"></div>
        </div>
    </div>
</div>
