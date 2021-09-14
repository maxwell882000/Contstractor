<section class="main-slider" id="scroll-section-one" data-start-height="900" data-slide-overlay="yes">

    <div class="tp-banner-container">
        <div class="tp-banner">
            <ul>
                <li data-transition="fade" data-slotamount="1" data-masterspeed="1000"
                    data-thumb="{{$main_banner->image->image_path}}" data-saveperformance="off"
                    data-title="Awesome Title Here">
                    <img src="{{asset($main_banner->image->image_path)}}" alt="" data-bgposition="center top"
                         data-bgfit="cover"
                         data-bgrepeat="no-repeat">
                    <div class="tp-caption sfl sfb tp-resizeme"
                         data-x="center" data-hoffset="0"
                         data-y="center" data-voffset="-150"
                         data-speed="1500"
                         data-start="500"
                         data-easing="easeOutExpo"
                         data-splitin="none"
                         data-splitout="none"
                         data-elementdelay="0.01"
                         data-endelementdelay="0.3"
                         data-endspeed="1200"
                         data-endeasing="Power4.easeIn"><h2>{{$main_banner->title}}</h2></div>

                    <div class="tp-caption sfr sfb tp-resizeme"
                         data-x="center" data-hoffset="0"
                         data-y="center" data-voffset="-70"
                         data-speed="1500"
                         data-start="500"
                         data-easing="easeOutExpo"
                         data-splitin="none"
                         data-splitout="none"
                         data-elementdelay="0.01"
                         data-endelementdelay="0.3"
                         data-endspeed="1200"
                         data-endeasing="Power4.easeIn">
                        <div class="big-text">{{$main_banner->mini_header}}</div>
                    </div>

                    <div class="tp-caption sfl sfb tp-resizeme"
                         data-x="center" data-hoffset="0"
                         data-y="center" data-voffset="0"
                         data-speed="1500"
                         data-start="500"
                         data-easing="easeOutExpo"
                         data-splitin="none"
                         data-splitout="none"
                         data-elementdelay="0.01"
                         data-endelementdelay="0.3"
                         data-endspeed="1200"
                         data-endeasing="Power4.easeIn">
                        @if($main_banner->name_button)
                            <a href="{{$main_banner->link_button}}"
                               class="theme-btn btn-style-one">{{$main_banner->name_button}}</a></div>
                    @endif


                </li>
                @for($i= 0; $i< $length; $i+=2)
                    <li data-transition="fade" data-slotamount="1" data-masterspeed="1000"
                        data-thumb="{{$banners[$i]->image->image_path}}" data-saveperformance="off"
                        data-title="Awesome Title Here">
                        <img src="{{$banners[$i]->image->image_path}}" alt="" data-bgposition="center top"
                             data-bgfit="cover"
                             data-bgrepeat="no-repeat">
                        <div class="tp-caption sfl sfb tp-resizeme"
                             data-x="left" data-hoffset="15"
                             data-y="center" data-voffset="-140"
                             data-speed="1500"
                             data-start="500"
                             data-easing="easeOutExpo"
                             data-splitin="none"
                             data-splitout="none"
                             data-elementdelay="0.01"
                             data-endelementdelay="0.3"
                             data-endspeed="1200"
                             data-endeasing="Power4.easeIn">
                            <figure class="content-image"><img src="{{$banners[$i]->icon_path}}" alt=""></figure>
                        </div>

                        <div class="tp-caption sfr sfb tp-resizeme"
                             data-x="left" data-hoffset="15"
                             data-y="center" data-voffset="-10"
                             data-speed="1500"
                             data-start="500"
                             data-easing="easeOutExpo"
                             data-splitin="none"
                             data-splitout="none"
                             data-elementdelay="0.01"
                             data-endelementdelay="0.3"
                             data-endspeed="1200"
                             data-endeasing="Power4.easeIn"><h3>
                                @php
                                    echo  $banners[$i]->body
                                @endphp
                            </h3></div>

                        <div class="tp-caption sfl sfb tp-resizeme"
                             data-x="left" data-hoffset="15"
                             data-y="center" data-voffset="110"
                             data-speed="1500"
                             data-start="500"
                             data-easing="easeOutExpo"
                             data-splitin="none"
                             data-splitout="none"
                             data-elementdelay="0.01"
                             data-endelementdelay="0.3"
                             data-endspeed="1200"
                             data-endeasing="Power4.easeIn">
                            @if($banners[$i]->name_first_button)
                                <a href="{{$banners[$i]->link_first}}"
                                   class="theme-btn btn-style-one">{{$banners[$i]->name_first_button}}</a>
                                @endif
                                &ensp;&ensp;
                                @if($banners[$i]->name_second_button)
                                    <a href="{{$banners[$i]->link_second}}"
                                       class="theme-btn btn-style-three">{{$banners[$i]->name_second_button}}</a>
                                @endif
                        </div>
                    </li>
                    @if(count($banners) > $i + 1)
                        <li data-transition="zoomout" data-slotamount="1" data-masterspeed="1000"
                            data-thumb="{{$banners[$i + 1]->image->image_path}}" data-saveperformance="off"
                            data-title="Awesome Title Here">
                            <img src="{{$banners[$i + 1]->image->image_path}}" alt="" data-bgposition="center top"
                                 data-bgfit="cover"
                                 data-bgrepeat="no-repeat">

                            <div class="tp-caption sft sfb tp-resizeme"
                                 data-x="center" data-hoffset="0"
                                 data-y="center" data-voffset="-140"
                                 data-speed="1500"
                                 data-start="500"
                                 data-easing="easeOutExpo"
                                 data-splitin="none"
                                 data-splitout="none"
                                 data-elementdelay="0.01"
                                 data-endelementdelay="0.3"
                                 data-endspeed="1200"
                                 data-endeasing="Power4.easeIn">
                                <figure class="content-image"><img src="{{$banners[$i + 1]->icon_path}}" alt="">
                                </figure>
                            </div>

                            <div class="tp-caption sft sfb tp-resizeme"
                                 data-x="center" data-hoffset="0"
                                 data-y="center" data-voffset="-10"
                                 data-speed="1500"
                                 data-start="500"
                                 data-easing="easeOutExpo"
                                 data-splitin="none"
                                 data-splitout="none"
                                 data-elementdelay="0.01"
                                 data-endelementdelay="0.3"
                                 data-endspeed="1200"
                                 data-endeasing="Power4.easeIn"><h3 class="text-center">
                                    @php
                                        echo  $banners[$i + 1]->body
                                    @endphp
                                </h3></div>

                            <div class="tp-caption sfb sfb tp-resizeme"
                                 data-x="center" data-hoffset="0"
                                 data-y="center" data-voffset="110"
                                 data-speed="1500"
                                 data-start="500"
                                 data-easing="easeOutExpo"
                                 data-splitin="none"
                                 data-splitout="none"
                                 data-elementdelay="0.01"
                                 data-endelementdelay="0.3"
                                 data-endspeed="1200"
                                 data-endeasing="Power4.easeIn">
                                @if($banners[$i+1]->name_first_button)
                                    <a href="{{$banners[$i+1]->link_first}}"
                                       class="theme-btn btn-style-one">{{$banners[$i+1]->name_first_button}}</a> &ensp;
                                    &ensp;
                                @endif
                                @if($banners[$i+1]->name_second_button)
                                    <a href="{{$banners[$i+1]->link_second}}"
                                       class="theme-btn btn-style-three">{{$banners[$i+1]->name_second_button}}</a>
                                @endif
                            </div>


                        </li>
                    @endif
                @endfor
            </ul>

            <div class="tp-bannertimer"></div>
        </div>
    </div>
</section>
