<?php
$url_host = 'http://'.$_SERVER['HTTP_HOST'];
$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');
$pattern_uri = '/' . $pattern_document_root . '(.*)$/';

preg_match_all($pattern_uri, __DIR__, $matches);
$url_path = $url_host . $matches[1][0];
$url_path = str_replace('\\', '/', $url_path);

?>
<aside class="widget widget_calendar">
                                    <h5 class="widget_title">Calendar</h5>
                                    <div id="calendar_wrap" class="calendar_wrap">
                                        <table>
                                            <thead>
                                                <tr>
                                                    <th class="month_prev">
                                                        <a href="#" title="View posts for March 2016">&#x2039;</a>
                                                    </th>
                                                    <th class="month_cur" colspan="5">November <span>2016</span></th> 
                                                    <th class="month_next">
                                                        <a href="#" title="View posts for March 2016">&#x203A;</a>
                                                    </th>   
                                                </tr>
                                                <tr>
                                                    <th class="weekday">M</th>
                                                    <th class="weekday">T</th>
                                                    <th class="weekday">W</th>
                                                    <th class="weekday">T</th>
                                                    <th class="weekday">F</th>
                                                    <th class="weekday">S</th>
                                                    <th class="weekday">S</th></tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td colspan="1" class="pad"><span class="day_wrap"></span></td>
                                                    <td class="day"><span class="day_wrap">1</span></td>
                                                    <td class="day"><span class="day_wrap">2</span></td>
                                                    <td class="day"><span class="day_wrap">3</span></td>
                                                    <td class="day"><span class="day_wrap">4</span></td>
                                                    <td class="day"><span class="day_wrap">5</span></td>
                                                    <td class="day"><span class="day_wrap">6</span></td>
                                                </tr>
                                                <tr>
                                                    <td class="day"><span class="day_wrap">7</span></td>
                                                    <td class="day"><span class="day_wrap">8</span></td>
                                                    <td class="day"><span class="day_wrap">9</span></td>
                                                    <td class="day"><span class="day_wrap">10</span></td>
                                                    <td class="day"><span class="day_wrap">11</span></td>
                                                    <td class="day"><span class="day_wrap">12</span></td>
                                                    <td class="day"><span class="day_wrap">13</span></td>
                                                </tr>
                                                <tr>
                                                    <td class="today"><span class="day_wrap">14</span></td>
                                                    <td class="day"><span class="day_wrap">15</span></td>
                                                    <td class="day"><span class="day_wrap">16</span></td>
                                                    <td class="day"><span class="day_wrap">17</span></td>
                                                    <td class="day"><span class="day_wrap">18</span></td>
                                                    <td class="day"><span class="day_wrap">19</span></td>
                                                    <td class="day"><span class="day_wrap">20</span></td>
                                                </tr>
                                                <tr>
                                                    <td class="day"><span class="day_wrap">21</span></td>
                                                    <td class="day"><span class="day_wrap">22</span></td>
                                                    <td class="day"><span class="day_wrap">23</span></td>
                                                    <td class="day"><span class="day_wrap">24</span></td>
                                                    <td class="day"><span class="day_wrap">25</span></td>
                                                    <td class="day"><span class="day_wrap">26</span></td>
                                                    <td class="day"><span class="day_wrap">27</span></td>
                                                </tr>
                                                <tr>
                                                    <td class="day"><span class="day_wrap">28</span></td>
                                                    <td class="day"><span class="day_wrap">29</span></td>
                                                    <td class="day"><span class="day_wrap">30</span></td>
                                                    <td class="pad" colspan="4"><span class="day_wrap"></span></td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </aside>