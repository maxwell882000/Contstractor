<section class="map-section">
    <div class="map-outer">

        <!--Map Canvas-->
        <div class="map-canvas"
             data-zoom="{{$map_data->zoom}}"
             data-lat="{{$map_data->lat}}"
             data-lng="{{$map_data->lang}}"
             data-type="{{$map_data->type}}"
             data-hue="{{$map_data->hue_color}}"
             data-title="{{$map_data->title}}"
             data-content="{{$map_data->content}}"
             style="height:450px;">
        </div>

    </div>
</section>
