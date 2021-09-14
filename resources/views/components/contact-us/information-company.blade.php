<section class="info-section">
    <div class="auto-container">
        <div class="row clearfix">
        @foreach($informations as $info)
            <!--Info Column-->
                <div class="info-column col-md-4 col-sm-4 col-xs-12 wow fadeInUp" data-wow-delay="{{$loop->index*300}}ms"
                     data-wow-duration="1500ms">
                    <div class="column-header"><h3>{{$info->title}}</h3></div>
                    <div class="info-box">
                        <div class="inner">
                            <div class="icon"><span class="{{$info->icon}}"></span></div>
                            <h4>{{$info->title}}</h4>
                            <div class="text">@php echo  $info->data @endphp</div>
                        </div>
                    </div>
                </div>
        @endforeach
        </div>
    </div>
</section>
