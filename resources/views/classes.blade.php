@extends('partials.template')

@section('subheader')
    <div id="Subheader" style="padding:130px 0 230px">
                    <div class="container">
                        <div class="column one">
                            <h1 class="title">Classes</h1>
                        </div>
                    </div>
                </div>
@endsection

@section('content')
    <div id="Content">
        <div class="content_wrapper clearfix">
            <div class="sections_group">
                <div class="entry-content">
                    <div class="section mcb-section" style="padding-top:0px; padding-bottom:70px">
                        <div class="section_wrapper mcb-section-inner">
                            <div class="wrap mcb-wrap one valign-top move-up clearfix" style="margin-top:-100px" data-mobile="no-up">
                                <div class="mcb-wrap-inner">
                                    <div class="column mcb-column one column_image">
                                        <div class="image_frame image_item no_link scale-with-grid no_border">
                                            <div class="image_wrapper">
                                                <img class="scale-with-grid" src="{{"storage/".$user->classes->classesmainimage ?? "images/home_school2_pic16.jpg"}}">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="section mcb-section" style="padding-top:0px; padding-bottom:70px">
                        <div class="section_wrapper mcb-section-inner">
                            <div class="wrap mcb-wrap one valign-top clearfix">
                                <div class="mcb-wrap-inner">

                                    @foreach($user->courses as $course )


                                    <div class="column mcb-column one-third column_column">
                                        <div class="column_attr clearfix">
                                            <h6 class="themecolor">Building Our Future Through</h6>
                                            <h2>{{$course->coursename ?? "Math"}}</h2>
                                        </div>
                                    </div>
                                    <div class="column mcb-column two-third column_column">
                                        <div class="column_attr clearfix" style=" padding:0 0 25px; border-bottom: 1px solid #000;">
                                            <p>
                                                {{$course->coursedescription ?? "commodo volutpat, convallis ac, laoreet enim, phasellus, fermentum in, dolor, pellentesque facilisis, nulla, imperdiet sit, amet magna"}}
                                            </p>
                                            <hr class="no_line" style="margin:0 auto 10px">
                                            <a class="button button_right button_size_2 button_theme button_js" href=""><span class="button_icon"><i class="icon-right-open"></i></span><span class="button_label">Learn more</span></a>
                                        </div>
                                    </div>
                                    <div class="column mcb-column one column_divider ">
                                        <hr class="no_line">
                                    </div>

                                    @endforeach


                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="section mcb-section" style="padding-top:0px; padding-bottom:70px">
                        <div class="section_wrapper mcb-section-inner">
                            <div class="wrap mcb-wrap one valign-top clearfix">
                                <div class="mcb-wrap-inner">
                                    <div class="column mcb-column one-second column_column">
                                        <div class="column_attr clearfix" style=" padding:0 7% 0 0;">
                                            <h6 class="themecolor"> </h6>
                                            <h2>{{ $user->classes->classesheader1 ?? "Lorem ipsum sit"}}</h2>
                                            <hr class="no_line" style="margin:0 auto 10px">
                                            <p>
                                                {{ $user->classes->classesintro1 ?? "Mauris mollis lobortis turpis, eget accumsan ante aliquam quis. Nam
                                                ullamcorper rhoncus sem vitae tempus mattis porta enim. Duis fermentum
                                                faucibus est, sed vehicula velit sodales"}}
                                            </p>
                                        </div>
                                    </div>
                                    <div class="column mcb-column one-second column_column">
                                        <div class="column_attr clearfix" style=" padding:0 7% 0 0;">
                                            <h6 class="themecolor"> </h6>
                                            <h2>{{ $user->classes->classesheader2 ?? "Integer aliquam"}}</h2>
                                            <hr class="no_line" style="margin:0 auto 10px">
                                            <p>
                                                {{ $user->classes->classesintro2 ?? "Mauris mollis lobortis turpis, eget accumsan ante aliquam quis. Nam
                                                ullamcorper rhoncus sem vitae tempus mattis porta enim. Duis fermentum
                                                faucibus est, sed vehicula velit sodales vitae."}}
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
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





