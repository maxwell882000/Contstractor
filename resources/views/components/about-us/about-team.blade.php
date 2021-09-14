<link href="css/pagination.css" rel="stylesheet">
<section class="team-section">
    <div class="auto-container">
        <!--Section Title-->
        <div class="sec-title-one">
            <h2>{{$title}}</h2>
        </div>

        <div id="carouselExampleControls" class="row clearfix carousel slide" data-ride="carousel">

            <a class="carousel-control-prev " href="#carouselExampleControls" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon"></span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                <span class="carousel-control-next-icon"></span>
            </a>

                @foreach($personals  as $personal)
                    @if($loop->iteration % 3 == 1)
                        <div
                            class="pagination-get @if($loop->first) active @else transition-hide remove-circle @endif"
                             unique_id= {{$loop->index/3}}
                        >
                            @endif
                            @if(($loop->iteration + 2) % 3 == 0 || $loop->iteration % 3 == 0)
                                <div
                                    class="@if(($loop->iteration) % 3 != 0) col-lg-8 @else  col-lg-4   @endif col-md-12 col-sm-12 col-xs-12">
                                @endif
                                <!--Default Team Member-->
                                    <div
                                        class="default-team-member
                            @if($loop->iteration % 3 == 0)
                                            vertical
                            @elseif(($loop->iteration + 1) % 3==0 )
                                            alternate
@endif ">
                                        <div class="inner-box clearfix">
                                            <!--Image Column-->
                                            <div class="image-column">
                                                <figure class="image"><a href="#"><img src="{{$personal->image_path}}"
                                                                                       alt=""></a>
                                                </figure>
                                            </div>
                                            <!--Content Column-->
                                            <div class="content-column">
                                                <div class="inner">
                                                    <h3>{{$personal->name}}</h3>
                                                    <div class="text">{{$personal->description}}</div>
                                                    <div class="social-links" style="visibility:hidden;">
                                                        <a href="#"><span class="fa fa-facebook-official"></span></a>
                                                        <a href="#"><span class="fa fa-twitter"></span></a>
                                                        <a href="#"><span class="fa fa-instagram"></span></a>
                                                        <a href="#"><span class="fa fa-skype"></span></a>
                                                        <a href="#"><span class="fa fa-vimeo-square"></span></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    @if(($loop->iteration + 1) % 3 == 0 || $loop->iteration % 3 == 0)
                                </div>
                            @endif
                            @if($loop->iteration % 3 == 0)
                        </div>
                    @endif
                @endforeach

        </div>
    </div>
</section>
<script src="js/jquery.js"></script>
<script src="js/pagination_js/pagination_with_controller.js"></script>

