<style>
    .intro-section .inner-part .content-box .inner-box:before {
        background: url({{$information->left_image_path}}) center top no-repeat
    }

    .intro-section .inner-part .content-box .inner-box:after {
        background: url({{$information->right_image_path}}) center top no-repeat
    }
</style>
<!--Intro Section-->
<section class="intro-section">
    <div class="inner-part">
        <div class="auto-container">
            <div class="content-box">
                <div class="inner-box">
                    <!--Section Title-->
                    <div class="sec-title-one">
                        <h2>{{$information->title}}</h2>
                    </div>

                    <div class="row clearfix">
                        <!--Content Column-->
                        <div class="content-column col-md-6 col-sm-6 col-xs-12">
                            <div class="inner text-left wow fadeInLeft" data-wow-delay="0ms"
                                 data-wow-duration="1500ms">
                                <h3>{{$information->more_info_section->all()[0]->header}}</h3>
                                <div class="text">
                                    {{$information->more_info_section->all()[0]->body}}
                                </div>
                                @if($information->more_info_section->all()[0]->name_button)
                                    <a href="       {{$information->more_info_section->all()[0]->link}}"
                                       class="theme-btn btn-style-two"> {{$information->more_info_section->all()[0]->name_button}}</a>
                                @endif
                            </div>
                        </div>
                        <!--Content Column-->
                        <div class="content-column col-md-6 col-sm-6 col-xs-12">
                            <div class="inner text-right wow fadeInRight" data-wow-delay="0ms"
                                 data-wow-duration="1500ms">
                                <h3>{{$information->more_info_section->all()[1]->header}}</h3>
                                <div class="text">
                                    {{$information->more_info_section->all()[1]->body}}
                                </div>
                                @if($information->more_info_section->all()[1]->name_button)
                                    <a href="       {{$information->more_info_section->all()[1]->link}}"
                                       class="theme-btn btn-style-two"> {{$information->more_info_section->all()[1]->name_button}}</a>
                                @endif
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</section>
