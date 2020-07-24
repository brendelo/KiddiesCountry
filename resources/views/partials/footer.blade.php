<footer id="Footer" class="clearfix">
    <div class="widgets_wrapper" style="padding:70px 0">
        <div class="container">
            <div class="column one-fourth">
                <aside class="widget_text widget widget_custom_html">
                    <h4>KINDNESS</h4>
                    <div class="textwidget custom-html-widget">
                        <ul>
{{--                            <li style="margin-bottom:10px">--}}
{{--                                <span style="color:#fcb927;margin-right:10px">→</span><a href="#">Lorem ipsum</a>--}}
{{--                            </li>--}}
{{--                            <li style="margin-bottom:10px">--}}
{{--                                <span style="color:#fcb927;margin-right:10px">→</span><a href="#">Praesent pretium</a>--}}
{{--                            </li>--}}
{{--                            <li style="margin-bottom:10px">--}}
{{--                                <span style="color:#fcb927;margin-right:10px">→</span><a href="#">Pellentesque</a>--}}
{{--                            </li>--}}
{{--                            <li style="margin-bottom:10px">--}}
{{--                                <span style="color:#fcb927;margin-right:10px">→</span><a href="#">Aliquam</a>--}}
{{--                            </li>--}}
{{--                            <li style="margin-bottom:10px">--}}
{{--                                <span style="color:#fcb927;margin-right:10px">→</span><a href="#">Lorem ipsum</a>--}}
{{--                            </li>--}}
                        </ul>
                    </div>
                </aside>
            </div>
            <div class="column one-fourth">
                <aside class="widget_text widget widget_custom_html">
                    <h4>HUMILITY</h4>
                    <div class="textwidget custom-html-widget">
                        <ul>
{{--                            <li style="margin-bottom:10px">--}}
{{--                                <span style="color:#fcb927;margin-right:10px">→</span><a href="#">Etiam dapibus</a>--}}
{{--                            </li>--}}
{{--                            <li style="margin-bottom:10px">--}}
{{--                                <span style="color:#fcb927;margin-right:10px">→</span><a href="#">Nunc sit</a>--}}
{{--                            </li>--}}
{{--                            <li style="margin-bottom:10px">--}}
{{--                                <span style="color:#fcb927;margin-right:10px">→</span><a href="#">Etiam tempor</a>--}}
{{--                            </li>--}}
{{--                            <li style="margin-bottom:10px">--}}
{{--                                <span style="color:#fcb927;margin-right:10px">→</span><a href="#">Lorem ipsum</a>--}}
{{--                            </li>--}}
{{--                            <li style="margin-bottom:10px">--}}
{{--                                <span style="color:#fcb927;margin-right:10px">→</span><a href="#">Nunc sit</a>--}}
{{--                            </li>--}}
                        </ul>
                    </div>
                </aside>
            </div>
            <div class="column one-fourth">
                <aside class="widget_text widget widget_custom_html">
                    <h4>DILIGENCE</h4>
                    <div class="textwidget custom-html-widget">
                        <ul>
{{--                            <li style="margin-bottom:10px">--}}
{{--                                <span style="color:#fcb927;margin-right:10px">→</span><a href="#">Praesent pretium</a>--}}
{{--                            </li>--}}
{{--                            <li style="margin-bottom:10px">--}}
{{--                                <span style="color:#fcb927;margin-right:10px">→</span><a href="#">Pellentesque</a>--}}
{{--                            </li>--}}
{{--                            <li style="margin-bottom:10px">--}}
{{--                                <span style="color:#fcb927;margin-right:10px">→</span><a href="#">Aliquam</a>--}}
{{--                            </li>--}}
{{--                            <li style="margin-bottom:10px">--}}
{{--                                <span style="color:#fcb927;margin-right:10px">→</span><a href="#">Etiam dapibus</a>--}}
{{--                            </li>--}}
{{--                            <li style="margin-bottom:10px">--}}
{{--                                <span style="color:#fcb927;margin-right:10px">→</span><a href="#">Aliquam</a>--}}
{{--                            </li>--}}
                        </ul>
                    </div>
                </aside>
            </div>
            <div class="column one-fourth">
                <aside class="widget_text widget widget_custom_html">
                    <h4>{{$user->contact->contactheader ?? "Kiddies Country School"}}</h4>
                    <div class="textwidget custom-html-widget">
                        <p>
                            {{ $user->contact->contactaddress ?? "Level 13, 2 Elizabeth St,
                            <br> Melbourne, Victoria 3000"}}
                        </p>
                        <p>
                            <a style="color: #f94203;" href="#">{{$user->contact->email}}</a>
                            <br> {{ "+234 ". $user->contact->phonenumber ?? "+61 (0) 3 8376 6284"}}
                        </p>
                    </div>
                </aside>
            </div>
        </div>
    </div>
    <div class="footer_copy">
        <div class="container">
            <div class="column one">
                <a id="back_to_top" class="button button_js" href="#"><i class="icon-up-open-big"></i></a>
                <div class="copyright">
                    &copy; 2018 BeSchool 2 - BeTheme. Muffin group - HTML by <a target="_blank" rel="nofollow" href="http://bit.ly/1M6lijQ">BeantownThemes</a>
                </div>
            </div>
        </div>
    </div>
</footer>
