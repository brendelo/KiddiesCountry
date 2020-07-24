@extends('partials.template')

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
                                                <img class="scale-with-grid" src="{{"storage/".$user->about->aboutmainimage ?? "images/home_school2_pic14.jpg"}}">
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
                                    <div class="column mcb-column one column_column column-margin-10px">
                                        <div class="column_attr clearfix">
                                            <h6 class="themecolor">KIDDIES COUNTRY</h6>
{{--                                            <h2>{{$user->about->aboutheader1 ?? "History of our school"}}</h2>--}}
                                        </div>
                                    </div>
                                    <div class="column mcb-column one-second column_column">
                                        <h2>{{$user->about->aboutheader1 ?? "History of our school1"}}</h2>
                                        <div class="column_attr clearfix" style=" padding:0 7% 0 0;">
                                            <p>
                                                {{$user->about->aboutintro1 ?? "Mauris mollis lobortis turpis, eget accumsan ante aliquam quis. Nam ullamcorper rhoncus sem vitae tempus mattis porta enim. Duis fermentum faucibus est, sed vehicula velit sodales vitae."}}
                                            </p>
                                        </div>
                                    </div>
                                    <div class="column mcb-column one-second column_column">
                                        <h2>{{$user->about->aboutheader2 ?? "History of our school2"}}</h2>
                                        <div class="column_attr clearfix" style=" padding:0 7% 0 0;">
                                            <p>
                                                {{$user->about->aboutintro2 ?? "Mauris mollis lobortis turpis, eget accumsan ante aliquam quis. Nam ullamcorper rhoncus sem vitae tempus mattis porta enim. Duis fermentum faucibus est, sed vehicula velit sodales vitae."}}
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="section mcb-section equal-height-wrap" style="padding-top:110px; padding-bottom:70px; background-color:#ec3d3a">
                        <div class="section_wrapper mcb-section-inner">
                            <div class="wrap mcb-wrap one-second valign-middle clearfix">
                                <div class="mcb-wrap-inner">
                                    <div class="column mcb-column one column_image">
                                        <div class="image_frame image_item no_link scale-with-grid aligncenter no_border">
                                            <div class="image_wrapper">
                                                <img class="scale-with-grid" src="{{"storage/". $user->about->aboutsideimage ?? "images/home_school2_pic15.jpg"}}">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="wrap mcb-wrap one-second valign-middle clearfix" style="padding:0 0 0 5%">
                                <div class="mcb-wrap-inner">
                                    <div class="column mcb-column one column_column">
                                        <div class="column_attr clearfix" style=" padding:0 7% 0 0;">
                                            <h6 style="color: #fdc73e;">Our Country</h6>
                                            <h2 style="color:#fff">{{$user->about->aboutheader3 ?? "2010. The Year it all began"}}</h2>
                                            <hr class="no_line" style="margin:0 auto 10px">
                                            <p style="color:#fff">
                                                {{$user->about->aboutsummary3 ?? "Mauris mollis lobortis turpis, eget accumsan ante aliquam quis. Nam ullamcorper rhoncus sem vitae tempus mattis porta enim. Duis fermentum faucibus est, sed vehicula velit sodales vitae."}}
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="section mcb-section" style="padding-top:110px; padding-bottom:70px">
                        <div class="section_wrapper mcb-section-inner">
                            <div class="wrap mcb-wrap one valign-top clearfix">
                                <div class="mcb-wrap-inner">
                                    <div class="column mcb-column one-second column_column">
                                        <div class="column_attr clearfix" style=" padding:0 7% 0 0;">
                                            <h6 class="themecolor">ALL ABOUT THE KIDS</h6>
                                            <h2>{{$user->about->aboutheader4 ?? "10+ years of experience"}}</h2>
                                            <hr class="no_line" style="margin:0 auto 10px">
                                            <p>
                                                {{$user->about->aboutintro4 ?? "Mauris mollis lobortis turpis, eget accumsan ante aliquam quis. Nam ullamcorper rhoncus sem vitae tempus mattis porta enim. Duis fermentum faucibus est, sed vehicula velit sodales vitae."}}
                                            </p>
                                        </div>
                                    </div>
                                    <div class="column mcb-column one-second column_column">
                                        <div class="column_attr clearfix" style=" padding:0 7% 0 0;">
                                            <h6 class="themecolor">THE KIDS ARE THE FUTURE</h6>
                                            <h2>{{$user->about->aboutheader5}}New school</h2>
                                            <hr class="no_line" style="margin:0 auto 10px">
                                            <p>
                                                {{$user->about->aboutintro5 ?? "Mauris mollis lobortis turpis, eget accumsan ante aliquam quis. Nam ullamcorper rhoncus sem vitae tempus mattis porta enim. Duis fermentum faucibus est, sed vehicula velit sodales vitae."}}
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="section mcb-section equal-height-wrap" style="padding-top:0px; padding-bottom:120px">
                        <div class="section_wrapper mcb-section-inner">
                            <div class="wrap mcb-wrap one-fourth valign-top clearfix" style="padding:40px 40px 420px; background-image:url({{"storage/".$user->index->lessonimage ?? "images/home_school2_pic2.jpg"}} ); background-repeat:no-repeat; background-position:center bottom">
                                <div class="mcb-wrap-inner">
                                    <div class="column mcb-column one column_column">
                                        <div class="column_attr clearfix">
                                            <h2 style="color:#fff">{{ $user->index->lessonheader ?? "Lessons"}}</h2>
                                            <h5 style="color:#fff">{{$user->index->lessontext ?? "Our teachers develop children's skills."}}</h5>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="wrap mcb-wrap three-fourth  column-margin-0px valign-top clearfix" style="padding:40px 40px 25px; background-color:#fafafa">
                                <div class="mcb-wrap-inner">

                                    @foreach($user->courses as $course)
                                        <div class="column mcb-column one-second column_column">
                                            <div class="column_attr clearfix" style=" background-image:url('{{ asset('images/home_school2_pic4.png') }}'); background-repeat:no-repeat; background-position:left center; padding:45px 0 45px 70px; border-bottom: 1px solid #ededed;">
                                                <h4 style="margin: 0;">{{$course->coursename ?? "Sample"}} lessons</h4>
                                            </div>
                                        </div>

                                    @endforeach

                                    <div class="column mcb-column one column_divider ">
                                        <hr class="no_line" style="margin:0 auto 30px">
                                    </div>
                                    <div class="column mcb-column one column_column">
                                        <div class="column_attr clearfix">
                                            <p>
                                                {{$user->index->lessonsummary ?? "Curabitur sed iaculis dolor, non congue ligula. Maecenas imperdiet ante eget hendrerit posuere. Nunc urna libero, congue porta nibh a, semper feugiat sem. Sed auctor dui eleifend, scelerisque eros ut, pellentesque nibh. Nam lacinia suscipit accumsan."}}
                                            </p>
                                            <a class="button button_right button_size_2 button_theme button_js" href="/classes"><span class="button_icon"><i class="icon-right-open"></i></span><span class="button_label">Learn more</span></a>
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

                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>

@endsection

@section('subheader')
@section('subheader')
    <div id="Subheader" style="padding:130px 0 230px">
        <div class="container">
            <div class="column one">
                <h1 class="title">About Us</h1>
            </div>
        </div>
    </div>
@endsection

@endsection











