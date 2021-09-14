<link href="css/pagination.css" rel="stylesheet">
{{--
    the counter will be always in the middle
    only exclusion will be that fact if it is the first or the last
    transition must not work when it is already selected
--}}
<section class="about-farm style-two">
    <div class="auto-container">
        <!--Section Title-->
        <div class="sec-title-one">
            <h2>{{$title}}</h2>
        </div>

        <div class="row clearfix">
            <!--Column-->
            <div class="column col-lg-5 col-md-4 col-sm-12 col-xs-12">
                <figure class="image-box wow slideInLeft" data-wow-delay="0ms" data-wow-duration="1500ms"><img
                        src="{{$image}}" alt=""></figure>
            </div>
            <!--Column-->
            <div class="column col-lg-7 col-md-8 col-sm-12 col-xs-12">
                <div class="tabs-box tabs-style-one">
                    <div class="row clearfix">

                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                            <!--Tab Buttons-->
                            <ul class="tab-buttons clearfix">
                                @foreach($about_company as $company)
                                    <li class="tab-btn pagination-start @if($loop->index == 0) active-btn active @elseif($loop->index > 2) remove-circle @endif"
                                        data-tab="#tab-{{$company->id}}"
                                        unique_id="{{$loop->index}}"
                                    >
                                        <span class="txt">{{$company->id_to_show}}</span></li>
                                @endforeach
                            </ul>

                        </div>

                        <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
                            <!--Tabs Content-->
                            <div class="tabs-content">

                                <!--Tab-->
                                @foreach($about_company as $company)
                                    <div class="tab @if($loop->index == 0) active-tab @endif" id="tab-{{$company->id}}">
                                        <div class="subtitle">{{$company->title}}</div>
                                        <h3>{{$company->header}} </h3>
                                        <div class="content">
                                            @php
                                                echo  $company->body;
                                            @endphp
                                        </div>
                                        <h5 class="author-name">{{$company->footer}}</h5>
                                    </div>
                                @endforeach
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<script src="js/jquery.js"></script>
<script src="js/pagination_js/pagination.js"></script>
