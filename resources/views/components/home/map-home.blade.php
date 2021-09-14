<section class="fluid-section-two">

    <div class="outer-box clearfix">
        <!--Left Column-->
        <div class="left-column">
            <div class="clearfix">
                <div class="inner-box">
                    <h5>{{$fluid_section->title}}</h5>
                    <h3>{{$fluid_section->header}}</h3>
                    @if($fluid_section->name_button)
                        <a href="{{$fluid_section->link}}"
                           class="theme-btn btn-style-three">
                            {{$fluid_section->name_button}}</a>
                    @endif
                </div>
            </div>
        </div>

        <!--Right Column-->
        <div class="right-column">
            <!--Map Canvas-->
            <div class="map-canvas"
                 data-zoom="{{$map_data->zoom}}"
                 data-lat="{{$map_data->lat}}"
                 data-lng="{{$map_data->lang}}"
                 data-type="{{$map_data->type}}"
                 data-hue="{{$map_data->hue_color}}"
                 data-title="{{$map_data->title}}"
                 data-content="{{$map_data->content}}">
            </div>
        </div>

    </div>
</section>
