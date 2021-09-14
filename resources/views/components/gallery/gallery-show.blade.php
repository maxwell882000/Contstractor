<link href="css/pagination.css" rel="stylesheet">
<section class="gallery-section gallery-page">
    <div class="auto-container">

        <div class="mixitup-gallery">
            <!--Filter-->
            <div class="filters text-center">
                <ul class="filter-tabs filter-btns clearfix">
                    <li class="active filter" data-role="button" data-filter="all">All</li>
                    @foreach($titles as $title)
                        <li class="@if($loop->first) active @endif filter" data-role="button"
                            data-filter=".{{$title->title}}">{{$title->title}}</li>
                    @endforeach
                </ul>
            </div>

            <!--Filter List-->
            <div class="filter-list row clearfix">
            @foreach($images as $image)
                <!--Default Portfolio Item -->
                    <div
                        class="@if($loop->iteration > 6) remove-item @endif default-portfolio-item mix mix_all col-md-4 col-sm-6 col-xs-12 @foreach($image->categories as $category) {{$category->title}} @endforeach">
                        <div class="inner-box">
                            <figure class="image-box"><img src="{{$image->image_path}}" alt=""></figure>
                            <div class="overlay-box">
                                <div class="overlay-inner">
                                    <div class="overlay-content">
                                        <a href="{{$image->image_path}}" class="lightbox-image option-btn theme-btn"
                                           title="Image Caption Here" data-fancybox-group="fancybox"><span
                                                class="fa fa-search"></span></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>

        <!-- Styled Pagination -->
        <div class="styled-pagination text-center">
            <ul class="filter-btns">
                @foreach($images as $number)
                    <li><a href="#" class="active">{{$loop->iteration}}</a></li>
                @endforeach
            </ul>
        </div>
    </div>
</section>
<script src="js/jquery.js"></script>
<script>


    $(".filter-tabs li").click(function () {
        console.log(this);
    });
</script>
