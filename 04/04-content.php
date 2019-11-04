<?php
$url_host = 'http://'.$_SERVER['HTTP_HOST'];
$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');
$pattern_uri = '/' . $pattern_document_root . '(.*)$/';

preg_match_all($pattern_uri, __DIR__, $matches);
$url_path = $url_host . $matches[1][0];
$url_path = str_replace('\\', '/', $url_path);

?>
<!-- Code Module 11 -->
      <div class="sc_services_wrap">
                                <div class="sc_services sc_services_style_services-4 sc_services_type_icons cd_accent1_hover margin_top_huge margin_bottom_huge">
                                    <h2 class="sc_services_title sc_item_title home_h2">
                                      Psychological Services
                                    </h2>
                                    <div class="sc_services_descr sc_item_descr">
                                      It's my goal to create a comfortable, safe environment where we'll work together to achieve your goals.
                                    </div>
                                  <div class="sc_columns columns_wrap">
                                      <div class="column-1_2 col_right">
                                          <div class="sc_services_item sc_services_item_1 odd first">
                                              <a href="#">
                                                  <span class="sc_icon icon-check71"></span>
                                                  <span class="sc_services_item_title">
                                                      Drug Abuse Prevention and Treatment
                                                  </span>
                                              </a> 
                                          </div>
                                      </div>
                                        <div class="column-1_2 col_left">
                                          <div class="sc_services_item sc_services_item_2 even">
                                              <a href="#">
                                                  <span class="sc_icon icon-check71"></span>
                                                  <span class="sc_services_item_title">
                                                      Assessment Consultation &#038; Treatment
                                                  </span>
                                              </a> 
                                          </div>
                                        </div>
                                        <div class="column-1_2 col_right">
                                          <div class="sc_services_item sc_services_item_3 odd">
                                              <a href="#">
                                                  <span class="sc_icon icon-check71"></span>
                                                  <span class="sc_services_item_title">
                                                      Biofeedback and Health Psychology
                                                  </span>
                                              </a>
                                          </div>
                                        </div>
                                        <div class="column-1_2 col_left">
                                          <div class="sc_services_item sc_services_item_4 even">
                                              <a href="#">
                                                  <span class="sc_icon icon-check71"></span>
                                                  <span class="sc_services_item_title">
                                                      Child, Adolescent and Family Services
                                                  </span>
                                              </a> 
                                          s</div>
                                        </div>
                                        <div class="column-1_2 col_right">
                                          <div class="sc_services_item sc_services_item_5 odd">
                                              <a href="#">
                                                  <span class="sc_icon icon-check71"></span>
                                                  <span class="sc_services_item_title">
                                                      Child and Adolescent Traumatic Stress
                                                  </span>
                                              </a> 
                                          </div>
                                        </div>
                                        <div class="column-1_2 col_left">
                                          <div class="sc_services_item sc_services_item_6 even">
                                              <a href="#">
                                                  <span class="sc_icon icon-check71"></span>
                                                  <span class="sc_services_item_title">
                                                      Healthy Lifestyles Guided Self-Change
                                                  </span>
                                              </a> 
                                          </div>
                                        </div>
                                        <div class="column-1_2 col_right">
                                          <div class="sc_services_item sc_services_item_7 odd">
                                              <a href="#">
                                                  <span class="sc_icon icon-check71"></span>
                                                  <span class="sc_services_item_title">
                                                      Intensive Psychodynamic Therapy
                                                  </span>
                                              </a> 
                                          </div>
                                        </div>
                                        <div class="column-1_2 col_left">
                                          <div class="sc_services_item sc_services_item_8 even">
                                              <a href="#">
                                                  <span class="sc_icon icon-check71"></span>
                                                  <span class="sc_services_item_title">
                                                      Neuropsychology Assessment Center
                                                  </span>
                                              </a> 
                                          </div>
                                        </div>
                                        <div class="column-1_2 col_right">
                                          <div class="sc_services_item sc_services_item_9 odd">
                                              <a href="#">
                                                  <span class="sc_icon icon-check71"></span>
                                                  <span class="sc_services_item_title">
                                                      Services for Emotionally Distressed
                                                  </span>
                                              </a> 
                                          </div>
                                        </div>
                                        <div class="column-1_2 col_left">
                                          <div class="sc_services_item sc_services_item_10 even">
                                              <a href="#">
                                                  <span class="sc_icon icon-check71"></span>
                                                  <span class="sc_services_item_title">
                                                      Trauma Resolution Integration
                                                  </span>
                                              </a> 
                                          </div>
                                        </div>
                                    </div>
                                    <div class="sc_services_button sc_item_button">
                                        <a href="about-me.html" class="sc_button sc_button_square sc_button_style_filled sc_button_size_small">
                                          Explore more
                                      </a>
                                    </div>
                                </div>
                            </div>