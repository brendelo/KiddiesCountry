
@extends('partials.template')

@section('subheader')
    <div id="Subheader" style="padding:130px 0 230px;">
        <div class="container">
            <div class="column one">
                <h1 class="title">Teachers</h1>
            </div>
        </div>
    </div>
@endsection

@section('content')
    <div id="Content">
        <div class="content_wrapper clearfix">
            <div class="sections_group">
                <div class="entry-content">
                    <div class="section mcb-section no-margin-h" style="padding-top:0px; padding-bottom:60px">
                        <div class="section_wrapper mcb-section-inner">

                            @foreach($user->teachers as $teacher)
                            <div class="wrap mcb-wrap one-fourth valign-top move-up clearfix" style="margin-top:-100px" data-mobile="no-up">
                                <div class="mcb-wrap-inner">
                                    <div class="column mcb-column one column_image">
                                        <div class="image_frame image_item no_link scale-with-grid aligncenter no_border">
                                            <div class="image_wrapper">
                                                <img class="scale-with-grid" src="{{"images/home_school2_pic17.jpg"}}">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="column mcb-column one column_column">
                                        <div class="column_attr clearfix" style=" padding:0 10% 0 0;">
                                            <h2>Igy
                                                <br> Adams
                                            </h2>
                                            <h6 class="themecolor">ENGLISH</h6>
                                            <h5>Ut ultricies imperdiet sodales. Aliquam fringilla aliquam.</h5>
                                            <p>
                                                Proin bibendum sollicitudin feugiat. Curabitur ut egestas justo, vitae molestie ante.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            @endforeach






                        </div>
                    </div>
                    <div class="section mcb-section" style="padding-top:110px; padding-bottom:90px; background-image:url(images/home_school2_pic3.jpg); background-repeat:no-repeat; background-position:center bottom">
                        <div class="section_wrapper mcb-section-inner">
                            <div class="wrap mcb-wrap one valign-top clearfix">
                                <div class="mcb-wrap-inner">
                                    <div class="column mcb-column one-fourth column_placeholder">
                                        <div class="placeholder">
                                            &nbsp;
                                        </div>
                                    </div>
                                    <div class="column mcb-column one-second column_column">
                                        <div class="column_attr clearfix align_center">
                                            <h2 style="color:#fff">Sign up for our school</h2>
                                            <hr class="no_line" style="margin:0 auto 10px">
                                            <p style="color:#fff">
                                                Duis dignissim mi ut laoreet mollis. Nunc id tellus finibus, eleifend mi vel. Maximus justo. Maecenas mi tortor, pellentesque a aliquam ut.
                                            </p>
                                            <hr class="no_line" style="margin:0 auto 30px">
                                            <div class="school2-newsletter">
                                                <div id="mc4wp-form-1" class="form mc4wp-form">
                                                    <form id="newsletterform" class="newsletter_form">
                                                        <input placeholder="Your e-mail" type="email" id="email_news" name="email_news" size="40" aria-required="true" aria-invalid="false" />
                                                        <input type="button" value="SUBSCRIBE" id="submit" onClick="return check_values_news();">
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>


@endsection
